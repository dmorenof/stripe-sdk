<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

final class TypeIdeal extends \Dmorenof\SdkRuntime\DTO
{
    public ?string $bank;
    public ?string $bic;
    public ?string $iban_last4;
    public ?string $statement_descriptor;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank' => $value === null || is_string($value) ? $this->bank = $value : parent::assignMember($name, $value),
            'bic' => $value === null || is_string($value) ? $this->bic = $value : parent::assignMember($name, $value),
            'iban_last4' => $value === null || is_string($value) ? $this->iban_last4 = $value : parent::assignMember($name, $value),
            'statement_descriptor' => $value === null || is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
