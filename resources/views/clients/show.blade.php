<h1>Clients Show</h1>

<p>Id : {{$client->id}}</p>
<p>Name : {{$client->name}}</p>
<p>Surname : {{$client->surname}}</p>
<p>Username : {{$client->username}}</p>
<p>Company : {{$client->company_id}}</p>
<p>Image : {{$client->image_url}}</p>


<form method="post" action="{{route('client.destroy', [$client])}}">
    @csrf
    <button type="submit">Delete</button>
</form>