<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is an about page </h1>
<!--     <?php
        echo print_r($users);
        foreach($users as $user){
            echo $user->name;
            echo "<br>";
            echo $user->email;
        }
     ?> -->
     @foreach($users as $user)
        Name: {{$user->name}} <br>
        Email: {{$user->email}}
     @endforeach
    <h2>Our company name is {{$company}} And address is {{$address}}</h2>
</body>
</html>