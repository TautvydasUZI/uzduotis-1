<h1>Client Edit</h1>


<form method="POST" action="{{route('client.update', [$client])}}">

    <!-- ID pildyti nereikia -->
    <!-- name, surname, description, phone -->
        

        Name: <input type="text" name="client_name" value="{{$client->name}}" /> <br/>
        Surname: <input type="text" name="client_surname" value="{{$client->surname}}" /> <br/>
        Username: <input type="text" name="client_username" value="{{$client->username}}"/> <br/>
        Company: <input type="text" name="client_company_id" value="{{$client->company_id}}"/> <br/>
        Image: <input type="text" name="client_image" value="{{$client->image}}"/> <br/>
    
        @csrf
    
        <button type="submit">Edit</button>
    
    </form>