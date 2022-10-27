<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>index</title>
</head>
<body>

<br>
<div class="mb-2 w-25 container-fluid lead">
Search :<input type="text" class="form-control" id="search">
<br>
</div>

<div class="container">
<br>
<a href="/create"><button class="btn btn-success" >Ajouter une Promotion</button></a>

<br>
<table class="table table-striped lead">
    <thead>
        <tr>
            <th>ID : </th>
            <th>Nom du Promotion : </th>
        </tr>
    </thead>
    <tbody id="tbody"> 
        @foreach ($promotion as $value)
            
        <tr>
            <th>{{$value->id}} </th>
            <td><p href="{{url('update')}}/{{$value->id}}" onclick="var input = document.createElement('input'); input.setAttribute('value', this.firstChild.nodeValue); this.parentNode.replaceChild(input, this);">{{$value->name}}</p></td>
            <td>
                <a href="edit/{{$value->id}}"><button class="btn btn-warning lead">Modifier</button></a>
                <a href="delete/{{$value->id}}"><button class="btn btn-danger lead ">Supprimer</button></a>
                <a href="/add-student/{{$value->id}}"><button class="btn btn-success lead" >Ajouter un Stagaire</button></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
<!--  -->
<br>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/search.js"></script>


</body>
</html>


