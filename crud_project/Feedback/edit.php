<?php include 'db.php'; ?>

<?php
$user_id = $_GET['user_id'];
$result = $conn->query("SELECT * FROM feedback WHERE user_id=$user_id");
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $username   = $_POST['username'];
    $comment   = $_POST['comment'];
    $rating = $_POST['rating'];
    $date_of_submission  = $_POST['date_of_submission'];

    $sql = "UPDATE feedback SET 
            username='$username', comment ='$comment', rating='$rating', date_of_submission='$date_of_submission'
            WHERE user_id=$user_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Feedback</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>

    <form method="POST">

        <h3>Edit Review</h3>

        <label>Username</label>
        <input type="text" name="user_name" value="<?php echo $row['user_name']; ?>" required><br><br>

        <label>Comment</label>
        <input type="text" name="comment" value="<?php echo $row['comment']; ?>" required><br><br>

        <label>Review us</label>
        <!-- <input type="text" name="rating" required><br> -->

        <div class="star" value="<?php echo $row['rating']; ?>">
            <input type="radio" name="rating" id="star5" value="5" >
            <label for="star5">&starf;</label>

            <input type="radio" name="rating" id="star4" value="4" >
            <label for="star4">&starf;</label>

            <input type="radio" name="rating" id="star3" value="3" >
            <label for="star3">&starf;</label>

            <input type="radio" name="rating" id="star2" value="2" >
            <label for="star2">&starf;</label>

            <input type="radio" name="rating" id="star1" value="1">
            <label for="star1">&starf;</label>

        </div><br><br>

        <label>Date of submission</label>
        <input type="date" name="date_of_submission" value="<?php echo $row['date_of_submission']; ?>" required><br><br>


        <input type="submit" name="submit" value="Submit">

        <a href="index.php">Back</a>

    </form>
    
<br>
<!-- <a href="index.php">Back</a> -->

</body>
</html>
