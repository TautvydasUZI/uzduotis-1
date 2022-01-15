<h1>Client Create</h1>

<form method="POST" action="{{route('client.store')}}">

        Name: <input type="text" name="client_name" /> <br/>
        Surname: <input type="text" name="client_surname" /> <br/>
        Username: <input type="text" name="client_username" /> <br/>
        Company: <input type="text" name="client_company_id" /> <br/>
        Image: <input type="text" name="client_image" /> <br/>
    
        @csrf
    
        <button type="submit">Add</button>
    
    </form>