<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>form</title>
</head>
<body>
    <div class="container">
        <a href="{{route('create-user')}}">
        <button class="btn btn-primary d-inline-block m-2 float-right">Add</button>
        </a>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
              <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->address}}</td>
                <td>
                    <a href="{{route('user-edit',['id' => $user->id])}}"><button class="btn btn-primary">Edit</button></a>
                    <a href="{{route('user-delete',['id' => $user->id])}}"><button class="btn btn-danger">Delete</button></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>