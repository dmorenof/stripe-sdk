<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

final class TypeP24 extends \Dmorenof\SdkRuntime\DTO
{
    public ?string $reference;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
