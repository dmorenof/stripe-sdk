<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ConfirmationTokensResource;

/**
 * Card
 *
 * This hash contains the card payment method options.
 */
final class PaymentMethodOptionsResourceCard extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'cvc_token' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The `cvc_update` Token collected from the Payment Element.
     */
    public ?string $cvc_token {
        set {
            $this->assigning('cvc_token', $value);
            $this->cvc_token = $value;
        }
    }
    public \StripeSDK\DTOs\ConfirmationTokensResource\PaymentMethodOptionsResourceCardResourceInstallment $installments;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cvc_token' => $value === null || is_string($value) ? $this->cvc_token = $value : parent::assignMember($name, $value),
            'installments' => $value instanceof \stdClass ? $this->installments = new \StripeSDK\DTOs\ConfirmationTokensResource\PaymentMethodOptionsResourceCardResourceInstallment($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
