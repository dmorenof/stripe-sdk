<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/**
 * Component
 *
 * Configuration for the components supported by this Customer Session.
 */
final class SessionResourceComponents extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'active_entitlements',
        'buy_button',
        'customer_portal',
        'customer_sheet',
        'mobile_payment_element',
        'payment_element',
        'pricing_table',
    ];

    public \StripeSDK\DTOs\Customer\SessionResourceComponentsResourceActiveEntitlements $active_entitlements;
    public \StripeSDK\DTOs\Customer\SessionResourceComponentsResourceBuyButton $buy_button;
    public \StripeSDK\DTOs\Customer\SessionResourceComponentsResourceCustomerPortal $customer_portal;
    public \StripeSDK\DTOs\Customer\SessionResourceComponentsResourceCustomerSheet $customer_sheet;
    public \StripeSDK\DTOs\Customer\SessionResourceComponentsResourceMobilePaymentElement $mobile_payment_element;
    public \StripeSDK\DTOs\Customer\SessionResourceComponentsResourcePaymentElement $payment_element;
    public \StripeSDK\DTOs\Customer\SessionResourceComponentsResourcePricingTable $pricing_table;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active_entitlements' => $value instanceof \stdClass ? $this->active_entitlements = new \StripeSDK\DTOs\Customer\SessionResourceComponentsResourceActiveEntitlements($value) : parent::assignMember($name, $value),
            'buy_button' => $value instanceof \stdClass ? $this->buy_button = new \StripeSDK\DTOs\Customer\SessionResourceComponentsResourceBuyButton($value) : parent::assignMember($name, $value),
            'customer_portal' => $value instanceof \stdClass ? $this->customer_portal = new \StripeSDK\DTOs\Customer\SessionResourceComponentsResourceCustomerPortal($value) : parent::assignMember($name, $value),
            'customer_sheet' => $value instanceof \stdClass ? $this->customer_sheet = new \StripeSDK\DTOs\Customer\SessionResourceComponentsResourceCustomerSheet($value) : parent::assignMember($name, $value),
            'mobile_payment_element' => $value instanceof \stdClass ? $this->mobile_payment_element = new \StripeSDK\DTOs\Customer\SessionResourceComponentsResourceMobilePaymentElement($value) : parent::assignMember($name, $value),
            'payment_element' => $value instanceof \stdClass ? $this->payment_element = new \StripeSDK\DTOs\Customer\SessionResourceComponentsResourcePaymentElement($value) : parent::assignMember($name, $value),
            'pricing_table' => $value instanceof \stdClass ? $this->pricing_table = new \StripeSDK\DTOs\Customer\SessionResourceComponentsResourcePricingTable($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
