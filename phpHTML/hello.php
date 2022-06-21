<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            p{
                color: green;
            }
        </style>
    </head>
    <body>
        <?php
        $firstname = $_GET["f1"];
        $password =$_GET["p1"];
        
        echo "<p>first name is $firstname</p>";
        echo "<p>password is $password</p>";
        
        $num1 = $_POST["n1"];
        for ($i=1; $i<=10; $i++)
        {
            echo "$num1 * $i =".($i*$num1)."<br>";
        }
        
        ?>
    </body>
</html>
