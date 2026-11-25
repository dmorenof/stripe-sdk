<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodOptions;

/**
 * payment_method_options_param
 */
final class OptionsPaypalRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'billing_agreement_id' => [
            'maxLength' => 5000,
        ],
    ];

    public string $billing_agreement_id {
        set {
            $this->assigning('billing_agreement_id', $value);
            $this->billing_agreement_id = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing_agreement_id' => is_string($value) ? $this->billing_agreement_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
