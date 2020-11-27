<?php
error_reporting(0);
include 'menu_restaurant.php';
$servername='localhost';
$username='root';
$password='';
$dbname='signup';


$conn=mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['order'])){
	echo '<script>alert("Click on View my order on the menu page to view your order")</script>';
	//1
	$bruschetta=@$_POST['bruschetta'];
	
	//2
	$pomme=@$_POST['pomme'];
	//3
	$savory=@$_POST['savory'];
	//4
	$appetizer=@$_POST['appetizer'];
	//5
	$focaccia=@$_POST['focaccia'];
	//6
	$green=@$_POST['green'];
	//7
	$gourmet=@$_POST['gourmet'];
	//8
	$crispy=@$_POST['crispy'];
	//9
	$sea=@$_POST['sea'];
	//10
	$lentil=@$_POST['lentil'];
	//11
	$tamari=@$_POST['tamari'];
	//12
	$maple=@$_POST['maple'];
	//13
	$luxur=@$_POST['luxur'];
	//14
	$rigatoni=@$_POST['rigatoni'];
	//15
	$saffron=@$_POST['saffron'];
	//16
	$french=@$_POST['french'];
	//17
	$butterscotch=@$_POST['butterscotch'];
	//18
	$chocolate=@$_POST['chocolate'];
	//19
	$dutch=@$_POST['dutch'];
	//20
	$blueberry=@$_POST['blueberry'];
	//21
	$rings=@$_POST['rings'];
	//22
	$classic=@$_POST['classic'];
	
	//inert queries
	$insert_query="INSERT INTO `orders`(`bruschetta`, `pomme`, `savory`, `appetizer`, `focaccia`, `green`,
	`gourmet`, `crispy`, `sea`, `lentil`, `tamari`, `maple`, `luxur`, `rigatoni`, `saffron`, `french`, `butterscotch`, 
	`chocolate`, `dutch`, `blueberry`, `rings`, `classic`) VALUES ('$bruschetta','$pomme','$savory','$appetizer','$focaccia','$green','$gourmet',
	'$crispy','$sea','$lentil','$tamari','$maple','$luxur','$rigatoni','$saffron','$french','$butterscotch','$chocolate','$dutch',
	'$blueberry','$rings','$classic')";
	
	//select query
	$select_query="select * from orders";
	
	$insert_result=mysqli_query($conn,$insert_query);
	$select_result=mysqli_query($conn,$select_query);
	$row=mysqli_num_rows($select_result);
	$row1=mysqli_fetch_assoc($select_result);
	
	$_SESSION['bruschetta']=$bruschetta;
	$_SESSION['pomme']=$pomme;
	$_SESSION['savory']=$savory;
	$_SESSION['appetizer']=$appetizer;
	$_SESSION['focaccia']=$focaccia;
	$_SESSION['green']=$green;
	$_SESSION['gourmet']=$gourmet;
	$_SESSION['crispy']=$crispy;
	$_SESSION['sea']=$sea;
	$_SESSION['lentil']=$lentil;
	$_SESSION['tamari']=$tamari;
	$_SESSION['maple']=$maple;
	$_SESSION['luxur']=$luxur;
	$_SESSION['rigatoni']=$rigatoni;
	$_SESSION['saffron']=$saffron;
	$_SESSION['french']=$french;
	$_SESSION['butterscotch']=$butterscotch;
	$_SESSION['chocolate']=$chocolate;
	$_SESSION['dutch']=$dutch;
	$_SESSION['blueberry']=$blueberry;
	$_SESSION['rings']=$rings;
	$_SESSION['classic']=$classic;
	
}
?>