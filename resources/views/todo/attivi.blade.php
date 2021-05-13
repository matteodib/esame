@extends('layouts.template')

@section('content')
    <div class="container">

        @foreach($todos as $todo)
            <div class="card col-4 float-left p-3 m-3" style="width: 18rem;">
                @if($todo->fine != null)<img src="https://www.changetheworldmarketing.com/wp-content/uploads/2013/06/internet-marketing-get-your-work-done-1.png" class="card-img-top" alt="...">@elseif($todo->fine == null)<img src="https://scontent-fco1-1.xx.fbcdn.net/v/t1.6435-9/176364823_3931440176902775_2035125155852663098_n.png?_nc_cat=105&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=qxy2BrTRtW0AX8SsVLU&_nc_ht=scontent-fco1-1.xx&oh=7eec4215eeac4ae878adb7fbbe7c6d8e&oe=60C37C5C" class="card-img-top" alt="...">@endif
                <div class="card-body">
                    <h5 class="card-title">{{$todo->titolo}}</h5>
                    <p class="card-text">{{$todo->descrizione}}</p>
                    <a href="#" class="btn btn-primary" @if($todo->prio == 'bassa')style="background-color: green" @elseif($todo->prio == 'media')style="background-color: orange"  @elseif($todo->prio == 'alta')style="background-color: red"  @endif>Priorità {{$todo->prio}}</a>
                    <div class="col-12 pt-3 pl-0">
                        <a href="/todo/{{$todo->id}}/edit" class="btn btn-primary">Modifica il to do</a>
                    </div>
                </div>
            </div>


        @endforeach
    </div>
@endsection
