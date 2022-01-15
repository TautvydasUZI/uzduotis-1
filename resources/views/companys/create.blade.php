<h1>Company Create</h1>

<form method="POST" action="{{route('company.store')}}">

        Name: <input type="text" name="name" /> <br/>
        Type: <input type="text" name="type" /> <br/>
        Description: <input type="text" name="description" /> <br/>
       
        @csrf
    
        <button type="submit">Add</button>
    
    </form>