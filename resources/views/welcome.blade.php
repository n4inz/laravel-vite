<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Sortable - Default functionality</title>
  {{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css"> --}}
  <style>
  #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
  #sortable li span { position: absolute; margin-left: -1.3em; }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
    $(function(){
        $( "#sortable" ).sortable({
            axis: 'y',
            update: function( event, ui ) {
                var data = $(this).sortable('serialize');
                
            //    var dari =  ui.item.attr('id');
            //    var ke =  ui.item.prev().attr('id');
            //    console.log(dari)
            //    console.log(ke)
                console.log(data)
                
                // $(this).children().each(function(index,a){
                //     console.log(index+1)
                // })
            }
        });

        $('#click').click(function(){
            var a = $("#sortable").sortable("serialize");
            alert()
        })
    });
  </script>
</head>
<body>
 
<div id="sortable">
  <div id="item_1">Item 1</div>
  <div id="item_2">Item 2</div>
  <div id="item_3">Item 3</div>
  <div id="item_4">Item 4</div>
  <div id="item_5">Item 5</div>
  <div id="item_6">Item 6</div>
  <div id="item_7">Item 7</div>
</div>

<button id="click">click</button>
 
 
</body>
</html>