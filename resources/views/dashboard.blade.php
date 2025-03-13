<!DOCTYPE html>
<html>
    <head>
        <title>DUMOGHO USER CRUD</title>
    </head>

    <body>
        <h1>HERE BE USERS</h1>
        <h3>GUESS THE PASSWORD</h3>
        <table style="text-align:center">
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                </tr>
            </thead>

            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td style="width:700px">{{ $user->password }}</td>
                        <td>
                            <button>
                                <a href="{{route('users.edit', parameters: $user->id)}}">Edit</a>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <button>
            <a href="{{route('users.create')}}">CREATE NEW USER</a>
        </button>
    </body>
</html>