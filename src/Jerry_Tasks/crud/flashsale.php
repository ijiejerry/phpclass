<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Display the products
    $productType = $_POST["product_name"];
    $originalprice = $_POST["1080"];
    $saleprice = $_POST["580"];
    $quantity = $_POST["quantity"];
    
    

    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElectroHub</title>
</head>
<body>
<h1>Ijie Jerry</h1>

<h2>Flash Sale</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="product_name">Select product type:</label>
    <select name="product_name" id="product_name">
        <option value="Phone">iPhone</option>
        <option value="washingmachine">washing machine</option>
        <option value="watch">smart watch</option>
        <!-- Adding more options if necessary -->
    </select><br>

    <label for="product type">product_name:</label>
    <input type="text" name="product_name" id="product_name" required><br>

    <label for="original_price">original_price:</label>
    <input type="number" name="original_price" id="original_price" required><br>

    <label for="sale_price">sale_price:</label>
    <input type="number" name="sale_price" id="sale_price" required><br>

    <label for="quantity">quantity:</label>
    <input type="number" name="quantity" id="quantity" required><br>
    <input type="submit" value="Place Order">
</form>

</body>
</html>