<!DOCTYPE html>
<html>

<head>
    <title> add student weight</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        button{
            background-color: blue;
            color: azure;
        }
        input{
            margin-bottom: 5px;
            margin-left: 20px;
        }
        body{
            text-align: center;
            margin-top: 30px;
        }
        form {
            display: inline-block;
        }
    </style>
</head>

<body>
    <form action="{{route('weight.store')}}" method="POST">
        @csrf
            <strong>Name   :</strong>
            <input name="name" placeholder="Name" type="text"><br>
            <strong>Weight:</strong>
            <input name="weight" placeholder="Weight" type="number"><br>
            <button type="submit">Submit</button>
    </form>
</body>

</html>
