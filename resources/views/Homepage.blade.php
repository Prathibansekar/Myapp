<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <style>
        #style {
            background-color:darkslategray;
        }
    </style>
</head>

<body>
    <center>
        <form method="POST" action="/send" id="style">

            <label>USERNAME <input type="text" name="username" required></label>
            <br>
            <br>
            <label>PASSWORD <input type="password" name="password" required></label>
            <br>
            <br>
            <label>D-O-B <input type="date" name="dob" required></label>
            <br>
            <br>
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <label>PHONE NO <input type="number" name="number" required></label><br>
            <br>


            <br>
            <input type="submit" value="submit" style="background-color:brown">


        </form>
</body>
</center>

</html>
