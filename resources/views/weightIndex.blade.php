<!DOCTYPE html>
<html>
    <head>
        <title>
            student weight
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <style>
            table, th, td {
            border: 1px solid black;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Name</th>
                <th>Weight</th>
            </tr>
            @foreach ($weights as $w )
            <tr>
                <td>{{$w->name}}</td>
                <td>{{$w->weight}}</td>
            </tr>
             @endforeach
        </table>
    </body>
</html>
