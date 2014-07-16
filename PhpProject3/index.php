<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="index.php" method = "POST">
            First Name : <input type ="text" name ="firstName">
            <br/>
            Middle Name : <input type ="text" name ="middleName">
            <br/>
            Last Name : <input type ="text" name ="lastName">
            <br/>
            <input type="submit" value ="Show Below" name ="showButton">
            <br/>
        </form>
        
        <?php
            require_once("Person.php");
            if (isset($_POST["firstName"]) && isset($_POST["middleName"]) && isset($_POST["lastName"]))
            {
                $aPerson = new Person();
                $aPerson->first_name = $_POST["firstName"];
                $aPerson->middle_name = $_POST["middleName"];
                $aPerson->last_name = $_POST["lastName"];
                
                echo "Full name:", $aPerson->get_full_name(), "<br/>", 
                    "Reverse name: ", $aPerson->get_reverse_name();
            }
        ?>

    </body>
</html>
