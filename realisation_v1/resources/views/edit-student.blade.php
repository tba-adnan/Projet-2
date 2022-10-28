<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<br>
<div class="mb-2 w-25 container-fluid lead form-control shadow p-3 mb-5 bg-white rounded lead">
@foreach ($Student as $value)
<form action="{{url('edit-student')}}/{{$value->id}}" method="get">
    @csrf
    Nom : <input type="text" class="form-control lead" value="{{$value->name}}" name="name">
    Nickname : <input type="text" class="form-control lead" value="{{$value->nickname}}" name="nickname">
    Email : <input type="text" class="form-control lead" value="{{$value->email}}" name="email">
    <br>
    <button class="btn btn-success">Update</button>
</form>
<br>
<a href="/index"><button class="btn btn-danger">Annuler</button></a>
@endforeach
</div>
</body>
</html>



