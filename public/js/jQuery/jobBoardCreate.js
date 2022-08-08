const options = {

};
const targetEl = document.getElementById('create-job');
const modal = new Modal(targetEl, options);

function create_jobs(sts){
   modal.show();
   const input = `<input type="hidden" name="status" value="${sts}">`;
   $('.status').html(input);
}

// function potensial_client(){
//     modal.show();
//     const input = `<input type="hidden" name="status" value="potential_clients">`;
//     $('.status').html(input);
//  }
//  function interviewing(){
//      modal.show();
//     const input = `<input type="hidden" name="status" value="interviewing">`;
//     $('.status').html(input);
//  }
//  function trialing(){
//      modal.show();
//     const input = `<input type="hidden" name="status" value="trialing">`;
//     $('.status').html(input);
//  }
//  function completed(){
//      modal.show();
//     const input = `<input type="hidden" name="status" value="completed">`;
//     $('.status').html(input);
//  }
 function close_modal(){
    modal.hide();
 }
