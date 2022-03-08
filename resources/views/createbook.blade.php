<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <h1>Create Book</h1>
    <form action="{{route('storebook')}}" method="post">
        @csrf
        <label for="">Book Title</label>
        <input type="text" name="booktitle">
        @error('booktitle')
            <div>{{$message}}</div>
        @enderror
        <br>
        <label for="">Author</label>
        <input type="text" name="author">
        <br>
        <label for="">Release Date</label>
        <input type="date" name="releasedate">
        <br>
        <label for="">Total Page</label>
        <input type="text" name="totalpage">
        <br>
        <button type="submit" name="">submit</button>
    </form>
</body>
</html>