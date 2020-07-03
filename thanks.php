<?php 
	include 'pages/header.php';
?>
<style>
body{
	overflow: hidden;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%;
  border-radius: 5px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 2px 16px;
}
</style>
<div class="col-md-12">
<div class="col-md-4"></div>
<div class="col-md-4" style="margin-top: 8%">
<div class="card">
  <img src="img/Thankyou.png" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>Thank You for submiting you message</b></h4>
    <a href="index.php"><i class="fa fa-arrow-left"></i> Back to Contact</a>
  </div>
</div>
</div>
<div class="col-md-3"></div>
</div>
<?php 
	include 'pages/footer.php';
?>