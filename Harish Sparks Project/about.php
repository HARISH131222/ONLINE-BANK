<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>TSF BANK</title>
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
  background: #4b4276;
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
  background-color: #594f8d;
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
  background: #594f8d;
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
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body background="background/finance-icons-blue-finance-background-currency-icons-money-background-currency-concepts-besthqwallpapers.com-1024x768.jpg">
  <div class="wrapper">
	<div class="sidebar">
		<h2> SPARKS BANK</h2>
		<ul>
		<li> <a aria-current="page" href="index.php"><i class="fas fa-home"></i>Home</a></li>
		<li><a href="money.php" id="money.php"><i class="fas fa-comment-dollar"></i>Transfer Money</a></li>
	    <li> <a href="history.php" id="history.php"><i class="fas fa-exchange-alt"></i>Transfer History</a></li>
		<li>  <a href="https://www.thesparksfoundationsingapore.org/ " target="_blank"><i class="fas fa-address-card"></i>About </a></li>
		<li> <a href="contact.php"><i class="far fa-address-book"></i>Contact</a></li>
			
			  
		</ul>
	  </div>
	</div>
	

    <class class="welcome"></class>

    <!-- Carousel --><!-- Cards -->
    <div class="container my-4 ">
        <div class="row mb-2">
            <div class="col-md-6"></div>
            <div class="col-md-6"></div>
        </div>
    </div>

	 <div class="container" style="margin-left: 180px">
        <div class="row text-center">
            <div class="col text-center">
                <div class="table-responsive-sm">
                    <table width="58%" bgcolor=#B7B7B7 class="table table-hover table-striped table-sm" >
                        <thead style="color : black;" class="table-danger">
                            <tr bgcolor="#FF0000">
                                <th width="13%" class="text-center py-2" scope="col">S.No.</th>
                                <th width="22%" class="text-center py-2" scope="col">Name</th>
                                <th width="24%" class="text-center py-2" scope="col">E-Mail</th>
                                <th width="19%" class="text-center py-2" scope="col">Balance</th>
                                <th width="22%" class="text-right py-2" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr style="color :aqua;">
                                    <td class="text-center py-2">
                                        <?php echo $rows['id'] ?></td>
                                    <td class="text-center py-2">
                                        <?php echo $rows['name'] ?>
                                    </td>
                                    <td class="text-center py-2">
                                        <?php echo $rows['email'] ?>
                                    </td>
                                    <td class="text-center py-2">
                                        <?php echo $rows['balance'] ?>                                                                               </tbody>
                    </table>
	<!-- footer -->

    <div class="foot">
        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2021 Copyright - Bharat Singh T N
                <a class="text-dark" href="https://www.thesparksfoundationsingapore.org/" target="_blank"> The Sparks
                    Foundation <img src="logo/tsf.png" alt="" width="40" height="35"></a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

   </body>

</html>