<html>
    <head>
        
        
        <link rel="stylesheet" href="cssstylesheet.css">


        <meta charset="UTF-8">
        <title>Your Tim Hortons Order!</title><!--my title-->
    </head>
    <body>
        <h1>Thanks for your order. Here it is: </h1>
        <form>
            
          <!--  <img src="http://images.canadianfreestuff.com/wp-content/uploads/2013/07/tim-hortons-takeout-cup.jpg" width="50px" height="50px" alt="Tim Hortons Coffee Cup"> -->
            
            
        </form>
        
     <!--get data from the html file-->
        <?php
        // put your code here
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $coffee=$_POST["txtcoffee"];
        $cream=$_POST["txtcream"];
        $sugar=$_POST["txtsugar"];
        $thissize=$_POST["size"];
       }
        
        if($thissize === "small") { 
            $cost=(1.25*$coffee);
            echo 'Cost: $1.25 per small coffee <br>';
            echo ('Your total cost is $' .$cost.'<br>');
            echo '<img src= "http://images.canadianfreestuff.com/wp-content/uploads/2013/07/tim-hortons-takeout-cup.jpg" width="50px" height="50px" alt="Tim Hortons Coffee Cup"/>';
            echo '<br>';
            echo '<br>';
          
        } elseif ($thissize === "medium") {
            $cost=(1.75*$coffee);
            echo 'Cost: $1.75 per medium coffee <br>';
            echo 'Your total cost is $'.$cost.'<br>';
             echo '<img src= "http://images.canadianfreestuff.com/wp-content/uploads/2013/07/tim-hortons-takeout-cup.jpg" width="150px" height="150px"  alt="Tim Hortons Coffee Cup"/>';
             echo '<br>';
             echo '<br>';
          }  elseif ($thissize === "large") {
         $cost = (2.25 * $coffee);
         echo 'Cost: $2.25 per large coffee <br>';
         echo 'Your total cost is $' .$cost. '<br>';
         echo '<img src= "http://images.canadianfreestuff.com/wp-content/uploads/2013/07/tim-hortons-takeout-cup.jpg" width="200px" height="200px"  alt="Tim Hortons Coffee Cup"/>';
         echo '<br>';
         echo '<br>';
         } else {
          $cost=(2.75*$coffee);
            echo 'Cost: $2.75 per extra large coffee <br>';
            echo 'Your total cost is $'.$cost. '<br>';
           echo '<img src= "http://images.canadianfreestuff.com/wp-content/uploads/2013/07/tim-hortons-takeout-cup.jpg" width="300px" height="300px"  alt="Tim Hortons Coffee Cup" />';
           echo '<br>';
           echo '<br>';
           
         }
     
   
     //for($x=0; $x<cream; $x++){
         if ($cream == 1){
          echo 'You have ordered ' .$cream. ' cream <br>';  
           echo '<img src= "http://www.dairyland.ca/Content/images/product_thumbs/details/cream_18.jpg"  width="50px" height="50px" alt="Cream"/>';
          echo '<br>';
          echo '<br>';
         } else {
         echo 'You have ordered ' .$cream. ' creams <br>';
         echo '<img src= "http://www.dairyland.ca/Content/images/product_thumbs/details/cream_18.jpg"  width="50px" height="50px" alt="Cream"/>';
          echo '<br>';
          echo '<br>';
         }
         
     //}
     
       //for($sugar=0; $sugar<txtsugar; $sugar++){
         if ($sugar==1){
         echo 'You have ordered ' .$sugar. ' sugar <br>'; 
          echo '<img src= "http://running-advice.com/blog/wp-content/uploads/2015/05/Sugar-008.jpg"  width="50px" height="50px" alt="Cream"/>';
          echo '<br>';
          echo '<br>';
         
         }
         else {
         echo 'You have ordered ' .$sugar. ' sugars <br>';    
         echo '<img src= "http://running-advice.com/blog/wp-content/uploads/2015/05/Sugar-008.jpg"  width="50px" height="50px" alt="Sugar" />';
          echo '<br>';
          echo '<br>';
         }
         
     //}
    
     

     
     
        
        ?>
        
    
        
        
            
 </body>

</html>
