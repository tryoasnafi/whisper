<?php

require_once __DIR__ . '/../database/db.php';



class WhisperController
{
    public function create()
    {
        // render the view
        require_once __DIR__ . '/../views/whisper.php';
        
    }

    public function store()
    {
        // Get the title and content from the request body
        $title = $_POST['title'];
        $content = $_POST['content'];

        // Generate a unique ID
        require_once __DIR__ . '/../utils/uuid.php';
        $id = uuid();
        $db = new DB();
        $query = "INSERT INTO whisper (title, content) VALUES (:title, :content)";
        try {
            
            $res = $db->query($query, [
                'title' => $title,
                'content' => $content,
            ]);

            echo $res;
        } catch (\Throwable $th) {
            echo $th;
        }


        // // Sent response as json
        // header('Content-Type: application/json; charset=utf-8');

        // $res = json_encode([
        //     'title' => $title,
        //     'content' => $content,
        // ]);
        // echo $res;

        
        // // Redirect to the whisper page
        // header("Location: /whisper/$id");
    }

    public function show($id)
    {

    }
}