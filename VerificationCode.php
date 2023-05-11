class VerificationCode {
    public $codeId;
    public $userId;
    public $code;
    public $creationTimestamp;
    public $expiryTimestamp;

    function __construct($codeId, $userId, $code, $creationTimestamp, $expiryTimestamp) {
        $this->codeId = $codeId;
        $this->userId = $userId;
        $this->code = $code;
        $this->creationTimestamp = $creationTimestamp;
        $this->expiryTimestamp = $expiryTimestamp;
    }
}
