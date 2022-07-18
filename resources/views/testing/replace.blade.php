<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>
<body>
    <h1>Hello word</h1>
    <button onclick="changeurl('nain')" id="submit">cek</button>

    <script>
        function changeurl(url)
        {
            window.location.href = "www.google.com"; 


            // var new_url="/https://google.com/"+url;
            // window.history.pushState("data","Title",new_url);
            // document.title=url;
        }
        var url = "https://test.agency.test"

        // $('#submit').click(function(){
        //     window.location.replace(url)
        // })
        // 
    </script>
</body>
</html>