<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentFlowsPrivatePaymentMethodsCardDetailsAPIResourceEnterpriseFeaturesIncrementalAuthorizationIncrementalAuthorization
 */
final class FlowsPrivatePaymentMethodsCardDetailsApiResourceEnterpriseFeaturesIncrementalAuthorizationIncrementalAuthorization extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'status',
    ];

    /**
     * Indicates whether or not the incremental authorization feature is supported.
     */
    public \StripeSDK\Enums\Payment\FlowsPrivatePaymentMethodsCardDetailsApiResourceEnterpriseFeaturesIncrementalAuthorizationIncrementalAuthorization\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Payment\FlowsPrivatePaymentMethodsCardDetailsApiResourceEnterpriseFeaturesIncrementalAuthorizationIncrementalAuthorization\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
