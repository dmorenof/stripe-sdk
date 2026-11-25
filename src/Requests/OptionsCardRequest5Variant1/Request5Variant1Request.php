<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsCardRequest5Variant1;

/**
 * payment_intent_param
 */
final class Request5Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'cvc_token' => [
            'maxLength' => 5000,
        ],
        'network' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Enums\OptionsCardRequest5Variant1\CaptureMethodEnum $capture_method;
    public string $cvc_token {
        set {
            $this->assigning('cvc_token', $value);
            $this->cvc_token = $value;
        }
    }
    public \StripeSDK\Requests\OptionsCardRequest5Variant1\OptionsCardRequest5Variant1InstallmentsRequest $installments;
    public \StripeSDK\Requests\OptionsCardRequest5Variant1\MandateOptionsRequest $mandate_options;
    public \StripeSDK\Enums\OptionsCardRequest5Variant1\OptionsCardRequest5Variant1NetworkEnum $network {
        set {
            $this->assigning('network', $value);
            $this->network = $value;
        }
    }
    public \StripeSDK\Enums\OptionsCardRequest5Variant1\ExtendedAuthorizationEnum $request_extended_authorization;
    public \StripeSDK\Enums\OptionsCardRequest5Variant1\IncrementalAuthorizationEnum $request_incremental_authorization;
    public \StripeSDK\Enums\OptionsCardRequest5Variant1\OptionsCardRequest5Variant1MulticaptureEnum $request_multicapture;
    public \StripeSDK\Enums\OptionsCardRequest5Variant1\OptionsCardRequest5Variant1OvercaptureEnum $request_overcapture;
    public \StripeSDK\Enums\OptionsCardRequest5Variant1\DSecureEnum $request_three_d_secure;
    public bool $require_cvc_recollection;
    public \StripeSDK\Enums\OptionsCardRequest5Variant1\FutureUsageEnum $setup_future_usage;
    public \StripeSDK\Requests\OptionsCardRequest5Variant1\SuffixKanaRequest $statement_descriptor_suffix_kana;
    public \StripeSDK\Requests\OptionsCardRequest5Variant1\SuffixKanjiRequest $statement_descriptor_suffix_kanji;
    public \StripeSDK\Requests\OptionsCardRequest5Variant1\DSecureRequest $three_d_secure;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'capture_method' => is_string($value) ? $this->capture_method = \StripeSDK\Enums\OptionsCardRequest5Variant1\CaptureMethodEnum::from($value) : parent::assignMember($name, $value),
            'cvc_token' => is_string($value) ? $this->cvc_token = $value : parent::assignMember($name, $value),
            'network' => is_string($value) ? $this->network = \StripeSDK\Enums\OptionsCardRequest5Variant1\OptionsCardRequest5Variant1NetworkEnum::from($value) : parent::assignMember($name, $value),
            'request_extended_authorization' => is_string($value) ? $this->request_extended_authorization = \StripeSDK\Enums\OptionsCardRequest5Variant1\ExtendedAuthorizationEnum::from($value) : parent::assignMember($name, $value),
            'request_incremental_authorization' => is_string($value) ? $this->request_incremental_authorization = \StripeSDK\Enums\OptionsCardRequest5Variant1\IncrementalAuthorizationEnum::from($value) : parent::assignMember($name, $value),
            'request_multicapture' => is_string($value) ? $this->request_multicapture = \StripeSDK\Enums\OptionsCardRequest5Variant1\OptionsCardRequest5Variant1MulticaptureEnum::from($value) : parent::assignMember($name, $value),
            'request_overcapture' => is_string($value) ? $this->request_overcapture = \StripeSDK\Enums\OptionsCardRequest5Variant1\OptionsCardRequest5Variant1OvercaptureEnum::from($value) : parent::assignMember($name, $value),
            'request_three_d_secure' => is_string($value) ? $this->request_three_d_secure = \StripeSDK\Enums\OptionsCardRequest5Variant1\DSecureEnum::from($value) : parent::assignMember($name, $value),
            'require_cvc_recollection' => is_bool($value) ? $this->require_cvc_recollection = $value : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\OptionsCardRequest5Variant1\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
