<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>
        <?php
        $code = rand(10000,99999);
        echo $code;
        ?>
            <br>
            <form method="post" action="attendsomething.php">
                <input type="number" name="attCode" > <br><br>
                <input type="button" value="Check">
            
            
    </body>
</html>
