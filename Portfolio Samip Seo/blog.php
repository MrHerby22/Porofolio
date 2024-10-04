<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = ""; // Adjust the password for your MySQL setup
$dbname = "blog_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all blog posts
$sql = "SELECT * FROM blog_posts ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Blog Section</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            width: 90%;
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .blog-card {
            padding: 20px;
            border-bottom: 1px solid #eaeaea;
            cursor: pointer;
            transition: background 0.3s;
        }
        .blog-card:hover {
            background: #f0f0f0;
        }
        .thumbnail {
            width: 100%;
            border-radius: 8px;
        }
        .blog-card h2 {
            color: #333;
            font-size: 2rem;
        }
        .blog-card p {
            line-height: 1.8;
            font-size: 1rem;
            color: #666;
        }
        .created_at {
            font-size: 0.85rem;
            color: #aaa;
            margin-top: 10px;
        }
        .blog-details {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            max-width: 600px;
            width: 90%;
        }
        .blog-details h2 {
            margin: 0;
        }
        .blog-details p {
            line-height: 1.8;
        }
        button {
            margin-top: 20px;
            padding: 10px 15px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
    </style>
    <script>
        function toggleDetails(title, content) {
            const details = document.getElementById("details");
            const detailsTitle = document.getElementById("details-title");
            const detailsContent = document.getElementById("details-content");
            detailsTitle.textContent = title;
            detailsContent.textContent = content;
            details.style.display = details.style.display === "block" ? "none" : "block";
        }
    </script>
</head>
<body>

<div class="container">
    <h1 style="text-align: center; margin-bottom: 50px;">Our Latest Blogs</h1>

    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='blog-card' onclick=\"toggleDetails('" . addslashes($row['title']) . "', '" . addslashes($row['content']) . "')\">";
            echo "<img src='thumbnail.jpg' alt='Blog Thumbnail' class='thumbnail'>"; // Replace with actual image path if available
            echo "<h2>" . $row['title'] . "</h2>";
            echo "<p>" . substr($row['content'], 0, 100) . "...</p>"; // Short summary of the content
            echo "<p class='created_at'>Posted on " . $row['created_at'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "<p>No blog posts available.</p>";
    }
    ?>
</div>

<div class="blog-details" id="details">
    <h2 id="details-title"></h2>
    <p id="details-content"></p>
    <button onclick="toggleDetails()">Close</button>
</div>

</body>
</html>
