<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\Capture;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'statement_descriptor' => [
            'maxLength' => 22,
        ],
        'statement_descriptor_suffix' => [
            'maxLength' => 22,
        ],
    ];

    /**
     * Provides industry-specific information about the amount.
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Capture\Post\AmountDetailsRequest $amount_details;
    /**
     * The amount to capture from the PaymentIntent, which must be less than or equal to the original amount. Defaults to the full `amount_capturable` if it's not provided.
     */
    public int $amount_to_capture;
    /**
     * The amount of the application fee (if any) that will be requested to be applied to the payment and transferred to the application owner's Stripe account. The amount of the application fee collected will be capped at the total amount captured. For more information, see the PaymentIntents [use case for connected accounts](https://docs.stripe.com/payments/connected-accounts).
     */
    public int $application_fee_amount;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Defaults to `true`. When capturing a PaymentIntent, setting `final_capture` to `false` notifies Stripe to not release the remaining uncaptured funds to make sure that they're captured in future requests. You can only use this setting when [multicapture](https://docs.stripe.com/payments/multicapture) is available for PaymentIntents.
     */
    public bool $final_capture;
    /**
     * Automations to be run during the PaymentIntent lifecycle
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Capture\Post\CaptureHooksRequest $hooks;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Capture\Post\CaptureMetadataRequest $metadata;
    /**
     * Provides industry-specific information about the charge.
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Capture\Post\PaymentDetailsRequest $payment_details;
    /**
     * Text that appears on the customer's statement as the statement descriptor for a non-card charge. This value overrides the account's default statement descriptor. For information about requirements, including the 22-character limit, see [the Statement Descriptor docs](https://docs.stripe.com/get-started/account/statement-descriptors).
     *
     * Setting this value for a card charge returns an error. For card charges, set the [statement_descriptor_suffix](https://docs.stripe.com/get-started/account/statement-descriptors#dynamic) instead.
     */
    public string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }
    /**
     * Provides information about a card charge. Concatenated to the account's [statement descriptor prefix](https://docs.stripe.com/get-started/account/statement-descriptors#static) to form the complete statement descriptor that appears on the customer's statement.
     */
    public string $statement_descriptor_suffix {
        set {
            $this->assigning('statement_descriptor_suffix', $value);
            $this->statement_descriptor_suffix = $value;
        }
    }
    /**
     * The parameters that you can use to automatically create a transfer after the payment
     * is captured. Learn more about the [use case for connected accounts](https://docs.stripe.com/payments/connected-accounts).
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Capture\Post\TransferDataRequest $transfer_data;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_to_capture' => is_int($value) ? $this->amount_to_capture = $value : parent::assignMember($name, $value),
            'application_fee_amount' => is_int($value) ? $this->application_fee_amount = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'final_capture' => is_bool($value) ? $this->final_capture = $value : parent::assignMember($name, $value),
            'statement_descriptor' => is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            'statement_descriptor_suffix' => is_string($value) ? $this->statement_descriptor_suffix = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
