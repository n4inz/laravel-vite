$('#attached_file').change(function(e){
    var fileName = e.target.files[0].name;
   $('.name-file').html(fileName.slice(0,35)+'...')
});