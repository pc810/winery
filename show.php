<!DOCTYPE html>
<html>
<head>
	<?php include_once('include/head.php');?>
	<link rel="stylesheet" href="/winery/mycss/main.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Playball&display=swap" rel="stylesheet">	
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>


</head>
<body>
	<?php
	
	include_once('include/header.php');
	
	$limit = 21;
	$start = (isset($_GET["page"]))?((int)($_GET["page"])-1)*$limit:0;
	$page = (isset($_GET["page"]))?(int)$_GET["page"]:1;
//	$sql = "select * from wine limit $start,$limit";
 //   $stmt = $dbhandler->prepare($sql);
 //   $stmt->execute();
 //   $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
	?>
	</br></br></br></br>
	<div class="container-fluid">
	<div class="jumbotron rounded" style="padding-top: 1em; padding-bottom: 3.5em;">
		<nav aria-label="...">
		  <ul class="pagination">
		  	<?php if($page>=3){ ?>
		  	<li class="page-item">
		      <a id="link1" class="page-link" href="show.php?page=<?php echo $page-3;?>">Previous</a>
		    </li>
			<?php } ?>
			<?php if($page>=3){ ?>
		    <li class="page-item ">
		    	<a id="link2" class="page-link" href="show.php?page=<?= $page-1 ?>"> <?= $page-1 ?></a>
		    </li>
		<?php } ?>
		    <li class="page-item active">
		    	<a id="link3" class="page-link" href="show.php?page=<?= $page ?>"><?= $page ?></a>
		    </li>
		    <li class="page-item">
		    	<a id="link4" class="page-link" href="show.php?page=<?php echo $page+1; ?>"><?= $page+1 ?></a>
		    </li>
		    
		    <li class="page-item">
		      <a id="link5" class="page-link" href="show.php?page=<?php echo $page+3; ?>">Next</a>
		    </li>
		    
		  </ul>
		</nav>		 
		<div class="dropdown">
    		<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      			Price
    		</button>
    	<div class="dropdown-menu" style="padding: 5px;">
    		<div class="form-check">
    			<input type="checkbox" name="price1" value="1" class="form-check-input " id="price_100"
    			 	<?php 
    			 		if(isset($_GET["price1"]) && $_GET["price1"]=="1")
    			 		{
    			 			echo "checked";
    			 		}
    			 	?>
    			  >
    			<label class="form-check-label" for="price1-100"><$100</label>
  			</div>
  			<div class="form-check">
  				<input type="checkbox" name="price2" value="1" class="form-check-input " id="price_101"
  				<?php 
    			 		if(isset($_GET["price2"]) && $_GET["price2"]=="1")
    			 		{
    			 			echo "checked";
    			 		}
    			 	?>
  				>
    			<label class="form-check-label" for="price-101">+$100</label>
    		</div>
    	</div>
    	<div class="btn-group float-right" data-toggle="">
    		
  			<label class="btn btn-primary">
    			<input type="radio" name="order" id="option1" value="ASC" 
    			<?php 
    			 		if((isset($_GET["order"]) && $_GET["order"]=="ASC") || !isset($_GET["order"]))
    			 		{
    			 			echo "checked";
    			 		}
    			 	?>
    			> Ascending
  			</label>
  			<label class="btn btn-primary">
    			<input type="radio" name="order" id="option2" value="DESC"
    			<?php 
    			 		if(isset($_GET["order"]) &&  $_GET["order"]=="DESC")
    			 		{
    			 			echo "checked";
    			 		}
    			 	?>
    			> Descending
  			</label>
  		
		</div>
    	<div class="btn-group float-right" data-toggle=""  style="margin-right: 5px;">
    
  				<label class="btn btn-primary">
    				<input type="radio" name="field" value="country" id="option3" 
    				checked 
    				> Country
  				</label>
  				<label class="btn btn-primary">
    				<input type="radio" name="field"  value="variety"  id="option4"
    				<?php 
    			 		if(isset($_GET["field"])=="variety")
    			 		{
    			 			echo "checked";
    			 		}
    			 	?>
    				> Variety
  				</label>
  				<label class="btn btn-primary">
    				<input type="radio" name="field"  value="price" id="option5"
    				<?php 
    			 		if(isset($_GET["field"])=="price")
    			 		{
    			 			echo "checked";
    			 		}
    			 	?>
    				> Price
  				</label>
  	
			</div>
	<br><br><br>
	<br><br><br>
		<div class="card-columns my-card-columns" id="demo">
		 <br>
		</div>
		<input type="hidden" id="page" name="page" value="<?php echo $page;?>"/>
		<img onclick="scrollToTop()" src="images/arrow.png" style="width: 50px; height: 50px;"> 
  		
  <script type="text/javascript">
  	function scrollToTop() { 
            window.scrollTo(0, 0); 
        } 
  </script>
	</div>
</div>


</body>
</html>