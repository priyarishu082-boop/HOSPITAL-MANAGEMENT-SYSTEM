<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Feedback</title>
    <link rel="stylesheet" href="add.css">
</head>

<body>

    <form method="POST">
        <h2>Review Our hospital</h2>

        <label>Username</label>
        <input type="text" name="user_name"  required><br><br>

        <label>Comment</label>
        <input type="text" name="comment" required><br><br>

        <label>Rate / Review us</label>
        <!-- <input type="text" name="rating" required><br> -->

        <div class="star">
            <input type="radio" name="rating" id="star5" value="5">
            <label for="star5">&starf;</label>

            <input type="radio" name="rating" id="star4" value="4">
            <label for="star5">&starf;</label>

            <input type="radio" name="rating" id="star3" value="3">
            <label for="star3">&starf;</label>

            <input type="radio" name="rating" id="star2" value="2">
            <label for="star2">&starf;</label>

            <input type="radio" name="rating" id="star1" value="1">
            <label for="star1">&starf;</label>
        </div><br><br>

         <label>Date of submission</label>
         <input type="date" name="date_of_submission" required><br><br>


        <input type="submit" name="submit" value="Submit">
        <input type="reset" name="reset" value="Reset">
        <a href="index.php">Back</a>

    </form>
    <br>

    <?php
if (isset($_POST['submit'])) {
    $user_name   = $_POST['user_name'];
    $comment   = $_POST['comment'];
    $rating = $_POST['rating'];
    $date_of_submission  = $_POST['date_of_submission'];
   
    $sql = "INSERT INTO feedback(user_name, comment, rating, date_of_submission)
            VALUES ('$user_name','$comment', '$rating', '$date_of_submission')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green; font-size:50px; text-align:center; justify-content:center'>Thanks for your valuable feedback!!</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
    }
}
?>

</body>

</html>