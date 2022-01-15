<h1>Client index</h1>

<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Username</th>
        <th>Company</th>
        <th>Image</th>
        <th>Actions</th>
    </tr>

    @foreach ($clients as $client)
    <tr>
        <td>{{$client->id}}</td>
        <td>{{$client->name}}</td>
        <td>{{$client->surname}}</td>
        <td>{{$client->username}}</td>
        <td>{{$client->company_id}}</td>
        <td>{{$client->image_url}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('client.edit', [$client])}}">Edit</a>
            <a class="btn btn-secondary" href="{{route('client.show', [$client])}}">Show</a>
            <form method="POST" action="{{route('client.destroy', [$client])}}">
                @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>
@endforeach

</table>

