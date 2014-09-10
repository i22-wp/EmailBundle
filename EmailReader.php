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
    public function getAllFiles()
    {
        return glob($this->dir . '/*' . self::EXTENSION);
    }
} 
