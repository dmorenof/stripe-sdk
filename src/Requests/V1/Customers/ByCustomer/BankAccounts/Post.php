<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Customers\ByCustomer\BankAccounts;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'alipay_account' => [
            'maxLength' => 5000,
        ],
        'source' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A token returned by [Stripe.js](https://stripe.com/docs/js) representing the user’s Alipay account details.
     */
    public string $alipay_account {
        set {
            $this->assigning('alipay_account', $value);
            $this->alipay_account = $value;
        }
    }
    /**
     * Either a token, like the ones returned by [Stripe.js](https://stripe.com/docs/js), or a dictionary containing a user's bank account details.
     */
    public \StripeSDK\Requests\V1\Customers\ByCustomer\BankAccounts\Post\BankAccountRequest $bank_account;
    /**
     * A token, like the ones returned by [Stripe.js](https://stripe.com/docs/js).
     */
    public \StripeSDK\Requests\V1\Customers\ByCustomer\BankAccounts\Post\BankAccountsCardRequest $card;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Customers\ByCustomer\BankAccounts\Post\MetadataMapRequest $metadata;
    /**
     * Please refer to full [documentation](https://api.stripe.com) instead.
     */
    public string $source {
        set {
            $this->assigning('source', $value);
            $this->source = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'alipay_account' => is_string($value) ? $this->alipay_account = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'source' => is_string($value) ? $this->source = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
