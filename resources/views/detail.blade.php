

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DETAIL PAGE</h1>
    <h2>{{$user->name}}</h2>
    <h2>{{$user->email}}</h2>
    <h2>{{$user->umur}}</h2>
    <h2>{{$user->telephone}}</h2>
    <a href="{{route('users')}}">kembali ke halaman utama</a>
    
</body>
</html>