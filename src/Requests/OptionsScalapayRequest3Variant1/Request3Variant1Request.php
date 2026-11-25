<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsScalapayRequest3Variant1;

/**
 * payment_method_options_param
 */
final class Request3Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\OptionsScalapayRequest3Variant1\CaptureMethodEnum $capture_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'capture_method' => is_string($value) ? $this->capture_method = \StripeSDK\Enums\OptionsScalapayRequest3Variant1\CaptureMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
