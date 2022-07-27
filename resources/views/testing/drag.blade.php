<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/jQueryUi/jquery-ui.css') }}">
    <style>
        #sortable1, #sortable2, #sortable3 {
          border: 1px solid #eee;
          width: 142px;
          min-height: 20px;
          list-style-type: none;
          margin: 0;
          padding: 5px 0 0 0;
          float: left;
          margin-right: 10px;
        }
        #sortable1 li, #sortable2 li, #sortable3 li {
          margin: 0 5px 5px 5px;
          padding: 5px;
          font-size: 1.2em;
          width: 120px;
        }
        </style>
    <script src="{{ asset('js/jQuery.js') }}"></script>
    <script src="{{ asset('js/jQuery/jQueryUi/jquery-ui.js') }}"></script>
    {{-- <script>
        $( function() {
          $( "#sortable1, #sortable2 ").sortable({
            connectWith: ".connectedSortable",
            update : function( event, ui ) {
                // // var data = $(this).sortable('toArray').toString()
                // console.log(ui.item)
            }
          }).on("sortupdate", function( event, ui ) {
    //  finalPos =  ui.item.index() + 1; // when using a 1-based index  	
    //  console.log(ui.item.index() + 1);
    //  console.log(finalPos)
    
     // call ajax function here, passing in initialPos & finalPos
     // server will need to re-order values for all elements between (and including) initialPos & finalPos
  }).disableSelection();
        } );
    </script> --}}

 
</head>
<body>
  
      <ul id="sortable1" class="connectedSortable">
        <li id="item1" class="ui-state-default">Item 1</li>
        <li id="item2" class="ui-state-default">Item 2</li>
        <li id="item3" class="ui-state-default">Item 3</li>
        <li id="item4" class="ui-state-default">Item 4</li>
        <li id="item5" class="ui-state-default">Item 5</li>
      </ul>
       
      <ul id="sortable2" class="connectedSortable">
        <li id="item6" class="ui-state-default">Item 1</li>
        <li id="item7" class="ui-state-default">Item 2</li>
        <li id="item8" class="ui-state-default">Item 3</li>
        <li id="item9" class="ui-state-default">Item 4</li>
        <li id="item10" class="ui-state-default">Item 5</li>
      </ul>

      <script>
        var initialPos, finalPos, sts , ids;
        $(function(){
            $("#sortable1, #sortable2")
            .sortable({
                connectWith: ".connectedSortable",
                receive: function (event , ui,){
                    console.log(event.target.id)
                }
            })
            // .on("sortstart", function( event, ui ) {
            //     initialPos = ui.item.index() + 1; // when using a 1-based index    
            //     //console.log("Item started at position", initialPos);
            //     // console.log(ui.item.attr('id'));
            //     // console.log(event.target.id)

            // })  
            // .on("sortout", function( event, ui ) {
                
            //     // finalPos =  ui.item.index() + 1; // when using a 1-based index  	
            //     // console.log(ui.item.attr('id'), "moved from position", initialPos, "to", finalPos);
            //     // console.log(event.attr('id'))
            //     // call ajax function here, passing in initialPos & finalPos
            //     // server will need to re-order values for all elements between (and including) initialPos & finalPos
                
            //     sts = event.currentTarget.id;
            //     ids = ui.item.attr('id');

            //     console.log(`id ${ids} pindah ke status ${sts}`)

            //     // console.log(event.currentTarget.id)
            //     // console.log(ui.item.attr('id'));
                
            // });
        })
    </script>
</body>
</html>