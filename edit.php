<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" href="css/common.css">
        <link rel="stylesheet" href="css/edit.css">
        <title>Garrett's Blog Site</title>
    </head>

    <body>
        <h1 class="blog-title">Garrett's Blog Site</h1>
        <div id="postEditor">
            <div class="form-input">
                <label for="title">Edit Post Title:</label>
                <input type="text" id="title" name="title" class="input textInput" required>
            </div>
            <div class="form-input">
                <label for="content">Edit Post Content:</label>
                <textarea id="content" name="content" class="input" required></textarea>
            </div>
            <div class="form-input">
                <button class="blog-entry-action-btn edit-btn" onclick="editPost()">Edit Post</button>
        </div>
    </body>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/edit.js"></script>
</html>