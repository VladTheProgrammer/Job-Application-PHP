class UserSettings {
    public $userId;
    public $preferredMethod;

    function __construct($userId, $preferredMethod) {
        $this->userId = $userId;
        $this->preferredMethod = $preferredMethod;
    }
}
