Search :<input type="text" id="search">
<br>

<br>
<a href="/create"><button>Ajouter une Promotion</button></a>
<a href="/add-student"><button>Ajouter un Stagaire</button></a>
<table>
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
                <a href="edit/{{$value->id}}"><button>Modifier</button></a>
                <a href="delete/{{$value->id}}"><button>Supprimer</button></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!--  -->
<br>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/search.js"></script>