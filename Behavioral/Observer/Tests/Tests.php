<?php

declare(strict_types=1);

use Behavioral\Observer\User;
use Behavioral\Observer\UserObserver;
use PHPUnit\Framework\TestCase;

class Tests extends TestCase
{
    public function testChangeInUserLeadsToUserObserverBeingNotified()
    {
        $observer = new UserObserver();

        $user = new User();
        $user->attach($observer);

        $user->changeEmail('foo@bar.com');
        $this->assertCount(1, $observer->getChangedUsers());
    }
}
