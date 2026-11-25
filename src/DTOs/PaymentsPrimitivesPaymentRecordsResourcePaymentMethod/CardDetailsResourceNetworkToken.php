<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod;

/**
 * PaymentsPrimitivesPaymentRecordsResourcePaymentMethodCardDetailsResourceNetworkToken
 */
final class CardDetailsResourceNetworkToken extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'used',
    ];

    /**
     * Indicates if Stripe used a network token, either user provided or Stripe managed when processing the transaction.
     */
    public bool $used;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'used' => is_bool($value) ? $this->used = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
