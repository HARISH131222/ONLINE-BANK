<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>SPARKS FOUNDATION BANK</title>
    <link rel="stylesheet" href="css/style3.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<link href="style3.css" rel="stylesheet" type="text/css">
</head>
		<style>
.button-22 {
  align-items: center;
  appearance: button;
  background-color: #0276FF;
  border-radius: 8px;
  border-style: none;
  box-shadow: rgba(255, 255, 255, 0.26) 0 1px 2px inset;
  box-sizing: border-box;
  color: #000000;
  cursor: pointer;
  display: flex;
  flex-direction: row;
  flex-shrink: 0;
  font-family: "RM Neue",sans-serif;
  font-size: 100%;
  line-height: 1.15;
height: 50px;
  margin: 0;
  padding: 20px 15px;
  text-align: center;
  text-transform: none;
  transition: color .13s ease-in-out,background .13s ease-in-out,opacity .13s ease-in-out,box-shadow .13s ease-in-out;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-22:active {
  background-color: #006AE8;
}

.button-22:hover {
  background-color: #1C84FF;
}
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
  background: #FFE800;
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
  background-color: #FFF289;
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
	<body background="background/istockphoto-528219721-612x612.jpg">
    
 <div class="wrapper">
	<div class="sidebar">
		<h4 align="center"> SPARKS FOUNDATION BANK</h4>
		<ul>
		<li> <a aria-current="page" href="index.php"><i class="fas fa-home"></i>Home</a></li>
		<li><a href="money.php" id="money.php"><i class="fas fa-comment-dollar"></i>Transfer Money</a></li>
	    <li> <a href="history.php" id="history.php"><i class="fas fa-exchange-alt"></i>Transfer History</a></li>
		<li>  <a href="https://www.thesparksfoundationsingapore.org/ " target="_blank"><i class="fas fa-address-card"></i>About </a></li>
		<li> <a href="contact.php"><i class="far fa-address-book"></i>Contact</a></li>
			
			  
		</ul>
   </div>
</div>

	<p>&nbsp;</p>
	<h2 style="text-align: center; color: aliceblue "> TRANSACTION DETAILS</h2>
	<!-- Table -->
<th  class="text-center"><div class="table-responsive-sm" style="margin-right: 200px">
	        <table width="76%" height="68" bgcolor=white class="table table-hover table-striped" style="margin-left: 200px"  >
	          <thead style="color : black;" class="table-danger" bgcolor="#FF0004">
	            <tr>
	              <th width="13%" class="text-center">S.No.</th>
	              <th width="13%" class="text-center">Sender</th>
	              <th width="13%" class="text-center">Receiver</th>
	              <th width="14%" class="text-center">Amount</th>
	              <th width="47%" class="text-lg-center">Date & Time</th>
                </tr>
              </thead>
	          <tbody>
	            <?php

include 'connect.php';

$sql ="select * from transaction";

$query =mysqli_query($conn, $sql);

while($rows = mysqli_fetch_assoc($query))
{
?>
	            <tr style="color : black;">
	              <td class="text-center py-2"><?php echo $rows['sno']; ?></td>
	              <td class="text-center py-2"><?php echo $rows['sender']; ?></td>
	              <td class="text-center py-2"><?php echo $rows['receiver']; ?></td>
	              <td class="text-center py-2"><?php echo $rows['balance']; ?></td>
	              <td class="text-center py-2"><?php echo $rows['datetime']; ?></td>
	              <?php
            }

        ?>
              </tbody>
            </table>
</div></th>
	    </tr>
	  </thead>
	  </table>
	</div>
</div>

    <!-- footer -->
<p>&nbsp;</p>

<div class="foot">
        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2021 Copyright - Harish G
                <a class="text-dark" href="https://www.thesparksfoundationsingapore.org/" target="_blank"> The Sparks
                    Foundation <img src="logos/tsf.png" alt="" width="40" height="35"></a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>
</body>

</html>