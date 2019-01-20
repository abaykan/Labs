<html>
<head>
<title>Local File Inclusion</title>
<!-- Special thanks for Tobin Brown for his Awesome Bootstrap Theme -->
<link href="https://brobin.github.io/hacker-bootstrap/css/hacker.css" rel="stylesheet">
</head>
<body>
<div class="container">
<h1>Local File Inclusion | abaykan.com</h1>
<div class="panel panel-primary">
<div class="panel-heading"><h3 class="panel-title">Source</h3></div>
<div class="panel-body">
<code>
$file = $_GET['page'];
require($file);
</code>
</div>
</div>
<hr>
<div class="panel panel-primary">
<div class="panel-heading"><h3 class="panel-title">Isi file: <?php echo $_GET['page'];?></h3></div>
<div class="panel-body">
<textarea class="form-control" rows="15" cols="136" style="resize: none;" readonly>
<?php
$file = $_GET['page'];
require($file);
?>
</textarea>
</div>
</div>
</div>
</body>
</html>
