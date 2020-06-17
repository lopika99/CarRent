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
    <title>{{ $title ?? '' }}</title>
<div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1" style="background-color: #576c73">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <h2>Pictures</h2>
                    <table cellpadding="10">
                        <thead>
                            <tr>
                                <th class="title">Id</th>
                                <th class="title">image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pictures as $key => $pic)
                                <tr {{ $key %2 == 0 ? "class=odd" : "class=even" }}>
                                    <td>{{ $pic->id }}</td>
                                    <td><img src="{{ asset('storage' . '/' .  $pic->image_path) }}" width="350" height="280"></td>
                                    <td>
                                        <form action="/admin/deletepic/{{ $pic->id }}" method="DELETE">
                                            <input type='submit' value='Delete' />
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! Form::open(['route' => ['storepic', $car_id], 'method' => 'post', 'files'=>'true']) !!}
                        @csrf

                        <input type="file" name="pic" id="pic"/>
                        <input type='submit' value='Add picture' />
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection