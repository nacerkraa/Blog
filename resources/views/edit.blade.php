<h1>Edit Member</h1>

<form action="/update" method="POST">
    @csrf

    <input type="hidden" name="id"  value="{{$data['id']}}"><br><br>


    @error('username')
        <span style="color: red">{{$message}}</span><br><br>
    @enderror

    <input type="text" name="username" placeholder="Enter Your user name" value="{{$data['username']}}" autocomplete="off"><br><br>


    @error('firstname')
        <span style="color: red">{{$message}}</span><br><br>
    @enderror
    <input type="text" name="firstname" placeholder="Enter Your firstname" value="{{$data['firstname']}}" autocomplete="off"><br><br>

    @error('lastname')
       <span style="color: red">{{$message}}</span><br><br>
    @enderror
    <input type="text" name="lastname" placeholder="Enter Your lastname" value="{{$data['lastname']}}" autocomplete="off"><br><br>

    @error('email')
        <span style="color: red">{{$message}}</span><br><br>
    @enderror
    <input type="text" name="email" placeholder="Enter Your email" value="{{$data['email']}}" autocomplete="off"><br><br>

    @error('password')
        <span style="color: red">{{$message}}</span><br><br>
    @enderror
    <input type="password" name="password" placeholder="Enter Your password" value="{{$data['password']}}"><br><br>
    <input type="number" name="age" placeholder="Enter Your age" value="{{$data['age']}}" autocomplete="off"><br><br>
    <button type="submit">Register</button>
</form>