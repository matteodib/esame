
<div class="container">
    @extends('layouts.template')

    @section('content')
        <div class="container">

            <form method="post" action="{{route('todo.upmod', $todo->id)}}">
                @csrf
                @method('PUT')
                <input type="text" name="titolo" value="{{$todo->titolo}}">
                <input type="text" name="descrizione" value="{{$todo->descrizione}}">
                <input type="text" name="prio" value="{{$todo->prio}}">
                <h1>Sicuro di terminare {{$todo->titolo}}?</h1>
                <input type="submit" class="btn btn-primary" value="Termina">
            </form>
        </div>
    @endsection

</div>
