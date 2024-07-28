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
    <form action="{{url("update/".$editdata[0]->id)}}" method="POST">
        @csrf
        <table class="table table-bordered" style="width:100%;">
            <tr>
                <td>
                    <label for="">Name</label>
                </td>
                <td>
                    <input type="text" name="stud_name" id="stud_name" value="{{$editdata[0]->stud_name}}">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Age</label>
                </td>
                <td>
                    <input type="text" name="stud_age" id="stud_age" value="{{$editdata[0]->stud_age}}">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Phone</label>
                </td>
                <td>
                    <input type="text" name="phone" id="phone" value="{{$editdata[0]->phone}}">
                </td>
            </tr>
        </table>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>
