<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Issuing\Transactions\CreateUnlinkedRefund;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'card',
    ];

    protected const array VALIDATION = [
        'card' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The total amount to attempt to refund. This amount is in the provided currency, or defaults to the cards currency, and in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal).
     */
    public int $amount;
    /**
     * Card associated with this unlinked refund transaction.
     */
    public string $card {
        set {
            $this->assigning('card', $value);
            $this->card = $value;
        }
    }
    /**
     * The currency of the unlinked refund. If not provided, defaults to the currency of the card. Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Details about the seller (grocery store, e-commerce website, etc.) where the card authorization happened.
     */
    public \StripeSDK\Requests\V1\TestHelpers\Issuing\Transactions\CreateUnlinkedRefund\Post\MerchantDataRequest $merchant_data;
    /**
     * Additional purchase information that is optionally provided by the merchant.
     */
    public \StripeSDK\Requests\V1\TestHelpers\Issuing\Transactions\CreateUnlinkedRefund\Post\PurchaseDetailsRequest $purchase_details;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'card' => is_string($value) ? $this->card = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
