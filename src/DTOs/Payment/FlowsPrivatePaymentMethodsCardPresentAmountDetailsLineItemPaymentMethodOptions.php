<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentFlowsPrivatePaymentMethodsCardPresentAmountDetailsLineItemPaymentMethodOptions
 */
final class FlowsPrivatePaymentMethodsCardPresentAmountDetailsLineItemPaymentMethodOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'commodity_code' => [
            'maxLength' => 5000,
        ],
    ];

    public ?string $commodity_code {
        set {
            $this->assigning('commodity_code', $value);
            $this->commodity_code = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'commodity_code' => $value === null || is_string($value) ? $this->commodity_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
