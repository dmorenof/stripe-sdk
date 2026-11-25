<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentPagesCheckoutSessionPaymentMethodReuseAgreement
 */
final class PagesCheckoutSessionPaymentMethodReuseAgreement extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'position',
    ];

    /**
     * Determines the position and visibility of the payment method reuse agreement in the UI. When set to `auto`, Stripe's defaults will be used.
     *
     * When set to `hidden`, the payment method reuse agreement text will always be hidden in the UI.
     */
    public \StripeSDK\Enums\Payment\PagesCheckoutSessionPaymentMethodReuseAgreement\PositionEnum $position;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'position' => is_string($value) ? $this->position = \StripeSDK\Enums\Payment\PagesCheckoutSessionPaymentMethodReuseAgreement\PositionEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
