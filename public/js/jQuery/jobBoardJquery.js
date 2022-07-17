$( document ).ready(function() {
    $('#all-days').click(function(){
        if($(this).is(':checked')){
            $('#monday').prop('checked', true);
            $('#tuesday').prop('checked', true);
            $('#wednesday').prop('checked', true);
            $('#thursday').prop('checked', true);
            $('#friday').prop('checked', true);
            $('#saturday').prop('checked', true);
            $('#sunday').prop('checked', true);
        }else {
            $('#monday').prop('checked', false);
            $('#tuesday').prop('checked', false);
            $('#wednesday').prop('checked', false);
            $('#thursday').prop('checked', false);
            $('#friday').prop('checked', false);
            $('#saturday').prop('checked', false);
            $('#sunday').prop('checked', false);
        }

    })

    $('.check').click(function(){
        var a = $("input[type='checkbox'].check");
        if(a.length == a.filter(":checked").length){
            $('#all-days').prop('checked', true)
        }else{
            $('#all-days').prop('checked', false)
        }
    })
});


function potensial_client(){
    const input = `<input type="hidden" name="status" value="potential_clients">`;
    $('.status').html(input);
 }
 function interviewing(){
    const input = `<input type="hidden" name="status" value="interviewing">`;
    $('.status').html(input);
 }
 function trialing(){
    const input = `<input type="hidden" name="status" value="trialing">`;
    $('.status').html(input);
 }
 function completed(){
    const input = `<input type="hidden" name="status" value="completed">`;
    $('.status').html(input);
 }