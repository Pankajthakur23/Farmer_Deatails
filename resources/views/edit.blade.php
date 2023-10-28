<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="bg-dark text-white text-center p-3">
                    <h2>Farmer Form </h2>
                </div>
                <a href="{{route('Index')}}" class="btn btn-info">back</a>
                <form action="{{route('update', ['Farmer_Details'=> $data->id])}}" method="post">
@method('put')
                    @csrf

                    <label for="">Enter name</label>
                    <input type="text" name="name" value="{{$data->name}}" placeholder="enter name" class="form-control">
                    @error('name')
                    <span style="color:red;">{{$message}}</span>
                    @enderror
                    <br>

                    <label for="">Enter age</label>
                    <input type="number" name="age"value="{{$data->age}}" placeholder="enter  age" class="form-control">
                    @error('age')
                    <span style="color:red;">{{$message}}</span>
                    @enderror
                    <br>

                    <label for="">Enter village</label>
                    <input type="text" name="village" value="{{$data->village}}" placeholder="enter village" class="form-control">
                    @error('village')
                    <span style="color:red;">{{$message}}</span>
                    @enderror
                    <br>
                    <input type="submit" class="btn btn-warning w-100" value="update">


                </form>
            </div>
</body>
</html>
