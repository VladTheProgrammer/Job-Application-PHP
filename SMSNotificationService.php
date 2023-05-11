class SMSNotificationService implements NotificationServiceInterface {
    public function sendNotification($user, $message) {
        // Use a SMS service API here
        echo "SMS sent to " . $user->phoneNumber . " with message: " . $message;
    }
}
