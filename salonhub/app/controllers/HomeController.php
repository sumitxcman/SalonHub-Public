<?php
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../models/Salon.php';

class HomeController extends Controller {
    public function index() {
        $model = new Salon();
        $salons = $model->getAll();
        $this->view('salons', ['salons' => $salons]);
    }
}
