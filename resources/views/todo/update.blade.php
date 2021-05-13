
    <div class="container">
        @extends('layouts.template')

        @section('content')
            <div class="container">
                <h1>Stai modificando {{$todo->titolo}}</h1>

                <form method="post" action="{{route('todo.update', $todo->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 form-check">
                        <label class="mb-2 mt-4">Titolo</label>
                        <input type="text" class="form-control" name="titolo" value="{{$todo->titolo}}">
                    </div>
                    <div class="mb-3 form-check">
                        <label class="mb-2 mt-4">Descrizione</label>

                        <input type="text" class="form-control" name="descrizione" value="{{$todo->descrizione}}">
                    </div>
                    <div class="mb-3 form-check">
                        <label class="mb-2 mt-4">Priorità</label>

                        <select name="prio" class="form-control">

                            <option value="0">---</option>
                            <option value="bassa" @if($todo->prio == 'bassa') selected @endif>Bassa</option>
                            <option value="media" @if($todo->prio == 'media') selected @endif>Media</option>
                            <option value="alta" @if($todo->prio == 'alta') selected @endif>Alta</option>
                        </select>
                    </div>
                    <div class="mb-3 form-check">
                        <label class="mb-2 mt-4">Terminare?</label>

                        <input type="checkbox" class="" name="fine" @if($todo->fine != null) checked @endif value="{{\Carbon\Carbon::now()}}">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Modifica">
                </form>
            </div>
        @endsection

    </div>
