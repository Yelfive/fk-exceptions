<?php

/**
 * @author Felix Huang <yelfivehuang@gmail.com>
 * @date 18-3-27
 */

namespace fk\exceptions;

use BadMethodCallException;
use Throwable;

class UndefinedMethodException extends BadMethodCallException
{
    public function __construct(string $method = null, int $code = 0, Throwable $previous = null)
    {
        $message = 'Trying to call undefined method';
        if ($message !== null) $message .= " `$method`";
        parent::__construct($message, $code, $previous);
    }
}