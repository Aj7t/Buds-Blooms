<?php
	// if already logged in, go to products page
	if(isset($_SESSION["email_id"])){
		header("location: Index.php");
	}

	require "Includes/common.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Flower Power</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="Style.css">
    
</head>
<body>
    <?php
	require 'Includes/Header.php';
    ?>
    <!-- Carousel code-->
    <div class="carousel">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
          <img src="images/Lily.jpeg" alt="Rose" style="width:100%;">
      </div>

      <div class="item">
          <img src="images/Rose.jpg" alt="lily" style="width:100%;">
      </div>
    
      <div class="item">
          <img src="images/Hepatica.jpeg" alt="Natural lotus" style="width:100%;">
      </div>
      <div class="item">
          <img src="images/Lotus.jpg" alt="Hepatica-Blue color" style="width:100%;">
      </div>
      <div class="item">
          <img src="images/Daisy.jpeg" alt="Daisies daisy" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Products -->
<?php
require 'Includes/Check-if-added.php';
?>
<div class="jumbotron">
    <center>
        <h1> Give the Spirit of Autumn</h1>
        <p>Crafted with the colors of the season, delight them with flowers</p>
    </center>
</div>
<div class="container-fluid jumbotron">
<div class="container panel-margin">
    <h3>Valentine Collection</h3>
    <div class="row text-center">
	<div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="images/Valentine_1.jpg" alt="camera">
		<div class="caption">
                    <h3>Roses</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 400</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(1)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=1" name="add" value="add" class"btn btn-primary">Add to cart</a>
                    <?php }
                    } ?>
		</div>
            </div>
	</div>
	<div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="images/Valentine_2.jpg" alt="camera">
		<div class="caption">
                    <h3>Chocolate Love Bouquet</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 600</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(1)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=2" name="add" value="add" class"btn btn-primary">Add to cart</a>
                    <?php }
                    } ?>
		</div>
            </div>
	</div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="images/Valentine_3.jpg" alt="camera">
		<div class="caption">
                    <h3>Bundle of Love</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 2000</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(1)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=3" name="add" value="add" class"btn btn-primary">Add to cart</a>
                    <?php }
                    } ?>
		</div>
            </div>
	</div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="images/Valentine_4.jpg" alt="camera">
		<div class="caption">
                    <h3>Love with Teddy</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 1000</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(1)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=4" name="add" value="add" class"btn btn-primary">Add to cart</a>
                    <?php }
                    } ?>
		</div>
            </div>
	</div>
    </div>
    <h3>Anniversary Collection</h3>
  <div class="row text-center">
	<div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="images/Anniversary.jpg" alt="camera">
		<div class="caption">
                    <h3>Rose with lilies</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 300</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(1)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=5" name="add" value="add" class"btn btn-primary">Add to cart</a>
                    <?php }
                    } ?>
		</div>
            </div>
	</div>
	<div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="images/Anniversary_2.jpg" alt="camera">
		<div class="caption">
                    <h3>Rose Pot</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 300</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(1)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=6" name="add" value="add" class"btn btn-primary">Add to cart</a>
                    <?php }
                    } ?>
		</div>
            </div>
	</div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="images/Anniversary_3.jpg" alt="camera">
		<div class="caption">
                    <h3>Flower Delight</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 500</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(1)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=7" name="add" value="add" class"btn btn-primary">Add to cart</a>
                    <?php }
                    } ?>
		</div>
            </div>
	</div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="images/Anniversary_4.jpg" alt="camera">
		<div class="caption">
                    <h3>Anniversary Combo</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 2000</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(1)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=8" name="add" value="add" class"btn btn-primary">Add to cart</a>
                    <?php }
                    } ?>
		</div>
            </div>
	</div>
   </div>
</div>
</div>
<!-- Footer -->
<?php
    require 'Includes/Footer.php';
?>
</body>
</html>