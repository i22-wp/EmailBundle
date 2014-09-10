# EmailBundle

Email bundle for test environment of Symfony2. It allows to store emails as *.eml files and read them after that.


## Setup


config_test.yml

```yaml
swiftmailer:
    transport: file
```

and 'swiftmailer.transport.file' instead of 'file' for SwiftmailerBundle V2.2.?


## Memory transport

PhpUnitTest.php

```php
use Ton\EmailBundle\EventListener\EmailListener;

    /**
     * @todo check multiple initialization
     */
    protected function registerEmailListener()
    {
        $container = $this->getContainer();
        $mailer = $container->get('mailer');
        $plugin = new EmailListener();
        $mailer->registerPlugin($plugin);
        return $plugin;
    }

    /**
     * @test
     */
    public function sendEmail()
    {
        $email = $this->registerEmailListener();
        $email->clean();

        // Send Email

        $this->assertCount(1, $email->getPreSendMessages());
        $email->getPreSendMessage(0);
    }
```
