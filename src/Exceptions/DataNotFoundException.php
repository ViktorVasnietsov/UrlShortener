<?php

namespace PhpPro\UrlShortener\Exceptions;

use Exception;

class DataNotFoundException extends Exception
{
    protected $message = 'Data not found';
}