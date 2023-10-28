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
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-6 ">
            <div class="bg-success p-3 mb-2 text-center text-white rounded">
                <h2>All Applicant</h2>
            </div>

{{--            <a href="{{route('create')}}" class="btn btn-primary m-2">Add New Record</a>--}}
            <table class="table table-bordered table-striped  table-dark  table-active">
                <thead>
                <tr>
                    <td>Name</td>
                    <td>Age</td>
                    <td >Village</td>
                    <td colspan="3" class="text-center">action</td>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->age}}</td>
                        <td>{{$item->village}}</td>


                        <td><a href="{{route('edit',['id'=>$item])}}" class="btn btn-warning">edit</a></td>

                        <td><a href="{{route('delete',['Farmer_Details'=>$item->id])}}" class="btn btn-danger">delete</a></td>
{{--                        <td><a href="{{route('duplicate',['HR_Project'=>$item->id])}}" class="btn btn-success">Duplicate</a></td>--}}

                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

    </div>
</div>

</body>
</html>
