<h1>This The list of Users</h1>
<div>Hello {{session("user")}}</div>
<table border="1">
    <tr>
        <td>email</td>
        <td>first name</td>
        <td>last name</td>
        <td>age</td>
        <td>password</td>
    </tr>

    @foreach ($collection as $item)
    <tr>
        <td>{{$item['email']}}</td>
        <td>{{$item['firstname']}}</td>
        <td>{{$item['lastname']}}</td>
        <td>{{$item['age']}}</td>
        <td>{{$item['password']}}</td>

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
