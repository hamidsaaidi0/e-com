<?php include('header.php') ?>
<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Men</a></li>
						<li class="breadcrumb-item"><a href="#">Accessories</a></li>
						<li class="breadcrumb-item active" aria-current="page">Classic Crew Neck Sweatshirt</li>
					</ol>
				</div><!-- End .container -->
			</nav>

			<div class="page-header">
				<div class="container">
					<h1>Login and Create Account</h1>
				</div><!-- End .container -->
			</div><!-- End .page-header -->

			<div class="container">
				<div class="row row-sparse">
					<div class="col-md-6">
						<div class="heading">
							<h2 class="title">Login</h2>
							<p>If you have an account with us, please log in.</p>
						</div><!-- End .heading -->

						<form action="#">
							<input type="email" class="form-control" placeholder="Email Address" required>
							<input type="password" class="form-control" placeholder="Password" required>

							<div class="form-footer">
								<button type="submit" class="btn btn-primary">LOGIN</button>
								<a href="forgot-password.html" class="forget-pass"> Forgot your password?</a>
							</div><!-- End .form-footer -->
						</form>
					</div><!-- End .col-md-6 -->

					<div class="col-md-6">
						<div class="heading">
							<h2 class="title">Create An Account</h2>
							<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
						</div><!-- End .heading -->

						<form action="#">
							<input type="text" class="form-control" placeholder="First Name" required>
							<input type="text" class="form-control" placeholder="Middle Name" required>
							<input type="text" class="form-control" placeholder="Last Name" required>

							<h2>Login information</h2>
							<input type="email" class="form-control" placeholder="Email Address" required>
							<input type="password" class="form-control" placeholder="Password" required>
							<input type="password" class="form-control" placeholder="Confirm Password" required>

							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="newsletter-signup">
								<label class="custom-control-label" for="newsletter-signup">Sing up our Newsletter</label>
							</div><!-- End .custom-checkbox -->

							<div class="form-footer">
								<button type="submit" class="btn btn-primary">Create Account</button>
							</div><!-- End .form-footer -->
						</form>
					</div><!-- End .col-md-6 -->
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-5"></div><!-- margin -->
		</main><!-- End .main -->

<?php include('footer.php') ?>
