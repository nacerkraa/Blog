<h1>This The list of Users</h1>

<table border="1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>password</td>
    </tr>

    @foreach ($collection as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['password']}}</td>
        
    </tr>
    @endforeach
</table>