import './bootstrap';


window.Echo.channel("messages").listen("Comments", (event) => {

    const template = `<div class="flex space-x-2 mt-6">
                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="${event.data.avatar}" alt="">
                            <div class="w-full">
                                <div class="flex space-x-4">
                                    <div class="flex space-x-1 justify-center items-center">
                                        <div class="overview-comments-name text-colortext">${event.data.name}</div>
                                        <div class="overview-comments-name text-colorStatusCard1">${event.data.time}</div>
                                    </div>
                                </div>
                                <div class="overview-comments-body">${event.data.comment}</div>
                                
                                <div onclick="reply(${event.data.id})" id="reply${event.data.id}" class="flex justify-center items-center space-x-1 p-1 w-[57px] h-6 bg-[#EEEEEE] rounded-md hover:cursor-pointer my-4">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.89406 0.870148C7.0825 0.946764 7.20574 1.12991 7.20574 1.33333V4.23948C9.24219 4.36525 11.0006 5.17118 12.4587 6.6488C14.0264 8.23736 14.926 10.2167 15.1638 12.5616C15.186 12.781 15.0619 12.9892 14.8581 13.0738C14.6544 13.1584 14.4193 13.0995 14.2796 12.9289C12.6603 10.9523 11.3053 9.94268 10.2174 9.71184C9.16141 9.48779 8.15845 9.43122 7.20574 9.53692V12.6667C7.20574 12.8725 7.07957 13.0573 6.88786 13.1323C6.69614 13.2073 6.47806 13.1571 6.3384 13.0059L0.965671 7.18764C0.785295 6.99231 0.789334 6.68997 0.974862 6.49953L6.3476 0.984428C6.48954 0.838719 6.70562 0.793533 6.89406 0.870148ZM2.02208 6.85763L6.20574 11.3882V9.101C6.20574 8.85604 6.38321 8.64715 6.62495 8.60757C7.83739 8.40904 9.10543 8.45365 10.4249 8.73362C11.5084 8.96351 12.6472 9.72497 13.8426 10.9385C13.4471 9.55815 12.7479 8.36548 11.747 7.35119L11.7469 7.35119C10.3584 5.94402 8.68603 5.238 6.70179 5.22231C6.4272 5.22014 6.20574 4.99693 6.20574 4.72233V2.56311L2.02208 6.85763Z" fill="#AFABAB"/>
                                    </svg>
                                    <span class="overview-comments-reply">Reply</span>
                                </div>
                                <div class="reply_your_comment${event.data.id} w-full space-y-4"></div>
                                <input class="comment_id${event.data.id}" type="hidden" value="${event.data.id}">
                                <div class="add_reply${event.data.id}"></div>
                            </div>
                        </div>`;
    $('#comment'+event.data.job_models_id).append(template);
    const btn_enable = `<button onclick="post_comment()" class="w-40 h-[42px] bg-palet rounded-md ">
                            <span class="overview-attechment-btn-text justify-center">Post Comments</span>
                        </button>`;
    $('.buttton_comment').html(btn_enable);




    
   
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

})

// Notif comment
window.Echo.channel("channel-comment").listen("Nofication", (res) => {
    res.count.map(function(e){
        const tmp = `<div class="count absolute w-[65%] h-[65%] top-0 right-0 flex items-center justify-center bg-red-500 rounded-full text-[8px] text-white">
                        ${e.count}
                    </div>`;
        $('.counters'+e.notify_to).html(tmp);
    })
})


