<?php require("includes/bd.php");
	require("includes/classeUsuari.php");
	if(!isset($_GET["centre"]))
{
	$centre = "portada";
}
	else{
		$centre = $_GET["centre"];
		}
?>

<!DOCTYPE html>
<html lang="en"><!-- #BeginTemplate "/Templates/index.dwt.php" --><!-- DW6 -->
<head>
  <meta charset="utf-8">
  <title>GamingTorrents!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append '#!watch' to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/cssindex.css">
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel=" shortcut icon" type="image/png" href="img/favicon.png">
  <link rel="stylesheet" type="text/css" href="css/cssindex.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>

<header class="navbar navbar-bright navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/" class="navbar-brand">Bootply</a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="#sec">Get Started</a>
        </li>
        <li>
          <a href="#sec">Edit</a>
        </li>
        <li>
          <a href="#sec">Visualize</a>
        </li>
        <li>
          <a href="#sec">Prototype</a>
        </li>
      </ul>
    </nav>
  </div>
</header>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-2 column menuFijo">
                <?php include("includes/logo.php"); ?>
                <?php include("includes/izquierdo.php"); ?>
				</div>
				<div class="col-md-8 column medio">
                <?php include("paginas/".$centre.".php"); ?>
				</div>
				<div class="col-md-2 column derecho">
                <?php include("includes/registro.php"); ?>
                <?php include("includes/derecho.php"); ?>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<!-- #EndTemplate --></html>