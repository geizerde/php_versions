<?php
enum Status {
    case Pending;
    case Active;
    case Archived;
}

$status = Status::Active;

class User {
    public readonly string $name;

    public function __construct(
        string $name,
        private readonly ?string $password
    ) {
        $this->name = $name;
    }
}
?>
