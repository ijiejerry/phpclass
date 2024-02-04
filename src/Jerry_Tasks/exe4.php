<?php
$title = "Exercise 4 : Control flow & Loop";
include 'exe2/header.php';
?>

<form method="post" action="process1.php">
        Name: <input type="text" name="jerry"><br>
        Age: <input type="number" name="37"><br>
        <input type="submit" name="submit" value="Check Eligibility">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['jerry'];
        $age = $_POST['37'];

        if ($age >= 18) {
            echo "Hello $name, you are eligible for voting!";
        } else {
            echo "Sorry $name, you are not eligible for voting.";
        }
    }
    ?>

<?php
$currentMonth = date("F");

switch ($currentMonth) {
    case "August":
        echo "It's August, so it's still holiday.";
        break;
    default:
        echo "Not August, this is $currentMonth, so you don't have any holidays.";
        break;
}
?>

<form method="post" action="process1.php">
        Enter a number: <input type="number" name="number"><br>
        <input type="submit" name="submit" value="Generate Table">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];

        for ($i = 1; $i <= 10; $i++) {
            $result = $number * $i;
            echo "$number x $i = $result <br>";
        }
    }
    ?>

<form method="post" action="process1.php">
        Enter a number: <input type="number" name="number"><br>
        <input type="submit" name="submit" value="Print Numbers">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];
        $i = 1;

        while ($i <= $number) {
            echo "$i ";
            $i++;
        }
    }
    ?>

<?php
$myArray = array("HTML", "CSS", "PHP", "JavaScript");

foreach ($myArray as $element) {
    echo "$element <br>";
}
?>




<?php
include 'exe2/footer.php' ?>