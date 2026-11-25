<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodOptions;

/**
 * setup_intent_payment_method_options_param
 */
final class OptionsBlikRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'code' => [
            'maxLength' => 5000,
        ],
    ];

    public string $code {
        set {
            $this->assigning('code', $value);
            $this->code = $value;
        }
    }
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodOptions\Blik\MandateOptionsRequest $mandate_options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_string($value) ? $this->code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
