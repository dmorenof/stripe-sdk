<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

final class TypeCard extends \Dmorenof\SdkRuntime\DTO
{
    public ?string $address_line1_check;
    public ?string $address_zip_check;
    public ?string $brand;
    public ?string $country;
    public ?string $cvc_check;
    public ?string $dynamic_last4;
    public ?int $exp_month;
    public ?int $exp_year;
    public string $fingerprint;
    public ?string $funding;
    public ?string $last4;
    public ?string $name;
    public string $three_d_secure;
    public ?string $tokenization_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address_line1_check' => $value === null || is_string($value) ? $this->address_line1_check = $value : parent::assignMember($name, $value),
            'address_zip_check' => $value === null || is_string($value) ? $this->address_zip_check = $value : parent::assignMember($name, $value),
            'brand' => $value === null || is_string($value) ? $this->brand = $value : parent::assignMember($name, $value),
            'country' => $value === null || is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'cvc_check' => $value === null || is_string($value) ? $this->cvc_check = $value : parent::assignMember($name, $value),
            'dynamic_last4' => $value === null || is_string($value) ? $this->dynamic_last4 = $value : parent::assignMember($name, $value),
            'exp_month' => $value === null || is_int($value) ? $this->exp_month = $value : parent::assignMember($name, $value),
            'exp_year' => $value === null || is_int($value) ? $this->exp_year = $value : parent::assignMember($name, $value),
            'fingerprint' => is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            'funding' => $value === null || is_string($value) ? $this->funding = $value : parent::assignMember($name, $value),
            'last4' => $value === null || is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'name' => $value === null || is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'three_d_secure' => is_string($value) ? $this->three_d_secure = $value : parent::assignMember($name, $value),
            'tokenization_method' => $value === null || is_string($value) ? $this->tokenization_method = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
