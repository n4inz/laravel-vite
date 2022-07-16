<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('test.multi_select_store') }}" method="post">
    @csrf

    <select name="test[]" id="" multiple>
        <option value="a">a</option>
        <option value="b">b</option>

        <option value="c">c</option>
        <option value="d">d</option>
    </select>
    <input type="submit" value="test">
    </form>
</body>
</html>