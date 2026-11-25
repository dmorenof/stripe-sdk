<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentFlowsPrivatePaymentMethodsCardDetailsAPIResourceEnterpriseFeaturesExtendedAuthorizationExtendedAuthorization
 */
final class FlowsPrivatePaymentMethodsCardDetailsApiResourceEnterpriseFeaturesExtendedAuthorizationExtendedAuthorization extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'status',
    ];

    /**
     * Indicates whether or not the capture window is extended beyond the standard authorization.
     */
    public \StripeSDK\Enums\Payment\FlowsPrivatePaymentMethodsCardDetailsApiResourceEnterpriseFeaturesExtendedAuthorizationExtendedAuthorization\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Payment\FlowsPrivatePaymentMethodsCardDetailsApiResourceEnterpriseFeaturesExtendedAuthorizationExtendedAuthorization\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
