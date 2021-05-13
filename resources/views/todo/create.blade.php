@extends('layouts.template')

@section('content')
<div class="container mt-5">

    <form method="post" action="{{route('todo.store')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="titolo">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descrizione</label>
            <textarea class="form-control" placeholder="inserisci descrizione" name="descrizione"></textarea>
        </div>
        <div class="mb-3 form-check">
            <label class="form-label">Priorità</label>
            <select name="prio" class="form-control">
                <option value="0">---</option>
                <option value="bassa">Bassa</option>
                <option value="media">Media</option>
                <option value="alta">Alta</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
    </form>

</div>

@endsection
