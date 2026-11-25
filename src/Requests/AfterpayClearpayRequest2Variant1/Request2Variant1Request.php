<?php

declare(strict_types=1);

namespace StripeSDK\Requests\AfterpayClearpayRequest2Variant1;

/**
 * payment_method_options_param
 */
final class Request2Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'reference' => [
            'maxLength' => 128,
        ],
    ];

    public \StripeSDK\Enums\AfterpayClearpayRequest2Variant1\CaptureMethodEnum $capture_method;
    public string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }
    public \StripeSDK\Enums\AfterpayClearpayRequest2Variant1\FutureUsageEnum $setup_future_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'capture_method' => is_string($value) ? $this->capture_method = \StripeSDK\Enums\AfterpayClearpayRequest2Variant1\CaptureMethodEnum::from($value) : parent::assignMember($name, $value),
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\AfterpayClearpayRequest2Variant1\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
