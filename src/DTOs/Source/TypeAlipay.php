<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

final class TypeAlipay extends \Dmorenof\SdkRuntime\DTO
{
    public ?string $data_string;
    public ?string $native_url;
    public ?string $statement_descriptor;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'data_string' => $value === null || is_string($value) ? $this->data_string = $value : parent::assignMember($name, $value),
            'native_url' => $value === null || is_string($value) ? $this->native_url = $value : parent::assignMember($name, $value),
            'statement_descriptor' => $value === null || is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
