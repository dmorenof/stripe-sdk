<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\ConfirmationTokens\Post\PaymentMethodData;

/**
 * billing_details_inner_params
 */
final class BillingDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'tax_id' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\TestHelpers\ConfirmationTokens\Post\PaymentMethodData\BillingDetails\DetailsAddressRequest $address;
    public \StripeSDK\Requests\V1\TestHelpers\ConfirmationTokens\Post\PaymentMethodData\BillingDetails\DetailsEmailRequest $email;
    public \StripeSDK\Requests\V1\TestHelpers\ConfirmationTokens\Post\PaymentMethodData\BillingDetails\DetailsNameRequest $name;
    public \StripeSDK\Requests\V1\TestHelpers\ConfirmationTokens\Post\PaymentMethodData\BillingDetails\DetailsPhoneRequest $phone;
    public string $tax_id {
        set {
            $this->assigning('tax_id', $value);
            $this->tax_id = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'tax_id' => is_string($value) ? $this->tax_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
