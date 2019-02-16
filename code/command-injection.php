<?php
error_reporting(0);
?>
<html>
<head>
<title>Command Injection</title>
<link rel="shortcut icon" href="https://abaykan.com/wp-content/uploads/2019/01/favicon.png">
<!-- Special thanks for Tobin Brown for his Awesome Bootstrap Theme -->
<link href="https://brobin.github.io/hacker-bootstrap/css/hacker.css" rel="stylesheet">
</head>
<body>
<div class="container">
<h1>Command Injection | abaykan.com</h1>
<hr>
<h3>Whois Domain Tool</h3>
<form class="form-inline my-2 my-lg-0" action="?domain=" method="get">
    <input class="form-control mr-sm-2" type="text" style="width: 300px;" placeholder="<?php echo $_GET['domain'];?>" name="domain">
    <button class="btn btn-primary my-2 my-sm-0" type="submit">Cari</button>
</form>
<?php
if (isset($_GET['domain'])) {
	echo "<pre class='bg-default'>";
	$domain = $_GET['domain'];
	$whois=system("whois {$domain}");
	echo $whois;
	echo "</pre>";
}
?>
</div>
</body>
</html>
