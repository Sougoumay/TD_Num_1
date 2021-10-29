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
            @if($errors->any())
                <div class="alert alertr-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="row g-3" action="{{route('laravelProjectEdited',$users->id)}}" method="post">
                @csrf
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Last_name</label>
                    <input type="text" name="last_name" value="{{$users->first_name}}" class="form-control">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">First_name</label>
                    <input type="text" name="first_name" value="{{$users->last_name}}" class="form-control">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Profession</label>
                    <input type="text" name="profession" value="{{$users->profession}}" class="form-control">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Phone_Number</label>
                    <input type="number" name="PhoneNumber" value="{{$users->PhoneNumber}}" class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" name="email" value="{{$users->email}}" class="form-control">
                </div>
                <div>
                    <label for="inputZip" class="form-label">Status</label>
                    <input type="text" name="status" value="{{$users->status}}" class="form-control">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
