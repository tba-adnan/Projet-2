@foreach ($promotion as $value)
    
<form action="{{url('update')}}/{{$value->id}}" method="post">
    @csrf
    >>> <input type="text" value="{{$value->Name_promotion}}" name="name">
    <button>Update</button>
</form>
@endforeach
