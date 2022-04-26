
<h2>Register User</h2>


<form action="userRegister" method="post">
    @csrf

    @error('email')
        <span style="color: red">{{$message}}</span><br><br>
    @enderror
    <input type="text" name="email" placeholder="Enter Your email"><br><br>

    @error('firstname')
        <span style="color: red">{{$message}}</span><br><br>
    @enderror
    <input type="text" name="firstname" placeholder="Enter Your firstname"><br><br>

    @error('lastname')
       <span style="color: red">{{$message}}</span><br><br>
    @enderror
    <input type="text" name="lastname" placeholder="Enter Your lastname"><br><br>

    @error('password')
        <span style="color: red">{{$message}}</span><br><br>
    @enderror
    <input type="password" name="password" placeholder="Enter Your password"><br><br>
    <input type="number" name="age" placeholder="Enter Your age"><br><br>
    <button type="submit">Register</button>
</form>
