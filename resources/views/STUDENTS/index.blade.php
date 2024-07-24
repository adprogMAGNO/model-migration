<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">

            </div>
        </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>Fullname</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>City</th>
                <th>Province</th>
                <th>Zip</th>
                <th>Birthdate</th>
            </tr>
        </thead>
    </table>
</body>
     @foreach ($students as $students)
     <tr>
        <td>{{ $students->fullname }}</td>
        <td>{{ $students->email }}</td>
        <td>{{ $students->phone }}</td>
        <td>{{ $students->address }}</td>
        <td>{{ $students->city }}</td>
        <td>{{ $students->province }}</td>
        <td>{{ $students->zip }}</td>
        <td>{{ $students->birthday }}</td>
     </tr>
     @endforeach
</html>