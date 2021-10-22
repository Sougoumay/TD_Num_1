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
            <form class="row g-3" action="/contenu" method="post">
                @csrf
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Last_name</label>
                    <input type="text" name="nom" class="form-control">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">First_name</label>
                    <input type="text" name="prenom" class="form-control">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Profession</label>
                    <input type="text" name="metier" class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="inputCity" class="form-label">Phone_Number</label>
                    <input type="text" name="numero" class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" name="mel" class="form-control">
                </div>
                <div>
                    <label for="inputZip" class="form-label">Status</label>
                    <input type="text" name="etat" class="form-control">
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
