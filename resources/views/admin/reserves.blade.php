@extends ('layouts.admin_app')

@section('content')
    <style>
        .even {
            background-color: #ddd;
            color: black;
        }
        .odd{
            background-color: #aaa;
            color: black;
        }
        .title {
            background-color: #6A6569;
            color: black;
        }
        .h2{
            margin-left: 10%;
            color: black;
        }
        table, th, td {
            border: 1px solid black;
        }
        td{
            align: center;
        }
    </style>
    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
        alert(msg);
        }
    </script>
    <title>{{ $title }}</title>
<div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1" style="background-color: #576c73">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <h2>Reserves</h2>
                    <table cellpadding="10">
                        <thead>
                            <tr>
                                <th class="title">Id</th>
                                <th class="title">Car ID</th>
                                <th class="title">Start date</th>
                                <th class="title">End date</th>
                                <th class="title">Created at</th>
                                <th class="title">Functions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reserves as $key => $reserve)
                                <tr {{ $key %2 == 0 ? "class=odd" : " class=even" }}>
                                    <td>{{ $reserve->id }}</td>
                                    <td>{{ $reserve->car_id }}</td>
                                    <td>{{ $reserve->start_date }}</td>
                                    <td>{{ $reserve->end_date }}</td>
                                    <td>{{ $reserve->created_at }}</td>
                                    <td>
                                    <form action="/admin/deletereserve/{{ $reserve->id }}" method="post">
                                        {!! Form::open(['class' => 'form-horizontal', 'route' => ['deletereserve', $reserve->id], 'method' => 'delete']) !!}
                                            <input type='submit' value='Delete' />
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection