<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingRequest;
use App\Http\Traits\HttpGuzzle;
use App\Http\Traits\ImageUpload;
use App\Models\Avatar;
use App\Models\EmailAgencyTemplate;
use App\Models\SettingDefinedCheckList;
use App\Models\SettingGeneral;
use App\Models\SettingJobModelsStatus;
use App\Models\User;
use App\Repositories\SettingRepository;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use ImageUpload, HttpGuzzle;
    private $settingRepository;

    public function __construct(SettingRepository $settingRepository)
    {
        $this->middleware(['role:agency']);
        $this->settingRepository = $settingRepository;
    }

    public function setting()
    {
        $setting = User::where('id', auth()->user()->id)->with(['avatar', 'SettingDetail' => function ($query) {
            $query->with(['service_location_fee'])->first();
        }, 'SettingAdditionals', 'SettingUsers', 'SettingGeneral', 'SettingCategory', 'SettingJobStatus', 'SettingTalentStatus', 'SettingCalendly'])->first();

        // return $setting->SettingJobStatus;
        // In array catagory and subcategory
        $category = [];
        $subCategory = [];
        if (!empty($setting->SettingCategory)) {
            foreach ($setting->SettingCategory as $val) {
                array_push($category, $val->category_key);

                foreach ($val->service_subcategorys as $valSubs) {
                    array_push($subCategory, $valSubs->sub_category_key);
                }
            }
        }
        // In array job status
        $jobStatus = [];
        if (!empty($setting->SettingJobStatus)) {
            foreach ($setting->SettingJobStatus as $val) {
                array_push($jobStatus, $val->status_key);
            }
        }

        // in array talent status
        $talentStatus = [];
        if (!empty($setting->SettingTalentStatus)) {
            foreach ($setting->SettingTalentStatus as $val) {
                array_push($talentStatus, $val->status_key);
            }
        }

        $tmp_email = EmailAgencyTemplate::where('users_id' , auth()->user()->staf->users_agency_id ?? auth()->user()->id)->get();
        $defined_list = SettingDefinedCheckList::where('users_id', auth()->guard('web')->user()->id)->orderBy('order', 'asc')->get();
        return view('setting.setting', compact('setting', 'defined_list', 'category', 'subCategory', 'jobStatus', 'talentStatus','tmp_email'));
    }

    public function setting_store(SettingRequest $request)
    {

        // return $request;

        $cek_setting = SettingGeneral::where('users_id', auth()->user()->id)->first();

        if (empty($cek_setting)) {

            $this->settingRepository->created($request);
        } else {
            $a = $this->settingRepository->updated($request);

        }
        return redirect()->back()->with('success', 'Setting was success update');
    }

    public function upload_avatar(Request $request)
    {
        $avatar = $this->uploadImageStore($request->file('avatar'), 'avatar');
        $exit = Avatar::where('users_id', auth()->guard('web')->user()->id)->first();

        if (empty($exit)) {
            Avatar::create([
                'avatar' => $avatar,
                'users_id' => auth()->guard('web')->user()->id,
            ]);
        } else {
            Avatar::where('users_id', auth()->guard('web')->user()->id)->update([
                'avatar' => $avatar,
            ]);
        }

        return redirect()->back()->with('Success', 'Profile Update Success');
    }

    public function order_predefined(Request $request)
    {
        foreach($request->item as $key => $value){
            SettingDefinedCheckList::where(['users_id' => auth()->user()->id , 'id' => $value])->update([
                'order' => $key
            ]);
        }
    }

    public function get_editor_email(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);

        $email = EmailAgencyTemplate::where('id', $request->id)->first();
        return view('modal.setting.editorEmail', compact('email'));
    }

    public function edit_email_store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'edit_email' => 'required'
        ]);

        EmailAgencyTemplate::where('id' , $request->id)->update([
            'body' => $request->edit_email,
            'subject' => $request->subject,
        ]);
        return response(200);
    }
}
