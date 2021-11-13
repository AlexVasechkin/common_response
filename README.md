# PHP Class Response

Class CommonHelpers\Response should use if you want to get boolean result of the operations and message. Also you have an opportunity get any data besides the boolean result and message. It is comfortable for api.

```php
<?php

namespace App;

use CommonHelpers\ObjectResponse\Response;

class ApiController
{
    private $response;

    public function __construct()
    {
        $this->response = Response::fail();
    }

    public function run(int $a, int $b): Response
    {
        $this->response->setResult($a > $b);

        $this->response->isSuccess() ? $this->response->setMessage('ok')
                                     : $this->response->setMessage('fail')
        ;

        $this->response->payload = $a * $b;

        return $this->response;
    }
}

```
