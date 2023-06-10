

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('update',[$user->id])}}" method="post">
        @csrf
        <div>
            <label for="nama">nama</label>
            <input type="text" name="name" value="{{$user->name}}">
        </div>
        <div>
            <label for="umur">umur</label>
            <input type="text" name="umur" value="{{$user->umur}}">
        </div>
        <div>
            <label for="email">email</label>
            <input type="text" name="email" value="{{$user->email}}">
        </div>
        <div>
            <label for="telephone">telephone</label>
            <input type="text" name="telephone" value="{{$user->telephone}}">
        </div>
        <button type="submit">submit</button>
    </form>

    <a href="{{route('users')}}">Kembali ke halaman utama</a>
    
</body>
</html>