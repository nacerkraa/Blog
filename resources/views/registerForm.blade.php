
<h2>Register User</h2>
<form action="userRegister" method="POST">
    
    @csrf
    <input type="email" name="email" placeholder="Enter your email"><br><br>
    
        @error('firstname')
        <span style="color: red">{{$message}}</span><br><br>
        @enderror
    
    
    <input type="text" name="firstname" placeholder="Enter your first name"><br><br>

    @error('lastname')
        <span style="color: red">{{$message}}</span><br><br>
        @enderror
    
    
    <input type="text" name="lastname" placeholder="Enter your last name"><br><br>

    
        @error('password')
            <span style="color: red">{{$message}}</span><br><br>
        @enderror
    
    <input type="password" name="password" placeholder="Enter your password"><br><br>

    <input type="number" name="age"><br><br>

    
    <button type="submit">Login</button>
</form>