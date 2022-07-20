<h1>User Login</h1>

<form  action="users" method="POST">
    @csrf
    <input type="text" name="username" placeholder="enter user name" /> <br>
    <span style="color: red">@error('username'){{$message}}@enderror</span><br><br>
    <input type="password" name="password" placeholder="enter user password" /> <br>
    <span style="color: red">@error('password'){{$message}}@enderror</span>
    <button type="submit">Login </button>


    <h1>this is user login page</h1>
    
</form>




