<?php
    header('Content-Type: application/json');

    $result = array();

    if (isset($_POST['func'])) {
        switch($_POST['func']) {
            case 'addPost':
                break;
            case 'deletePost':
                $id = $_POST['id'];
                $entries = file_get_contents("../entries.json");
                $entries_json = json_decode($entries, true);

                foreach($entries_json as $entry => $entry_data) {
                    $postId = $entry_data['id'];
                    if ($id == $postId) {
                        unset($entries_json[$entry]);
                    }
                }

                file_put_contents("../entries.json", json_encode($entries_json, JSON_PRETTY_PRINT));

                break;
            case 'editPost':
                $newPost = new stdClass();
                $idToEdit = $_POST['id'];
                $newTitle = $_POST['title'];
                $newContent = $_POST['content'];
                $newPost->id = $idToEdit;
                $newPost->title = $newTitle;
                $newPost->content = $newContent;
                $entries = file_get_contents("../entries.json");
                $entries_json = json_decode($entries, true);
                
                foreach($entries_json as $entry => $entry_data) {
                    $postId = $entry_data['id'];
                    if ($idToEdit == $postId) {
                        unset($entries_json[$entry]);
                        array_push($entries_json, $newPost);
                    }

                    file_put_contents("../entries.json", json_encode($entries_json, JSON_PRETTY_PRINT));
                }

                break;
            default: break;
        }
    }

    echo json_encode($result);

?>