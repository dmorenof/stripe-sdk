<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodOptions;

/**
 * setup_intent_param
 */
final class OptionsCardRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'network' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodOptions\Card\MandateOptionsRequest $mandate_options;
    public \StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodOptions\Card\CardNetworkEnum $network {
        set {
            $this->assigning('network', $value);
            $this->network = $value;
        }
    }
    public \StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodOptions\Card\DSecureEnum $request_three_d_secure;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodOptions\Card\DSecureRequest $three_d_secure;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'network' => is_string($value) ? $this->network = \StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodOptions\Card\CardNetworkEnum::from($value) : parent::assignMember($name, $value),
            'request_three_d_secure' => is_string($value) ? $this->request_three_d_secure = \StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodOptions\Card\DSecureEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
