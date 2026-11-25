<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * klarna_payer_details
 */
final class KlarnaPayerDetails extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The payer's address
     */
    public ?\StripeSDK\DTOs\KlarnaAddress $address;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => $value === null || $value instanceof \stdClass ? $this->address = $value === null ? null : new \StripeSDK\DTOs\KlarnaAddress($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
