<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use App\Models\File;

use App\Models\Client;
use App\Models\Invoice;
use App\Models\Talents;
use App\Events\Actifity;

use App\Models\JobModels;
use App\Http\Traits\Event;
use App\Models\TalentsFiles;
use Illuminate\Http\Request;
use App\Models\JobModelsFile;
use App\Models\TemplateEmail;
use App\Models\JobModelsRange;
use App\Http\Traits\HttpGuzzle;
use App\Jobs\SendEmailToTalent;
use App\Http\Traits\ImageUpload;
use App\Models\TalentTypeHelper;
use App\Models\JobModelsLanguages;
use App\Models\SettingCalendlyApi;
use App\Models\EmailAgencyTemplate;
use App\Models\SettingStatusTalent;
use App\Models\JobModelsMatchTalent;
use App\Models\JobModelsNewApplicant;
use App\Http\Requests\JobBoardRequest;
use App\Models\SettingJobModelsStatus;
use App\Models\SettingServiceCategory;
use App\Models\JobModelsMatchTalentAdd;
use App\Jobs\sendJobDescriptionToTalent;
use App\Models\JobModelsAvailabiltyDays;
use App\Repositories\JobboardRepository;
use SebastianBergmann\Template\Template;
use App\Models\JobModelsNewAplicantsFile;
use App\Models\SettingServiceLocationFee;
use App\Models\SettingServiceSubcategory;
use App\Http\Requests\NewAplicantsRequest;
use App\Models\Actifity as ModelsActifity;
use App\Models\JobModelsMatchTalentFilter;
use App\Http\Requests\UserAplicantsRequest;
use App\Mail\sendingEmailDescriptionToTalent;
use App\Http\Traits\Actifity as TraitsActifity;
use App\Models\JobModelsTask;
use App\Models\SettingDefinedCheckList;

class JobboardController extends Controller
{
    use ImageUpload, TraitsActifity , Event, HttpGuzzle;
    private $jobboardRepository;

    public function __construct(JobboardRepository $jobboardRepository)
    {
        $this->jobboardRepository = $jobboardRepository;
    }

    public function index()
    {

        $status = SettingJobModelsStatus::with(['job_models' => function($query){
            $query->with(['client', 'comment'])->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id);
        }])->where(['users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id , 'status' => true])->get();
        

        
        $client = Client::where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)->get();
        $json = [];
        foreach ($client as $value) {
            array_push($json, [
                'value' => $value->id,
                'first_name' => $value->first_name,
                'last_name' => $value->last_name,
                // 'avatar' => $value->avatar ?? 'dummy.png',
                'avatar' => $value->avatar,
                'avatar1' => '  <div class="w-10 h-10 flex items-center justify-center bg-['.$value->color.'] rounded-full">
                                    <span class="text-white text-lg text-center font-bold">'.strtoupper(substr($value->first_name, 0, 1)).strtoupper(substr($value->last_name, 0, 1)).'</span>
                                </div>',
                'tagTemplate' => '<div class="w-5 h-5 flex items-center justify-center bg-['.$value->color.'] rounded-full">
                                        <span class="text-white text-[8px] text-center font-bold">'.strtoupper(substr($value->first_name, 0, 1)).strtoupper(substr($value->last_name, 0, 1)).'</span>
                                    </div>',
                'email' => $value->email,
            ]);
        }

        $status_key = '';
        foreach($status as $key => $sts_key){
            $status_key .= '#'.$sts_key->id.',';
        }

        $tmp_email1 = EmailAgencyTemplate::where(['users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id , 'status' => 'CLIENT CONFIRMATION'])->first('body');
        if($tmp_email1){
            $email = $tmp_email1;
        }else{
            $email =  TemplateEmail::where(['type' => 0 , 'status' => 'CLIENT CONFIRMATION'])->first('body');
        }
        // $tmp_email2 = TemplateEmail::where(['type' => 1 , 'status' => 'REJECTED'])->first('body');
        $category = SettingServiceCategory::with(['service_subcategorys' => function($query){
            $query->where('checkbox', 1);
        }])->where('users_id' , auth()->user()->staf->users_agency_id ?? auth()->user()->id)->get();

        // return $category;
        $user_location = SettingServiceLocationFee::where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)->first('location');
        return view('jobboard.jobboard', [
            "category" => $category,
            "json" => $json,
            'user_location' => $user_location,
            'status' => $status,
            'status_key' => rtrim($status_key, ','),
            'email' => $email,
            // 'tmp_email2' => $tmp_email2
        ]);
    }

    public function get_subcategory_ajax(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);

       $subCategory = SettingServiceSubcategory::where(['service_categories_id' => $request->id, 'checkbox' => true])->where('users_id', auth()->user()->id)->get();
        

       return response()->json([
            'sub_categorys' => $subCategory
       ]);
    }

    public function status(Request $request)
    {
        // return $request;
        $request->validate([
            'id' => 'required',
            'status' => 'required'
        ]);


        $loadJob = JobModels::where('id' , $request->id)->first(['set_job_status_id', 'updated_at']);
        
        
        $data = JobModels::updateOrCreate(['id' => $request->id],[
            'status' => $request->status,
            'set_job_status_id' => $request->status
        ]);
        
        $from = now()->parse($loadJob->updated_at);
        $to = now()->parse($data->updated_at);

        JobModelsRange::create([
            'status_from' => $loadJob->set_job_status_id,
            'status_to' => $request->status,
            'date_first' => $loadJob->updated_at,
            'date_second' => $data->updated_at,
            'day' => $from->diff($to)->format('%d'),
            'job_models_id' => $request->id,
            'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
        ]);

        $status_count = SettingJobModelsStatus::with(['job_models' => function ($query) use($request){
            $query->where(['users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id]);
        }])->where(['users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id , 'status' => 1])->get();

        return response()->json([
            'id' => $request->id,
            'status' => $request->status,
            'status_count' =>  $status_count
        ]);

    }

    public function search_job(Request $request)
    {
        return response()->json([
            'status' => SettingJobModelsStatus::where(['users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id , 'status' => true])->get(['id']),
            'value' => $this->jobboardRepository->search_job($request),
        ]);
    }

    public function jobs_store(JobBoardRequest $request)
    {  
       
        $this->jobboardRepository->created($request);
        return redirect()->back()->with('status', 'Create job succesfuly');
    }

    public function delete_job(Request $request)
    {
        $request->validate([
            'uid' => 'required'
        ]);
        JobModels::where('uid' , $request->uid)->delete();

        return redirect()->back();

    }

    public function overview($uid)
    {
        $talentNeed = [];

        $result = JobModels::with(['comment' => function ($query){
            $query->with(['job_models_comments_reply', 'users']);
        },'match_talent', 'languages', 'availability', 'task' => function($query){
            $query->orderBy('order','asc');
        }, 'stripe' ,'invoice','client' => function($query){
            $query->with('attached_file');
        }, 'file' => function ($query) {
            $query->limit(5);
        },'actifities' => function ($query) {
            $query->limit(6)->orderBy('id', 'desc');
        }, 'talent_status' , 'setting_status' , 'match_talents_add' => function($query){
            $query->with('talent');
        }, 'talent_new_aplicants' , 'setting_category' , 'match_talents_filters' => function($query){
            $query->with('talent');
        }])->where('uid', $uid)->firstOrFail();

        // return $result;
        // Match Talent
        foreach ($result->match_talent as $match) {
            $talent = TalentTypeHelper::orderBy('id', 'desc')->where(['code_helper' => $match->jobs_sub_category , 'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id])->with(['talent'])->get();
            if ($talent->count() > 0) {
                foreach ($talent as $val) {
                    JobModelsMatchTalentAdd::updateOrCreate(['talents_id' => $val->talent->id , 'job_models_id' => $result->id],[
                        'talents_id' => $val->talent->id,
                        'job_models_id' => $result->id
                    ]);
                }
            }
            array_push($talentNeed, $talentNeed[$match->jobs_sub_category] = 1);
        }

        // all talent
        $talents = Talents::with(['type_helper', 'languages'])->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)->get();
        $status_talent = SettingStatusTalent::where(['users_id'  => auth()->user()->staf->users_agency_id ?? auth()->user()->id ])->get(['id', 'status_name', 'status_key' ,'color']);

        // return $talents;
        // $matchTalents = JobModelsMatchTalentAdd::with('talent')->where(['job_models_id' => $result->id])->orderBy('id' , 'desc')->get();
        $category = SettingServiceCategory::where('users_id' , auth()->user()->staf->users_agency_id ?? auth()->user()->id)->get();
        
        // $tmp_email = EmailAgencyTemplate::whereIn('type', [1,2,3,4,5,6,7,8,9,10,11])->where('users_id' , auth()->user()->staf->users_agency_id ?? auth()->user()->id)->get();
 
        // return $tmp_email;
        $client = Client::where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)->get();
        $json = [];
        foreach ($client as $value) {
            array_push($json, [
                'value' => $value->id,
                'name' => $value->first_name,
                'avatar' => $value->avatar ?? 'dummy.png',
                'email' => $value->email,
                'phone' => $value->phone,
                'address' => $value->address,
                'languages' => $value->languages,
            ]);
        }

        $tmp_email1 = EmailAgencyTemplate::where(['users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id , 'status' => 'CLIENT CONFIRMATION'])->first(['body' ,'subject']);
        if($tmp_email1){
            $email = $tmp_email1;
        }else{
            $email =  TemplateEmail::where(['type' => 0 , 'status' => 'CLIENT CONFIRMATION'])->first(['body' ,'subject']);
        }

        $actifity = ModelsActifity::where('type' , 'TASK')->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)->get();
        return view('jobboard.detail_job_overview', compact('result', 'talentNeed', 'actifity' ,'status_talent' , 'talents'  , 'json' , 'category','email'));
    }

    public function edit_description(Request $request)
    {
        $request->validate([
            'edit_description' => 'required|min:10',
            'uid' => 'required'
        ]);
        JobModels::where(['uid' => $request->uid , 'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id])->update([
            'description' => $request->edit_description
        ]);

        return redirect()->back();
    }

    public function talent_status(Request $request)
    {

        $type =  str_replace(' ', '_', strtolower($request->status));
        $email  = EmailAgencyTemplate::where([ 'users_id' =>  auth()->user()->staf->users_agency_id ?? auth()->user()->id,'type'=> $type])->first();
        $color_status = SettingStatusTalent::where([
            'users_id' =>  auth()->user()->staf->users_agency_id ?? auth()->user()->id,
            'status_key' => $type
            ])->first('color');
       JobModelsMatchTalentAdd::updateOrCreate(['talents_id' => $request->talent_id , 'job_models_id' => $request->job_models_id,],[
            'status' => $request->status,
            'color_status' => $color_status->color,
            'talents_id' => $request->talent_id,
            'job_models_id' => $request->job_models_id,
            
        ]);
        
        return view('modal.jobboard.edit_email_talent', compact('email'));
    }

    public function detail_match_talent($id)
    {
        $talent = Talents::with(['type_helper' , 'languages' , 'attached_file'])->where('id', $id)->first();
        return view('modal.jobboard.detail_talent', compact('talent'));
    }

    public function upload_file(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:pdf,zip,rar,doc|max:10000',
            'job_models_id' => 'required',
        ]);

        $name = $this->uploadImageStore($request->file('file'), 'file');
        JobModelsFile::create([
            'file' => $name,
            'job_models_id' => $request->job_models_id,
        ]);
        return response()->json([
            'status' => 'Success',
        ], 200);
    }

    public function download_file($file)
    {
        return response()
        ->download(storage_path('app/public/'.request()->get('path').'/' . $file));
    }

    public function add_task(Request $request)
    {
       
        $data = $this->jobboardRepository->add_task($request);
        return response()->json([
            'status' => 200,
            'data' => $data,
        ], 200);

    }

    public function search_task(Request $request)
    {                          
        return $this->jobboardRepository->search_task($request);    
    }

    public function send_email(Request $request)
    {
        $request->validate([
            'talent_name' => 'required',
            'email_client' => 'required',
            'name_client' => 'required',
            'job_models_id' => 'required'
        ]);

        // return $request;
        $this->jobboardRepository->email($request);
        $actifity = $this->actifity('Matched Email has sent to Client' , 'ACTIVITIES');
        Actifity::dispatch($actifity);
        return redirect()->back()->with('success', 'Send email to talent Succesfuly');
    }

    public function comment(Request $request)
    {
        $request->validate([
            'comment' => 'required',
            'job_models_id' => 'required|numeric'
        ]);
        $this->comment_event($request, $this->jobboardRepository->comment_created($request));
        $this->notify($request,auth()->user()->full_name.' has commented on job' ?? 'Your agency' . ' has commented on job');

        return response()->json([
            'status' => 'success'
        ],200);
    }

    public function reply(Request $request)
    {
        $request->validate([
            'reply_comment' => 'required',
            'job_comments_id' => 'required',
            'job_models_id' => 'required|numeric'
        ]);

        $this->reply_comment_event($request, $this->jobboardRepository->comment_reaply_created($request));
        $this->notify($request, auth()->user()->full_name.' has reply your comment on job' ?? 'Your agency' . ' has reply your comment on job');
 

        return response()->json([
            'status' => 'success'
        ],200);
    }

    public function new_aplicant_store(UserAplicantsRequest $request)
    {
        
        // return $request;
        // $idModels = JobModels::where('uid' , $request->uid)->firstOrFail('id');
        if(isset($request->avatar)){
            $avatar = $this->uploadImageStore($request->file('avatar'), 'avatar');
        }
        $color1 = [
            '#EB5757',
            '#F2994A',
            '#27AE60',
            '#6AEAE3',
            '#56CCF2',
            '#BB6BD9',
            '#F2C94C',
        ];
        $color1_rand = $color1[rand(0, count($color1) - 1)];

       $newAplicants =  JobModelsNewApplicant::create([
            'avatar' => $avatar ?? null,
            'color' => $color1_rand,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'description' => $request->description,
            'job_models_id' =>  $request->job_models_id,
            'users_id' =>  auth()->user()->staf->users_agency_id ?? auth()->user()->id
        ]);

        File::where(['users_id' => auth()->user()->id , 'type' => 'NEW_APLICANTS'])->get()->map(function($res , $key) use($newAplicants){
            $newAplicants->file()->create([
                'file' => $res->file ,
                'extension' => strtolower($res->extension)
            ]);
            $this->move_file('public/Files before submit/'.$res->file, 'public/file/'.$res->file);

            File::where('id' , $res->id)->delete();
        });

        // if(isset($request->id_file)){
        //     foreach($request->id_file as $key => $idFile){
        //         File::where(['id' => $request->id_file[$key], 'type' => 'NEW_APLICANTS'])->get()->map(function($res , $key) use($newAplicants){
        //             $newAplicants->file()->create([
        //                 'file' => $res->file ,
        //                 // 'extension' => strtolower($res->extension)
        //             ]);
        //             $this->move_file('public/Files before submit/'.$res->file, 'public/File/'.$res->file);
        
        //             File::where('id' , $res->id)->delete();
        //          });
        //     }
        // }


        return redirect()->back()->with('success' , 'success apply');
    }

    public function modal_add_match_talent(Request $request)
    {
        $request->validate([
            'job_models_id' => 'required',
            'id_talent_match' => 'required'
        ]);
        foreach($request->id_talent_match as $key => $val){
            JobModelsMatchTalentAdd::create([
                'talents_id' => $request->id_talent_match[$key],
                'job_models_id' => $request->job_models_id,
                
            ]);
        }

        return redirect()->back();
    }

    public function change_status_all_match_talent(Request $request)
    {

    //    JobModelsMatchTalentAdd::updateOrCreate(['talents_id' => $request->talent_id , 'job_models_id' => $request->job_models_id,],[
    //         'status' => $request->status,
    //         'color_status' => $color_status->color,
    //         'talents_id' => $request->talent_id,
    //         'job_models_id' => $request->job_models_id,
            
    //     ]);

        $type =  str_replace(' ', '_', strtolower($request->status_name_match));

        $color_status = SettingStatusTalent::where([
            'users_id' =>  auth()->user()->staf->users_agency_id ?? auth()->user()->id,
            'status_key' => $type
            ])->first('color');
        foreach($request->talent_name as $key => $val){

            JobModelsMatchTalentAdd::updateOrCreate(['job_models_id' => $request->job_models_id, 'talents_id' =>  $request->talent_name[$key],],[
                'status' => $request->status_name_match,
                'color_status' => $color_status->color,
            ]);
        }
      return response(200);
    }

    public function send_email_status_to_talent(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'subject' => 'required',
            // 'body_email' => 'required'
        ]);
        
        if($request->body_email){
            $body = $request->body_email;
        }else{
            $body = $request->body_email_not_edit;
        }
        SendEmailToTalent::dispatch($request->email, $request->subject, $body);
        return redirect()->back();
    }

    // AJAX
    // public function edit_send_mail_talent(Request $request)
    // {
        
    //     $request->validate([
    //         'id' => 'required'
    //     ]);

    //     $email  = EmailAgencyTemplate::where('id',$request->id)->first();

    //     return view('modal.jobboard.edit_email_talent', compact('email'));
       
    // }

    public function priview_email_client(Request $request)
    {
        
        
        $talent = [];
        $filter = array_unique($request->talent_name);
        foreach($request->talent_name as $key =>$val){
            array_push($talent, $request->talent_name[$key]);
        }

        // return $talent;
        $value =  Talents::whereIn('id', $talent)->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)->get();
        $client = $request->name_client;
        
        return view('modal.jobboard.priview_email_client', compact('value', 'client'));
    }

    public function save_as_email_client(Request $request)
    {
        EmailAgencyTemplate::updateOrCreate(['users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id],[
            'body' => $request->email,
            'type' => 0,
            'status' => $request->status,
            'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id
        ]);

        return response(200);
    }

    public function save_as_email_talent(Request $request)
    {

        
       EmailAgencyTemplate::where('id', $request->id)->update([
            'body' => $request->val,
        ]);

        return response(200);
    }


    public function edit_create_job_calendly(Request $request)
    {
        $json = [];
        $client = Client::where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)->get();
        foreach ($client as $value) {
            array_push($json, [
                'value' => $value->id,
                'first_name' => $value->first_name,
                'last_name' => $value->last_name,
                // 'avatar' => $value->avatar ?? 'dummy.png',
                'avatar' => $value->avatar,
                'avatar1' => '  <div class="w-10 h-10 flex items-center justify-center bg-['.$value->color.'] rounded-full">
                                    <span class="text-white text-lg text-center font-bold">'.strtoupper(substr($value->first_name, 0, 1)).strtoupper(substr($value->last_name, 0, 1)).'</span>
                                </div>',
                'tagTemplate' => '<div class="w-5 h-5 flex items-center justify-center bg-['.$value->color.'] rounded-full">
                                        <span class="text-white text-[8px] text-center font-bold">'.strtoupper(substr($value->first_name, 0, 1)).strtoupper(substr($value->last_name, 0, 1)).'</span>
                                    </div>',
                'email' => $value->email,
            ]);
        }

        $detailJob = JobModels::with('client')->where('id',$request->id)->firstOrFail();
        $category = SettingServiceCategory::with(['service_subcategorys'])->where('users_id' , auth()->user()->staf->users_agency_id ?? auth()->user()->id)->get();
        return view('modal.jobboard.edit_create_job_calendly',compact('detailJob' , 'category','json'));
    }
    public function edit_responsibility(Request $request)
    {
        JobModelsAvailabiltyDays::updateOrCreate(['job_models_id' => $request->job_models_id],[
            'monday' => $request->monday,
            'tuesday' => $request->tuesday,
            'wednesday' => $request->wednesday,
            'thursday' => $request->thursday,
            'friday' => $request->friday,
            'saturday' => $request->saturday,
            'sunday' => $request->sunday,
            'job_models_id' => $request->job_models_id
        ]);

        JobModels::where('id',$request->job_models_id)->update([
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'asap' => $request->asap,
            'tbd' => $request->tbd
        ]);

        return redirect()->back();
    }

    public function edit_client_detail(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'phone' => 'required|unique:talents,phone',
            'email' => 'required|unique:users,email|unique:talents,email',
            'address' => 'required',
            'languages' => 'required',
            'job_models_id' => 'required'
        ]);
        $client = Client::updateOrCreate(['id' => $request->client_id],[
            'first_name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'languages' => $request->languages,
            'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
            'create_by' => auth()->user()->id,
        ]);
        
        JobModels::where('id', $request->job_models_id)->update([
            'clients_id' => $client->id
        ]);

        return redirect()->back();
    }

    public function edit_subcategorys(Request $request)
    {
        // return $request;
        $request->validate([
            'job_models_id' => 'required',
            'subcategory' => 'required'
        ]);
        JobModelsMatchTalent::where('job_models_id', $request->job_models_id)->delete();
        foreach($request->subcategory as $keys => $val_sub_cat){
            JobModelsMatchTalent::create([
                'jobs_sub_category' => $request->subcategory[$keys],
                'job_models_id' => $request->job_models_id,
                'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
            ]);
        }

        return redirect()->back();
    }

    public function edit_talents_ayi(Request $request)
    {
       
        $request->validate([
            'category' => 'required',
            'location' => 'required',
            'desired_living' => 'required',
            'english_level' => 'required',
            'rate_negotiable' => 'required',
            'part_time' => 'required',
            'job_models_id' => 'required'
        ]);
        JobModels::where('id', $request->job_models_id)->update([
            'category' => $request->category,
            'location' => $request->location,
            'desired_living' => $request->desired_living,
            'english_level' => $request->english_level ,
            'rate_negotiable' => $request->rate_negotiable,
            'part_time' => $request->part_time
        ]);

        JobModelsLanguages::updateOrCreate(['job_models_id' => $request->job_models_id],[
            'language' => $request->languages,
            'job_models_id' => $request->job_models_id,
        ]);

        return redirect()->back();
    }

    public function edit_pay_info(Request $request)
    {
        JobModels::where('id' , $request->job_models_id)->update([
            'pay_with' => $request->pay_info
        ]);

        return redirect()->back();
    }

    public function sync_calendly(Request $request)
    {
    
        // return $request;
        $load =  SettingCalendlyApi::where('users_id' , auth()->user()->staf->users_agency_id ?? auth()->user()->id)->first(['token','current_organization']);
        $responses = $this->getWithParams($load->token, 'https://api.calendly.com/scheduled_events',[
            'organization' => $load->current_organization,
            'status' => 'active',
            'min_start_time' => $request->from_date,
            'max_start_time' => $request->to_date,

        ]);

        $response = json_decode($responses);

        // return $response->collection;
  
        foreach(array_reverse($response->collection) as $valCalendly){
            $idJobStatus = SettingJobModelsStatus::where([
                'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                'status_key' => 'potential_client',
                ])->first('id');
            $exits = JobModels::where(['uri_api' => $valCalendly->uri, 'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id])->first('id');
           
            
             // Get Description
            $getQuestionPerEvents = $this->getWithParams($load->token, $valCalendly->uri.'/invitees');
            $questionDetail = json_decode($getQuestionPerEvents);
            $descriptionString = '';
             foreach($questionDetail->collection as $valAnswerDetail) {
                $question = '';
                foreach ($valAnswerDetail->questions_and_answers as $val_question) {
                    $question .= ''.$val_question->question.' : '.$val_question->answer.'<br />';
                }
                // $descriptionString .= '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, asperiores? <br /><br />​​​​​​​<br /></p><p><strong>Name :</strong>&nbsp; '.$valAnswerDetail->name.' '.$valAnswerDetail->first_name.'<br /><strong>email </strong>:&nbsp;'.$valAnswerDetail->email.'<br /><br /><strong>Question and Answer :</strong><br />'.$question.'<br /><strong>Payment&nbsp;:</strong><br />external_id :&nbsp'.isset($valAnswerDetail->payment->external_id).';<br />provider : '.isset($valAnswerDetail->payment->provider).'<br />amount : '.isset($valAnswerDetail->payment->amount).'<br />currency : '.isset($valAnswerDetail->payment->currency).'<br />terms: '.isset($valAnswerDetail->payment->terms).'&nbsp;</p>';
                $descriptionString .= '<p>​​​​​​<strong>Name :</strong>&nbsp; '.$valAnswerDetail->name.' '.$valAnswerDetail->first_name.'<br /><strong>email </strong>:&nbsp;'.$valAnswerDetail->email.'<br /><br /><strong>Question and Answer :</strong><br />'.$question.'<strong>Payment&nbsp;:</strong><br />external_id :&nbsp;'.isset($valAnswerDetail->payment->external_id).'<br />provider : '.isset($valAnswerDetail->payment->provider).'<br />amount : '.isset($valAnswerDetail->payment->amount).'<br />currency : '.isset($valAnswerDetail->payment->currency).'<br />terms: &nbsp; '.isset($valAnswerDetail->payment->terms).'</p>';
                //  Get URL calendly
                $eventCalendlys = $this->getWithParams($load->token, $valCalendly->event_type);
                $eventCalendly = json_decode($eventCalendlys);
                $jobsIdUnique = JobModels::get('id');
                if(!$exits){
                    $color = [
                        '#EB5757',
                        '#F2994A',
                        '#27AE60',
                        '#6AEAE3',
                        '#56CCF2',
                        '#BB6BD9',
                        '#F2C94C',
                    ];
                    $color_rand = $color[rand(0, count($color) - 1)];
                    $cekEmail = Client::where('email',$valAnswerDetail->email)->first(['email', 'id']);
                    if(!$cekEmail){
                        $client = Client::create([
                            'first_name' => $valAnswerDetail->name ?? $valAnswerDetail->first_name,
                            'last_name' => $valAnswerDetail->last_name,
                            'email' => $valAnswerDetail->email,
                            'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                            'create_by' => auth()->user()->id,
                            'color' => $color_rand,
                        ]);
                        $jobs = JobModels::create([
                            'title' => $valCalendly->name,
                            'id_unique' => $jobsIdUnique->count()+1,
                            'description' => '<p>'.$eventCalendly->resource->description_plain.'</p>'.$descriptionString,
                            'url_calendly' => $eventCalendly->resource->scheduling_url,
                            'uri_api' => $valCalendly->uri,
                            'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                            'set_job_status_id' => $idJobStatus->id,
                            'location' => $valAnswerDetail->timezone,
                            'status_calendly' => 1,
                            'clients_id' => $client->id
                        ]);
                    }else{
                        $jobs = JobModels::create([
                            'title' => $valCalendly->name,
                            'id_unique' => $jobsIdUnique->count()+1,
                            'description' => '<p>'.$eventCalendly->resource->description_plain.'</p>'.$descriptionString,
                            'url_calendly' => $eventCalendly->resource->scheduling_url,
                            'uri_api' => $valCalendly->uri,
                            'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                            'set_job_status_id' => $idJobStatus->id,
                            'location' => $valAnswerDetail->timezone,
                            'status_calendly' => 1,
                            'clients_id' => $cekEmail->id
                        ]);
                    }

                }else{
                   $jobs = JobModels::where('uri_api' ,$valCalendly->uri)->update([
                       'title' => $valCalendly->name,
                       'description' => '<p>'.$eventCalendly->resource->description_plain.'</p>'.$descriptionString,
   
                   ]);
                }
             }


        }

        return redirect()->back();
    }

    public function add_new_aplicants_to_match_talent(Request $request)
    {

        JobModelsNewApplicant::where('id', $request->id)->get()->map(function($res) use($request){
           $talent = Talents::create([
                'avatar' => $res->avatar,
                'first_name' => $res->first_name,
                'last_name' => $res->last_name,
                'day_of_birthday' => 'null',
                'experience' => 'null',
                'color' => $res->color,
                'email' => $res->email,
                'phone' => $res->phone,
                'address' => $res->address,
                'about_talent' => $res->description,
                'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                'create_by' => auth()->user()->id
            ]);
            JobModelsNewAplicantsFile::where('new_applicants_id' , $request->id)->get()->map(function($file) use($talent){
                TalentsFiles::create([
                    'files' => $file->file,
                    'talents_id' => $talent->id,
                    'extension' => $file->extension
                ]);
            });

            JobModelsMatchTalentAdd::create([
                'talents_id' => $talent->id,
                'status' => $request->status,
                'job_models_id' => $request->job_models_id
            ]);
        });

        JobModelsNewApplicant::where('id', $request->id)->delete();

        return response(200);

    }

    public function create_invoice(Request $request)
    {
        $request->validate([
            'job_models_id' => 'required',
            'client_id' => 'required',
            'client_email' => 'required',
            'prod_id' => 'required',
            'price_id' => 'required'
        ]);

        Stripe::setApiKey(config('app.sk_stripe'));

        // Create a new Customer
        $customer = \Stripe\Customer::create([
            'email' => $request->client_email,
            'description' => $request->description ?? ' ',
        ]);
    
        // Create an Invoice Item with the Price, and Customer you want to charge
        $invoiceItem = \Stripe\InvoiceItem::create([ // You can create an invoice item after the invoice
            'customer' => $customer->id,
            'price' => $request->price_id,
        ]);
        $invoice = \Stripe\Invoice::create([
            'customer' => $customer->id,
            'collection_method' => 'send_invoice',
            'days_until_due' => 7,
            'pending_invoice_items_behavior' => 'include',
        ]);

        $stripe = new \Stripe\StripeClient(config('app.sk_stripe'));

        $stripe->invoices->finalizeInvoice($invoice->id,[]);

        $resultStripe = $stripe->invoices->sendInvoice($invoice->id, []);
        Invoice::create([
           'id_invoice' => $resultStripe->id,
           'id_costumer' => $resultStripe->customer,
           'id_prod' => $resultStripe->lines->data[0]->price->product,
           'id_price' => $resultStripe->lines->data[0]->price->id,
           'name_costumer' =>  $resultStripe->customer_name,
           'email_costumer' => $resultStripe->customer_email,
           'hosted_invoice_url' => $resultStripe->hosted_invoice_url,
           'invoice_pdf' => $resultStripe->invoice_pdf,
            'status' => 'UNPAID',
            'clients_id' => $request->client_id,
            'job_models_id' => $request->job_models_id,
            'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
        ]);

        return redirect()->back();
        
    }

    public function send_email_to_talent(Request $request)
    {
        
       
        $result = JobModels::with(['availability','languages','match_talent'])->where('id' , $request->job_models_id)->firstOrFail();
        $talentNeed = [];
             // Match Talent
        foreach ($result->match_talent as $match) {
            array_push($talentNeed, $talentNeed[$match->jobs_sub_category] = 1);
        }

       

        foreach($request->id_talent_send as $key => $value){
            sendJobDescriptionToTalent::dispatch($request->id_talent_send[$key] , $result, $talentNeed);

        }

        return redirect()->back();
    }

    public function send_email_confirmation_to_client(Request $request)
    {
       
        
        SendEmailToTalent::dispatch($request->family_email, $request->subject, $request->editor_tmp_email_1);
        return redirect()->back();
    }

    public function __destruct()
    {
        File::where(['type' => 'NEW_APLICANTS' , 'users_id' => auth()->user()->id])->delete();
    }

}
