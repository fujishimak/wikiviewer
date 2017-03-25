<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initialscale=1">
	<title>FCC - Wikipedia Viewer</title>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

	<link rel="stylesheet" type="text/css" href="css/theme.css">
</head>
<body>

<div id="wrapper" class="container-fluid">
  <div id="top" class="row">
    <div class="logo-box"><img class="logo" src="http://www.pharmacy.qu.edu.sa/en/Services/PublishingImages/wiki%20pedia.png" alt="Wikipedia logo"/></div>
    <div><h1>WIKIPEDIA VIEWER</h1></div>
  </div>
  <!-- <form id="dialog"> -->
  <div id="controls" class="row">
    <div id="search" class="col-md-8"><span id="searchbox-wrapper"><input type="search" id="searchbox" class="form-control" placeholder="I'm looking for..." size="100"/><span>&times;</span></span></div>
    <div><button id="searchBtn" class="btn btn-default form-control"><i class="fa fa-search" aria-hidden="true"></i></button></div>
    <div><button id="randomBtn" class="btn btn-default form-control"><i class="fa fa-random" aria-hidden="true"></i></div>
  </div>
 <!-- </form>  -->
    
    <div id="results" class="row"></div>
 
    <div id="info" class="row">&copy;<script type="text/javascript"> document.write(new Date().getFullYear());</script> Built by Joshua Thomas, ManAYaad Inc.</div>
</div>  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="js/functions.js"></script>
</body>
</html>