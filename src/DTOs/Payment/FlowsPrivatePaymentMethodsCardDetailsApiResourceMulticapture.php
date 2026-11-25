<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentFlowsPrivatePaymentMethodsCardDetailsAPIResourceMulticapture
 */
final class FlowsPrivatePaymentMethodsCardDetailsApiResourceMulticapture extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'status',
    ];

    /**
     * Indicates whether or not multiple captures are supported.
     */
    public \StripeSDK\Enums\Payment\FlowsPrivatePaymentMethodsCardDetailsApiResourceMulticapture\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Payment\FlowsPrivatePaymentMethodsCardDetailsApiResourceMulticapture\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
