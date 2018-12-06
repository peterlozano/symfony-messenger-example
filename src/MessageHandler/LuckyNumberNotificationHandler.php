<?php
namespace App\MessageHandler;

use App\Message\LuckyNumberNotification;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class LuckyNumberNotificationHandler implements MessageHandlerInterface
{
    public function __invoke(LuckyNumberNotification $message)
    {
        // do something with it.
    }
}