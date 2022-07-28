<!DOCTYPE html>
<html>
<head>
 <title>Laravel 8 Send Email Example</title>
</head>
<body>
 
 <h1>This is test mail from Agency</h1>
 <p>Talent recommendations we have</p>

 <table border="1">
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Addrress</td>
    </tr>
    <tbody>
        @foreach ($value as $val )
            <tr>
                <td>{{ $val->first_name }} {{ $val->last_name }}</td>
                <td>{{ $val->email }}</td>
                <td>{{ $val->phone }}</td>
                <td>{{ $val->address }}</td>
            </tr>
        @endforeach
    </tbody>
 </table>

</body>
</html>