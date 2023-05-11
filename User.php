class User {
    public $userId;
    public $username;
    public $email;
    public $phoneNumber;
    public $telegramId;

    function __construct($userId, $username, $email, $phoneNumber, $telegramId) {
        $this->userId = $userId;
        $this->username = $username;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->telegramId = $telegramId;
    }
}
