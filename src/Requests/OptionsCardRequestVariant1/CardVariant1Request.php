<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsCardRequestVariant1;

/**
 * subscription_payment_method_options_param
 */
final class CardVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'network' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\OptionsCardRequestVariant1\MandateOptionsRequest $mandate_options;
    public \StripeSDK\Enums\OptionsCardRequestVariant1\OptionsCardRequestVariant1NetworkEnum $network {
        set {
            $this->assigning('network', $value);
            $this->network = $value;
        }
    }
    public \StripeSDK\Enums\OptionsCardRequestVariant1\DSecureEnum $request_three_d_secure;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'network' => is_string($value) ? $this->network = \StripeSDK\Enums\OptionsCardRequestVariant1\OptionsCardRequestVariant1NetworkEnum::from($value) : parent::assignMember($name, $value),
            'request_three_d_secure' => is_string($value) ? $this->request_three_d_secure = \StripeSDK\Enums\OptionsCardRequestVariant1\DSecureEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
