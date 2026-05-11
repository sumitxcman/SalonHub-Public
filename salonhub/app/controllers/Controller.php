<?php
// Base Controller
class Controller {
    // Method to load and render a view
    public function view($view, $data = []) {
        extract($data);
        $file = __DIR__ . '/../../resources/views/' . $view . '.php';
        if(file_exists($file)){
            require_once $file;
        } else {
            die("View not found");
        }
    }

    // Method to return structured JSON responses
    public function jsonResponse($data, $status = 200) {
        http_response_code($status);
        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }
}
