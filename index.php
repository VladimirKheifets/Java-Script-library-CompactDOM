<?
if($_GET["t"]>3)
{
	echo "Hallo! Test{$_GET["t"]} is OK";
	exit;
}
if($_GET["sel"])
{	
	$identifiers = timezone_identifiers_list();
	foreach ($identifiers as $value) 
	{
		$tmp = explode("/",$value);
		if($tmp[1])
		{
			$city=$tmp[1];
			if($tmp[2]) $city.="/".$tmp[2];
			$continentCity[$tmp[0]][] = $city;		
		}	
	}
	echo json_encode((object)array_keys($continentCity));
	exit;
}
$title = "Demo Java Script library CompactDOM";
$desc = "Java Script library CompactDOM helps to access the DOM elements,provides the ability to access the attributes and content of elements and manipulate elements";
$keyw = "Java Script,library CompactDOM,DOM elements";
echo <<<HTML
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, user-scalable=0" >
<meta name="description" content="$desc">
<meta name="keywords" content="$keyw">
<meta name="author" content="Vladimir Kheifets">
<title>Demo Java Script library CompactDOM</title>
<link rel="stylesheet" href="modal.css">
<link rel="stylesheet" href="index.css">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<script type="text/javascript" src="index.js"></script>
</head>
<body>
<div align="center">	
<h2>$title</h2>
<div>
HTML;
if($_GET['la'])  echo "Hallo! Test redirect language: ".$_GET['la'];
else if(isset($_GET["t"]))
{
	echo "Hallo! Test{$_GET["t"]} is OK";	
}
?>
</div>
</div>
<form id="a" action="?t=2" method="post"></form>
<div class="lrb RB">
	<div class="RB">
		<button id="test1" >redirect</button>
		<button id="test2" >submit form by tag name to self</button>
		<button id="test3" >submit form by id form to self</button>
		<button id="test4" >ajax request to target to div</button>
		<button id="test5" >ajax request to target callback function viewModal</button>
		<button id="test6" >ajax request json to target callback function createSelect</button>
	</div>
	<div id="b" ></div>	
</div>
</body>
</html>
