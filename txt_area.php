<html>
<head>
    <title>Comment</title>
</head>
<body>

<h2>Comment</h2>

<!-- Comment Saving Form -->
<form method="post">
    <textarea name="content" rows="10" cols="50"></textarea><br>
    <input type="submit" name="save" value="Save">
</form>

<?php 
if (isset($_POST["save"])) {
    $text = $_POST["content"];
    file_put_contents("user_text.txt", $text);
    echo "File saved successfully!<br>";
}
?>

<!-- File Upload Form -->
<form method="post" enctype="multipart/form-data">
    Select file: <input type="file" name="fileToUpload"><br><br>
    <input type="submit" name="upload" value="Upload File">
</form>

<?php
if (isset($_POST["upload"])) {
    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] === 0) {
        $target = "upload/" . basename($_FILES["fileToUpload"]["name"]);
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target)) {
            echo "File uploaded successfully.";
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "No file uploaded or upload error.";
    }
}
?>

</body>
</html>
