<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Promotion;

/**
 * PromotionCodesResourceRestrictions
 */
final class CodesResourceRestrictions extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'first_time_transaction',
    ];

    protected const array VALIDATION = [
        'minimum_amount_currency' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Promotion code restrictions defined in each available currency option. Each key must be a three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html) and a [supported currency](https://stripe.com/docs/currencies).
     */
    public \StripeSDK\DTOs\Promotion\CodesResourceRestrictions\CurrencyOptionsMap $currency_options;
    /**
     * A Boolean indicating if the Promotion Code should only be redeemed for Customers without any successful payments or invoices
     */
    public bool $first_time_transaction;
    /**
     * Minimum amount required to redeem this Promotion Code into a Coupon (e.g., a purchase must be $100 or more to work).
     */
    public ?int $minimum_amount;
    /**
     * Three-letter [ISO code](https://stripe.com/docs/currencies) for minimum_amount
     */
    public ?string $minimum_amount_currency {
        set {
            $this->assigning('minimum_amount_currency', $value);
            $this->minimum_amount_currency = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'first_time_transaction' => is_bool($value) ? $this->first_time_transaction = $value : parent::assignMember($name, $value),
            'minimum_amount' => $value === null || is_int($value) ? $this->minimum_amount = $value : parent::assignMember($name, $value),
            'minimum_amount_currency' => $value === null || is_string($value) ? $this->minimum_amount_currency = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
