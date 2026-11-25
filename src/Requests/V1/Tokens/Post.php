<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tokens;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'customer' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Information for the account this token represents.
     */
    public \StripeSDK\Requests\V1\Tokens\Post\TokensAccountRequest $account;
    /**
     * The bank account this token will represent.
     */
    public \StripeSDK\Requests\V1\Tokens\Post\BankAccountRequest $bank_account;
    /**
     * The card this token will represent. If you also pass in a customer, the card must be the ID of a card belonging to the customer. Otherwise, if you do not pass in a customer, this is a dictionary containing a user's credit card details, with the options described below.
     */
    public \StripeSDK\Requests\V1\Tokens\Post\TokensCardRequest $card;
    /**
     * Create a token for the customer, which is owned by the application's account. You can only use this with an [OAuth access token](https://docs.stripe.com/connect/standard-accounts) or [Stripe-Account header](https://docs.stripe.com/connect/authentication). Learn more about [cloning saved payment methods](https://docs.stripe.com/connect/cloning-saved-payment-methods).
     */
    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    /**
     * The updated CVC value this token represents.
     */
    public \StripeSDK\Requests\V1\Tokens\Post\CvcUpdateRequest $cvc_update;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Information for the person this token represents.
     */
    public \StripeSDK\Requests\V1\Tokens\Post\TokensPersonRequest $person;
    /**
     * The PII this token represents.
     */
    public \StripeSDK\Requests\V1\Tokens\Post\TokensPiiRequest $pii;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
