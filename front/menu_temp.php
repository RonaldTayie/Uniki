<?php
//Get a menu forom the temporar Json file.
$file = dirname(__FILE__)."\menu.json";
if(file_exists($file)){
	if(file_get_contents($file)!=null){
		$decode = json_decode(file_get_contents($file),true);
		//Get the list of categories.
		$Categories = explode("/",$decode["Categories"]);
		$Meals = $decode["Meals"];
		//Load meals using the $_POST['meals'] variable set
		$To_Load  = [];
		if(strtolower($_SESSION['Menu'])=='all'){
			$To_Load = $Meals;
		}else{
			for ($i=0; $i < sizeof($Meals); $i++) { 
				if(strtolower($Meals[$i]["Category"])==strtolower($_SESSION['Menu'])){
					$To_Load [] = $Meals[$i];
				}
			}
		}
	}

}else{
}

for ($i=0; $i < sizeof($To_Load) ; $i++) { 
	print_r('
<li>
	<div class="container">
	  <img src="img/'.$To_Load[$i]["img"].'" class="foodItem">
	  <p>'.$To_Load[$i]["Description"].'</p>
	  <h5 align="right" class="text-warning" >R '.$To_Load[$i]["Price"].'</h5>
	  <span class="badge" >Category : '.$To_Load[$i]["Category"].'</span>
	</div>
</li>');
}
?>