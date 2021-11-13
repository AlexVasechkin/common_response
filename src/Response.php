<?php

namespace CommonHelpers\ObjectResponse;

class Response
{
    private $result;

    private $message;

    /** @var mixed|null $payload */
    public $payload;

    public function __construct(string $message = '', bool $result = false, $payload = null)
    {
        $this->setMessage($message);

        $this->setResult($result);

        $this->payload = $payload;
    }

    public static function success(string $message = '', $payload = null): Response
    {
        return new Response($message, true);
    }

    public static function fail(string $message = '', $payload = null): Response
    {
        return new Response($message, false, $payload);
    }

    public function setResult(bool $result): self
    {
        $this->result = $result;

        return $this;
    }

    public function getResult(): bool
    {
        return $this->result;
    }

    public function isSuccess(): bool
    {
        return $this->result;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
