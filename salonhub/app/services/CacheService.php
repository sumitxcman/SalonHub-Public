<?php
class CacheService {
    private static $cacheDir = __DIR__ . '/../../storage/cache/';

    public static function get($key, $durationSeconds = 3600) {
        $file = self::$cacheDir . md5($key) . '.cache';
        if (file_exists($file)) {
            if (time() - filemtime($file) < $durationSeconds) {
                return unserialize(file_get_contents($file));
            }
            unlink($file); // Expired cache clearance
        }
        return false;
    }

    public static function set($key, $data) {
        if (!is_dir(self::$cacheDir)) {
            mkdir(self::$cacheDir, 0777, true);
        }
        $file = self::$cacheDir . md5($key) . '.cache';
        file_put_contents($file, serialize($data));
        return true;
    }
}
