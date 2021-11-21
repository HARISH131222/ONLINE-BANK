<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   <title>SPARKS FOUNDATION BANK</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<style type="text/css">
@import url("style1.css")
@import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
   background-color: #f3f5f9;
}

.wrapper{
  display: flex;
  position: relative;
}

.wrapper .sidebar{
  width: 200px;
  height: 100%;
  background:#FFE800;
  padding: 30px 0px;
  position: fixed;
}

.wrapper .sidebar h2{
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 30px;
}

.wrapper .sidebar ul li{
  padding: 15px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
}    

.wrapper .sidebar ul li a{
  color: #bdb8d7;
  display: block;
}

.wrapper .sidebar ul li a .fas{
  width: 25px;
}

.wrapper .sidebar ul li:hover{
  background-color:#FFF289;
}
    
.wrapper .sidebar ul li:hover a{
  color: #fff;
}
 
.wrapper .sidebar .social_media{
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}

.wrapper .sidebar .social_media a{
  display: block;
  width: 40px;
  background: pink;
  height: 40px;
  line-height: 45px;
  text-align: center;
  margin: 0 5px;
  color: #bdb8d7;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.wrapper .main_content{
  width: 100%;
  margin-left: 200px;
}

.wrapper .main_content .header{
  padding: 20px;
  background: #fff;
  color: #717171;
  border-bottom: 1px solid #e0e4e8;
}

.wrapper .main_content .info{
  margin: 20px;
  color: #717171;
  line-height: 25px;
}

.wrapper .main_content .info div{
  margin-bottom: 20px;
}
	</style>
</head>

<body background="background/istockphoto-528219721-612x612.jpg">
  <div class="wrapper">
	<div class="sidebar">
		<h4 align="center" > SPARKS FOUNDATION BANK </h4>
		<ul>
		<li> <a aria-current="page" href="index.php"><i class="fas fa-home"></i>Home</a></li>
		<li><a href="money.php" id="money.php"><i class="fas fa-comment-dollar"></i>Transfer Money</a></li>
	    <li> <a href="history.php" id="history.php"><i class="fas fa-exchange-alt"></i>Transfer History</a></li>
		<li>  <a href="https://www.thesparksfoundationsingapore.org/ " target="_blank"><i class="fas fa-address-card"></i>About </a></li>
		<li> <a href="contact.php"><i class="far fa-address-book"></i>Contact</a></li>
			
			  
		</ul>
	  </div>
	</div>
       <img src="logos/preview.jpg" width="1100" height="400" alt="home" style="margin-left: 200px; margin-top: -50px">
<p></p>
<div style="margin-left: 200px; background-color: aliceblue">
    <section class="about" id="about" align="justify">
	<h4>Dear Customers,<br>
Thank you so much for choosing SPARKS FOUNDATION BANK. We will help you with your recent account opening. We are committed to providing our customers with the highest level of service and the most innovative banking products possible.We are very glad you chose us as your financial institution and hope you will take advantage of our wide variety of savings, investment and loan products, all designed to meet your specific needs.
</h4>
	</section>
	</div>

<!-- footer -->
<div class="foot" style="margin-top: 30px">
    <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2021 Copyright - Harish G <a class="text-dark" href="https://www.thesparksfoundationsingapore.org/"> The Sparks Foundation</a>
            <img src="logos/tsf.png" width="40" height="35" alt="imp"/>
            <!-- Copyright -->
  </footer>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

   
    -->
</body>

</html>