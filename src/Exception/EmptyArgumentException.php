<?php

namespace PageSpeed/Exception;

class EmptyArgumentException extends Exception {

    public function __construct($message = "Empty argument given", $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}
