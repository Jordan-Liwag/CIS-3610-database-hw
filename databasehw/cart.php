<html>

    <head>
        <title>
            Card Cart
        </title>
        
        <link rel="stylesheet" href="css/style.css">
        <script src="js/functions.js"></script>
        
        <?php
        
            $quantity01 = $_POST['quantity_01'];
            $quantity02 = $_POST['quantity_02'];
            $quantity03 = $_POST['quantity_03'];
            $quantity04 = $_POST['quantity_04'];
        
            
                                
            $total_01 = ($quantity01 * 120) * 1.0925;
            $total_02 = ($quantity02 * 120) * 1.0925;
            $total_03 = ($quantity03 * 120) * 1.0925;
            $total_04 = ($quantity04 * 120) * 1.0925;
        
        
                                
        ?>
        
        
        
        
        
    </head>


    <body>
    
        <div class="container">
        
            <div class="header">
            
                <center><img src="img/logogpu.png" width="10%"></center>
            
            </div>
        
            <div class="menu">
        
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a class="active" href="product.php">Products</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="cart.php">Cart</a></li>
                </ul>
                
            </div>
            
            <div class="main_cart">
            
            <form action="cart.php" method="post">    
            
                <div class="product_cart">
                    
                    <img src="img/rtx3070product.png">
                    
                    <div class="description">
                    <table>
                    
                        <tr>
                            <td>RTX 3070</td>

                            <td>$499.00 x </td>
                        
                            <td>
                                
                            <select name="quantity_01" id="quantity_01" onchange="quantUpdate('120')">
                                
                            <?php 
                              
                                if($quantity01 == 0)
                                {
                                    
                                    echo "<option value='0' selected>0</option>";
                                    
                                }
                                else
                                {
                                    
                                    echo "<option value='0'>0</option>";
                                    
                                }
                                
                            
                            ?>
                            
                                
                            <?php 
                              
                                if($quantity01 == 1)
                                {
                                    
                                    echo "<option value='1' selected>1</option>";
                                    
                                }
                                else
                                {
                                    
                                    echo "<option value='1'>1</option>";
                                    
                                }
                                
                            
                            ?>
                            
                            <?php 
                              
                                if($quantity01 == 2)
                                {
                                    
                                    echo "<option value='2' selected>2</option>";
                                    
                                }
                                else
                                {
                                    
                                    echo "<option value='2'>2</option>";
                                    
                                }
                                
                            
                            ?>
                                
                            <?php 
                              
                                if($quantity01 == 3)
                                {
                                    
                                    echo "<option value='3' selected>3</option>";
                                    
                                }
                                else
                                {
                                    
                                    echo "<option value='3'>3</option>";
                                    
                                }
                                
                            
                            ?> 
                                
                            
                            <?php 
                              
                                if($quantity01 == 4)
                                {
                                    
                                    echo "<option value='4' selected>4</option>";
                                    
                                }
                                else
                                {
                                    
                                    echo "<option value='4'>4</option>";
                                    
                                }
                                
                            
                            ?>
                            
                                
                            
                                
                        
                               
                               
                                </select>
                        
                            </td>
                            
                            <td>
                            
                                <div id="total01">
                                
                                    <?php echo "$".$total_01; ?>
                                
                                </div>
                            
                            </td>
                            
                            
                        </tr>
                    
                    </table>
                    </div>
                    
                    
                </div>
                
                <div class="product_cart">
                    <img src="img/rtx3080product.png" >
                    
                    
                    <div class="description">
                    <table>
                    
                        <tr>
                            <td>RTX 3080</td>

                            <td>$699.00</td>
                        
                            <td>
                        
                                <select name="quantity_02">
                                    <option value="0" selected>0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                        
                            </td>
                        </tr>
                    
                    </table>
                    </div>  
                </div>
                
                <div class="product_cart">
                    <img src="img/rtx3090product.png" >
                    
                    <div class="description">
                    <table>
                    
                        <tr>
                            <td>RTX 3090</td>

                            <td>$1499.00</td>
                        
                            <td>
                        
                                <select name="quantity_03">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                        
                            </td>
                            
                            
                        </tr>
                    
                    </table>
                    </div> 
                </div>
                
                <div class="product_cart">
                    <img src="img/rtx2080ti.jpg" >
                    
                    <div class="description">
                    <table>
                    
                        <tr>
                            <td>RTX 2080ti</td>

                            <td>$1699.00</td>
                        
                            <td>
                        
                                <select name="quantity_04">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                        
                            </td>
                        </tr>
                    
                    </table>
                    </div>   
                </div>
                
               
                
                </form>
                
            </div>
            
            <div class="footer">
                    Copyright 2020
            </div>
            
    
        </div>
    
    
    
    </body>




</html>