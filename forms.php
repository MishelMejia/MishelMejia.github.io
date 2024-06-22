<!DOCTYPE html>
<html>
<head>
    <!-- Metadata and links for stylesheets -->
    <meta charset="UTF-8" />
    <title>About | COMP1002 HTML, CSS, and JS Fundamentals</title>
    <meta name="author" content="Mishel Mejia">
    <meta name="description" content="Pizza Order Form">
    <link rel="shortcut icon" href="images/images.jpg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/mycss.css" />
</head>
<body>

  <!-- Pizza Order Form -->
  <form method="get" name="forms" action="summary.php">
    <div class="forms">
      
      <!-- Information about the pizzeria and prices -->
      <div class="cell1">
        <h3>Mishel's<br />Pizza</h3>
        <!-- Inline CSS for styling the title -->
        <style>
          /* Styles for making the title more attractive */
          h3 {
              text-align: center; /* Center the text */
              font-size: 2.5em; /* Large font size */
              color: #FF6347; /* Orange color */
              font-family: 'Arial', sans-serif; /* Font family */
              text-transform: uppercase; /* Convert to uppercase */
              letter-spacing: 2px; /* Space between letters */
          }
        </style>
        <!-- Table displaying pizza sizes and prices -->
        <table>
          <tr>
            <td>Small</td>
            <td>$11.55</td>
          </tr>
          <tr>
            <td>Medium</td>
            <td>$15.25</td>
          </tr>
          <tr>
            <td>Large</td>
            <td>$22.00</td>
          </tr>
          <tr>
            <td>X-Large</td>
            <td>$25.00</td>
          </tr>
          <tr>
            <td colspan="2">Toppings</td>
          </tr>
          <tr>
            <td>$1.79</td>
            <td>Each</td>
          </tr>
          <tr>
            <td colspan="2">Free Delivery</td>
          </tr>
        </table>
      </div>

      <!-- Section for personal information -->
      <div class="forms2">
        <fieldset>
          <legend>Personal Information</legend>
          <!-- Input fields for personal information -->
          <label for="Name">Name:</label>
          <input type="text" id="Name" name="Name" required><br>
          <label for="Address">Address:</label>
          <input type="text" id="Address" name="Address" required><br>
          <label for="emailAddress">Email:</label>
          <input type="email" id="emailAddress" name="emailAddress" required><br>
          <label for="Phone">Phone:</label>
          <input type="tel" id="Phone" name="Phone" required><br><br>
        </fieldset>

        <!-- Section for pizza size, crust, and shape -->
        <fieldset>
          <legend>Pizza size &amp; Crust &amp; Shape</legend>
          <!-- Dropdowns for selecting pizza options -->
          <label for="NumberPizzas">Number of Pizzas:</label>
          <input type="number" id="NumberPizzas" name="NumberPizzas" required><br><br>
          <select name="size" required>
            <option value="" disabled selected>Select Pizza Size</option>
            <option value="Small">Small (4 pieces)</option>
            <option value="Medium">Medium (8 pieces)</option>
            <option value="Large">Large (12 pieces)</option>
            <option value="X-Large">X-Large (24 pieces)</option>
          </select>
          <select name="crust" required>
            <option value="" disabled selected>Select Crust Type</option>
            <option value="Regular">Regular Crust</option>
            <option value="Thin">Thin Crust</option>
          </select>
          <select name="shape" required>
            <option value="" disabled selected>Select Shape</option>
            <option value="Square">Square</option>
            <option value="Round">Round</option>
          </select>
        </fieldset>

        <!-- Section for cheese selection -->
        <fieldset>
          <legend>Cheeses</legend>
          <!-- Radio buttons for cheese options -->
          <input type="radio" name="cheese" value="Mozzarella" required />Mozzarella
          <input type="radio" name="cheese" value="Reduced Fat" />Reduced Fat
          <input type="radio" name="cheese" value="Feta" />Feta
        </fieldset>

        <!-- Section for sauce selection -->
        <fieldset>
          <legend>Sauces</legend>
          <!-- Radio buttons for sauce options -->
          <input type="radio" name="sauce" value="Pizza Sauce" required />Pizza Sauce
          <input type="radio" name="sauce" value="BBQ Sauce" />BBQ Sauce
          <input type="radio" name="sauce" value="Garlic Sauce" />Garlic Sauce
        </fieldset>

        <!-- Section for special instructions -->
        <fieldset>
          <legend>Special Instructions</legend>
          <!-- Textarea for additional instructions -->
          <textarea name="instructions" rows="3" cols="42"></textarea>
        </fieldset>

        <!-- Submit and reset buttons -->
        <input type="submit" value="PLACE YOUR ORDER" />
        <input type="reset" value="START OVER" />
      </div>

      <!-- Section for toppings and order type -->
      <div class="forms2">
        <fieldset>
          <legend>Choose Toppings - $1.79 Each</legend>
          <!-- Checkbox options for toppings -->
          <div class="forms2">
            <input type="checkbox" name="topping[]" value="Anchovies" /> Anchovies<br />
            <input type="checkbox" name="topping[]" value="Bacon" /> Bacon<br />
            <input type="checkbox" name="topping[]" value="Ham" /> Ham<br />
            <input type="checkbox" name="topping[]" value="Pepperoni" /> Pepperoni<br />
            <input type="checkbox" name="topping[]" value="Salami" /> Salami<br />
            <input type="checkbox" name="topping[]" value="Sausage" /> Sausage<br />
          </div>
          <div class="forms2">
            <input type="checkbox" name="topping[]" value="Broccoli" /> Broccoli<br />
            <input type="checkbox" name="topping[]" value="Green Olives" /> Green Olives<br />
            <input type="checkbox" name="topping[]" value="Green Peppers" /> Green Peppers<br />
            <input type="checkbox" name="topping[]" value="Mushrooms" /> Mushrooms<br />
            <input type="checkbox" name="topping[]" value="Red Onions" /> Red Onions<br />
            <input type="checkbox" name="topping[]" value="Roasted Garlic" /> Roasted Garlic<br />
          </div>
          
          <!-- Section for order type -->
          <fieldset>
            <legend>Order Type</legend>
            <!-- Radio buttons for order type options -->
            <input type="radio" name="where" value="Take out" required />Take out
            <input type="radio" name="where" value="Delivery" />Delivery
            <input type="radio" name="where" value="Eat in" />Eat in
          </fieldset>
        </fieldset>

        <!-- Image of a delicious pizza -->
        <img src="images/pizza.jpg" alt="Delicious pizza" style="display: block; margin: 0 auto; max-width: 100%;" />
      </div>
    </div>
  </form>
</body>
</html>
