<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

final class TypeMultibanco extends \Dmorenof\SdkRuntime\DTO
{
    public ?string $entity;
    public ?string $reference;
    public ?string $refund_account_holder_address_city;
    public ?string $refund_account_holder_address_country;
    public ?string $refund_account_holder_address_line1;
    public ?string $refund_account_holder_address_line2;
    public ?string $refund_account_holder_address_postal_code;
    public ?string $refund_account_holder_address_state;
    public ?string $refund_account_holder_name;
    public ?string $refund_iban;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'entity' => $value === null || is_string($value) ? $this->entity = $value : parent::assignMember($name, $value),
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'refund_account_holder_address_city' => $value === null || is_string($value) ? $this->refund_account_holder_address_city = $value : parent::assignMember($name, $value),
            'refund_account_holder_address_country' => $value === null || is_string($value) ? $this->refund_account_holder_address_country = $value : parent::assignMember($name, $value),
            'refund_account_holder_address_line1' => $value === null || is_string($value) ? $this->refund_account_holder_address_line1 = $value : parent::assignMember($name, $value),
            'refund_account_holder_address_line2' => $value === null || is_string($value) ? $this->refund_account_holder_address_line2 = $value : parent::assignMember($name, $value),
            'refund_account_holder_address_postal_code' => $value === null || is_string($value) ? $this->refund_account_holder_address_postal_code = $value : parent::assignMember($name, $value),
            'refund_account_holder_address_state' => $value === null || is_string($value) ? $this->refund_account_holder_address_state = $value : parent::assignMember($name, $value),
            'refund_account_holder_name' => $value === null || is_string($value) ? $this->refund_account_holder_name = $value : parent::assignMember($name, $value),
            'refund_iban' => $value === null || is_string($value) ? $this->refund_iban = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
