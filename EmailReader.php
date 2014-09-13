<?php
namespace Ton\EmailBundle;

class EmailReader
{
    const EXTENSION = '.eml';
    /**
     * @var string
     */
    protected $dir;

    /**
     * @param string $dir
     */
    public function __construct($dir)
    {
        $this->dir = $dir;
    }

    /**
     * @return array
     */
    public function getAllEmails()
    {
        return glob($this->dir . '/*' . self::EXTENSION);
    }

    /**
     * @param $filename
     *
     * @return Message
     */
    public function getEmail($filename)
    {
        return new Message(array('file' => $filename));
    }

    public function clear()
    {
        foreach ($this->getAllEmails() as $fileName) {
            @unlink($fileName);
        }
    }
} 
