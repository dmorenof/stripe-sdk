<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Exchange Rate
 *
 * [Deprecated] The `ExchangeRate` APIs are deprecated. Please use the [FX Quotes API](https://docs.stripe.com/payments/currencies/localize-prices/fx-quotes-api) instead.
 *
 * `ExchangeRate` objects allow you to determine the rates that Stripe is currently
 * using to convert from one currency to another. Since this number is variable
 * throughout the day, there are various reasons why you might want to know the current
 * rate (for example, to dynamically price an item for a user with a default
 * payment in a foreign currency).
 *
 * Please refer to our [Exchange Rates API](https://docs.stripe.com/fx-rates) guide for more details.
 *
 * *[Note: this integration path is supported but no longer recommended]* Additionally,
 * you can guarantee that a charge is made with an exchange rate that you expect is
 * current. To do so, you must pass in the exchange_rate to charges endpoints. If the
 * value is no longer up to date, the charge won't go through. Please refer to our
 * [Using with charges](https://docs.stripe.com/exchange-rates) guide for more details.
 *
 * -----
 *
 * &nbsp;
 *
 * *This Exchange Rates API is a Beta Service and is subject to Stripe's terms of service. You may use the API solely for the purpose of transacting on Stripe. For example, the API may be queried in order to:*
 *
 * - *localize prices for processing payments on Stripe*
 * - *reconcile Stripe transactions*
 * - *determine how much money to send to a connected account*
 * - *determine app fees to charge a connected account*
 *
 * *Using this Exchange Rates API beta for any purpose other than to transact on Stripe is strictly prohibited and constitutes a violation of Stripe's terms of service.*
 */
final class ExchangeRate extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'object_',
        'rates',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Unique identifier for the object. Represented as the three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html) in lowercase.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\ExchangeRate\ObjectEnum $object_;
    /**
     * Hash where the keys are supported currencies and the values are the exchange rate at which the base id currency converts to the key currency.
     */
    public \StripeSDK\DTOs\ExchangeRate\RatesMap $rates;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\ExchangeRate\ObjectEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
