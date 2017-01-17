<!DOCTYPE html>
<html>
	<head>
		<title>ComicCurator</title>
	</head>
	
	<body>
	<div><h3>ComicCurator</h3></div>
	<div><h1>Enter Barcode to search:</h1></div>
	
<form action = "search.php" method = "post">
<div class = "form-group">
<input autocomplete="off" autofocus class="form-control" name="barcode" placeholder="UPC" type="text"/>
</div>
<div class = "form-group">
<button class = "btn btn-default" type = "submit">
            <span aria-hidden="true" ></span>
            Search
            </button>
</div>
</form>

</html>