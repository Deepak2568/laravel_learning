<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Sample Registration Form')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <h1>{{$name}}</h1>
    <h2>{{$names}}</h2>
    @if (@session('message'))
        <div class="alert alert-success">
            <h2>{{session('message')}}</h2>
        </div>
    @endif
    <form action="{{url('user_reg')}}" method="POST">
        @csrf
        <input type="text" name="username" placeholder="username" value={{old('username')}}>
        <input type="text" name="email" placeholder="email" value={{old('email')}}>
        <input type="text" name="mobno" placeholder="mobno" value={{old('mobno')}}>
        <input type="submit" value="Send">
    </form>
</body>
</html>
