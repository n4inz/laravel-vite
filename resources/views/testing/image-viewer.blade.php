<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/jQuery.js') }}"></script><!-- jQuery is required -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/imageviewer/1.1.0/viewer.js" integrity="sha512-B/Fq6n5Mr2myLD1ls1c0W4EBEGqEjI7GIhoE8irtb/X6W2J/f1vrZhkc5E1m6rXxxHeD3T+9kROYxtMv45s40A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/imageviewer/1.1.0/viewer.css" integrity="sha512-zjtv6O/V90xbtThlL9qyg8//kV/EyXJ47nrXR524Ip/qcrth9sJfVfFqTdQWGGqQ59i1kiVy1HiW9kgNj+QKCw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>

      
      <div>
        <div id="images">
          <div><img src="https://test.agency.test/storage/Talent%20attached%20file/1660796080_2.png" alt="Picture 1"></div>
          <div><img src="https://test.agency.test/storage/Talent%20attached%20file/1660796080_3.png" alt="Picture 2"></div>
          <div><img src="https://test.agency.test/storage/Talent%20attached%20file/1660796080_4.png" alt="Picture 3"></div>
        </div>
      </div>

    <script>
        var $image = $('#image');

        $image.viewer({
        inline: true,
        viewed: function() {
            $image.viewer('zoomTo', 1);
        }
        });

        // Get the Viewer.js instance after initialized
        var viewer = $image.data('viewer');

        // View a list of images
        $('#images').viewer();
    </script>
</body>
</html>