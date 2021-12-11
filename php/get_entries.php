<?php
    $entries = file_get_contents("entries.json");
    $entries_json = json_decode($entries, true);
    foreach ($entries_json as $entry_id => $entry_data) {
        $title = $entry_data['title'];
        $content = $entry_data['content'];
        echo
        "<div class='blog-entry'>
            <div class='blog-entry-header'>
                <h1 class='blog-entry-title'>$title</h1>
                <span class='blog-entry-actions'>
                    <button class='blog-entry-action-btn edit-btn'>Edit</button>
                    <button class='blog-entry-action-btn delete-btn'>Delete</button>
                </span>
            </div>
            <hr>
            <div class='blog-entry-content'>$content</div>
        </div>";
    }
?>