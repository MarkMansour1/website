<!-- begin contact -->
<div id="contact" class="contact">
	<div class="container">
		<div class="text-center">
			<h2>Get In Touch</h2>
			<hr>
		</div>
		<form action="php/sendmail.php" method="post">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label><i class="fas fa-fw fa-user mr-2"></i>Your Name</label>
						<input type="text" class="form-control" name="name" required="required">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label><i class="fas fa-fw fa-envelope mr-2"></i>Email</label>
						<input type="email" class="form-control" name="email" required="required">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label><i class="fas fa-fw fa-inbox mr-2"></i>Message/Details</label>
						<textarea class="form-control" name="text" rows="4" cols="80" required="required"></textarea>
					</div>
				</div>
			</div>
			<div class="form-group text-center">
				<button class="btn" type="sumbit">Send</button>
			</div>
		</form>
	</div>
</div>
<!-- end contact -->

<!-- Footer -->
<footer>
	<div class="container text-center text-md-left">
		<div class="row">
			<img src="img/logo_light.png" class="d-md-none">
			<div class="d-none d-md-block col-md-3">
				<h6>Mark Mansour</h6>
				<hr>
				<p class="footer-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="d-none d-md-block col-md-3">
				<h6>Navigation</h6>
				<hr>
				<p><i class="fas fa-fw fa-home mr-2"></i><a href="#home">Home</a></p>
				<p><i class="fas fa-fw fa-user mr-2"></i><a href="#about">About</a></p>
				<p><i class="fas fa-fw fa-shopping-cart mr-2"></i><a href="#services">Services</a></p>
				<p><i class="far fa-fw fa-address-book mr-2"></i><a href="#contact">Contact</a></p>
				<!-- <p><i class="fas fa-fw fa-sign-in-alt mr-2"></i><a href="http://account.markmansour.co.uk">Log In</a></p> -->
			</div>
			<div class="d-none d-md-block col-md-3">
				<h6>Services</h6>
				<hr>
				<p><a href="#">Website Design</a></p>
				<p><a href="#">SEO & Marketing</a></p>
				<p><a href="#">Ecommerce</a></p>
				<p><a href="#">Logo Design</a></p>
			</div>
			<div class="col-md-3">
				<h6>Contact</h6>
				<hr>
				<p><i class="fas fa-fw fa-envelope mr-2"></i><a href="mailto:contact@markmansour.co.uk">contact@markmansour.co.uk</a></p>
				<p><i class="fas fa-fw fa-phone mr-2"></i><a href="tel:+44 77699 73211">+44 77699 73211</a></p>
				<p><i class="fab fa-fw fa-twitter mr-2"></i><a href="https://www.twitter.com/_markmansour" target="_blank">Twitter</a></p>
				<p><i class="fab fa-fw fa-instagram mr-2"></i><a href="https://www.instagram.com/mark__mansour" target="_blank">Instagram</a></p>
			</div>
		</div>
	</div>
	<hr class="socket">
	<div class="container text-center">
		<div class="row">
			<div class="col-md-4 text-md-left">
				<p>&copy; Copyright Mark Mansour <?php echo date('Y') ?></p>
			</div>
			<div class="col-md-4">
				<p><a href="">Terms and Conditions</a></p>
			</div>
			<div class="col-md-4 text-md-right">
				<p><a href="">Privacy Policy</a></p>
			</div>
		</div>
	</div>
</footer>
<!-- Footer -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#home">
  <i class="fas fa-angle-up"></i>
</a>

<script src="js/jquery/jquery.min.js"></script>
<script src="js/jquery-easing/jquery.easing.min.js"></script>
<script src="bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
<script src="js/script.js"></script>

</body>
</html>
