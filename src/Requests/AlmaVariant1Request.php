<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * payment_method_options_param
 */
final class AlmaVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\OptionsAlmaRequestVariant1\CaptureMethodEnum $capture_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'capture_method' => is_string($value) ? $this->capture_method = \StripeSDK\Enums\OptionsAlmaRequestVariant1\CaptureMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
