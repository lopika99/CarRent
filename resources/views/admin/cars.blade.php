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
                    <h2>Cars</h2>
                    <table cellpadding="10">
                        <thead>
                            <tr>
                                <th class="title">Id</th>
                                <th class="title">Brand</th>
                                <th class="title">Type</th>
                                <th class="title">Plate</th>
                                <th class="title">Doors</th>
                                <th class="title">Seats</th>
                                <th class="title">Lugage</th>
                                <th class="title">Gearbox</th>
                                <th class="title">Year</th>
                                <th class="title">Price/day</th>
                                <th class="title">Created at</th>
                                <th class="title">Functions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cars as $key => $car)
                                <tr {{ $key %2 == 0 ? "class=odd" : " class=even" }}>
                                    <td>{{ $car->id }}</td>
                                    <td>{{ $car->brand }}</td>
                                    <td>{{ $car->type }}</td>
                                    <td>{{ $car->plate }}</td>
                                    <td>{{ $car->doors }}</td>
                                    <td>{{ $car->seats }}</td>
                                    <td>{{ $car->lugage }}</td>
                                    <td>{{ $car->gearbox }}</td>
                                    <td>{{ $car->year }}</td>
                                    <td>{{ $car->day_price }}</td>
                                    <td>{{ $car->created_at }}</td>
                                    <td>
                                        <form action="/admin/deletecar/{{ $car->id }}" method="post">
                                        {!! Form::open(['class' => 'form-horizontal', 'route' => ['deletecar', $car->id], 'method' => 'delete']) !!}
                                            <input type='submit' value='Delete' />
                                        {{ Form::close() }}
                                        <form action="/admin/editcar/{{ $car->id }}" method="get">
                                            <input type='submit' value='Edit' />
                                        </form>
                                        <form action="/admin/pictures/{{ $car->id }}" method="get">
                                            <input type='submit' value='Pictures' />
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <form action="{{ route('createcar') }}" method="GET">
                        <input type='submit' value='Add car' />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection