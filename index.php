<?php 
	include 'pages/header.php';
?>
<div class="col-md-12 text-center" style="margin-top: 2%">
	<img src="img/logo.png" alt="" width="180" height="60">
</div>
<!-- Map and Contact form -->
		<div class="col-md-12" style="margin-top: 1% ">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div style="width: 100%;margin-top: 3%">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.5751576336884!2d76.84761151496879!3d23.076032084925984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcb270a9fb275a8b3!2sTeam%20AVITAR!5e0!3m2!1sen!2sin!4v1571785265778!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<h3><strong><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</strong></h3>
					<span class="text-warning"><i class="fa fa-info"></i> Feel free to drop your message! Please wait for two days for a reply!</span>
					<br>
					<form action="page.php" method="POST">
					    <div class="form-group">
						  <label for="name">Full Name:</label>
						  <input type="text" class="form-control" placeholder="Enter Your Full Name" id="name" name="name" required="">
						</div>
						<div class="form-group">
						  <label for="email">Email address:</label>
						  <input type="email" class="form-control" placeholder="Enter Your Email address" id="email" name="email" required="">
						</div>
						<div class="form-group">
						  <label for="subject">Subject:</label>
						  <input type="text" class="form-control" id="subject" placeholder="Enter Your Subject" name="subject" required="">
						</div>
						<div class="form-group">
						  <label for="message">Message:</label>
						  <textarea type="text" class="form-control" id="message" placeholder="Enter Your Feedback" name="message" required=""></textarea>
						</div>
						<button class="btn btn-success" type="submit">Submit</button>
					</form>
				</div>		
		</div>
		
<?php 
	include 'pages/footer.php';
?>
