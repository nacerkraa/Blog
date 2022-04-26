
<h2>Register User</h2>


<form action="userRegister" method="post">
    @csrf
    <input type="text" name="email" placeholder="Enter Your email"><br><br>
    <input type="text" name="firstname" placeholder="Enter Your firstname"><br><br>
    <input type="text" name="lastname" placeholder="Enter Your lastname"><br><br>
    <input type="password" name="password" placeholder="Enter Your password"><br><br>
    <input type="number" name="age" placeholder="Enter Your age"><br><br>
    <button type="submit">Register</button>
</form>
