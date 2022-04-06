<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    .containerOne {
        background-color: white;
        width: 500px;
        border: 1px solid black;
        padding: 10px;
        margin: auto;
      text-align: center;
      justify-content: center;
    }
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>First Form</title>
</head>
<body style="background-color:grey;">
<div class= "containerOne">
    <span><strong>Student Information Page</strong><br><br></span> 
    <br> Please Input 5 first names and last names below to continue: <br>
    <br>
    <form action = "/enter-grades" method = "GET">
        First Name: <input type = "text" name = "firstNameOne" />
        <br> <br>
        Last Name: <input type = "text" name = "lastNameOne" />
        <br /><br>
        First Name: <input type = "text" name = "firstNameTwo" />
        <br> <br>
        Last Name: <input type = "text" name = "lastNameTwo" />
        <br /><br>
        First Name: <input type = "text" name = "firstNameThree" />
        <br> <br>
        Last Name: <input type = "text" name = "lastNameThree" />
        <br /><br>
        First Name: <input type = "text" name = "firstNameFour" />
        <br> <br>
        Last Name: <input type = "text" name = "lastNameFour" />
        <br /><br>
        First Name: <input type = "text" name = "firstNameFive" />
        <br> <br>
        Last Name: <input type = "text" name = "lastNameFive" />
        <br /><br>

        <button type = "submit">Submit</button>
    </div>
</form>
</body>
</html>