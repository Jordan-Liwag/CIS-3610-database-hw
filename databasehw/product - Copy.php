<html>
    
    
<?php
    include 'php/db_connection.php';
    $conn = OpenCon();
    
    $sql = "SELECT * FROM PRODUCT";
    $result = $conn->query($sql);
    
?>
    
    
    
    
    
    
<head>
    
    <title>
    Final Project
    </title>
    
    
     <link rel="stylesheet" href="css/style.css">

    
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
    
    </head>



<body>
    
   <div class="container">
    
        <div class="header">
        <center><img src="img/logogpu.png" width="10%"></center>
        </div>
        
    <div class="menu">
        
       <ul>
  <li><a  href="index.html">Home</a></li>
  <li><a class="active" href="product.php">Product</a></li>
  <li><a href="contact.html">Contact</a></li>
  <li><a href="about.html">About</a></li>
  <li><a href="cart.php">Cart</a></li>
</ul>
        
        
        <h2>Products</h2>
<div class="main">

    <form action="cart.php" method="post">    
            
                
                    
                    <?php
                    
                    $i = 1;
                
                    if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                                
                              
                            echo "<div class='shoe'>";
                              
                            echo "<img src='". $row["PRODUCT_IMG"]."'width=100%>";
                              
                            echo "<br>";
                                
                            echo "<center>";
                              
                            echo "<h6>".$row["PRODUCT_DESC"]."</h6>";
                              
                            echo "<h9>$".$row["PRODUCT_PRICE"]."</h9>";
                              
                            echo "<br>
                        
                        <select name='quantity_".$i."'>
                            <option value='0'>0</option>
                            <option value='1'>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                            <option value='4'>4</option>
                        </select>
                        
                        </center>
                        
                        </div>";
                                
                   
                          $i = 1 + $i;      
                              
                          }
                        } else {
                          echo "0 results";
                        }
                        $conn->close();
                    ?>
                    
                    
                
            
                
                <div class="sub_btn">
                
                    <center>
                        <input type="submit" value="Go to Cart">
                    </center>
                </div>
                
                </form>
                
            </div>
    </div>        
        
    <div class="footerproduct">
         Graphic Card Business Copyright 2020
        <br>
    
        <a href="index.html"> Home</a>
         <a href="product.php"> Product</a>
         <a href="contact.html"> Contact</a>
         <a href="about.html"> About</a>
        <a href="cart.php"> Cart</a>
        </div> 
    
    
    
    
    
    </body>








































</html>