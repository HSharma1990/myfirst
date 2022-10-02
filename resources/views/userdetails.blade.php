<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <title></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <h3 class="mt-4">View all image</h3>
    <hr>
    <table class="table table-striped p-3 border-dark" >
        <thead class="table-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">email</th>
            <th scope="col">Contact</th>
            <th scope="col">City</th>
            <th scope="col">Password</th>
            <th scope="col">Profile</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody >
        @foreach($userdetails as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->first_name}} {{$data->last_name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->tel}}</td>
                <td>{{$data->city_name}}</td>
                <td>{{$data->password}}</td>
                <td>
                    <img src="{{ url('http://myfirst.local/public/Image/'.$data->profile) }}"
                         style="height: 100px; width: 150px;">
                </td>
                <td>
                    <a href="{{route('edit', [$data->id])}}" class="btn btn-success mb-3 btn-xs" role="button">Edit</a>

                        {{--<a href="{{route('edit')}}/{{$data->id}}"> <button type="button" class="btn btn-success mb-3" >Edit</button></a><br>--}}
                    <a href=""> <button type="button" class="btn btn-danger" id="delete">Delete</button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
