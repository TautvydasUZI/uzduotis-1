<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Clients Show</title>
</head>
<body>
    
    <div class="container py-3">
       
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
              <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                <span class="fs-4">Logo</span>
              </a>
        
              <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 text-dark text-decoration-none" href="/">Home</a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="{{route('client.index')}}">Clients</a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="{{route('company.index')}}">Companys</a>
              </nav>
            </div>
        
            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
              <h1 class="display-4 fw-normal">Clients Show</h1>
              <p class="fs-5 text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est, aut.</p>
            </div>
          </header>

          <table class="table table-striped">
            <tr>
                <th>Id : {{$client->id}}</th>
                <th>Name : {{$client->name}}</th>
                <th>Surname : {{$client->surname}}</th>
                <th>Username : {{$client->username}}</th>
                <th>Company : {{$client->company_id}}</th>
                <th>Image : {{$client->image_url}}</th>
            </tr>
        </table>
        <form method="post" action="{{route('client.destroy', [$client])}}">
            @csrf
            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
        </form>
        
        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2022 Tautvydas Uziela</p>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="/">Home</a></li>
              <li class="list-inline-item"><a href="{{route('client.index')}}">Clients</a></li>
              <li class="list-inline-item"><a href="{{route('company.index')}}">Companys</a></li>
            </ul>
          </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>