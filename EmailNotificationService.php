class EmailNotificationService implements NotificationServiceInterface {
    public function sendNotification($user, $message) {
        // Use PHP mail() function here
        mail($user->email, "Verification Code", $message);
    }
}