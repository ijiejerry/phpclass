<?php
$title = "Exercise 3: Variable, Strings & Operators";
include 'exe2/header.php'; 

// Function to detect the browser
function get_browser_name() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    if (strpos($user_agent, 'MSIE') !== FALSE) {
        return 'Internet Explorer';
    } elseif (strpos($user_agent, 'Firefox') !== FALSE) {
        return 'Mozilla Firefox';
    } elseif (strpos($user_agent, 'Chrome') !== FALSE) {
        return 'Google Chrome';
    } elseif (strpos($user_agent, 'Safari') !== FALSE) {
        return 'Safari';
    } elseif (strpos($user_agent, 'Opera') !== FALSE) {
        return 'Opera';
    } else {
        return 'Unknown';
    }
}

// to get last modification time of a file
function get_last_modification_time($filename) {
    $last_modified_timestamp = filemtime($filename);
    return date("F d, Y H:i:s", $last_modified_timestamp);
}

?>


<div class="container custom-form">
  <h1>Form Creation: Create a simple HTML form to collect the users Firstname and Lastname Use the echo statement to print “Hello [Firstname] [Lastname], 
      You are welcome to my site.” inside an h3. </h1>

  <form method="post" action="process1.php">
      Name: <input type="text" name="jerry" required> <br><br>
      Email: <input type="email" name="email" required> <br><br>
      DOB: <input type="date" name="dob"> <br><br>
      Select color: <input type="color" name="color"> <br><br>
        <input type="submit" value="Submit">
  </form>

  <?php
  // String Variables
  $str1 = "Hello";
  $str2 = "Jerry";
  $combined_str = $str1 . " " . $str2;
  
  // Print the combined string and its length
  echo "<p>Combined string: $combined_str</p>";
  echo "<p>Length of the combined string: " . strlen($combined_str) . "</p>";
  
  // Numbers Addition
  $num1 = 298;
  $num2 = 234;
  $num3 = 46;
  $sum = $num1 + $num2 + $num3;
  
  // Print the sum of the numbers
  echo "<p>Sum of the numbers: $sum</p>";
  
  // Detect the browser
  echo "<p>Your browser is: " . get_browser_name() . "</p>";
  ?>

</div>

<div class="container">
  <?php
  // Get the last modification time of this file
  $filename = 'exe4.php';
  echo "<p>Last modification time of $filename: " . get_last_modification_time($filename) . "</p>";
  ?>
</div>

<?php include "exe2/footer.php"; ?>

</body>
</html>