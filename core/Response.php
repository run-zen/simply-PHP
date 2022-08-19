<?php

namespace app\core;

class Response
{
    public function getStatusCode(int $code): void
    {
        http_response_code($code);
    }
}