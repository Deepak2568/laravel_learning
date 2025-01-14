<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sample Form</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    <a href="{{ url('index') }}">Click here to go back</a>
    @endif
    @if(session('message'))
    <div class="alert alert-danger">
        {{ session('message') }}
    </div>
    <a href="{{ url('index') }}">Click here to go back</a>
    @endif
    @unless(session('success') || session('message'))
        <form action="{{url("create")}}" method="POST">
            @csrf
            <table class="table table-bordered" style="width:100%;">
                <tr>
                    <td>
                        <label for="">Name</label>
                    </td>
                    <td>
                        <input type="text" name="stud_name" id="stud_name" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Age</label>
                    </td>
                    <td>
                        <input type="text" name="stud_age" id="stud_age" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Phone</label>
                    </td>
                    <td>
                        <input type="text" name="phone" id="phone" value="">
                    </td>
                </tr>
            </table>
            <div>
                <input type="submit" value="Submit">
            </div>
        </form>
    @endunless
    @if($data)
    <table class="tale table-bordered">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Phone Number</th>
            <th colspan="2">Action</th>
        </tr>
        @foreach ($data as $stud)
        <tr>
            <td>{{$stud->stud_name}}</td>
            <td>{{$stud->stud_age}}</td>
            <td>{{$stud->phone}}</td>
            <td><a href="{{url("edit/".$stud->id)}}">Edit</a></td>
            <td><a href="{{url("delete/".$stud->id)}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
    @endisset
</body>
</html>
