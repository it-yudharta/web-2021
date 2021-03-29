<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <title>Rumah</title>
</head>
<body>
    <h3 style="color: blue;text-align: center;">NIM: 200769040027</h3>
    <h1 style="text-align: center">NAMA: Cahya Bagus Sanjaya</h1>

    <form method="POST" action="/home" style="margin-left:50px">
        @csrf
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value="John"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" value="Doe"><br><br>
        <input type="submit" value="Submit">
    </form> 
</body>
</html>
