<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todos app</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 24px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

@if(Session::has('success'))
    <div>
        {{Session::get('success')}}
    </div>
@endif

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">

            <form action="create" method="post">
                {{csrf_field()}}
                <input type="text" name="todo" placeholder="Create new todo">
                <hr>
            </form>
            @foreach($todos as $todo)
                {{$todo->todo}}
                <a href="{{route('todo.delete', $todo->id)}}"><button>x</button></a>
                <a href="{{route('todo.update', $todo->id)}}"><button>Update</button></a>
                @if(!$todo->completed)
                    <a href="{{route('todo.completed', $todo->id)}}"><button>Mark as completed</button></a>
                @else
                    <span>Completed!</span>
                @endif
                <hr>
            @endforeach

        </div>

    </div>
</div>
</body>
</html>