<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <title>Document</title>
</head>
<body>
<form action="{{route('index')}}" method="post">
              {{csrf_field()}}
Username:<input type ="text" name="Username"><br/>
Password:<input type ="password" name="Password"><br/>
MatricNo:<input type ="text" name="MatricNo"><br/>
<input type ="submit" value ="Login">
</form>
</body>
</html>