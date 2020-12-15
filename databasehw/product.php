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
<div class="row">
  <div class="column">
    <img src="img/rtx3070product.png" alt="rtx3070" style="width:100%">
      <br> <center>RTX 3070</center>
     <br> <center> The GeForce RTX™ 3070 is powered by Ampere—NVIDIA’s 2nd gen RTX architecture. Built with enhanced Ray Tracing Cores and Tensor Cores, new streaming multiprocessors, and high-speed G6 memory, it gives you the power you need to rip through the most demanding games.</center>
      <br> <center> $499.00</center>
      
      <br>
      
      <center><select name="quantity_01">
            <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>  
        <option value="3">3</option>
      
      
      
      
      
          </select></center>
  </div>
  <div class="column">
    <img src="img/rtx3080product.png" alt="rtx3080" style="width:100%">
      <br> <center>RTX 3080</center>
       <br> <center> The GeForce RTX™ 3080 delivers the ultra performance that gamers crave, powered by Ampere—NVIDIA’s 2nd gen RTX architecture. It’s built with enhanced RT Cores and Tensor Cores, new streaming multiprocessors, and superfast G6X memory for an amazing gaming experience.</center>
      <br> <center> $699.00</center>
      <br>
      
      <center><select name="quantity_01">
            <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>  
        <option value="3">3</option>
      
      
      
      
      
          </select></center>
  </div>
  <div class="column">
    <img src="img/rtx3090product.png" alt="rtx3090" style="width:100%">
      <br> <center>RTX 3090</center>
       <br> <center> The GeForce RTX™ 3090 is a big ferocious GPU (BFGPU) with TITAN class performance. It’s powered by Ampere—NVIDIA’s 2nd gen RTX architecture—doubling down on ray tracing and AI performance with enhanced Ray Tracing (RT) Cores, Tensor Cores, and new streaming multiprocessors. Plus, it features a staggering 24 GB of G6X memory, all to deliver the ultimate gaming experience.</center>
      <br> <center> $1499.00</center>
       <br>
      
      <center><select name="quantity_01">
            <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>  
        <option value="3">3</option>
      
      
      
      
      
          </select></center>
  </div>
</div>
        
    <div class="column">
    <img src="img/rtx2080ti.jpg" alt="rtx2080Ti" style="width:100%">
      <br> <center>RTX 2080Ti</center>
       <br> <center> The NVIDIA® GeForce® RTX 2080 Ti graphics card is built for gaming realism and performance. Its powerful NVIDIA Turing™ GPU architecture, breakthrough technologies, and 11 GB of next-gen, ultra-fast GDDR6 memory make it an ultimate gaming GPU.</center>
      <br> <center> $1899.00</center>
         <br>
      
      <center><select name="quantity_01">
            <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>  
        <option value="3">3</option>
      
      
      
      
      
          </select></center>
  </div>
</div>
      <div class="column">
    <img src="img/rtxtitan.jpg" alt="rtxtitan" style="width:100%">
      <br> <center>RTX Titan</center>
       <br> <center> NVIDIA® TITAN RTX™ is designed for researchers, developers and creators. It’s powered by Turing™ architecture, bringing 130 Tensor TFLOPs of performance, 576 tensor cores, and 24 GB of ultra-fast GDDR6 memory to your PC.</center>
      <br> <center> $2499.00</center>
           <br>
      
      <center><select name="quantity_01">
            <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>  
        <option value="3">3</option>
      
      
      
      
      
          </select></center>
  </div>
</div>
        <div class="sub_btn">
                
                    <center>
                        <input type="submit" value="Go to Cart" class="search">
                    </center>
                </div>`
       
        </form>
       
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