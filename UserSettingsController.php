class UserSettingsController {
    private $userSettingsService;
    private $verificationCodeService;
    private $notificationServices;

    function __construct($userSettingsService, $verificationCodeService, $notificationServices) {
        $this->userSettingsService = $userSettingsService;
        $this->verificationCodeService = $verificationCodeService;
        $this->notificationServices = $notificationServices;
    }

    public function changeSettings($userId, $newSettings) {
        // Save new settings as pending
        $this->userSettingsService->savePendingSettings($userId, $newSettings);

        // Generate new verification code
        $code = $this->verificationCodeService->generateCode($userId);

        // Get user's preferred communication method
        $user = $this->userSettingsService->getUser($userId);
        $preferredMethod = $user->preferredMethod;

        // Send notification
        $notificationService = $this->notificationServices[$preferredMethod];
        $notificationService->sendNotification($user, $code);
    }

    public function verifyCode($userId, $code) {
        $isValid = $this->verificationCodeService->verifyCode($userId, $code);

        if ($isValid) {
            // Change settings
            $this->userSettingsService->activatePendingSettings($userId);
        } else {
            echo "Invalid verification code.";
        }
    }
}
