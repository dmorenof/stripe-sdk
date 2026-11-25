<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_options_card_present
 */
final class MethodOptionsCardPresent extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Controls when the funds will be captured from the customer's account.
     */
    public \StripeSDK\Enums\Payment\MethodOptionsCardPresent\CaptureMethodEnum $capture_method;
    /**
     * Request ability to capture this payment beyond the standard [authorization validity window](https://docs.stripe.com/terminal/features/extended-authorizations#authorization-validity)
     */
    public ?bool $request_extended_authorization;
    /**
     * Request ability to [increment](https://docs.stripe.com/terminal/features/incremental-authorizations) this PaymentIntent if the combination of MCC and card brand is eligible. Check [incremental_authorization_supported](https://docs.stripe.com/api/charges/object#charge_object-payment_method_details-card_present-incremental_authorization_supported) in the [Confirm](https://docs.stripe.com/api/payment_intents/confirm) response to verify support.
     */
    public ?bool $request_incremental_authorization_support;
    public \StripeSDK\DTOs\Payment\MethodOptionsCardPresentRouting $routing;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'capture_method' => is_string($value) ? $this->capture_method = \StripeSDK\Enums\Payment\MethodOptionsCardPresent\CaptureMethodEnum::from($value) : parent::assignMember($name, $value),
            'request_extended_authorization' => $value === null || is_bool($value) ? $this->request_extended_authorization = $value : parent::assignMember($name, $value),
            'request_incremental_authorization_support' => $value === null || is_bool($value) ? $this->request_incremental_authorization_support = $value : parent::assignMember($name, $value),
            'routing' => $value instanceof \stdClass ? $this->routing = new \StripeSDK\DTOs\Payment\MethodOptionsCardPresentRouting($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
