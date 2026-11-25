<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

final class TypeSepaDebit extends \Dmorenof\SdkRuntime\DTO
{
    public ?string $bank_code;
    public ?string $branch_code;
    public ?string $country;
    public ?string $fingerprint;
    public ?string $last4;
    public ?string $mandate_reference;
    public ?string $mandate_url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank_code' => $value === null || is_string($value) ? $this->bank_code = $value : parent::assignMember($name, $value),
            'branch_code' => $value === null || is_string($value) ? $this->branch_code = $value : parent::assignMember($name, $value),
            'country' => $value === null || is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'fingerprint' => $value === null || is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            'last4' => $value === null || is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'mandate_reference' => $value === null || is_string($value) ? $this->mandate_reference = $value : parent::assignMember($name, $value),
            'mandate_url' => $value === null || is_string($value) ? $this->mandate_url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
