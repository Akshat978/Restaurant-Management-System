<html>
<head>
<link rel="stylesheet" href="styling.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/fontawesome.min.css">
<meta charset="UTF-8">
<style>
a:link, a:visited {
  font-size:2rem;
  background-color: #000;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-shadow: 2px 2px 5px white;
  box-shadow: 0 5px 15px rgba(256, 256, 256, 1);
  text-decoration: none;
  display: inline-block;
  border: 2px solid red;
  border-radius: 25px;
  font-family: "Comic Sans MS", cursive, sans-serif;
}

a:hover, a:active {
  background-color: ;
  color: white;
  text-shadow: 2px 2px 5px black;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 1);
}	
.serve{
	font-size:5rem;
	text-align: center;
  text-shadow: 2px 2px 5px white;
  
}
.abc{
	font-size:1rem;
	top:1%;
	
}
</style>
</head>
<body>
<section>
<h4 class="abc">
Logged in as <?php session_start(); error_reporting(0); echo $_SESSION['email']; ?> 
</h4>

<p class="serve">
We'll serve you fresh and delicious food on your arrival! 
</p>

	
<?php
session_start();
error_reporting(0);

$servername='localhost';
$username='root';
$password='';
$dbname='signup';


$conn=mysqli_connect($servername,$username,$password,$dbname);
$select_query="select * from orders";
	
	$select_result=mysqli_query($conn,$select_query);
	$row=mysqli_num_rows($select_result);
	$row1=mysqli_fetch_assoc($select_result);
	$total=0;?>
	<?php
	if($_SESSION['bruschetta']==='bruschetta'){?>
	<h2><?php
		echo 'BRUSCHETTA BLUE DELIGHT -10$'.'<br>';?></h2><?php	
		$total=$total+10;
		}
	
	if($_SESSION['pomme']==='pomme'){?>
	<h2><?php
		echo 'POMME DULSE -10$'.'<br>';?></h2><?php
		$total=$total+10;
		}
	
	
	if($_SESSION['savory']==='savory'){?>
	<h2><?php
		echo 'SAVORY PARTY BREAD -10$'.'<br>';?></h2><?php
		$total=$total+10;
		}
	
	
	if($_SESSION['appetizer']==='appetizer'){?>
	<h2><?php
		echo 'APPETIZER TORTILLA PINWHEELS -10$'.'<br>';?></h2><?php
			$total=$total+10;

		}
	
	
	if($_SESSION['focaccia']==='focaccia'){?>
	<h2><?php
		echo 'FOCACCIA DI CARCIOFI -10$'.'<br>';?></h2><?php
		$total=$total+10;
		}
	
	
	if($_SESSION['green']==='green'){?>
	<h2><?php
		echo 'GREEN DELIGHT -10$
'.'<br>';?></h2><?php
		$total=$total+10;
		}
	
	
	if($_SESSION['gourmet']==='gourmet'){?>
	<h2><?php
		echo 'GOURMET YAM TAOHU -10$
'.'<br>';?></h2><?php
		$total=$total+10;
		}
		
		if($_SESSION['crispy']==='crispy'){?>
	<h2><?php
		echo 'CRISPY GNOCCHI WITH ARUGULA -10$

'.'<br>';?></h2><?php
		$total=$total+10;
		}
		
		if($_SESSION['sea']==='sea'){?>
	<h2><?php
		echo 'SEA PALM SPICY PEANUT CURRY -10$

'.'<br>';?>
	</h2><?php
		$total=$total+10;
		}
		
		if($_SESSION['lentil']==='lentil'){?>
	<h2><?php
		echo 'LENTIL CAVIAR & ARUGULA -10$

'.'<br>';?>
	</h2><?php
		$total=$total+10;
		}
		
		if($_SESSION['tamari']==='tamari'){?>
	<h2><?php
		echo 'TAMARI-MAPLE GLAZED TOFU -10$

'.'<br>';?>
	</h2><?php
		$total=$total+10;
		}
		
		if($_SESSION['maple']==='maple'){?>
	<h2><?php
		echo 'MAPLE BARBEQUE TOFU -10$

'.'<br>';?>
	</h2><?php
	
		$total=$total+10;}

		
		if($_SESSION['luxur']==='luxur'){?>
	<h2><?php
		echo 'LUXUR OYSTER -10$

'.'<br>';?>
	</h2><?php
		$total=$total+10;

		}
		
		if($_SESSION['rigatoni']==='rigatoni'){?>
	<h2><?php
		echo 'RIGATONI DI CAVOLFIORE -10$

'.'<br>';?>
	</h2><?php
		$total=$total+10;
		}
		
		if($_SESSION['saffron']==='saffron'){?>
	<h2><?php
		echo 'SAFFRON CHANA SECRET -10$

'.'<br>';?>
	</h2><?php
		$total=$total+10;
	}
		
		if($_SESSION['french']==='french'){?>
	<h2><?php
		echo 'FRENCH PLUM CREPES -10$

'.'<br>';?>
	</h2><?php
		$total=$total+10;
		}
		
		if($_SESSION['butterscotch']==='butterscotch'){?>
	<h2><?php
		echo 'BUTTERSCOTCH PUDDING -10$

'.'<br>';?>
	</h2><?php
		$total=$total+10;
		}
		
		if($_SESSION['chocolate']==='chocolate'){?>
	<h2><?php
		echo 'CHOCOLATE GÂTEAU DE CRÊPES -10$

'.'<br>';?>
	</h2><?php
		$total=$total+10;
		}
		
		if($_SESSION['dutch']==='dutch'){?>
	<h2><?php
		echo 'DUTCH BABY WITH SAUTEED APPLES -10$

'.'<br>';?>
	</h2><?php
		$total=$total+10;
		}
		
		if($_SESSION['blueberry']==='blueberry'){?>
	<h2><?php
		echo 'BLUEBERRY NAPOLEON -10$
'.'<br>';?>
	</h2><?php
		$total=$total+10;
		}
		
		if($_SESSION['rings']==='rings'){?>
	<h2><?php
		echo 'RINGS OF SATURN -10$

'.'<br>';?>
	</h2><?php
		$total=$total+10;
		}
		
		if($_SESSION['classic']==='classic'){?>
		<h2><?php
		echo 'CLASSIC ATAYEF -10$'.'<br>';?></h2><?php
		$total=$total+10;
		}
		
		?>
	
<h3><?php
		echo "YOUR ORDER TOTAL IS";
	?></h3>
	<h1><?php
	
	echo $total."$";
	 ?> 
	
	
	</h1>
	
	<h2>
	
	<br><br><br><br>
	<?php echo "----------------------------------------------------------";?>
	<br>
	
<a style="color:black;">If you want to order more, <br>click the back arrow<br>in the browser twice</a>
<br><br>
<a href="logout.php">Logout</a>
</h2>
<div class="box">
<select>
<option>--Pay Now!!--</option>
<option>Paytm</option>
<option>GooglePay</option>
<option>Credit/Debit cards</option>
<option>Net Banking</option>
<option>UPI ID</option>
<option>Cash(pay at restaurant)</option>
</select>

</div>


</section>

</body>
</html>