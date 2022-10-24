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
<div class="mb-2 w-25 container-fluid lead">
Search :<input type="text" class="form-control" id="search">
<br>
</div>


<div class="container">
<table class="table table-striped lead">
    <thead>
        <tr>
            <th>ID : </th>
            <th>Nom du stagaire : </th>
            <th>Email : </th>
        </tr>
    </thead>
    <tbody id="tbody"> 
        @foreach ($name as $value)
            
        <tr>
            <th>{{$value->id}}</th>
            <td>{{$value->name}}</td>
            <td>{{$value->email}}</td>
            <td>
                <a href="edit-student/{{$value->id}}"><button class="btn btn-warning">Modifier</button></a>
                <a href="delete/{{$value->id}}"><button class="btn btn-danger">Supprimer</button></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/search.js"></script>
</body>
</html>