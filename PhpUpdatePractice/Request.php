<?php
class Request {

    public static function get(string $key, mixed $default = null): mixed {
        return isset($_GET[$key]) ? self::sanitize($_GET[$key]) : $default;
    }

    public static function post(string $key, mixed $default = null): mixed {
        return isset($_POST[$key]) ? self::sanitize($_POST[$key]) : $default;
    }

    public static function isPost(): bool {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }

    public static function isGet(): bool {
        return $_SERVER['REQUEST_METHOD'] === 'GET';
    }

    public static function postInt(string $key, int $default = 0): int {
        return (int) self::post($key, $default);
    }

    public static function postFloat(string $key, float $default = 0.0): float {
        return (float) self::post($key, $default);
    }

    public static function getInt(string $key, int $default = 0): int {
        return (int) self::get($key, $default);
    }

    private static function sanitize(mixed $value): mixed {
        if (is_string($value)) {
            return trim(htmlspecialchars($value, ENT_QUOTES, 'UTF-8'));
        }
        return $value;
    }
}
