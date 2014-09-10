<?php
namespace Ton\EmailBundle\Swift;

use Ton\EmailBundle\Swift\Transport\FileTransport as Base;
use Swift_DependencyContainer;

class FileTransport extends Base
{
    /**
     * Create a new MailTransport, optionally specifying $extraParams.
     */
    public function __construct()
    {
        call_user_func_array(
            array($this, '\\Ton\\EmailBundle\\Swift\\Transport\\FileTransport::__construct'),
            Swift_DependencyContainer::getInstance()->createDependenciesFor('transport.mail')
        );
    }

    /**
     * Create a new MailTransport instance.
     *
     * @return $this
     */
    public static function newInstance()
    {
        return new static();
    }
}
