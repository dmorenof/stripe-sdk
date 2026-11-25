<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\ByIntent;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'customer' => [
            'maxLength' => 5000,
        ],
        'customer_account' => [
            'maxLength' => 5000,
        ],
        'description' => [
            'maxLength' => 1000,
        ],
        'payment_method' => [
            'maxLength' => 5000,
        ],
        'payment_method_configuration' => [
            'maxLength' => 100,
        ],
    ];

    /**
     * The list of payment method types to allow for this SetupIntent. Stripe will only use methods in this list when determining the payment methods to offer. A list of valid payment method types can be found [here](https://docs.stripe.com/api/payment_methods/object#payment_method_object-type).
     */
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\MethodTypesRequest $allowed_payment_method_types;
    /**
     * If present, the SetupIntent's payment method will be attached to the in-context Stripe Account.
     *
     * It can only be used for this Stripe Account’s own money movement flows like InboundTransfer and OutboundTransfers. It cannot be set to true when setting up a PaymentMethod for a Customer, and defaults to false when attaching a PaymentMethod to a Customer.
     */
    public bool $attach_to_self;
    /**
     * ID of the Customer this SetupIntent belongs to, if one exists.
     *
     * If present, the SetupIntent's payment method will be attached to the Customer on successful setup. Payment methods attached to other Customers cannot be used with this SetupIntent.
     */
    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    /**
     * ID of the Account this SetupIntent belongs to, if one exists.
     *
     * If present, the SetupIntent's payment method will be attached to the Account on successful setup. Payment methods attached to other Accounts cannot be used with this SetupIntent.
     */
    public string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
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
     * The list of payment method types to exclude from use with this SetupIntent.
     */
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\AnyOfExcludedPaymentMethodTypes\MethodTypesRequest $excluded_payment_method_types;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Indicates the directions of money movement for which this payment method is intended to be used.
     *
     * Include `inbound` if you intend to use the payment method as the origin to pull funds from. Include `outbound` if you intend to use the payment method as the destination to send funds to. You can include both if you intend to use the payment method for both purposes.
     */
    public \StripeSDK\Collections\V1\SetupIntents\ByIntent\Post\FlowDirectionsCollection $flow_directions;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\ByIntentMetadataRequest $metadata;
    /**
     * ID of the payment method (a PaymentMethod, Card, or saved Source object) to attach to this SetupIntent. To unset this field to null, pass in an empty string.
     */
    public string $payment_method {
        set {
            $this->assigning('payment_method', $value);
            $this->payment_method = $value;
        }
    }
    /**
     * The ID of the [payment method configuration](https://docs.stripe.com/api/payment_method_configurations) to use with this SetupIntent.
     */
    public string $payment_method_configuration {
        set {
            $this->assigning('payment_method_configuration', $value);
            $this->payment_method_configuration = $value;
        }
    }
    /**
     * When included, this hash creates a PaymentMethod that is set as the [`payment_method`](https://docs.stripe.com/api/setup_intents/object#setup_intent_object-payment_method)
     * value in the SetupIntent.
     */
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\MethodDataRequest $payment_method_data;
    /**
     * Payment method-specific configuration for this SetupIntent.
     */
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\MethodOptionsRequest $payment_method_options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'attach_to_self' => is_bool($value) ? $this->attach_to_self = $value : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'customer_account' => is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'payment_method' => is_string($value) ? $this->payment_method = $value : parent::assignMember($name, $value),
            'payment_method_configuration' => is_string($value) ? $this->payment_method_configuration = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
