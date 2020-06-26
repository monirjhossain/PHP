
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Contact Form</title>
  </head>
  <body>
   	<h2 align="center">Contact form</h2><hr>
	<div class="container">
		<div class="col-md-6">
		<form action="contactForm.php" method="post">
			<div class="form-group">
				<label for="">Full Name</label>
				<input type="text" class="form-control "name="name" placeholder="Enter your full name">
			</div>
			<div class="form-group">
				<label for="">Email Address</label>
				<input type="email" class="form-control "name="email" placeholder="Enter your email">
			</div>
			<div class="form-group">
				<label for="">Phone Number</label>
				<input type="tel" class="form-control "name="phone" placeholder="Enter your phone number">
			</div>
			<div class="form-group">
				<label for="">Messege</label>
				<textarea name="messege" class="form-control" id="" cols="30" rows="10" placeholder="Write your messege"></textarea>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" name="submit" value="SUBMIT">
			</div>
		</form>
		</div>
	</div>
	


	







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>