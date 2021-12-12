<?php

    header('Content-Type: application/json');

    if (isset($_POST['func'])) {
        switch($_POST['func']) {
            case 'getAllPosts':
                $result = "";

                $entries = file_get_contents("../entries.json");
                $entries_json = json_decode($entries, true);
                foreach ($entries_json as $entry_id => $entry_data) {
                    $id = $entry_data['id'];
                    $title = $entry_data['title'];
                    $content = $entry_data['content'];
                    $result .=
                    "<div id='blog-entry-$id' class='blog-entry'>
                        <div class='blog-entry-header'>
                            <h1 class='blog-entry-title'>$title</h1>
                            <span class='blog-entry-actions'>
                                <button class='blog-entry-action-btn edit-btn' onclick='redirectToEdit($entry_id)'>Edit</button>
                                <button class='blog-entry-action-btn delete-btn' onclick='deletePost($entry_id)'>Delete</button>
                            </span>
                        </div>
                        <hr>
                        <div class='blog-entry-content'>$content</div>
                    </div>";
                }
            
                echo json_encode($result, JSON_PRETTY_PRINT);
                break;
            case 'getPostById':
                if (isset($_POST['id'])) {
                    $id = $_POST['id'];
                    $entries = file_get_contents("../entries.json");
                    $entries_json = json_decode($entries, true);

                    foreach($entries_json as $entry => $entry_data) {
                        $postId = $entry_data['id'];
                        if ($postId == $id) {
                            echo json_encode($entry_data, JSON_PRETTY_PRINT);
                        }
                    }                    
                }
                break;
            default: break;
        }
    }
?>