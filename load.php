<?php
	include_once('conn.php');
	$limit = 21;
	$page = (isset($_POST["page"]))?(int)$_POST["page"]:1;
	$start_li = ($page-1)*$limit;
	
	$price1 = $price2 = 0;
	$price1 = (isset($_POST["price1"]))?$_POST["price1"]:0;
	$price2 = (isset($_POST["price2"]))?$_POST["price2"]:0;

	$start = $to = $range = "";
	if($price1==0 && $price2!=0)
	{
		// >100
		$range = "where price>=101";
	}
	else if($price1!=0 && $price2==0)
	{
		// <100
		$range = "where price<100";
	}
	else
	{
		//all
		$range = "";
	}
	$field = (isset($_POST["field"]))?$_POST["field"]:"country";
	$order = (isset($_POST["order"]))?$_POST["order"]:"ASC";

	$sql = "select * from wine ".$range." order by ".$field.' '.$order." limit ".$start_li.",".$limit;
//	echo $sql;


   $stmt = $dbhandler->prepare($sql);
    $stmt->execute();
    $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
    //		echo "start".$start."page".$page;
			 foreach($rs as $wine)
			 {
			 	$loc = "images/wines/".rand(0,24).".jpg";
				
				$_id = "card-".(string)$wine["id"];
			 	$field1 = $field2 = $field3 = $field4 = $field5 = "";
				if(!empty($wine['province']))
				{
					$field1 = "<tr class='table-primary'><td>Province</td><td>". $wine["province"]. "</td></tr>";
				}
				if(!empty($wine['region_1']))
				{
					$field2 = '<tr class="table-success"><td>Region 1 </td><td>'.$wine['region_1'].'</td></tr>';
				}
				if(!empty($wine['region_2']))
				{
					$field3 = '<tr class="table-danger"><td>Region 2 </td><td>'.$wine['region_2'].'</td></tr>';
				}
				if(!empty($wine['designation']))
				{
					$field4 = '<tr class="table-secondary"><td>Designation</td><td>'.$wine['designation'].'</td></tr>';
				}
				if(!empty($wine['country']))
				{
					$field5 = "<tr class='table-warning'><td>Country</td><td>". $wine["country"]. "</td></tr>";
				}
			 	echo '
			 	<div class="card" data-toggle="collapse" data-target="#'.$_id.'">
			 		<div class="card-header text-center">
			 			<h4 class="card-title">'.$wine["variety"].'</h4>
			 		</div>
			 		<button class="btn btn-dark">Points : '.$wine['points'].'</button>
    				<img class="card-img-top" src="'.$loc.'" alt="Card image cap">    				    				
    				<div class="card-body collapse " id="'.$_id.'">
    					<h6>Description :</h6>
    					<p style="font-size: 1.2em;"> '.$wine['description'].' </p>    	
    					
    					<table class="table">
    
    <tbody>   
    	'.$field5.'
    	'.$field4.'
    	'.$field1.'
    	'.$field2.'
    	'.$field3.'
    	
      <tr class="table-info">
        <td>Winery</td>
        <td>'.$wine['winery'].'</td>
      </tr>      
    </tbody>
  </table>
    				</div>
    				<div class="card-footer">
    					<h2 class="card-title float-left">$ '.$wine["price"].'</h2>

    					<button class="btn btn-success float-right">About</button>
    					</button>
    				</div>

  				</div>';
			 	//echo "<br>".$wine["id"]."Varity : ".$wine["variety"];
			 }
?>