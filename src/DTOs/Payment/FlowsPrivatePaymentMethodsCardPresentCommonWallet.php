<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentFlowsPrivatePaymentMethodsCardPresentCommonWallet
 */
final class FlowsPrivatePaymentMethodsCardPresentCommonWallet extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * The type of mobile wallet, one of `apple_pay`, `google_pay`, `samsung_pay`, or `unknown`.
     */
    public \StripeSDK\Enums\Payment\FlowsPrivatePaymentMethodsCardPresentCommonWallet\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Payment\FlowsPrivatePaymentMethodsCardPresentCommonWallet\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
