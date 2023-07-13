<!-- action="testpage.php" -->

<form   method="post"enctype="multipart/form-data">

<input type="text" name="prodcomp" placeholder="product company">
<input type="text" name="prodname" placeholder="product name">
<input type="number" name="prodprice" placeholder="product price">
<input type="file" name="prodimg" placeholder="product image">
<input type="submit" name="addproduct">




</form>



<?php 

echo "<pre>" ;
print_r($_POST);
echo "</pre>" ;



$products2 = [
 ["msi" , 1000,"img.jpg"] ,
 ["ryzen" , 1500,"img.jpg"] ,
 ["asus" , 1800,"img.jpg"] ,
 ["HP" , 1600,"img.jpg"] ,
];
// $products  = array(
//     "msi"   =>  array("rtx 3050" , 1500),
//     "asus"  =>  array("rtx 3060" , 2000),
//     "ryzen" =>  array("rtx 3080" , 2500),
//     "HP"    =>  array("rtx 3090" , 3500),

// );

 
$products  = array(
  array("msi" , "rtx 3050" , 1500),
  array("asus","rtx 3060" , 2000),
  array("ryzen","rtx 3080" , 2500),
  array("HP" ,"rtx 3090" , 3500),
  array("evga" ,"rtx 4060" , 4500),
  array("evga" ,"rtx 4060" , 4500),

);
if (isset($_POST["addproduct"])) {
  move_uploaded_file($_FILES["prodimg"]['tmp_name'] , "dsn/img/".$_FILES["prodimg"]['name']) ;
$newprod = array($_POST["prodcomp"] , $_POST["prodname"] , $_POST["prodprice"]) ;
array_push($products, $newprod ) ;

}


foreach ($products as $prod ) {

for ($i=1 ; $i >= 10; $i++) { 

}
for ($s=0 ; $s >= 10; $s++) { 

}
for ($h=2 ; $h >= 10; $h++) { 

}




echo "the prod is " . $prod[$s] . " the name is ".   $prod[$i] . " and the price is ".  $prod[$h] . "<br>" ;

}






echo "<pre>" ;
print_r($products) ; 
echo "</pre>" ;


