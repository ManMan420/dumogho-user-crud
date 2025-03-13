<!DOCTYPE html>
<html>
    <head>
        <title>DUMOGHO USER CRUD</title>
    </head>

    <br>
        <h1>HERE BE CREATE FORM</h1>
        </br>
        <form method="post" action="{{route('users.store')}}">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
            <br>
            <br>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            <br>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <br>
            <br>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
