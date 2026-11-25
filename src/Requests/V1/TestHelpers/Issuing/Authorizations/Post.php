<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'card',
    ];

    protected const array VALIDATION = [
        'card' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The total amount to attempt to authorize. This amount is in the provided currency, or defaults to the card's currency, and in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal).
     */
    public int $amount;
    /**
     * Detailed breakdown of amount components. These amounts are denominated in `currency` and in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal).
     */
    public \StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\Post\AmountDetailsRequest $amount_details;
    /**
     * How the card details were provided. Defaults to online.
     */
    public \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\AuthorizationMethodEnum $authorization_method;
    /**
     * Card associated with this authorization.
     */
    public string $card {
        set {
            $this->assigning('card', $value);
            $this->card = $value;
        }
    }
    /**
     * The currency of the authorization. If not provided, defaults to the currency of the card. Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Fleet-specific information for authorizations using Fleet cards.
     */
    public \StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\Post\AuthorizationsFleetRequest $fleet;
    /**
     * Probability that this transaction can be disputed in the event of fraud. Assessed by comparing the characteristics of the authorization to card network rules.
     */
    public \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\DisputabilityLikelihoodEnum $fraud_disputability_likelihood;
    /**
     * Information about fuel that was purchased with this transaction.
     */
    public \StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\Post\AuthorizationsFuelRequest $fuel;
    /**
     * If set `true`, you may provide [amount](https://docs.stripe.com/api/issuing/authorizations/approve#approve_issuing_authorization-amount) to control how much to hold for the authorization.
     */
    public bool $is_amount_controllable;
    /**
     * The total amount to attempt to authorize. This amount is in the provided merchant currency, and in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal).
     */
    public int $merchant_amount;
    /**
     * The currency of the authorization. If not provided, defaults to the currency of the card. Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $merchant_currency;
    /**
     * Details about the seller (grocery store, e-commerce website, etc.) where the card authorization happened.
     */
    public \StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\Post\MerchantDataRequest $merchant_data;
    /**
     * Details about the authorization, such as identifiers, set by the card network.
     */
    public \StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\Post\NetworkDataRequest $network_data;
    /**
     * Stripe’s assessment of the fraud risk for this authorization.
     */
    public \StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\Post\RiskAssessmentRequest $risk_assessment;
    /**
     * Verifications that Stripe performed on information that the cardholder provided to the merchant.
     */
    public \StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\Post\VerificationDataRequest $verification_data;
    /**
     * The digital wallet used for this transaction. One of `apple_pay`, `google_pay`, or `samsung_pay`. Will populate as `null` when no digital wallet was utilized.
     */
    public \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\AuthorizationsWalletEnum $wallet;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'authorization_method' => is_string($value) ? $this->authorization_method = \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\AuthorizationMethodEnum::from($value) : parent::assignMember($name, $value),
            'card' => is_string($value) ? $this->card = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'fraud_disputability_likelihood' => is_string($value) ? $this->fraud_disputability_likelihood = \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\DisputabilityLikelihoodEnum::from($value) : parent::assignMember($name, $value),
            'is_amount_controllable' => is_bool($value) ? $this->is_amount_controllable = $value : parent::assignMember($name, $value),
            'merchant_amount' => is_int($value) ? $this->merchant_amount = $value : parent::assignMember($name, $value),
            'merchant_currency' => is_string($value) ? $this->merchant_currency = $value : parent::assignMember($name, $value),
            'wallet' => is_string($value) ? $this->wallet = \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\AuthorizationsWalletEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
