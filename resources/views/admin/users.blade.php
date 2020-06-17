@extends ('layouts.admin_app')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <style>
            .even{
                background-color: #ddd;
                color: black;
            }
            .odd{
                background-color: #aaa;
                color: black;
            }
            .title{
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
    </head>
    <body>
    
        <div class="ftco-cover-1" style="background-color: #576c73">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6">
                            <h2>Users</h2>
                            <table cellpadding="10">
                                <thead>
                                    <tr>
                                        <th class="title">Id</th>
                                        <th class="title">Name</th>
                                        <th class="title">E-mail</th>
                                        <th class="title">Authority</th>
                                        <th class="title">Created at</th>
                                        <th class="title">Updated at</th>
                                        <th class="title">Functions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $key => $user)
                                    <tr {{ $key %2 == 0 ?  "class=odd" :  "class=even" }}>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        @if($user->isAdmin == 1)   
                                            <td>Admin</td>
                                        @else
                                            <td>User</td>
                                        @endif
                                        <td>{{ $user->created_at }}</td>
                                        <td>{{ $user->updated_at }}</td>
                                        <td>
                                            <form action='/admin/deleteuser/{{ $user->id }}' method='DELETE'>
                                                <input type='submit' value='Delete' />
                                            </form>
                                            <form action='/admin/edituser/{{ $user->id }}' method='GET'>
                                                <input type='submit' value='Edit' />
                                            </form>
                                            <form action='/admin/authority/{{ $user->id }}' method='POST'>
                                            {!! Form::open(['class' => 'form-horizontal', 'route' => ['deleteuser', $user->id], 'method' => 'put']) !!}
                                                <input type='submit' value='Change auth' />
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>	
                            </table>
                            <form action="/admin/createuser" method='GET'>
                                <input type="submit" value="Add new user">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>
@endsection