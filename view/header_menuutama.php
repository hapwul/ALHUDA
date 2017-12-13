<?php
$login=false;
if(isset($_SESSION['user'])) {
	$login=true;
}
?>

<head>
<title>SMP Al Huda Surabaya Admin Area</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="view/style.css">

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</head>

<h1>SMP Al Huda Surabaya Admin Area</h1>
<div id="menu">

<?php if($login==true): ?>
	<a href="logout.php">Logout</a>
<?php else: ?>
	<a href="login.php">Login</a>
<?php endif; ?>
</div>