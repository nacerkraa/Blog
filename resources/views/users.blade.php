<h1>This The list of Users</h1>
<div>Hello {{session("user")}}</div>
<span><a href="/register">Add user</a></span>
<table border="1">
    <tr>
        <td>User Name</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Email</td>
        <td>Age</td>
        <td>Password</td>
        <td>Operation</td>
    </tr>

    @foreach ($collection as $item)
    <tr>
        
        <td>{{$item['username']}}</td>
        <td>{{$item['firstname']}}</td>
        <td>{{$item['lastname']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['age']}}</td>
        <td>{{$item['password']}}</td>
        <td>
            <a href="delete/{{$item['id']}}">Delete</a>
            <a href="update/{{$item['id']}}">Edit</a>
        </td>

    </tr>
    @endforeach
</table>

<span>
    {{$collection -> links()}}
</span>

<style>
    .w-5{
        display: none;
    }
</style>
