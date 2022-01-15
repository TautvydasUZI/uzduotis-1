<h1>Companys Show</h1>

<p>Id : {{$company->id}}</p>
<p>Name : {{$company->name}}</p>
<p>Surname : {{$company->type}}</p>
<p>Username : {{$company->description}}</p>



<form method="post" action="{{route('company.destroy', [$company])}}">
    @csrf
    <button type="submit">Delete</button>
</form>