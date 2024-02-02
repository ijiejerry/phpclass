<?php
$title = "Exercise 3: Variable, Strings & Operators";
include 'exe2/header.php';
?>

<h1>Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement 
    to print “Hello [Firstname] [Lastname], You are welcome to my site. inside an h3”</h1>

    <form method="post" action="process1.php">
        Name: <input type="text" name="jerry" required> <br><br>
        Email: <input type="email" name="email" required> <br><br>
        DOB: <input type="date" name="dob"> <br><br>
        <input type="submit" value="Submit">
    </form>     



<?php include 'exe2/footer.php'; ?>