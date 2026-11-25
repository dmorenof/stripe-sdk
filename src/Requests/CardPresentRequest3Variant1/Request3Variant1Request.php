<?php

declare(strict_types=1);

namespace StripeSDK\Requests\CardPresentRequest3Variant1;

/**
 * payment_method_options_param
 */
final class Request3Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\CardPresentRequest3Variant1\CaptureMethodEnum $capture_method;
    public bool $request_extended_authorization;
    public bool $request_incremental_authorization_support;
    public \StripeSDK\Requests\CardPresentRequest3Variant1\CardPresentRequest3Variant1RoutingRequest $routing;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'capture_method' => is_string($value) ? $this->capture_method = \StripeSDK\Enums\CardPresentRequest3Variant1\CaptureMethodEnum::from($value) : parent::assignMember($name, $value),
            'request_extended_authorization' => is_bool($value) ? $this->request_extended_authorization = $value : parent::assignMember($name, $value),
            'request_incremental_authorization_support' => is_bool($value) ? $this->request_incremental_authorization_support = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
