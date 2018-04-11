<html>
  <head>

	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
	    <style>
      body {
	background-color:  #800000;
	font-family: Arial;
      }
    </style>
  </head>
     <body>

	<?php
		$coffeeNum = $_POST["coffeeNum"];
		$size = $_POST["size"];
		$creamNum = $_POST["creamNum"];
		$sugarNum = $_POST["sugarNum"];
		$coffeePrice = 0.0;
		$tax = 0.13;

	 if($coffeeNum == 0 || $size == "notPicked"){
		echo "<div class='container'>";
			echo "<p style='font-size: 40px; font-weight: bold; margin-top: 30px; color: lightyellow;'> Please go back to the order page to finish your order. </p>";
			echo '<p><a href="index.php" class="btn btn-warning" role="button">Go Back</a></p>';
		echo "</div>";
	 } else {
		echo "<p style='font-size: 50px; font-weight: bold; margin-top: 30px; text-align: center; color: lightyellow;'> Thanks for your order at NesCafe ! </p>";
	  
	  for($i = 0; $i < $coffeeNum; $i++){

		echo "<div style='margin: 20px; padding: 0; border: 3px lightyellow solid; background-color: #603813;'>";

		if ($size == "small"){
		  $coffeePrice = 2.3;
		  echo "<img src = 'images/cup.png' alt='small coffee' height ='25%'>";
		  if ($creamNum > 0) {
			echo "<img src = 'images/plus.png' alt='plus sign'>";
			for($j = 0; $j < $creamNum; $j++){
				echo "<img style='width: 150px; height: 150px;' src = 'images/cream1.png' alt='coffee cream'>";
			}
		  }
		  if ($sugarNum > 0) {
			echo "<img src = 'images/plus.png' alt='plus sign'>";
			for($k = 0; $k < $sugarNum; $k++){
				echo "<img style='width: 70px; height: 70px;' src = 'images/sugar.png' alt='sugar'>";
			}
		  }
		}
		
		else if ($size == "medium"){
		  $coffeePrice = 2.6;
		  echo "<img style='margin-left: -15px;' src = 'images/cup.png' alt='medium coffee' height ='35%'>";
		  if ($creamNum > 0) {
			echo "<img src = 'images/plus.png' alt='plus sign'>";
			for($j = 0; $j < $creamNum; $j++){
				echo "<img style='width: 150px; height: 150px;' src = 'images/cream1.png' alt='coffee cream'>";
			}
		  }
		  if ($sugarNum > 0) {
			echo "<img src = 'images/plus.png' alt='plus sign'>";
			for($k = 0; $k < $sugarNum; $k++){
				echo "<img style='width: 70px; height: 70px;' src = 'images/sugar.png' alt='sugar'>";
			}
		  }
		}

		else if ($size == "large"){
		  $coffeePrice = 2.9;
		  echo "<img style='margin-top: 9px; margin-bottom: 9px; margin-left: -30px; margin-right: -30px;' src = 'images/cup.png' alt='large coffee' height ='45%'>";
		  if ($creamNum > 0) {
			  echo "<img src = 'images/plus.png' alt='plus sign'>";
			  for($j = 0; $j < $creamNum; $j++){
				echo "<img style='width: 150px; height: 150px;' src = 'images/cream1.png' alt='coffee cream'>";
			  }
		  }
		  if ($sugarNum > 0) {
			  echo "<img src = 'images/plus.png' alt='plus sign'>";
			  for($k = 0; $k < $sugarNum; $k++){
				echo "<img style='width: 70px; height: 70px;' src = 'images/sugar.png' alt='sugar'>";
			  }
			}
		}

		else {
		  $coffeePrice = 3.2;
		  echo "<img style='margin-top: 9px; margin-bottom: 9px; margin-left: -30px; margin-right: -30px;' src = 'images/cup.png' alt='extra large coffee' height ='55%'>";
		  if ($creamNum > 0) {
			  echo "<img src = 'images/plus.png' alt='plus sign'>";
			  for($j = 0; $j < $creamNum; $j++){
				echo "<img style='width: 150px; height: 150px;' src = 'images/cream1.png' alt='coffee cream'>";
			  }
		  }
		  if ($sugarNum > 0) {
			  echo "<img src = 'images/plus.png' alt='plus sign'>";
			  for($k = 0; $k < $sugarNum; $k++){
				echo "<img style='width: 70px; height: 70px;' src = 'images/sugar.png' alt='sugar'>";
			  }
			}
		}
		echo "</div>";
		echo "<br>";
	  }

	  echo "<div style='color: lightyellow; margin-left: 20px;'>";
		echo "<p> Number of coffees: $coffeeNum</p>";
		echo "<p> Subtotal: $" . $coffeeNum * $coffeePrice . "</p>";
		echo "<p style='font-weight: bold;'> 
			Total: $" . round((($coffeeNum * $coffeePrice) + ($coffeeNum * $coffeePrice * $tax)), 2) . "</p>"; 
	  echo "</div>";
	 }
	?>
   </body>
</html>
