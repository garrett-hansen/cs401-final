<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" href="css/common.css">
        <link rel="stylesheet" href="css/create.css">
        <title>Garrett's Blog Site</title>
    </head>

    <body>
        <h1 class="blog-title">Garrett's Blog Site</h1>
        <div class="blog-entries-actions">
            <button class="blog-entry-action-btn add-btn" onclick="returnHome()">Return Home</button>
        </div>
        <div id="postEditor">
            <div class="form-input">
                <label for="title">Post Title:</label>
                <input type="text" id="title" name="title" class="input textInput" required>
            </div>
            <div class="form-input">
                <label for="content">Post Content:</label>
                <textarea id="content" name="content" class="input" required></textarea>
            </div>
            <div class="form-input">
                <button class="blog-entry-action-btn edit-btn" onclick="addPost()">Create Post</button>
            </div>
        </div>
    </body>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/create.js"></script>
</html>