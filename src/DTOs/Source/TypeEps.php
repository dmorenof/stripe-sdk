<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

final class TypeEps extends \Dmorenof\SdkRuntime\DTO
{
    public ?string $reference;
    public ?string $statement_descriptor;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'statement_descriptor' => $value === null || is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
