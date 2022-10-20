Search :<input type="text" id="search">
<br>

<a href="/create"><button>Ajouter</button></a>
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
                <a href="ddit/{{$value->id}}"><button>Modifier</button></a>
                <a href="Delete/{{$value->id}}"><button>Supprimer</button></a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/search.js"></script>