<?php

namespace Prophetz\Curl\Exception;

/**
 * Class CurlException
 * @package Prophetz\Curl\Exception
 */
class CurlException extends \Exception
{
    /**
     * CurlException constructor.
     * @param string|null $message
     * @param int $code
     * @param \Exception|null $previous
     */
    public function __construct($message = null, $code = 0, \Exception $previous = null)
    {
        $message = 'Curl exception: ' . $message;

        parent::__construct($message, $code, $previous);
    }
}