<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions;

/**
 * payment_method_options_param
 */
final class OptionsPaypalRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'reference' => [
            'maxLength' => 127,
        ],
        'risk_correlation_id' => [
            'maxLength' => 32,
        ],
    ];

    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Paypal\CaptureMethodEnum $capture_method;
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Paypal\PreferredLocaleEnum $preferred_locale;
    public string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }
    public string $risk_correlation_id {
        set {
            $this->assigning('risk_correlation_id', $value);
            $this->risk_correlation_id = $value;
        }
    }
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Paypal\FutureUsageEnum $setup_future_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'capture_method' => is_string($value) ? $this->capture_method = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Paypal\CaptureMethodEnum::from($value) : parent::assignMember($name, $value),
            'preferred_locale' => is_string($value) ? $this->preferred_locale = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Paypal\PreferredLocaleEnum::from($value) : parent::assignMember($name, $value),
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'risk_correlation_id' => is_string($value) ? $this->risk_correlation_id = $value : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Paypal\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
