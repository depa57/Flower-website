
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database credentials
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'checkout';

    // Create a database connection
    $connection = mysqli_connect($host, $username, $password, $database);
    // After creating a database connection, add the following line to check for errors


    // Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $cname = $_POST['cname'];
    $country = $_POST['country'];
    $cityy = $_POST['cityy'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $tel = $_POST['tel'];
    $mobile = $_POST['mobile'];
    $note = $_POST['note'];
    $payment = $_POST['payment'];

    // Escape special characters to prevent SQL injection
    $fname = mysqli_real_escape_string($connection, $fname);
    $lname = mysqli_real_escape_string($connection, $lname);
    $cname = mysqli_real_escape_string($connection, $cname);
    $country = mysqli_real_escape_string($connection, $country);
    $cityy = mysqli_real_escape_string($connection, $cityy);
    $address = mysqli_real_escape_string($connection, $address);
    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);
    $tel = mysqli_real_escape_string($connection, $tel);
    $mobile = mysqli_real_escape_string($connection, $mobile);
    $note = mysqli_real_escape_string($connection, $note);
    $payment = mysqli_real_escape_string($connection, $payment);

    // Insert the data into the database
    $query = "INSERT INTO orders (fname, lname, cname, country, cityy, address, email, password, tel, mobile, note, payment) 
              VALUES('$fname', '$lname', '$cname', '$country', '$cityy', '$address', '$email', '$password', '$tel', '$mobile', '$note', '$payment')";


try {
    if (mysqli_query($connection, $query)) {
        // Data inserted successfully
        echo "Order placed successfully!";
    } else {
        // Error occurred while inserting data
        echo "Error: " . mysqli_error($connection);
        // Log the error
        error_log("Error: " . mysqli_error($connection));
    }
} catch (Exception $e) {
    // Catch any exceptions that might occur
    echo "Error: " . $e->getMessage();
    // Log the exception
    error_log("Error: " . $e->getMessage());
}

// Close the database connection
mysqli_close($connection);
}
?>

?>
