<html>
	<head>
        <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>SPARKS FOUNDATION BANK</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<link href="style2.css" rel="stylesheet" type="text/css">
		<style>
			
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

    <?php
    include 'connect.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    ?>
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
  <!-- options -->
      </div>
		<p>&nbsp;</p>
   <h2 style="text-align: center; color: aliceblue "> CUSTOMER DETAILS</h2>
       <p>&nbsp; </p>
    <div class="container" style="margin-left: 180px">
        <div class="row text-center">
            <div class="col text-center">
                <div class="table-responsive-sm">
                  <table width="58%" bgcolor=white class="table table-hover table-striped table-sm" >
                    <thead style="color : black;" class="table-danger">
                      <tr bgcolor="#f4c2c2">
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
                      <tr>
                        <td class="text-center py-2"><p><?php echo $rows['id'] ?></p></td>
                        <td class="text-center py-2"><?php echo $rows['name'] ?></td>
                        <td class="text-center py-2"><?php echo $rows['email'] ?></td>
                        <td class="text-center py-2"><?php echo $rows['balance'] ?></td>
                        <td><a href="users.php?id= <?php echo $rows['id']; ?>">
                          <button class="btn btn-outline-dark btn" style="align-items: center">Transact</button>
                        </a></td>
                      </tr>
                      <?php
                            }
                            ?>
                    </tbody>
                  </table>
					   <div class="container" style="margin-right: 10px">
        <div class="row text-center">
            <div class="col text-center">
                <div class="table-responsive-sm">
					<table width="93%" border="3" style="align-content: center ; align-items: center; background-color: white; margin-right: 20px" class="table table-hover table-striped table-sm">
  <tbody>
    <tr bgcolor="#f4c2c2">
      <th width="14%" scope="col">Sno</th>
      <th width="42%" scope="col">Name</th>
      <th width="44%" scope="col">Email</th>
    </tr>
    <tr>
      <td>1</td>
      <td>Harish G</td>
      <td>harishg@gmail.com</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Kumar</td>
      <td>Kumar@gmail.com</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Ravi</td>
      <td>ravi@gmail.com</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Dinesh</td>
      <td>dinesh@gmail.com</td>
    </tr>
    <tr>
      <td>5</td>
      <td>Diti</td>
      <td>diti@gmail.com</td>
    </tr>
    <tr>
      <td>6</td>
      <td>sudeep</td>
      <td>sudeep@gmail.com</td>
    </tr>
    <tr>
      <td>7</td>
      <td>Monica</td>
      <td>monica@gmail.com</td>
    </tr>
    <tr>
      <td>8</td>
      <td>Vijay</td>
      <td>vijay@gmail.com</td>
    </tr>
    <tr>
      <td>9</td>
      <td>Sia K</td>
      <td>sia@gmail.com</td>
    </tr>
    <tr>
      <td>10</td>
      <td>Priyanka</td>
      <td>priyanka@gmail.com</td>
    </tr>
  </tbody>
</table>
				</div>
			</div>
						   </div>
					</div>

			  </div>
            </div>
        </div>

    </div>
    <!-- footer -->
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