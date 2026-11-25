<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

final class TypeAchDebit extends \Dmorenof\SdkRuntime\DTO
{
    public ?string $bank_name;
    public ?string $country;
    public ?string $fingerprint;
    public ?string $last4;
    public ?string $routing_number;
    public ?string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank_name' => $value === null || is_string($value) ? $this->bank_name = $value : parent::assignMember($name, $value),
            'country' => $value === null || is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'fingerprint' => $value === null || is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            'last4' => $value === null || is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'routing_number' => $value === null || is_string($value) ? $this->routing_number = $value : parent::assignMember($name, $value),
            'type' => $value === null || is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
