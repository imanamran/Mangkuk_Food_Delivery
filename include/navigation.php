<nav>
	<div class='wrapper'>
		<div class='logo'>
			<a href='index.php'><img alt="Mangkuk" class="mangkuk" src="images/logo.png" width="50" height="50"></a>
		</div>
		<input type="radio" name="slide" id='menu-btn'>
		<input type="radio" name="slide" id='cancel-btn'>
		<ul class='nav-links'>
			<li>
				<label for='cancel-btn' class='btn cancel-btn'>
					<img class="x" alt="X" src="images/x.png">
				</label>
			</li>
			<li><a href='index.php'>Home</a></li>
			<li>
				<a href='#' class='desktop-item'>Services</a>
				<input type="checkbox" id='showMega'>
				<label for='showMega' class="mobile-item">Services</label>
				<div class='mega-box'>
					<div class='content'>
						<div class='row'>
							<header><a href='food_delivery.php'>Food Delivery</a></header>
							<ul class='mega-links'>
								<li><a href='food_delivery.php#breakfast'>Breakfast</a></li>
								<li><a href='food_delivery.php#lunch'>Lunch</a></li>
								<li><a href='food_delivery.php#dinner'>Dinner</a></li>
								<li><a href='food_delivery.php#special'>Special</a></li>
							</ul>
						</div>
						
						<div class='row'>
							<header><a href='recipes.php'>Recipes</a></header>
							<ul class='mega-links'>
								<li><a href='recipes.php#ingridients'>Ingridients</a></li>
								<li><a href='recipes.php#videos'>Videos</a></li>
								<li><a href='recipes.php#tips&tricks'>Tips & Tricks</a></li>
								<li><a href='recipes.php#didyouknow'>Did you know?</a></li>
							</ul>
						</div>
						
						<div class='row'>
							<header><a href='booking.php'>Booking</a></header>
							<ul class='mega-links'>
								<li><a href='booking.php#whole-restaurant'>Whole restaurant</a></li>
								<li><a href='booking.php#rooms'>Rooms</a></li>
								<li><a href='booking.php#catering'>Catering</a></li>
								<li><a href='booking.php#kitchen-app'>Kitchen appliances</a></li>
							</ul>
						</div>
						
						<div class='row'>
							<header><a href='jobs.php'>Jobs</a></header>
							<ul class='mega-links'>
								<li><a href='jobs.php#manager'>Manager</a></li>
								<li><a href='jobs.php#chef'>Chef</a></li>
								<li><a href='jobs.php#cashier'>Cashier</a></li>
								<li><a href='jobs.php#janitor'>Janitor</a></li>
							</ul>
						</div>
					</div>
				</div>
			</li>
			<li>
				<a href='#' class='desktop-item'>About us</a>
				<input type="checkbox" id='showDrop'>
				<label for='showDrop' class="mobile-item">About Us</label>
					<ul class='drop-menu'>
						<li><a href='aboutus.php'>Mangkuk</a></li>
						<li><a href='aboutme.php'>Author</a></li>
					</ul>
			</li>
			<li><a href='enquiry.php'>Enquiry</a></li>
			<li><a href='Admin/login.php'>Admin</a></li>
			<li>
				<a href='#' class='desktop-item'>Enhancement</a>
				<input type="checkbox" id='showDrop'>
				<label for='showDrop' class="mobile-item">Enhancement</label>
					<ul class='drop-menu'>
						<li><a href="enhancement.php">Enhancement 1</a></li>
						<li><a href="enhancement2.php">Enhancement 2</a></li>
						<li><a href="phpenhancements.php">Enhancement 3</a></li>
					</ul>
			</li>
			<li><a href='disclaimer.php'>Disclaimer</a></li>
		</ul> 
		<label for='menu-btn' class='btn menu-btn'>
			<a> &#9776; </a>
		</label>
	</div>
</nav>