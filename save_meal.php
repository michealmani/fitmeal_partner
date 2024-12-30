<?php
session_start();

// Initialize variables
$mealName = "";
$mealWeight = "";
$mealType = "";
$mealDate = "";

// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'meal');

// Check if the form was submitted
if (isset($_POST['reg_user'])) {
    // Get the input values and sanitize them
    $mealName = mysqli_real_escape_string($db, $_POST['mealName']);
    $mealWeight = mysqli_real_escape_string($db, $_POST['mealWeight']);
    $mealType = mysqli_real_escape_string($db, $_POST['mealType']);
    $mealDate = mysqli_real_escape_string($db, $_POST['mealDate']);

    // Insert data into the database
    $query = "INSERT INTO users2 (meal_name, meal_weight, meal_type, meal_date) 
              VALUES ('$mealName', '$mealWeight', '$mealType', '$mealDate')";

    if (mysqli_query($db, $query)) {
        echo "Meal data saved successfully!";
        // Redirect or display success message
    } else {
        echo "Error: " . mysqli_error($db);
        // Display error message
    }
}

// Close the database connection
mysqli_close($db);
?>

