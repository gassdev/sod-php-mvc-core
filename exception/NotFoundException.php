<?php
namespace Sod\PhpMvcCore\exception;

use Exception;

/**
 * NotFoundException
 */
class NotFoundException extends Exception
{
    protected $message = 'Page not found';
    protected $code = 404;
}
