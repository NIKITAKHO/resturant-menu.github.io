<?php
session_start();
if (!isset($_SESSION['coustmer_id'])){
       header("Location:localhost:3000/prac.php");
}
//http://localhost:3000/prac.php
//print_r($_SESSION); exit;
//die("error");
$connect = mysqli_connect('localhost','root','','menuee');
if (isset($_POST['submit'])){
  $number=$_POST['number'];
  $product_name=$_POST['product_name'];
 $table_number=$_SESSION['table_number'];
$name_cus = $_SESSION['name_cus'] ; 
$price=$_POST['price'];
$coustmer_id=$_SESSION['coustmer_id'];


//print_r($_POST) ;
  //die("failed");
 
$query = "INSERT INTO `mycall` ( `product_name`,`quantity`,`name_cus`,`price`,`table_number`,`coustmer_id`) VALUES ('$product_name','$number','$name_cus','$price','$table_number','$coustmer_id');";
 
    $result = mysqli_query($connect,$query);
    
 $_SESSION['success'] ='added';
 
 
}

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
      
    <title>my resturant</title>
    <link rel="stylesheet" type="text/css" href="menuee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
 </head>
<body>
       <header>
              
      
<h1>  WELCOME TO NIKKY'S RESTURANT </h1>
    <nav >
        <ul>
               
        <li><a href="http://localhost:3000/payment.html">payments</a></li>          
  <li><a href="https://www.google.com/search?rlz=1C1UEAD_enIN979IN979&tbs=lf:1,lf_ui:9&tbm=lcl&sxsrf=AOaemvJDgdI8zdqWXKR69X4djWa2qX__Mw:1640520355701&q=my+restaurant&rflfq=1&num=10&ved=2ahUKEwiD6LDItoH1AhXy63MBHWN2AMAQtgN6BAgOEAc">Home</a></li>
  <li><a href="https://maps.google.com/maps?q=aaj+tak+news&rlz=1C1UEAD_enIN979IN979&um=1&ie=UTF-8&sa=X&ved=2ahUKEwjt_rHrjIf1AhXS7XMBHfHKDEoQ_AUoAXoECAEQAw">News</a></li>
  <li><a href="https://www.zomato.com/">Contact</a></li>
  <li><a href="https://www.zomato.com/ncr/order-food-online">About</a></li>
   <li><a href="http://localhost:3000/items.php">my cart</a></li>
  
</ul>


</nav>
</header>

<main>
       



        
       </nav>
       <div class="nik">
       <?php if(isset($_SESSION['success'])) { ?>
    <h8> <?php echo $_SESSION['success']; ?></h8>
    <?php }  unset( $_SESSION['success']); ?>

</div>

       <section class="items">
      
              
     <form action="" method="POST">
       <div class="item">
              <img src="burger.jfif">
             <h4>burger</h4>
             <input type ="hidden" name="product_name"  value="burger"> 
             <h5>100 RS</h5>
           <input type ="hidden" name="price"  value="100"> 
<h6> quantity: <select name='number'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<opiton>5</option>
</h6>
</select>
<button class="btn success" name="submit">Add To Cart</button>



       </div>
       </div>
</form>

      
<form action="" method="POST">
<div class="item">
           <img src="thali.JPG">
           <h4>THALI</h4>
           <input type="hidden" name="product_name"  value="thali">
<h5>100 RS</h5>
<input type="hidden" name="price"  value="100">

<h6>quantity: <select name='number'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<opiton>5</option>
</select>
<button type="submit" name="submit">Add To Cart</button>
</h6>
        </div> 
</form>
<form action="" method="POST">
              <div class="item">
            <img src="tanduri roti.jpg">
            
            <h4>TANDOORI ROTI</h4>
            <input type="hidden" name="product_name"  value="tanduri roti">
<h5>200 RS<h5>
<input type="hidden" name="price"  value="200">
<h6>quantity: <select name='number'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<opiton>5</option></h6>
</select>
<button type="submit" name="submit">add to cart</button>
        </div>
</form>
        <form action="" method="POST">
    <div class="item">
       
            <img src="manchurian.jfif">
            <h4>MANCHURIAN RICE</h4>
            <input type="hidden" name="product_name"  value="manchurian rice">
<h5>300 RS</h5>
<input type="hidden" name="price"  value="300">
           
<h6>quantity: <select name='number'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<opiton>5</option>
</h6>
</select>
<button type="submit" name="submit">add to cart</button>
         </div>
        </form>
        <form action="" method="POST">
  
<div class="item">
           <img src="D.jfif">
           <h4>DHOSA</h4>
           <input type="hidden" name="product_name"  value="dhosa">

<h5> 400 RS</h5>
<input type="hidden" name="price"  value="400">
          
     <h6>      quantity: <select name='number'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<opiton>5</option>
</h6>
</select>
<button type="submit" name="submit">add to cart</button>
       </div>
</form>
<form action="" method="POST">
<div class="item">
           <img src="momos.JPG">
           <h4>MOMOS</h4>
           <input type="hidden" name="product_name"  value="momos">


<h5>50 RS</h5>
<input type="hidden" name="price"  value="50">
          
       <h6>    quantity: <select name='number'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<opiton>5</option></h6>
</select>
<button type="submit" name="submit">Add To Cart</button>
       </div>
</form>
<form action="" method="POST">
<div class="item">
           <img src="shahi paneer.jpg">
           <h4>SHAHI PANNER</h4>
           <input type="hidden" name="product_name"  value="shahi paneeer">

<h5>400 RS</h5>
<input type="hidden" name="price"  value="400">
          
         <h6>  quantity: <select name='number'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<opiton>5</option>
</select>
</h6>
<button type="submit" name="submit">Add To Cart</button>
       </div>

</form>
<form action="" method="POST">
<div class="item">
           <img src="spring roll.jfif">
           <h4>SPRING ROLL</h4>
           <input type="hidden" name="product_name"  value="spring roll">
<h5>200 RS</h5>
<input type="hidden" name="price"  value="200">

          
        <h6>   quantity: <select name='number'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<opiton>5</option>
</select>
</h6>
<button type="submit" name="submit">add to cart</button>
       </div>
</form>
<form action="" method="POST">
<div class="item">
           <img src="pizza.jpg">
           <h4>PIZZA</h4>
           <input type="hidden" name="product_name"  value="pizza">
<h5> 500 RS</h5>
<input type="hidden" name="price"  value="500">
          
     <h6>    quantity: <select name='number'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<opiton>5</option>
</select>
</h6>
<button type="submit" name="submit">add to cart</button>
</div>
</form>
<form action="" method="POST">
        
<div class="item">
           <img src="noodles.jfif">
           <h4>NOODLES</h4>
           <input type="hidden" name="product_name"  value="noodels">

<h5>100</h5>
<input type="hidden" name="price"  value="100">
          
          <h6> quantity: <select name='number'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<opiton>5</option>
</select>
</h6>
<button type="submit" name="submit"> add to cart</button>
       </div> 
</form>
<form action="" method="POST">
<div class="item">
           <img src="kdhai.jfif">
           <h4>kdhai paneer</h4>
           <input type="hidden" name="product_name"  value="kdhai paner">
<h5> 100 RS</h5>
<input type="hidden" name="price"  value="130">
<h6>quantity: <select name='number'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<opiton>5</option>
</select>
</h6>
<button type="submit" name="submit">add to cart</button>
       </div>
</form>
<form action="" method="POST">
       
<div class="item">
           <img src="chola rice.jfif">
        
 <h4>CHOLA AND RICE</h4>
 <input type="hidden" name="product_name"  value="chola and rice">
<h5>200 RS</h5>
<input type="hidden" name="price"  value="200">
          
        <h6>   quantity: <select name='number'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<opiton>5</option>
</select>

</h6>
<button type="submit" name="submit">add to cart</button>
       </div> 
</form>
<form action="" method="POST">

<div class="item">
           <img src="fried rice.jfif">
           <h4>fried rice</h4>
           <input type="hidden" name="product_name"  value="fried rice">
<h5>200 RS</h5>
<input type="hidden" name="price"  value="200">
          
           <h6>quantity: <select name='number'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<opiton>5</option>
       </opiton>
</h6>
</select>
<button type="submit" name="submit">add to cart</button>
       </div> 
</form>
<form action="" method="POST">
<div class="item">
           <img src="kad.jfif">
           <h4>SPECIAL KADHI AND RICE</h4>
           <input type="hidden" name="product_name"  value="kadhi rice">
<H5>200 RS</h5>
<input type="hidden" name="price"  value="200">
          
          <h6> quantity: <select name='number'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<opiton>5</option>
</select>
</h6>
<button type="submit name="submit>add to cart</button>
       </div> 
</form>
<form action="" method="POST">
<div class="item">
           <img src="dal.jfif">
           <h4>SPECIAL DAL MAKHNI</h4>
           <input type="hidden" name="product_name"  value="dal makhni">
<h5>300 RS</h5>
<input type="hidden" name="price"  value="300">
          
       <h6>   quantity: <select name='number'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<opiton>5</option>
</select>
</h6>
<button type="submit" name="submit">add to cart</button>
       </div> 
</form>
<form action="" method="POST">
<div class="item">
           <img src="gr.jfif">
           <h4>GRAVY CHAAP</h4>
           <input type="hidden" name="product_name"  value="gravy chapp">
<h5>200 rs</h5>
<input type="hidden" name="price"  value="200"> 
           quantity: <select name='number'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<opiton>5</option>
</select>
<button type="submit" name="submit">add to cart</button>
       </div> 
</form>
<form action="" method="POST">
<div class="item">
           <img src="ko.jfif">
           <h4>fried korian chaap</h4>
           <input type="hidden" name="product_name"  value="fried korian chaap">
<h5> 200</h5>
<input type="hidden" name="price"  value="200"> 
      <h6>     quantity: <select name='number'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<opiton>5</option>
</select>
</h6>
<button type="submit" name="submit">add to cart</button>
       </div> 
</form>
<form action="" method="POST">
<div class="item">
           <img src="tan.jfif">
           <h4>TANDOORI CHAP</h4>
           <input type="hidden" name="product_name"  value="tandoori chaap">
          
       <h6>    quantity: <select name='number'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<opiton>5</option>
</select>
</h6>
<button type="submit" name="submit">add to cart</button>
       </div> 
</form>
       <form action="" method="POST">
<div class="item">
           <img src="dh.webp">
           <h4>DHOSA</h4>
           <input type="hidden" name="product_name"  value="dhosa">
          <h5>100 RS</h5>
          <input type="hidden" name="price"  value="100">
          
         <h6>  quantity: <select name='number'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<opiton>5</option>
</select>
</h6>
<button  type="submit" name="submit">add to cart</button>
       </div>
</form>
<form action="" method="POST">
       <div class="item">
              <img src="tanduri roti.jpg">
              <h4>TANDOORI ROTI</h4>
              <input type="hidden" name="product_name"  value="roti">
  <h5>200 RS<h5>
  <input type="hidden" name="price"  value="20">
  <h6>quantity: <select name='number'>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <opiton>5</option>
  </select>
  </h6>
  <button type="submit" name="submit">add to cart</button>
</div>
</form>
<form action="" method="POST">
<div class="item">
       <img src="magie.jfif">
       <h4>MAGIEE</h4>
       <input type="hidden" name="product_name"  value="maggie">
<h5>200 RS<h5>
<input type="hidden" name="price"  value="70">       
<h6>quantity: <select name='number'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<opiton>5</option>
</select>
</h6>
<button type="submit" name="submit">add to cart</button>
</div>
</form>
<form action="" method="POST">

 <div class="item">
          <img src="coffee.jpg">
           <h4>COFFEE</h4>
           <input type="hidden" name="product_name"  value="coffee">
           <h5>100 RS</h5>
           <input type="hidden" name="price"  value="100">
       <h6>    quantity: <select name='number'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<opiton>5</option>
</select>
</h6>
<button type="submit"  name="submit">add to cart</button>
       </div>
</form>

<form action="" method="POST">
<div class="item">
                 <img src="tea.jpg">
                  <h4>TEA</h4>
                  <input type="hidden" name="product_name"  value="tea">
                
                  <h5>100 RS</h5>
                  <input type="hidden" name="price"  value="100">
                 
                <h6>  quantity: <select name='number'>
       <option>1</option>
       <option>2</option>
       <option>3</option>
       <option>4</option>
       <opiton>5</option>
       </select>
       </h6>
       <button type="submit" name="submit">add to cart</button>
              </div>
</form>
<form action="" method="POST">

 <div class="item">
          <img src="jlbi.jfif">
           <h4>COFFEE</h4>
           <input type="hidden" name="product_name"  value="jlebi">
           <h5>100 RS</h5>
           <input type="hidden" name="price"  value="100">
       <h6>    quantity: <select name='number'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<opiton>5</option>
</select>
</h6>
<button type="submit"  name="submit">add to cart</button>
       </div>
</form>
<form action="" method="POST">

 <div class="item">
          <img src="ras.jpg">
           <h4>RAS MALAI</h4>
           <input type="hidden" name="product_name"  value="ras mali">
           <h5>100 RS</h5>
           <input type="hidden" name="price"  value="100">
           
       <h6>    quantity: <select name='number'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<opiton>5</option>
</select>
</h6>
<button type="submit"  name="submit">add to cart</button>
       </div>
</form>
</main>

<footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>NIKKY'S RESTRO<h4>
  	 			<ul>
  	 				<li><a href="#">about us</a></li>
  	 				<li><a href="#">our services</a></li>
  	 				<li><a href="#">privacy policy</a></li>
  	 				<li><a href="#">affiliate program</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>get help</h4>
  	 			<ul>
  	 				<li><a href="#">FAQ</a></li>
  	 				<li><a href="#">shipping</a></li>
  	 				<li><a href="#">returns</a></li>
  	 				<li><a href="#">order status</a></li>
  	 				<li><a href="payment.html">payment options</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>online order</h4>
  	 			<ul>
  	 				<li><a href="#">drinks</a></li>
  	 				<li><a href="#">dessert</a></li>
  	 				<li><a href="#">snakes</a></li>
  	 				<li><a href="#">non veg</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>


    
</body>
</html>
