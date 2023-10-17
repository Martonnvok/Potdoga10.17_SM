@foreach($clubs as $club)
    <form action="/clubs/edit/{{$club->id}}" method="post">    
    {{method_field("GET")}}
    <div class="form-group">
        <input type="submit" value="{{$club->title}}">
    </div>
    </form>
@endforeach