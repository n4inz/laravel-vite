<div>
    <div class="mb-2 flex items-center justify-center h-9 border border-[#ECECEC] rounded text-[#222222]">
        <input name="email" value="{{ old('email') }}" type="text" class="talent_email text-sm border-none focus:ring-0 w-full h-full rounded p-1 pl-3 outline-none " placeholder="To: Example@mail.com">
    </div>
    <div class=" flex items-center justify-center h-9 border border-[#ECECEC] rounded text-[#222222]">
        <input name="subject" value="" type="text" class="text-sm  border-none focus:ring-0 w-full h-full rounded p-1 pl-3 outline-none " placeholder="Subject">
    </div>
</div>

<div class="load_edit_email_talent w-full rounded-md" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <textarea id="edit_tmp_email_talent"  class="w-full h-full" name="body_email" >{{ $email->body }}</textarea>
</div>
<!-- Modal footer -->
<div class="flex items-end justify-center  p-6 space-x-2 border-gray-200  relative">
    <div onclick="save_as_email_talent('{{ $email->id }}')" class="absolute left-5 text-sm text-blue-400 hover:cursor-pointer save_as_email_talent">
        Save as Default
    </div>
    <div onclick="dont_send_email_confirmation()" class="flex items-center justify-center w-28 h-8 bg-colorStatusCard1 rounded-md mt-2 hover:cursor-pointer">
        <span class="text-sm text-white">Don't Send</span> 
    </div>
    <button onclick="send_email_confirmation()" class="flex items-center justify-center w-28 h-8 bg-palet rounded-md mt-2">
        <span class="text-sm text-white">Send</span> 
    </button>
</div>
<script>
    CKEDITOR.replace('body_email', {
      width: '100%',
      height: 250,
      removeButtons: 'PasteFromWord'
    });
</script>