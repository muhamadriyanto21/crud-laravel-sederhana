<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="{{route('create')}}">tambah data</a>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <!-- <th>Umur</th> -->
                <th>Email</th>
                <!-- <th>Telephone</th> -->
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>

            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <!-- <td>{{$user->umur}}</td> -->
                <td>{{$user->email}}</td>
                <!-- <td>{{$user->telephone}}</td> -->
                <td>
                    <a href="{{route('detail',[$user->id])}}">detail</a>
                    <a href="{{route('edit',[$user->id])}}">edit</a>
                    <a href="{{route('delete',[$user->id])}}">delete</a>
                </td>
            </tr>
            @endforeach



        </tbody>
    </table>

</body>

</html>