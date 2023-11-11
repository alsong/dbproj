<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Data Table</title>
</head>

<body>
    @include('nav-bar')
    <div class="container mt-5">
    <table id="myTable">
        <thead>
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Daily Rental</th>
                <th>Cost</th>
                <th>Status</th>
                <th>Actors</th>
                <th>Director</th>
                <th>Release Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($videos as $video)
                <tr>
                    <td><a href="/videos/{{$video->video_number}}">{{$video->title}}</a></td>
                    <td>{{$video->category}}</td>
                    <td>{{$video->daily_rental}}</td>
                    <td>{{$video->cost}}</td>
                    <td>{{$video->status}}</td>
                    <td>{{$video->actors}}</td>
                    <td>{{$video->director}}</td>
                    <td>{{$video->release_date}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>
</body>