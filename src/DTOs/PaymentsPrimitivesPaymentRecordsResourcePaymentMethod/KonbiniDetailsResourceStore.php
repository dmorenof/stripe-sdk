<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod;

/**
 * PaymentsPrimitivesPaymentRecordsResourcePaymentMethodKonbiniDetailsResourceStore
 */
final class KonbiniDetailsResourceStore extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The name of the convenience store chain where the payment was completed.
     */
    public ?\StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\KonbiniDetailsResourceStore\ChainEnum $chain;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'chain' => $value === null || is_string($value) ? $this->chain = $value === null ? null : \StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\KonbiniDetailsResourceStore\ChainEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
