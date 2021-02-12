<?php

//Load the menu list from the json file;
$file = dirname(__FILE__)."\menu.json";
if(file_exists($file) & file_get_contents($file) !=null){
	$decode = json_decode(file_get_contents($file),true);

	$Categories = explode("/",strtolower($decode['Categories']));

	$Meals = $decode['Meals'];

	//category based array objects;

	$all = [];
	$breakfast = [];
	$lunch = [];
	$dinner = [];

	//Assign using the Category

	for ($i=0; $i < sizeof($Meals) ; $i++) { 
		if(in_array(strtolower($Meals[1]['Category']), $Categories)){

			$all [] = $Meals[$i];

			if(strtolower($Meals[$i]['Category'])=='breakfast'){
				$breakfast[] = $Meals[$i];
			}
			if(strtolower($Meals[$i]['Category'])=='dinner'){
				$dinner[] = $Meals[$i];
			}
			if(strtolower($Meals[$i]['Category'])=='lunch'){
				$lunch[] = $Meals[$i];
			}

		}
	}

}
//Print the data in categories packing in <ul>

#Breakfast

if($breakfast != null){
	echo '<ul id="breakfast">';
	for ($i=0; $i < sizeof($breakfast) ; $i++) { 
		print_r('<li>
	<div class="container">
	  <img src="img/'.$breakfast[$i]["img"].'" class="foodItem">
	  <p>'.$breakfast[$i]["Description"].'</p>
	  <h5 align="right" class="text-warning" >R '.$breakfast[$i]["Price"].'</h5>
	  <span class="badge" >Category : '.$breakfast[$i]["Category"].'</span>
	</div>
</li>');
	}
	echo '</ul>';
}
if($lunch != null){
	echo '<ul id="lunch">';
	for ($i=0; $i < sizeof($lunch) ; $i++) { 
		print_r('<li>
	<div class="container">
	  <img src="img/'.$lunch[$i]["img"].'" class="foodItem">
	  <p>'.$lunch[$i]["Description"].'</p>
	  <h5 align="right" class="text-warning" >R '.$lunch[$i]["Price"].'</h5>
	  <span class="badge" >Category : '.$lunch[$i]["Category"].'</span>
	</div>
</li>');
	}
	echo '</ul>';
}
if($dinner != null){
	echo '<ul id="dinner">';
	for ($i=0; $i < sizeof($dinner) ; $i++) { 
		print_r('<li>
	<div class="container">
	  <img src="img/'.$dinner[$i]["img"].'" class="foodItem">
	  <p>'.$dinner[$i]["Description"].'</p>
	  <h5 align="right" class="text-warning" >R '.$dinner[$i]["Price"].'</h5>
	  <span class="badge" >Category : '.$dinner[$i]["Category"].'</span>
	</div>
</li>');
	}
	echo '</ul>';
}

?>