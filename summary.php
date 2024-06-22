<!DOCTYPE html>
<html>
<head>
      <meta charset="UTF-8" /> <!-- Character encoding declaration -->
      <title>About | COMP1002 HTML, CSS, and JS Fundamentals</title> <!-- Page title -->
      <meta name="author" content="Mishel Mejia"> <!-- Author metadata -->
      <meta name="description" content="Pizza Order Form"> <!-- Description metadata -->
      <link rel="shortcut icon" href="images/images.jpg" type="image/x-icon"> <!-- Shortcut icon for the tab -->
      <link rel="stylesheet" type="text/css" href="css/reset.css" /> <!-- Link to a CSS reset file -->
      <link rel="stylesheet" type="text/css" href="css/mycss.css" /> <!-- Link to a custom CSS file -->

  <style>
    body {
      font-family: Arial, sans-serif; /* Set the font family and fallback */
      margin: 0; /* Remove default margin */
      padding: 0; /* Remove default padding */
      background-color: #f8f8f8; /* Set background color */
      color: #333; /* Set text color */
    }
    header {
      background-color: #4CAF50; /* Header background color */
      color: white; /* Header text color */
      padding: 1em 0; /* Header padding */
      text-align: center; /* Center align text */
    }
    main {
      padding: 2em; /* Main content padding */
      max-width: 800px; /* Maximum width of main content */
      margin: 0 auto; /* Center align main content */
      background-color: white; /* Background color of main content */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Box shadow effect */
    }
    h3 {
      color: #4CAF50; /* Heading color */
    }
    section {
      border-top: 1px solid #ddd; /* Section top border */
      padding: 1em 0; /* Section padding */
    }
    p {
      line-height: 1.6; /* Paragraph line height */
    }
    footer {
      text-align: center; /* Center align text in footer */
      padding: 1em 0; /* Footer padding */
      background-color: #4CAF50; /* Footer background color */
      color: white; /* Footer text color */
    }
    footer section {
      margin: 0; /* Remove default margin for footer section */
    }
  </style>
</head>
<body>
  <header>
    <h1>Mishel's Pizza</h1> <!-- Main header title -->
    <h2>Order Summary</h2> <!-- Subheader title -->
  </header>
  <main>
    <section>
      <h3>Thank you for your order!</h3> <!-- Section heading -->
      <?php
      // Retrieve the form data using the GET method
      $name = htmlspecialchars($_GET['Name']); // Get and sanitize 'Name' parameter
      $address = htmlspecialchars($_GET['Address']); // Get and sanitize 'Address' parameter
      $email = htmlspecialchars($_GET['emailAddress']); // Get and sanitize 'emailAddress' parameter
      $phone = htmlspecialchars($_GET['Phone']); // Get and sanitize 'Phone' parameter
      $numberPizzas = htmlspecialchars($_GET['NumberPizzas']); // Get and sanitize 'NumberPizzas' parameter
      $size = htmlspecialchars($_GET['size']); // Get and sanitize 'size' parameter
      $crust = htmlspecialchars($_GET['crust']); // Get and sanitize 'crust' parameter
      $shape = htmlspecialchars($_GET['shape']); // Get and sanitize 'shape' parameter
      $cheese = htmlspecialchars($_GET['cheese']); // Get and sanitize 'cheese' parameter
      $sauce = htmlspecialchars($_GET['sauce']); // Get and sanitize 'sauce' parameter
      $instructions = htmlspecialchars($_GET['instructions']); // Get and sanitize 'instructions' parameter
      $where = htmlspecialchars($_GET['where']); // Get and sanitize 'where' parameter

      // Output the retrieved form data
      echo "<p><strong>Name:</strong> $name</p>"; // Output name
      echo "<p><strong>Address:</strong> $address</p>"; // Output address
      echo "<p><strong>Email:</strong> $email</p>"; // Output email
      echo "<p><strong>Phone:</strong> $phone</p>"; // Output phone number
      echo "<p><strong>Number of Pizzas:</strong> $numberPizzas</p>"; // Output number of pizzas
      echo "<p><strong>Size:</strong> $size</p>"; // Output pizza size
      echo "<p><strong>Crust:</strong> $crust</p>"; // Output pizza crust type
      echo "<p><strong>Shape:</strong> $shape</p>"; // Output pizza shape
      echo "<p><strong>Cheese:</strong> $cheese</p>"; // Output cheese selection
      echo "<p><strong>Sauce:</strong> $sauce</p>"; // Output sauce selection
      echo "<p><strong>Special Instructions:</strong> $instructions</p>"; // Output special instructions
      echo "<p><strong>Order Type:</strong> $where</p>"; // Output order type
      ?>
    </section>
  </main>
  <footer>
    <section>
    <a href="forms.php" title="Return to the order Page">Return to the order page</a> | <!-- Link to return to the order page -->
			</nav>
    </section>
  </footer>
</body>
</html>
