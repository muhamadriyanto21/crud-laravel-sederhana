

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('store')}}" method="post">
        @csrf
        <div>
            <label for="nama">nama</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="umur">umur</label>
            <input type="text" name="umur">
        </div>
        <div>
            <label for="email">email</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="telephone">telephone</label>
            <input type="text" name="telephone">
        </div>
        <button type="submit">submit</button>
    </form>

    <a href="{{route('users')}}">Kembali ke halaman utama</a>
    
</body>
</html>