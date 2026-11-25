<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/**
 * Feature
 *
 * This hash contains the features the customer sheet supports.
 */
final class SessionResourceComponentsResourceCustomerSheetResourceFeatures extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * A list of [`allow_redisplay`](https://docs.stripe.com/api/payment_methods/object#payment_method_object-allow_redisplay) values that controls which saved payment methods the customer sheet displays by filtering to only show payment methods with an `allow_redisplay` value that is present in this list.
     *
     * If not specified, defaults to ["always"]. In order to display all saved payment methods, specify ["always", "limited", "unspecified"].
     */
    public ?\StripeSDK\Collections\Customer\SessionResourceComponentsResourceCustomerSheetResourceFeatures\RedisplayFiltersCollection $payment_method_allow_redisplay_filters;
    /**
     * Controls whether the customer sheet displays the option to remove a saved payment method."
     *
     * Allowing buyers to remove their saved payment methods impacts subscriptions that depend on that payment method. Removing the payment method detaches the [`customer` object](https://docs.stripe.com/api/payment_methods/object#payment_method_object-customer) from that [PaymentMethod](https://docs.stripe.com/api/payment_methods).
     */
    public ?\StripeSDK\Enums\Customer\SessionResourceComponentsResourceCustomerSheetResourceFeatures\MethodRemoveEnum $payment_method_remove;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payment_method_remove' => $value === null || is_string($value) ? $this->payment_method_remove = $value === null ? null : \StripeSDK\Enums\Customer\SessionResourceComponentsResourceCustomerSheetResourceFeatures\MethodRemoveEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
