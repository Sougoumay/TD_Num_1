<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10 mt-5">
                <table class="table table-sm">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Last_name</th>
                        <th scope="col">First_name</th>
                        <th scope="col">Profession</th>
                        <th scope="col">PhoneNumber</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td >{{$user->last_name}}</td>
                            <td >{{$user->first_name}}</td>
                            <td>{{$user->profession}}</td>
                            <td >{{$user->PhoneNumber}}</td>
                            <td >{{$user->email}}</td>
                            <td >{{$user->status}}</td>
                            <td ><a href="{{route('laravelProjectShow',$user->id)}}" class="btn btn-primary">Show</a></td><td ><a href="{{route('laravelProjectEdit',$user->id)}}" class="btn btn-warning">Edit</a></td><td ><a href="{{route('laravelProjectDelete',$user->id)}}" onclick="return confirm('Are you sure to delete this data?')" class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
