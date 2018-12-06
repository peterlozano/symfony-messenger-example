<?php
// src/Message/SmsNotification.php
namespace App\Message;

class LuckyNumberNotification implements \Serializable
{
    public $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function serialize()
    {
        return json_encode([
            'content' => $this->content,
        ]);
    }

    public function unserialize($serialized)
    {
        $obj = json_decode($serialized);
        return new self($obj['content']);
    }
}
