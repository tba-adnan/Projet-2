<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">



Search :<input type="text" class="form-control" id="search">
<br>


<div class="container-fluid">
<br>
<a href="/create"><button class="btn btn-success" >Ajouter une Promotion</button></a>
<a href="/add-student"><button class="btn btn-success" >Ajouter un Stagaire</button></a>
<table class="table">
    <thead>
        <tr>
            <th>id : </th>
            <th>Nom du Promo : </th>
        </tr>
    </thead>
    <tbody id="tbody"> 
        @foreach ($promotion as $value)
            
        <tr>
            <th>{{$value->id}}</th>
            <td>{{$value->name}}</td>
            <td>
                <a href="edit/{{$value->id}}"><button class="btn btn-warning">Modifier</button></a>
                <a href="delete/{{$value->id}}"><button class="btn btn-danger">Supprimer</button></a>
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