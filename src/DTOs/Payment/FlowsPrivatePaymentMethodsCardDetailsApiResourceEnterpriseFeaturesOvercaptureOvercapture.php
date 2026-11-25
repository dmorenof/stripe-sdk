<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentFlowsPrivatePaymentMethodsCardDetailsAPIResourceEnterpriseFeaturesOvercaptureOvercapture
 */
final class FlowsPrivatePaymentMethodsCardDetailsApiResourceEnterpriseFeaturesOvercaptureOvercapture extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'maximum_amount_capturable',
        'status',
    ];

    /**
     * The maximum amount that can be captured.
     */
    public int $maximum_amount_capturable;
    /**
     * Indicates whether or not the authorized amount can be over-captured.
     */
    public \StripeSDK\Enums\Payment\FlowsPrivatePaymentMethodsCardDetailsApiResourceEnterpriseFeaturesOvercaptureOvercapture\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'maximum_amount_capturable' => is_int($value) ? $this->maximum_amount_capturable = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Payment\FlowsPrivatePaymentMethodsCardDetailsApiResourceEnterpriseFeaturesOvercaptureOvercapture\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
