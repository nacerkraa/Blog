<h2>This is home page</h2>

<h3>
    @if(session()->has('user'))
        <div>Hello {{session("user")}}</div>
        <a href="/lougout">Lougout</a>
    @else 
        <div>There is no user yet</div>

        <a href="/register">Register</a>
        <a href="/login">Login</a>
    @endif
</h3>


