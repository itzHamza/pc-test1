<?php include "navbar.php" ?>
    <body>
      <table border="1px solid black " style="width: 100%;"><tr><td>
      <ul><li>
    <div class="hd">
    
     <div> <?php echo $title ?> </div>
      <div class="mobnav"><button style=" width: 45px; height: 45px; background: transparent; border: 0; color: white; "><ion-icon name="menu-outline" role="img" class="md hydrated" aria-label="menu outline" style=" font-size: 40px;"></ion-icon></button></div>
      
      
      
    </div>


      
                 <!--                                                                                  -->
                 
<table   class="sal" border="1px solid black"><tr><td !style="height:494.88px;"><div class="area">
<div class="ttl">Most popular</div>
<div class="hot-sale">
<div style="margin-top: 28px;height: 122px;">
  
<span class="imag"><img src="dsn/img/1024(1).png" alt="">
</span>
<span class="hot-info"> <a href="">MSI GeForce RTX 3050 VENTUS 2X OC 8GB </a>  <br><span class="prc">1100.00DA </span></span>
</div>
<div>
  <span class="imag"><img src="dsn/img/1024.png" alt=""></span>
  <span class="hot-info"> <a href=""> <a href="">AMD RX 6600</a> <br> <span class="prc">1100.00DA </span></span>
</div>
<div>
  <span class="imag"><img src="dsn/img/400.png" alt=""></span>
  <span class="hot-info"> <a href=""> MSI X570 (WIFI) </a>  <br> <span class="prc">1100.00DA </span></span>
</div>
<div>
  <span class="imag"><img src="https://www.amd.com/system/files/styles/992px/private/2019-06/238593-ryzen-5-pib-left-facing-1260x709.png?itok=kG1oXJAS" alt=""></span>
  <span class="hot-info"> <a href="">Ryzen 5 3600 </a>  <br><span class="prc">1100.00DA </span></span>
</div>
                                       </div>
                    </div>
                  </td>
                  </tr>
                  <tr><td><div class="area">
                    <div class="ttl">Best Promo</div><div class="hot-sale" style="margin-top: 20%;">
                              <div style="margin-top: 28px;height: 122px;">
                              <span class="imag"><img src="dsn/img/1024(1).png" alt="">
                              </span>
                              <span class="hot-info"> <a href="">MSI GeForce RTX 3050 VENTUS 2X OC 8GB </a>  <br> <span class="prc"> <span class="dsc">1200.00DA</span> 1100.00DA </span></span>
                              </div>
                              <div>
                                <span class="imag"><img src="dsn/img/1024.png" alt=""></span>
                                <span class="hot-info"> <a href="">AMD RX 6600 </a>  <br> <span class="prc"> <span class="dsc">1200.00DA</span> 1100.00DA </span></span></div>
                              <div>
                                <span class="imag"><img src="dsn/img/400.png" alt=""></span>
                                <span class="hot-info"> <a href=""> MSI X570 (WIFI) </a>  <br> <span class="prc"> <span class="dsc">1200.00DA</span> 1100.00DA </span></span>
                              </div>
                              <div>
                                <span class="imag"><img src="https://www.amd.com/system/files/styles/992px/private/2019-06/238593-ryzen-5-pib-left-facing-1260x709.png?itok=kG1oXJAS" alt=""></span>
                                <span class="hot-info"> <a href="">Ryzen 5 3600 </a>  <br> <span class="prc"> <span class="dsc">1200.00DA</span> 1100.00DA </span></span>
                              </div>
                    </div></div></td></tr></table>
                

                  
                 <!--                                                                                  -->
                
                 
                 <!--                                                                                  -->

                 <form   method="post"enctype="multipart/form-data">

<input type="text" name="prodcomp" placeholder="product company">
<input type="text" name="prodname" placeholder="product name">
<input type="number" name="prodprice" placeholder="product price">
<input type="file" name="prodimg" placeholder="product image">
<input type="submit" name="addproduct">




</form>
                 <div class="gg"> 

                 <?php
include "prod.php" ;


                if (isset($_POST["addproduct"])) {
                  move_uploaded_file($_FILES["prodimg"]['tmp_name'] , "dsn/img/".$_FILES["prodimg"]['name']) ;
                $newprod = array($_POST["prodcomp"] , $_POST["prodname"] , $_POST["prodprice"] , $_FILES["prodimg"]['name']) ;
                array_push($products, $newprod ) ;
                // file_put_contents("prod.php" , " $newprod . ';'" , FILE_APPEND );
                
                }
                
                
                foreach ($products as $prod ) {
                
                for ($i=1 ; $i >= 10; $i++) { 
                
                }
                for ($s=0 ; $s >= 10; $s++) { 
                
                }
                for ($h=2 ; $h >= 10; $h++) { 
                
                }
                for ($k=3 ; $h >= 10; $h++) { 
                
                }
                 

                ?>

<!-- -->
<span><div class="container">
  <div class="card">
  <div class=<?php echo $prod[$s] ;?>>
 <!-- <div class="imgBx"><img src="dsn/img/<?php echo $_FILES["prodimg"]['name'] ; ?>" alt=""> -->
 <div class="imgBx"><img src="dsn/img/<?php echo $prod[$k] ;  ?>" alt="">

</div></div>                
<div class="contentBx"><h2> <?php echo $prod[$i] ;?> <br> <div class="hh"> <?php echo $prod[$h] ;  ?>.00 DZD </div></h2>
<a  class="pp" href="" >see more</a></div></div></div></span><?php  } ?>

<!-- -->
  <!-- -->

<span><div class="container">
  <div class="card">
  <div class="msi">
<div class="imgBx"><img src="dsn/img/1024(1).png" alt="">
</div></div>               
<div class="contentBx"><h2> MSI RTX 3050 VENTUS 2X OC 8GB <br> <div class="hh"> 1000.00 DZD </div></h2>
<a  class="pp" href="" >see more</a></div></div></div></span>

<!-- -->
  <!-- -->

<span><div class="container">
  <div class="card">
  <div class="msi">
<div class="imgBx"><img src="dsn/img/1024(1).png" alt="">
</div></div>               
<div class="contentBx"><h2> MSI RTX 3050 VENTUS 2X OC 8GB <br> <div class="hh"> 1000.00 DZD </div></h2>
<a  class="pp" href="" >see more</a></div></div></div></span>

<!-- -->
  <!-- -->

<span><div class="container">
  <div class="card">
  <div class="msi">
<div class="imgBx"><img src="dsn/img/1024(1).png" alt="">
</div></div>               
<div class="contentBx"><h2> MSI RTX 3050 VENTUS 2X OC 8GB <br> <div class="hh"> 1000.00 DZD </div></h2>
<a  class="pp" href="" >see more</a></div></div></div></span>

<!-- -->
  <!-- -->

<span><div class="container">
  <div class="card">
  <div class="msi">
<div class="imgBx"><img src="dsn/img/1024(1).png" alt="">
</div></div>               
<div class="contentBx"><h2> MSI RTX 3050 VENTUS 2X OC 8GB <br> <div class="hh"> 1000.00 DZD </div></h2>
<a  class="pp" href="" >see more</a></div></div></div></span>

<!-- -->
  <!-- -->

<span><div class="container">
  <div class="card">
  <div class="msi">
<div class="imgBx"><img src="dsn/img/1024(1).png" alt="">
</div></div>               
<div class="contentBx"><h2> MSI RTX 3050 VENTUS 2X OC 8GB <br> <div class="hh"> 1000.00 DZD </div></h2>
<a  class="pp" href="" >see more</a></div></div></div></span>

<!-- -->
  <!-- -->

<span><div class="container">
  <div class="card">
  <div class="msi">
<div class="imgBx"><img src="dsn/img/1024(1).png" alt="">
</div></div>               
<div class="contentBx"><h2> MSI RTX 3050 VENTUS 2X OC 8GB <br> <div class="hh"> 1000.00 DZD </div></h2>
<a  class="pp" href="" >see more</a></div></div></div></span>

<!-- -->
  <!-- -->

<span><div class="container">
  <div class="card">
  <div class="msi">
<div class="imgBx"><img src="dsn/img/1024(1).png" alt="">
</div></div>               
<div class="contentBx"><h2> MSI RTX 3050 VENTUS 2X OC 8GB <br> <div class="hh"> 1000.00 DZD </div></h2>
<a  class="pp" href="" >see more</a></div></div></div></span>

<!-- -->
  <!-- -->

<span><div class="container">
  <div class="card">
  <div class="msi">
<div class="imgBx"><img src="dsn/img/1024(1).png" alt="">
</div></div>               
<div class="contentBx"><h2> MSI RTX 3050 VENTUS 2X OC 8GB <br> <div class="hh"> 1000.00 DZD </div></h2>
<a  class="pp" href="" >see more</a></div></div></div></span>

<!-- -->
  <!-- -->

<span><div class="container">
  <div class="card">
  <div class="msi">
<div class="imgBx"><img src="dsn/img/1024(1).png" alt="">
</div></div>               
<div class="contentBx"><h2> MSI RTX 3050 VENTUS 2X OC 8GB <br> <div class="hh"> 1000.00 DZD </div></h2>
<a  class="pp" href="" >see more</a></div></div></div></span>

<!-- -->
  <!-- -->

<span><div class="container">
  <div class="card">
  <div class="msi">
<div class="imgBx"><img src="dsn/img/1024(1).png" alt="">
</div></div>               
<div class="contentBx"><h2> MSI RTX 3050 VENTUS 2X OC 8GB <br> <div class="hh"> 1000.00 DZD </div></h2>
<a  class="pp" href="" >see more</a></div></div></div></span>

<!-- -->
  <!-- -->

<span><div class="container">
  <div class="card">
  <div class="msi">
<div class="imgBx"><img src="dsn/img/1024(1).png" alt="">
</div></div>               
<div class="contentBx"><h2> MSI RTX 3050 VENTUS 2X OC 8GB <br> <div class="hh"> 1000.00 DZD </div></h2>
<a  class="pp" href="" >see more</a></div></div></div></span>

<!-- -->
  


</div>




</tr>
    </body></td></tr>
    
    <tr><td>
   
<?php include "footer.php" ?>
    </td> </tr> </table>
 

    
    

      
  
    

    

    
    





    


</html>











