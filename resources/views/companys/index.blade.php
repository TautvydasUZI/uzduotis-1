<h1>Companys Index</h1>

<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Type</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>

    @foreach ($companys as $company)
    <tr>
        <td>{{$company->id}}</td>
        <td>{{$company->name}}</td>
        <td>{{$company->type}}</td>
        <td>{{$company->description}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('company.edit', [$company])}}">Edit</a>
            <a class="btn btn-secondary" href="{{route('company.show', [$company])}}">Show</a>
            <form method="POST" action="{{route('company.destroy', [$company])}}">
                @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>
@endforeach

</table>

