<?php
    header('Content-Type: application/json');

    $result = array();

    function compare($a, $b) {
        return strcmp($a->id, $b->id);
    }

    if (isset($_POST['func'])) {
        switch($_POST['func']) {
            case 'addPost':
                $entries = file_get_contents("../entries.json");
                $entries_json = json_decode($entries, true);
                $newPost = new stdClass();
                $newTitle = $_POST['title'];
                $newContent = $_POST['content'];
                $newId = 0;
                foreach($entries_json as $entry => $entry_data) {
                    $newId = max($newId, intval($entry_data['id']));
                }
                $newPost->id = strval($newId + 1);
                $newPost->title = $newTitle;
                $newPost->content = $newContent;
                $entries_json = array_merge($entries_json, [$newPost]);

                file_put_contents("../entries.json", json_encode($entries_json, JSON_PRETTY_PRINT));

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

                usort($entries_json, "compare");

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
                        $entries_json = array_merge($entries_json, [$newPost]);
                    }
                    
                    usort($entries_json, "compare");

                    file_put_contents("../entries.json", json_encode($entries_json, JSON_PRETTY_PRINT));
                }

                break;
            default: break;
        }
    }

    echo json_encode($result);

?>