<html>
  <head>
    <title>Add Map</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="{{ asset('js/jQuery.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.js"></script>

  </head>
  <body>
    <h3>My Google Maps Demo</h3>
    <!--The div element for the map -->
    <div id="map"></div>

    <form id="commentForm" method="post" action="{{ route('jobboard.apply') }}">
    
          <div class="flex flex-col">
            <input  name="name" type="text" >

          </div>

          <button>submit</button>
  
    </form>
    <script>
    // $("#commentForm").validate({

    // });
    
    $(function(){
     var test = $('#commentForm');
    
      if(test.length){
        test.validate({
          rules: {
            name:{
              required:true
            }
          }
        })
      }
    })
    </script>
    <!-- 
     The `defer` attribute causes the callback to execute after the full HTML
     document has been parsed. For non-blocking uses, avoiding race conditions,
     and consistent behavior across browsers, consider loading using Promises
     with https://www.npmjs.com/package/@googlemaps/js-api-loader.
    -->

  </body>
</html>