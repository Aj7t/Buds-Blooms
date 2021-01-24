    <!--Sricky Navigation bar code -->
    <nav class="nav navbar-fixed-top navbar-inverse">
	<div class="container">
	<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sticky-nav">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
	</button>
            <a href="#" class="navbar-brand"><strong>Flower Power</strong></a>
	</div>
	<div class="collapse navbar-collapse" id="sticky-nav">
        <?php
            if(isset($_SESSION["email_id"])){
        ?>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                        <a href="Index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">Moods</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">MyAccount <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="setting.php">Setting</a></li>
                        <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">Contact Us</a>
                    </li>
		</ul>
            <?php
            }else{
            ?>
            <ul class="nav navbar-nav navbar-right">
		<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
            </ul>
            <?php
            }
            ?>
            </div>
	</div>
    </nav>