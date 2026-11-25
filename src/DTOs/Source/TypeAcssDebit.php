<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

final class TypeAcssDebit extends \Dmorenof\SdkRuntime\DTO
{
    public ?string $bank_address_city;
    public ?string $bank_address_line_1;
    public ?string $bank_address_line_2;
    public ?string $bank_address_postal_code;
    public ?string $bank_name;
    public ?string $category;
    public ?string $country;
    public ?string $fingerprint;
    public ?string $last4;
    public ?string $routing_number;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank_address_city' => $value === null || is_string($value) ? $this->bank_address_city = $value : parent::assignMember($name, $value),
            'bank_address_line_1' => $value === null || is_string($value) ? $this->bank_address_line_1 = $value : parent::assignMember($name, $value),
            'bank_address_line_2' => $value === null || is_string($value) ? $this->bank_address_line_2 = $value : parent::assignMember($name, $value),
            'bank_address_postal_code' => $value === null || is_string($value) ? $this->bank_address_postal_code = $value : parent::assignMember($name, $value),
            'bank_name' => $value === null || is_string($value) ? $this->bank_name = $value : parent::assignMember($name, $value),
            'category' => $value === null || is_string($value) ? $this->category = $value : parent::assignMember($name, $value),
            'country' => $value === null || is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'fingerprint' => $value === null || is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            'last4' => $value === null || is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'routing_number' => $value === null || is_string($value) ? $this->routing_number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
