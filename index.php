<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        

           <link rel="stylesheet" href="cssstylesheet.css">


        <meta charset="UTF-8">
        <title>Welcome to Tim Hortons!</title><!--my title-->
    </head>
    <body>
        <?php
        // put your code here
        ?>


        <h1> Welcome to Tim Horton's!<!--heading 1--><hr></hr></h1>

        <form action="order.php" method="post">
            
            <p>Give us some numbers!</p><br><br>
            <p>
            Number of coffees:
            <input type="number" name="txtcoffee" min="1" max="99">
            <br><br>
            Number of creams:
            <input type="number" name="txtcream" min="0" max="99"> 
            <br><br> 
            Number of sugars:
            <input type="number" name="txtsugar" min="0" max="99">
            <br><br>
            Size:<br><br>
            <input type="radio" name="size" value="small" checked> Small
            <input type="radio" name="size" value="medium"> Medium
            <input type="radio" name="size" value="large"> Large
            <input type="radio" name="size" value="extralarge" > Extra Large
            </p>
            <br><br>
             <div id="buttons">
            <input type="submit" value="Order Coffee"><br><br>
              </div>


        </form>




    </body>

</html>
