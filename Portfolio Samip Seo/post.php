<?php
// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'blog_db');

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if 'id' is set in the URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $post_id = $_GET['id'];

    // Fetch the blog post based on the ID
    $sql = "SELECT * FROM posts WHERE id = $post_id";
    $result = $conn->query($sql);

    // Check if a post was found
    if ($result && $result->num_rows > 0) {
        $post = $result->fetch_assoc();
    } else {
        echo "Post not found.";
        exit;
    }
} else {
    echo "Invalid post ID.";
    exit;
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($post['title']); ?></title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { max-width: 900px; margin: 50px auto; }
        .post-card img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .post-title { font-size: 36px; font-weight: bold; margin-top: 15px; }
        .post-content { margin-top: 10px; }
        .post-date { color: #777; font-size: 14px; margin-top: 5px; }
    </style>
</head>
<body>

    <div class="container">
        <div class="post-card">
            <?php if (!empty($post['image'])): ?>
                <img src="<?php echo htmlspecialchars($post['image']); ?>" alt="<?php echo htmlspecialchars($post['title']); ?>">
            <?php endif; ?>
            <div class="post-title"><?php echo htmlspecialchars($post['title']); ?></div>
            <div class="post-content"><?php echo nl2br(htmlspecialchars($post['content'])); ?></div>
            <div class="post-date">Posted on <?php echo date('F j, Y', strtotime($post['created_at'])); ?></div>
        </div>
    </div>

</body>
</html>