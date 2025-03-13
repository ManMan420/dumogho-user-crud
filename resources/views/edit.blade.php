<!DOCTYPE html>
<html>
    <head>
        <title>DUMOGHO USER CRUD</title>
    </head>

    <body>
        <h1>HERE BE EDIT FORM</h1>

        <form method="post" action="{{route('users.store')}}">
            @csrf
            <label for="name">Name:</label>
            <input value="{{old('name')}}" type="text" id="name" name="name">
            <br>
            <br>
            <label for="email">Email:</label>
            <input value="" type="text" id="email" name="email">
            <br>
            <br>
            <label for="password">Password:</label>
            <input value="" type="text" id="password" name="password">
            <br>
            <br>
            <button type="submit">Submit</button>
            <button type="button">
                <a href="{{route('users.destroy')}}">DELETE</a>
            </button>
        </form>
    </body>
</html>