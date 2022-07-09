<?php
declare(strict_types=1);
?>


<!-- THE FORM -->

<body>
<form action ="index.php" method="post">
    <label>
        Title of your post:
        <input type="text" name="title">
    </label><br>

    <label>
        What would you like to post?:
        <input type="text" name="content">
    </label><br>

    <label>
        Name:
        <input type="text" name="authorName">
    </label><br>
    <!-- When the user clicks on the button, then the current date will be added to the $_POST array -->
    <button type="submit" value="<?php echo (date('d/m/Y H:i:s A')); ?>" name="date">Submit</button>
</form>
</body>

