<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

final class TypeSofort extends \Dmorenof\SdkRuntime\DTO
{
    public ?string $bank_code;
    public ?string $bank_name;
    public ?string $bic;
    public ?string $country;
    public ?string $iban_last4;
    public ?string $preferred_language;
    public ?string $statement_descriptor;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank_code' => $value === null || is_string($value) ? $this->bank_code = $value : parent::assignMember($name, $value),
            'bank_name' => $value === null || is_string($value) ? $this->bank_name = $value : parent::assignMember($name, $value),
            'bic' => $value === null || is_string($value) ? $this->bic = $value : parent::assignMember($name, $value),
            'country' => $value === null || is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'iban_last4' => $value === null || is_string($value) ? $this->iban_last4 = $value : parent::assignMember($name, $value),
            'preferred_language' => $value === null || is_string($value) ? $this->preferred_language = $value : parent::assignMember($name, $value),
            'statement_descriptor' => $value === null || is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
