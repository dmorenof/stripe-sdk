<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions;

/**
 * payment_method_options_param
 */
final class OptionsCardRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'statement_descriptor_suffix_kana' => [
            'maxLength' => 22,
        ],
        'statement_descriptor_suffix_kanji' => [
            'maxLength' => 17,
        ],
    ];

    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Card\CaptureMethodEnum $capture_method;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\Card\CardInstallmentsRequest $installments;
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Card\ExtendedAuthorizationEnum $request_extended_authorization;
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Card\IncrementalAuthorizationEnum $request_incremental_authorization;
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Card\CardMulticaptureEnum $request_multicapture;
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Card\CardOvercaptureEnum $request_overcapture;
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Card\DSecureEnum $request_three_d_secure;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\Card\CardRestrictionsRequest $restrictions;
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Card\FutureUsageEnum $setup_future_usage;
    public string $statement_descriptor_suffix_kana {
        set {
            $this->assigning('statement_descriptor_suffix_kana', $value);
            $this->statement_descriptor_suffix_kana = $value;
        }
    }
    public string $statement_descriptor_suffix_kanji {
        set {
            $this->assigning('statement_descriptor_suffix_kanji', $value);
            $this->statement_descriptor_suffix_kanji = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'capture_method' => is_string($value) ? $this->capture_method = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Card\CaptureMethodEnum::from($value) : parent::assignMember($name, $value),
            'request_extended_authorization' => is_string($value) ? $this->request_extended_authorization = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Card\ExtendedAuthorizationEnum::from($value) : parent::assignMember($name, $value),
            'request_incremental_authorization' => is_string($value) ? $this->request_incremental_authorization = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Card\IncrementalAuthorizationEnum::from($value) : parent::assignMember($name, $value),
            'request_multicapture' => is_string($value) ? $this->request_multicapture = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Card\CardMulticaptureEnum::from($value) : parent::assignMember($name, $value),
            'request_overcapture' => is_string($value) ? $this->request_overcapture = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Card\CardOvercaptureEnum::from($value) : parent::assignMember($name, $value),
            'request_three_d_secure' => is_string($value) ? $this->request_three_d_secure = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Card\DSecureEnum::from($value) : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Card\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            'statement_descriptor_suffix_kana' => is_string($value) ? $this->statement_descriptor_suffix_kana = $value : parent::assignMember($name, $value),
            'statement_descriptor_suffix_kanji' => is_string($value) ? $this->statement_descriptor_suffix_kanji = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
