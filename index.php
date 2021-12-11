<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/style.css">
  <title>Hello World</title>
</head>


<body>  
<h1 class="blog-title">Garrett's Blog Site</h1>
    <div class="blog-entries-actions">
        <button class="blog-entry-action-btn add-btn">Add Post</button>
    </div>
    <div class="blog-entries">
        <?php include('php/get_entries.php') ?>
    </div>
</body>
  <script src="js/main.js"></script>
</html>