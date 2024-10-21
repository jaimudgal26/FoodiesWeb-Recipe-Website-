<?php
	include_once('header1.php');?>
    <?php
	require_once('config.php'); 
        // Establish database connection
      global $conn;
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // Insert review into database
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $review = $_POST['review'];

            $sql = "INSERT INTO reviews (name, email, review) VALUES ('$name', '$email', '$review')";

            if ($conn->query($sql) === TRUE) {
                echo "Review submitted successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        $conn->close();


    // // Check if the form has been submitted
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     // Process form data
    //     $name = $_POST["name"];
    //     $email = $_POST["email"];
    //     $rating = $_POST["rating"];
    //     $review = $_POST["review"];

    //     // Validate data (e.g., check if fields are not empty, email is valid, etc.)
    //     // You can use PHP functions like filter_var() for email validation

    //     // Save the review to a database or file
    //     // Replace this with your own database connection code
    //     $servername = "localhost";
    //     $username = "root";
    //     $password = " ";
    //     $dbname = "recipe_db";

    //     // Create connection
    //     //$conn = new mysqli($servername, $username, $password, $dbname);

    //     // Check connection
    //     if ($conn->connect_error) {
    //         die("Connection failed: " . $conn->connect_error);
    //     }

    //     // Insert review into the database
    //     $sql = "INSERT INTO `reviews` (`name`, `email`, `rating`, `review`) VALUES ('$name', '$email', '$rating', '$review')";

    //     if ($conn->query($sql) === TRUE) {
    //         echo "Review submitted successfully!";
    //     } else {
    //         echo "Error: " . $sql . "<br>" . $conn->error;
    //     }

    //     $conn->close();
    // }


    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Review Page</title>

        
    <!-- Add any necessary CSS stylesheets or JavaScript libraries here -->
</head>
<body>
    <br><br>
   <center><u> <h1>Leave a Review</h1></u></center>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="container">
            <div class="row">
                <div class="col-sm-12-md-3">
                    Name-<input type="text" id="name" class="form-control" name="name"required>
                </div>
                <div class="col-sm-12-md-3">
                    Email-<input type="email" id="email" class="form-control" name="email"required>
                </div>
                <div class="col-sm-12-md-3">
                    Rating-<input type="number" id="rating" min="1" max="5" class="form-control" name="rating"required>
                </div>
                <div class="col-sm-12-md-3 mt-3">
               Review-<textarea input type="text" id="review" rows="4" cols="50" class="form-control"name="review"required></textarea>
            </div>
                <div class="col-sm-12-md-3 mt-3">
                     <a href="product_details.php">
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                     </a>
                </div>

           
               <!--  <div id="reviews">
                    <?php //include 'product_details.php'; ?>
                </div> -->

            </div>
        </div>
        

       <!--  <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="rating">Rating:</label>
        <input type="number" id="rating" name="rating" min="1" max="5" required><br><br>

        <label for="review">Review:</label><br>
        <textarea id="review" name="review" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Submit"> -->
    </form>

    </script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html> 