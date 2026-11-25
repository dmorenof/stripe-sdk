<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\IncrementAuthorization;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 1000,
        ],
        'statement_descriptor' => [
            'maxLength' => 22,
        ],
    ];

    /**
     * The updated total amount that you intend to collect from the cardholder. This amount must be greater than the currently authorized amount.
     */
    public int $amount;
    /**
     * Provides industry-specific information about the amount.
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\IncrementAuthorization\Post\AmountDetailsRequest $amount_details;
    /**
     * The amount of the application fee (if any) that will be requested to be applied to the payment and transferred to the application owner's Stripe account. The amount of the application fee collected will be capped at the total amount captured. For more information, see the PaymentIntents [use case for connected accounts](https://docs.stripe.com/payments/connected-accounts).
     */
    public int $application_fee_amount;
    /**
     * An arbitrary string attached to the object. Often useful for displaying to users.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Automations to be run during the PaymentIntent lifecycle
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\IncrementAuthorization\Post\IncrementAuthorizationHooksRequest $hooks;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\IncrementAuthorization\Post\MetadataMapRequest $metadata;
    /**
     * Provides industry-specific information about the charge.
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\IncrementAuthorization\Post\PaymentDetailsRequest $payment_details;
    /**
     * Text that appears on the customer's statement as the statement descriptor for a non-card or card charge. This value overrides the account's default statement descriptor. For information about requirements, including the 22-character limit, see [the Statement Descriptor docs](https://docs.stripe.com/get-started/account/statement-descriptors).
     */
    public string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }
    /**
     * The parameters used to automatically create a transfer after the payment is captured.
     * Learn more about the [use case for connected accounts](https://docs.stripe.com/payments/connected-accounts).
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\IncrementAuthorization\Post\TransferDataRequest $transfer_data;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'application_fee_amount' => is_int($value) ? $this->application_fee_amount = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'statement_descriptor' => is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
