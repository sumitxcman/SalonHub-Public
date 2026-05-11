<?php
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../models/Salon.php';
require_once __DIR__ . '/../models/Service.php';

class SalonController extends Controller {
    public function listSalons() {
        $model = new Salon();
        $salons = $model->getAll();
        $this->jsonResponse(['success' => true, 'data' => $salons]);
    }

    public function showSalonServices($salon_id) {
        $salonModel = new Salon();
        $serviceModel = new Service();
        
        $salon = $salonModel->getById($salon_id);
        if (!$salon) {
            $this->jsonResponse(['success' => false, 'message' => 'Salon not found.'], 404);
        }

        $services = $serviceModel->getBySalonId($salon_id);
        $this->jsonResponse(['success' => true, 'salon' => $salon, 'services' => $services]);
    }

    public function searchLocation() {
        $city = $_GET['city'] ?? '';
        $model = new Salon();
        if ($city) {
            $salons = $model->getByCity($city);
        } else {
            $salons = $model->getAll();
        }
        $this->jsonResponse(['success' => true, 'data' => $salons]);
    }
}
