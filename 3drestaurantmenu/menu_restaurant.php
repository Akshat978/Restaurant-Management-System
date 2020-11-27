<?php
session_start();
error_reporting(0);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
	
	<style>
	h1 span {
  background: white;
  color: black;
  padding: 3px 10px;
  border-radius:5px;
}
	</style>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Restaurant Menu</title>
        <meta name="description" content="A responsive folded flyer-like restaurant menu with some 3D" />
        <meta name="keywords" content="css3, perspective, 3d, jquery, transform3d, responsive, template, restaurant, menu, leaflet, folded, flyer, concept" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link href='http://fonts.googleapis.com/css?family=Raleway:300,500|Arvo:700' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
		<!--[if lte IE 8]><style>.support-note .note-ie{display:block;}</style><![endif]-->
    </head>
    <body>
        <div class="container">
		
			
			
			<header>
			
				<h1><span>Restaurant Menu</span><br><br><span>Check the boxes against the food items you want to order</span></h1>
				
				
				<div class="support-note"><!-- let's check browser support with modernizr -->
					<span class="no-cssanimations">CSS animations are not supported in your browser</span>
					<span class="no-csstransforms">CSS transforms are not supported in your browser</span>
					<span class="no-csstransforms3d">CSS 3D transforms are not supported in your browser</span>
					<span class="no-csstransitions">CSS transitions are not supported in your browser</span>
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			
			
			<section class="main">

				<div id="rm-container" class="rm-container">

					<div class="rm-wrapper">
								


						<div class="rm-cover">

							<div class="rm-front">
							
								<div class="rm-content">
								<p class="new123" ><?php echo "You are now logged in as ".$_SESSION['email'];	?></p>
								<a href="logout.php">Logout</a>

									<div class="rm-logo"></div>
									<h2>Sharma Ji da 7 star Dhaba</h2>
									
									<h3>Fine Dining &amp; Gourmet</h3>
									
									<div class="rm-info">
									<h2><a href="#" class="rm-button-open">Click for Menu</a></h2></div>
									<div class="rm-info">
										<p>
										<strong>Sharma Ji Da Dhaba</strong><br>
										 SCO-236, Sec 35-B, Chandigarh<br>
										<br>
										<strong>Phone</strong> 7837731964<br>
										</p>
									</div>
									<div class="rm-info">
										<form action="order_result.php">
										<input type="submit" name="submit" value="Click to view your order"><h1></h1>
										</form>
									</div>

								</div><!-- /rm-content -->
							</div><!-- /rm-front -->

							<div class="rm-back">
								<div class="rm-content">
									<h4>Appetizers</h4>
									<dl><form action="" method="post">
										
										
										<dt>Bruschetta Blue Delight &nbsp<input type="checkbox" id="bruschetta" name="bruschetta" value="bruschetta">&nbsp 10$ </dt>
										<dd>Blue cheese and citrus bruschetta </dd><br>
										<label for="bruschetta"></label>

										<dt>Pomme Dulse &nbsp<input type="checkbox" id="pomme" name="pomme" value="pomme">&nbsp 10$</dt>
										<dd>Baked potatoes with crisped dulse</dd><br>
										<label for="pomme"></label>

										<dt>Savory Party Bread &nbsp<input type="checkbox" id="savory" name="savory" value="savory">&nbsp 10$</dt>
										<dd>Sliced loafs of cheesy, oniony bread</dd><br>
										<label for="savory"></label>

										<dt>Appetizer Tortilla Pinwheels &nbsp<input type="checkbox" id="appetizer" name="appetizer" value="appetizer">&nbsp 10$</dt>
										<dd>cream cheese pinwheels</dd><br>
										<label for="appetizer"></label>

										
										<dt>Focaccia di Carciofi &nbsp<input type="checkbox" id="focaccia" name="focaccia" value="focaccia">&nbsp 10$</dt>
										<dd>Artichoke focaccia with fresh thyme</dd>
										<label for="focaccia"></label>
									</dl>

									<h4>Salads &amp; More</h4>
									<dl>
										<dt>Green Delight &nbsp<input type="checkbox" id="green" name="green" value="green">&nbsp 10$</dt>
										<dd>Watercress, frisee and avocado salad</dd><br>
										<label for="green"></label>

										<dt>Gourmet Yam Taohu &nbsp<input type="checkbox" id="gourmet" name="gourmet" value="gourmet">&nbsp 10$</dt>
										<dd>Thai tofu salad yam taohu</dd><br>
										<label for="gourmet"></label>

										
									</dl>
								</div><!-- /rm-content -->
								<div class="rm-overlay"></div>

							</div><!-- /rm-back -->

						</div><!-- /rm-cover -->

						<div class="rm-middle">
							<div class="rm-inner">
								<div class="rm-content">
								
									<h4>Main Courses</h4>
									<dl>
										<dt>Crispy Gnocchi with Arugula &nbsp<input type="checkbox" id="crispy" name="crispy" value="crispy">&nbsp 10$</dt>
										<dd>Pan-fried potato gnocchi with arugula salad</dd><br>
										<label for="crispy"></label>

										<dt>Sea Palm Spicy Peanut Curry &nbsp<input type="checkbox" id="sea" name="sea" value="sea">&nbsp 10$</dt>
										<dd>Tender noodles, seasoned vegetables, spicy peanut curry</dd><br>
										<label for="sea"></label>

										<dt>Lentil Caviar &amp; Arugula &nbsp<input type="checkbox" id="lentil" name="lentil" value="lentil">&nbsp 10$</dt>
										<dd>Black lentil curry with arugula salad</dd><br>
										<label for="lentil"></label>

										<dt>Tamari-Maple Glazed Tofu &nbsp<input type="checkbox" id="tamari" name="tamari" value="tamari">&nbsp 10$</dt>
										<dd>Wasabi emulsion, sesame seeds and scallions</dd><br>
										<label for="tamari"></label>

										<dt>Maple Barbeque Tofu &nbsp<input type="checkbox" id="maple" name="maple" value="maple">&nbsp 10$</dt>
										<dd>Grilled marinated tofu, maple barbeque</dd><br>
										<label for="maple"></label>
																													
										<dt>Luxur Oyster &nbsp<input type="checkbox" id="luxur" name="luxur" value="luxur">&nbsp 10$</dt>
										<dd>King oyster mushroom with roasted cherries and sage</dd><br>
										<label for="luxur"></label>
										
										<dt>Rigatoni di Cavolfiore &nbsp<input type="checkbox" id="rigatoni" name="rigatoni" value="rigatoni">&nbsp 10$</dt>
										<dd>Rigatoni with roasted cauliflower and spicy tomato sauce</dd><br>
										<label for="rigatoni"></label>
										
										<dt>Saffron Chana Secret &nbsp<input type="checkbox" id="saffron" name="saffron" value="saffron">&nbsp 10$</dt>
										<dd>Saffron chickpea stew with grilled porcini</dd>
										<label for="saffron"></label>
									</dl>
								</div><!-- /rm-content -->
								<div class="rm-overlay"></div>
							</div><!-- /rm-inner -->
						</div><!-- /rm-middle -->

						<div class="rm-right">

							<div class="rm-front">
								
							</div>

							<div class="rm-back">
								<span class="rm-close">Close</span>
								<div class="rm-content">
									<h4>Desserts</h4>
									<dl>
										<dt>French Plum Crepes &nbsp<input type="checkbox" id="french" name="french" value="french">&nbsp 10$</dt>
										<dd>Crepes with roasted french plums, yogurt</dd><br>
										<label for="french"></label>
										
										<dt>Butterscotch Pudding &nbsp<input type="checkbox" id="butterscotch" name="butterscotch" value="butterscotch">&nbsp 10$</dt>
										<dd>Butterscotch pudding with bittersweet ganache and caramelize white chocolate</dd><br>
										<label for="butterscotch"></label>
										
										<dt>Chocolate Gâteau de Crêpes &nbsp<input type="checkbox" id="chocolate" name="chocolate" value="chocolate">&nbsp 10$</dt>
										<dd>Gâteau de crêpes with chocolate pastry cream and dulce de leche</dd><br>
										<label for="chocolate"></label>
										

										<dt>Dutch Baby With Sauteed Apples &nbsp<input type="checkbox" id="dutch" name="dutch" value="dutch">&nbsp 10$</dt>
										<dd>Dutch ginat oven-baked pancakes with sauteed apples</dd><br>
										<label for="dutch"></label>
										
										<dt>Blueberry Napoleon &nbsp<input type="checkbox" id="blueberry" name="blueberry" value="blueberry">&nbsp 10$</dt>
										<dd>Blueberry Napoleon with crème fraîche and raspberry powder</dd><br>
										<label for="blueberry"></label>
										
										<dt>Rings of Saturn &nbsp<input type="checkbox" id="rings" name="rings" value="rings">&nbsp 10$</dt>
										<dd>Saturn peach on challah french toast</dd><br>
										<label for="rings"></label>
										
										<dt>Classic Atayef &nbsp<input type="checkbox" id="classic" name="classic" value="classic">&nbsp 10$</dt>
										<dd>Syrian ricotta-filled dessert pancakes</dd><br>
										<label for="classic"></label>
									</dl>
									<br>
									<br>
									<div class="rm-order">
										<input type="submit" name="order" value="Order->">
										
									</div>
								</div><!-- /rm-content -->
							</div><!-- /rm-back -->

						</div><!-- /rm-right -->
					</div><!-- /rm-wrapper -->

				</div><!-- /rm-container -->

			</section>
			
        </div>
		<!-- jQuery if needed -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/menu.js"></script>
		<script type="text/javascript">
			$(function() {

				Menu.init();
			
			});
		</script>
    </body>
</html>
