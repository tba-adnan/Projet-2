<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

Search :<input type="text" id="search">
<br>

<table>
    <thead>
        <tr>
            <th>id : </th>
            <th>Nom du stagaires : </th>
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
                <a href="edit-student/{{$value->id}}"><button>Modifier</button></a>
                <a href="delete/{{$value->id}}"><button>Supprimer</button></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/search.js"></script>
</body>
</html>