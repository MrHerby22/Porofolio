<?php
// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'blog_db'); // Update with your credentials

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission for new posts
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    
    // Handle image upload
    $image = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $targetDir = "uploads/";
        $image = $targetDir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $image);
    }

    // Insert the post into the database
    $stmt = $conn->prepare("INSERT INTO posts (title, content, image) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $content, $image);

    if ($stmt->execute()) {
        echo "New post added successfully!";
    } else {
        echo "Error adding post: " . $conn->error;
    }

    $stmt->close();
}

// Handle deletion of posts
if (isset($_GET['delete_id'])) {
    $delete_id = (int)$_GET['delete_id']; // Cast to integer for safety
    if ($delete_id > 0) {
        // Prepare the SQL statement
        $stmt = $conn->prepare("DELETE FROM posts WHERE id = ?");
        $stmt->bind_param("i", $delete_id);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Post deleted successfully!";
        } else {
            echo "Error deleting post: " . $conn->error;
        }

        $stmt->close();
    }
}

// Fetch and display posts
$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Blog Posts</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; }
        .form-container { margin-bottom: 30px; }
        .post-card { border: 1px solid #ddd; border-radius: 8px; margin-bottom: 20px; padding: 10px; }
        .post-card img { 
            max-width: 100%; /* Makes sure the image does not exceed the width of its container */
            height: auto; /* Keeps the aspect ratio of the image */
            max-height: 200px; /* Sets a maximum height for uniformity */
            object-fit: cover; /* Ensures the image covers the box without distortion */
        }
        .delete-link { color: red; text-decoration: none; }
        .delete-link:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h1>Manage Blog Posts</h1>

    <div class="form-container">
        <h2>Add New Post</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" required><br><br>
            <label for="content">Content:</label><br>
            <textarea id="content" name="content" required></textarea><br><br>
            <label for="image">Image:</label><br>
            <input type="file" id="image" name="image" accept="image/*"><br><br>
            <input type="submit" name="submit" value="Add Post">
        </form>
    </div>

    <h2>Existing Posts</h2>

    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="post-card">';
            echo '<h3>' . htmlspecialchars($row['title']) . '</h3>';
            if (!empty($row['image'])) {
                echo '<img src="' . htmlspecialchars($row['image']) . '" alt="' . htmlspecialchars($row['title']) . '">';
            }
            echo '<p>' . nl2br(htmlspecialchars($row['content'])) . '</p>';
            echo '<a href="?delete_id=' . $row['id'] . '" class="delete-link" onclick="return confirm(\'Are you sure you want to delete this post?\');">Delete</a>';
            echo '</div>';
        }
    } else {
        echo "No posts found.";
    }

    $conn->close();
    ?>
</body>
</html>