<h1>Company Edit</h1>


<form method="POST" action="{{route('company.update', [$company])}}">

    <!-- ID pildyti nereikia -->
    <!-- name, surname, description, phone -->
        

        Name: <input type="text" name="name" value="{{$company->name}}" /> <br/>
        Type: <input type="text" name="type" value="{{$company->type}}" /> <br/>
        Description: <input type="text" name="description" value="{{$company->description}}"/> <br/>
       
    
        @csrf
    
        <button type="submit">Edit</button>
    
    </form>