<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

final class TypeAuBecsDebit extends \Dmorenof\SdkRuntime\DTO
{
    public ?string $bsb_number;
    public ?string $fingerprint;
    public ?string $last4;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bsb_number' => $value === null || is_string($value) ? $this->bsb_number = $value : parent::assignMember($name, $value),
            'fingerprint' => $value === null || is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            'last4' => $value === null || is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
