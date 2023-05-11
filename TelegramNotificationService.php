class TelegramNotificationService implements NotificationServiceInterface {
    public function sendNotification($user, $message) {
        // Use a Telegram service API here
        echo "Telegram message sent to " . $user->telegramId . " with message: " . $message;
    }
}
