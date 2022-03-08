<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
    <h1>SHOW CUSTOMER</h1>
    <form action="">
        <div class="col-9">
            <input value="{{$search}}" type="text" class="form-control" name="search" placeholder="Search....">
        </div>
        <button class="btn btn-primary">Search</button>
    </form>
    <a href="{{url('/')}}">
        <button class="btn btn-primary">Add</button>
    </a>
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($customer as $item)
            <tr>
                <th scope="row">1</th>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->password}}</td>
                <td>
                    <a href="{{route('customer.edit', ['id' => $item->id])}}">
                        <button class="btn btn-primary">Edit</button>
                    </a>
                    <a href="{{url('/delete')}}/{{$item->id}}">
                        <button class="btn btn-danger">Delete</button>
                    </a>
                </td>

              </tr>
            @endforeach
          
          
        </tbody>
      </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>
