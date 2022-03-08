<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Book Title</th>
            <th>Author</th>
            <th>Release Date</th>
            <th>Total Pages</th>
        </tr>
        @foreach($books as $book)
            <tr>
                <td><a href="{{route('readbookbyid', $book -> $id)}}">{{$book->booktitle}}</a></td>
                <td>{{$book->author}}</td>
                <td>{{$book->releasedate}}</td>
                <td>{{$book->totalpage}}</td>
                <td><button>Update</button><button>Delete</button></td>
            </tr>
        @endforeach
        
    </table>
</body>
</html>