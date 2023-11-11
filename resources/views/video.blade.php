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
    <h3>Video Name:{{$video->title}}</h3>
    <h3>Genre:{{$video->category}}</h3>
    <table id="myTable">
        <thead>
            <tr>
                <th>Rental No</th>
                <th>Member First Name</th>
                <th>Member Last Name</th>
                <th>Video Title</th>
                <th>Video Daily Rental</th>
                <th>Rental  Date</th>
                <th>Return  Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($video_details as $rental)
                <tr>
                    <td>{{$rental->rental_number}}</td>
                    <td>{{$rental->member->first_name}}</td>
                    <td>{{$rental->member->last_name}}</td>
                    <td>{{$rental->video->title}}</td>
                    <td>{{$rental->video->daily_rental}}</td>
                    <td>{{$rental->rental_date}}</td>
                    <td>{{$rental->return_date}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Total Earned: {{$total}}</h2>
</div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>
</body>