import './bootstrap';


window.Echo.channel("messages").listen("Comments", (event) => {

    const template = `<div class="flex space-x-2 mt-6">
                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="${event.data.avatar}" alt="">
                            <div class="w-full">
                                <div class="flex space-x-4">
                                    <div class="flex space-x-1 justify-center items-center">
                                        <div class="overview-comments-name text-colortext">Joseph Parker</div>
                                        <div class="overview-comments-name text-colorStatusCard1">${event.data.time}</div>
                                    </div>
                                </div>
                                <div class="overview-comments-body">${event.data.comment}</div>
                                
                                <div id="reply${event.data.id}" class="flex justify-center items-center space-x-1 p-1 w-[57px] h-6 bg-[#EEEEEE] rounded-md hover:cursor-pointer my-4">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.89406 0.870148C7.0825 0.946764 7.20574 1.12991 7.20574 1.33333V4.23948C9.24219 4.36525 11.0006 5.17118 12.4587 6.6488C14.0264 8.23736 14.926 10.2167 15.1638 12.5616C15.186 12.781 15.0619 12.9892 14.8581 13.0738C14.6544 13.1584 14.4193 13.0995 14.2796 12.9289C12.6603 10.9523 11.3053 9.94268 10.2174 9.71184C9.16141 9.48779 8.15845 9.43122 7.20574 9.53692V12.6667C7.20574 12.8725 7.07957 13.0573 6.88786 13.1323C6.69614 13.2073 6.47806 13.1571 6.3384 13.0059L0.965671 7.18764C0.785295 6.99231 0.789334 6.68997 0.974862 6.49953L6.3476 0.984428C6.48954 0.838719 6.70562 0.793533 6.89406 0.870148ZM2.02208 6.85763L6.20574 11.3882V9.101C6.20574 8.85604 6.38321 8.64715 6.62495 8.60757C7.83739 8.40904 9.10543 8.45365 10.4249 8.73362C11.5084 8.96351 12.6472 9.72497 13.8426 10.9385C13.4471 9.55815 12.7479 8.36548 11.747 7.35119L11.7469 7.35119C10.3584 5.94402 8.68603 5.238 6.70179 5.22231C6.4272 5.22014 6.20574 4.99693 6.20574 4.72233V2.56311L2.02208 6.85763Z" fill="#AFABAB"/>
                                    </svg>
                                    <span class="overview-comments-reply">Reply</span>
                                </div>
                                <div class="reply_your_comment${event.data.id} w-full space-y-4"></div>
                                <div class="add_reply${event.data.id}"></div>
                            </div>
                        </div>`;
    $('#comment'+event.data.job_models_id).append(template);
    const btn_enable = `<button onclick="post_comment()" class="w-40 h-[42px] bg-palet rounded-md ">
                            <span class="overview-attechment-btn-text justify-center">Post Comments</span>
                        </button>`;
    $('.buttton_comment').html(btn_enable);
    
    $('#reply'+event.data.id).click(function(){
        const reply_template  = `<div class="px-4 mt-4">
                                    <div class="w-full rounded-md text-xs ">
                                        <textarea id="reply_comment${event.data.id}" rows="2" class="block p-2.5 w-full text-sm text-colortext bg-[#F7F7F7] rounded  border-none outline-none focus:ring-0" placeholder="Enter a comments"></textarea>
                                    </div>
                                </div>
                                <div class="btn_reply${event.data.id} flex justify-end px-4 mt-2">
                                    <button class="reply${event.data.id} w-20 h-7 bg-palet rounded-md ">
                                        <span class="overview-attechment-btn-text text-xs justify-center">Reply</span>
                                    </button>
                                </div>`;
        $('.add_reply'+event.data.id).html(reply_template);

        $('.reply'+event.data.id).click(function(){
            const job_comments_id = event.data.id;
            const job_models_id = event.data.job_models_id;
            const reply_comment = $('#reply_comment'+event.data.id).val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                    type: "POST",
                    url: "/reply",
                    data: {job_comments_id , job_models_id,reply_comment ,},
                    beforeSend:function(){
                        const btn_disable = `<div class="w-20 h-7 bg-palet rounded-md flex items-center justify-center">
                                                <svg aria-hidden="true" role="status" class="inline w-4 h-4 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                                                </svg>
                                            </div>`;
                        $('.btn_reply'+event.data.id).html(btn_disable);
                    },
                    success: function (res) {
                        // const template_reply = `<h1>Hello word</h1>`;
                        // $('.add_reply'+job_comments_id).append(template_reply);

                    }
            });
            
        })
    });


})


// Reply
window.Echo.channel("reply-messages").listen("ReplyComment", (res) => {

    const template_reply = `<div class="flex space-x-2">
                                <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="${res.data.avatar}" alt="">
                                <div class="max-w-xl">
                                    <div class="flex space-x-4">
                                        <div class="flex space-x-1 justify-center items-center">
                                            <div class="overview-comments-name text-colortext">${res.data.name}</div>
                                            <div class="overview-comments-name text-colorStatusCard1">${res.data.time}</div>
                                        </div>
                                    </div>
                                    <span class="overview-comments-body">${res.data.reply}</span>   
                                </div>
                            </div>`;

    $('.reply_your_comment'+res.data.id_comment).append(template_reply);
    $('.add_reply'+res.data.id_comment).html('');

    console.log(res);

})