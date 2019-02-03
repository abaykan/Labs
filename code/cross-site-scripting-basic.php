<html>
<head>
<title>Cross Site Scripting</title>
<link rel="shortcut icon" href="https://abaykan.com/wp-content/uploads/2019/01/favicon.png">
<!-- Special thanks for Tobin Brown for his Awesome Bootstrap Theme -->
<link href="https://brobin.github.io/hacker-bootstrap/css/hacker.css" rel="stylesheet">
</head>
<body>
<div class="container">
<h1>Cross Site Scripting | abaykan.com</h1>
<hr>
<form class="form-inline my-2 my-lg-0" action="?query=" method="get">
    <input class="form-control mr-sm-2" type="text" placeholder="keyword ..." name="query">
    <button class="btn btn-primary my-2 my-sm-0" type="submit">Cari</button>
</form>
<?php
error_reporting(0); // Menyembunyikan report error.
header('X-XSS-Protection: 0'); // Agar bisa memunculkan alert pada Google Chrome.
$q = $_GET['query'];
if(isset($_GET['query'])) {
	echo "Hasil pencarian: ", $q;
}
?>
</div>
</body>
</html>
