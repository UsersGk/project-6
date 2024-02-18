<?php

// This code will create a basic billing system.

// First, we need to connect to the database.
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$db= new mysqli($servername, $username, $password);

// // Next, we need to get the customer and product information from the database.
// $customers = $db->query('SELECT * FROM customers')->fetchAll();
// $products = $db->query('SELECT * FROM products')->fetchAll();

// Now, we can display the customer and product information on the HTML page.
?>

<!DOCTYPE html>
<html>
<head>
  <title>Billing System</title>
</head>
<body>

<h1>Billing System</h1>

<table>
  <tr>
    <th>Customer</th>
    <th>Product</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Total</th>
  </tr>
 
  <?php foreach ($customers as $customer) { 
    ?>
    <tr>
      <td><?php echo $customer['name']; ?></td>
      <td>
        <select name="product_id">
          <?php foreach ($products as $product) { ?>
            <option value="<?php echo $product['id']; ?>"><?php echo $product['name']; ?></option>
          <?php } ?>
        </select>
      </td>
      <td><input type="number" name="quantity" /></td>
      <td><?php echo $product['price']; ?></td>
      <td><?php echo $product['price'] * $quantity; ?></td>
    </tr>
  <?php } ?>

</table>

<input type="submit" value="Submit" />

</body>
</html>

<?php

// Finally, we need to handle the user input and submit the invoice information to the PHP script.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Get the customer and product information from the form.
  $customer_id = $_POST['customer_id'];
  $product_id = $_POST['product_id'];
  $quantity = $_POST['quantity'];

  // Calculate the total price.
  $total_price = $product['price'] * $quantity;

  // Insert the invoice information into the database.
  $db->query("INSERT INTO invoices (customer_id, product_id, quantity, total_price) VALUES ($customer_id, $product_id, $quantity, $total_price)");

  // Generate the PDF invoice.
  $pdf = new PDF();
  $pdf->AddPage();
  $pdf->SetFont('Arial', '', 12);
  $pdf->Write(5, 'Invoice');
  $pdf->Ln(10);
  $pdf->Write(5, 'Customer Name: ' . $customer_id);
  $pdf->Ln(5);
  $pdf->Write(5, 'Product Name: ' . $product_id);
  $pdf->Ln(5);
  $pdf->Write(5, 'Quantity: ' . $quantity);
  $pdf->Ln(5);
  $pdf->Write(5, 'Total Price: ' . $total_price);
  $pdf->Output('invoice.pdf', 'F');

  // Redirect the user to the home page.
  header('Location: index.php');

}

?>