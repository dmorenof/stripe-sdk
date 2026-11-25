<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethods\ByPaymentMethod;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * This field indicates whether this payment method can be shown again to its customer in a checkout flow. Stripe products such as Checkout and Elements use this field to determine whether a payment method can be shown as a saved payment method in a checkout flow. The field defaults to `unspecified`.
     */
    public \StripeSDK\Enums\V1\PaymentMethods\ByPaymentMethod\Post\AllowRedisplayEnum $allow_redisplay;
    /**
     * Billing information associated with the PaymentMethod that may be used or required by particular types of payment methods.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\ByPaymentMethod\Post\BillingDetailsRequest $billing_details;
    /**
     * If this is a `card` PaymentMethod, this hash contains the user's card details.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\ByPaymentMethod\Post\ByPaymentMethodCardRequest $card;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\ByPaymentMethod\Post\ByPaymentMethodMetadataRequest $metadata;
    /**
     * If this is an `us_bank_account` PaymentMethod, this hash contains details about the US bank account payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\ByPaymentMethod\Post\BankAccountRequest $us_bank_account;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'allow_redisplay' => is_string($value) ? $this->allow_redisplay = \StripeSDK\Enums\V1\PaymentMethods\ByPaymentMethod\Post\AllowRedisplayEnum::from($value) : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
