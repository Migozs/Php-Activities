<?php
class Response {

    public static function redirect(string $url): void {
        header("Location: $url");
        exit;
    }

    public static function redirectWithMessage(string $url, string $status, string $message): void {
        $query = http_build_query(['status' => $status, 'message' => $message]);
        self::redirect("$url?$query");
    }

    public static function getMessage(): ?string {
        return isset($_GET['message']) ? htmlspecialchars($_GET['message']) : null;
    }

    public static function getStatus(): ?string {
        return isset($_GET['status']) ? htmlspecialchars($_GET['status']) : null;
    }

    public static function isSuccess(): bool {
        return self::getStatus() === 'success';
    }

    public static function isError(): bool {
        return self::getStatus() === 'error';
    }

    public static function json(mixed $data, int $statusCode = 200): void {
        http_response_code($statusCode);
        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }
}
