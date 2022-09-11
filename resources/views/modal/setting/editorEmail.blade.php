<form class="form_edit_email" action="" method="POST">@csrf
    <div class="text-xs flex text-colortext mt-5 justify-between"><i>Subject :</i></div>
    <div class="mb-2 mt flex items-center justify-center h-9 border-b border-[#ECECEC] rounded text-[#222222]">
        <input name="subject" value="{{ $email->subject }}" type="text" class="subject text-sm border-none focus:ring-0 w-full h-full rounded p-1 pl-3 outline-none " placeholder="Subject:">
    </div>
    <input class="id" type="hidden" name="id" value="{{ $email->id }}">
    <textarea name="edit_email" id="" cols="30" rows="10">{{ $email->body }}</textarea>
    <div class="flex items-end justify-center  p-6 space-x-2 relative">
                                               
        <div onclick="cancel_edit_email()"  class="flex items-center justify-center w-28 h-8 bg-colorStatusCard1 rounded-md mt-2 hover:cursor-pointer">
            <span class="text-sm text-white">Cancel</span> 
        </div>
        <button class="flex btn_edit_email items-center justify-center w-28 h-8 bg-palet rounded-md mt-2">
            <span class="text-sm text-white">Save</span> 
        </button>
    </div>
</form>

<script>
    CKEDITOR.replace('edit_email', {
    width: '100%',
    height: 250,
    removeButtons: 'PasteFromWord'
    });

    $('.form_edit_email').submit(function(e){
        e.preventDefault()
        const edit_email = CKEDITOR.instances.edit_email.getData();
        const id = $('.id').val();
        const subject = $('.subject').val();
        $.ajax({
            type:'POST',
            url:'{{ route("setting.edit_email_store") }}',
            data:{id,subject,edit_email},
            beforeSend:function(){
                $('.btn_edit_email').attr('disabled', 'disabled')
                $('.btn_edit_email').toggleClass('hover:cursor-not-allowed')
            },
            success:function(res){
                // location.reload();
                $('.editor').html('');
                // $('#emailBody_'+id).toggleClass('hidden');

                $('.view_email').removeClass('hidden');
                $('.subject_view_'+id).html(subject);
                $('.email_body_view_'+id).html(edit_email);

                // $('.view_email').html(tmp);

            }
        });
    })
</script>