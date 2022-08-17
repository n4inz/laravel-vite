<html>
  <head>
    <title>Add Map</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   


    
  </head>
  <body>

    <input type="file" 
    class="filepond"
    name="filepond" 
    multiple 
    data-allow-reorder="true"
    data-max-file-size="3MB"
    data-max-files="3">

    <!-- include jQuery library -->
    <script src="{{ asset('js/jQuery.js') }}"></script>

<!-- include FilePond library -->
<script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>

<!-- include FilePond plugins -->
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>

<!-- include FilePond jQuery adapter -->
<script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>
<script>
  $(function(){
  
    // First register any plugins
    $.fn.filepond.registerPlugin(FilePondPluginImagePreview);

    // Turn input element into a pond
    $('.my-pond').filepond();

    // Set allowMultiple property to true
    $('.my-pond').filepond('allowMultiple', true);
  
    // Listen for addfile event
    $('.my-pond').on('FilePond:addfile', function(e) {
        console.log('file added event', e);
    });

    // Manually add a file using the addfile method
    $('.my-pond').first().filepond('addFile', 'index.html').then(function(file){
      console.log('file added', file);
    });
  
  });
</script>
  </body>
</html>