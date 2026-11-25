<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing\AuthorizationPending;

/**
 * IssuingAuthorizationPendingRequest
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'currency',
        'is_amount_controllable',
        'merchant_amount',
        'merchant_currency',
    ];

    /**
     * The additional amount Stripe will hold if the authorization is approved, in the card's [currency](https://docs.stripe.com/api#issuing_authorization_object-pending-request-currency) and in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal).
     */
    public int $amount;
    /**
     * Detailed breakdown of amount components. These amounts are denominated in `currency` and in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal).
     */
    public ?\StripeSDK\DTOs\Issuing\AuthorizationAmountDetails $amount_details;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * If set `true`, you may provide [amount](https://docs.stripe.com/api/issuing/authorizations/approve#approve_issuing_authorization-amount) to control how much to hold for the authorization.
     */
    public bool $is_amount_controllable;
    /**
     * The amount the merchant is requesting to be authorized in the `merchant_currency`. The amount is in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal).
     */
    public int $merchant_amount;
    /**
     * The local currency the merchant is requesting to authorize.
     * Format: currency
     */
    public string $merchant_currency;
    /**
     * The card network's estimate of the likelihood that an authorization is fraudulent. Takes on values between 1 and 99.
     */
    public ?int $network_risk_score;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'amount_details' => $value === null || $value instanceof \stdClass ? $this->amount_details = $value === null ? null : new \StripeSDK\DTOs\Issuing\AuthorizationAmountDetails($value) : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'is_amount_controllable' => is_bool($value) ? $this->is_amount_controllable = $value : parent::assignMember($name, $value),
            'merchant_amount' => is_int($value) ? $this->merchant_amount = $value : parent::assignMember($name, $value),
            'merchant_currency' => is_string($value) ? $this->merchant_currency = $value : parent::assignMember($name, $value),
            'network_risk_score' => $value === null || is_int($value) ? $this->network_risk_score = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
