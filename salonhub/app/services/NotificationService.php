<?php
class NotificationService {
    public static function sendWhatsApp($phone, $message) {
        $log = date('Y-m-d H:i:s') . " - WhatsApp directed to $phone: $message\n";
        file_put_contents(__DIR__ . '/../../storage/logs/notifications.log', $log, FILE_APPEND);
        return true;
    }

    public static function sendPush($user_id, $title, $body) {
        $log = date('Y-m-d H:i:s') . " - Push to User $user_id: $title - $body\n";
        file_put_contents(__DIR__ . '/../../storage/logs/notifications.log', $log, FILE_APPEND);
        return true;
    }
}
