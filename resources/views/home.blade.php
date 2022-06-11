<h2>This is home page</h2>

<h3>
    @if(session()->has('user'))
        <div>Hello your name is {{session("user")}}</div>
        <a href="/logout">Logout</a>
    @else 
        <div>There is no user yet</div>
        <a href="/login">Login</a>
        <a href="/register">Register</a>
    @endif
</h3>

<ul>
    <li><a href="home">Home</a></li>
    <li><a href="list">List Of Users</a></li>
    <li><a href="login">Login</a></li>
    <li><a href="register">Register</a></li>
    <li><a href="upload">Upload</a></li>
</ul>


