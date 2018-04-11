<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>coffee</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
    <link rel="stylesheet" href="css/coffeeOrder.css">
     <style>
	.star {
	  color: red;
	}	
     </style>
  </head>
  <body>

  <div class="container">
    <div class="jumbotron"></div>
      <div class="container">
	  <div id="title">
	     <h2>Welcome to Nescafe!</h2>
          </div>
          <div id="orderForm">
          <form action="order.php" method="post">
              <label>Number of coffees:</label>
                <input type="number" name="coffeeNum" min="1" max="15">
                <span class="star">* </span>
                <br><br>

              <label>Size:</label>
                <select name="size">
		  <option value="notPicked">Size</option>
                  <option value="small">Small</option>
                  <option value="medium">Medium</option>
                  <option value="large">Large</option>
		  <option value="extraLarge">Extra large</option>
                </select>
                <span class="star">* </span>
                <br><br>

              <label>How many creams?</label>
                <input type="number" name="creamNum" min="1" max="5">
                <br><br>

              <label>How many sugars?</label>
                <input type="number" name="sugarNum" min="1" max="5">
                <br><br>

            <input class="btn btn-warning" type="submit" value="Order Now"><br>
          </div>

        </form>
      </div>
    </div>

  </body>
</html>
