<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\ByIntent\Confirm;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'client_secret' => [
            'maxLength' => 5000,
        ],
        'confirmation_token' => [
            'maxLength' => 5000,
        ],
        'payment_method' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The list of payment method types to allow for this SetupIntent. Stripe will only use methods in this list when determining the payment methods to offer. A list of valid payment method types can be found [here](https://docs.stripe.com/api/payment_methods/object#payment_method_object-type).
     */
    public \StripeSDK\Collections\V1\SetupIntents\ByIntent\Confirm\Post\MethodTypesCollection $allowed_payment_method_types;
    /**
     * The client secret of the SetupIntent.
     */
    public string $client_secret {
        set {
            $this->assigning('client_secret', $value);
            $this->client_secret = $value;
        }
    }
    /**
     * ID of the ConfirmationToken used to confirm this SetupIntent.
     *
     * If the provided ConfirmationToken contains properties that are also being provided in this request, such as `payment_method`, then the values in this request will take precedence.
     */
    public string $confirmation_token {
        set {
            $this->assigning('confirmation_token', $value);
            $this->confirmation_token = $value;
        }
    }
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Confirm\Post\MandateDataRequest $mandate_data;
    /**
     * ID of the payment method (a PaymentMethod, Card, or saved Source object) to attach to this SetupIntent.
     */
    public string $payment_method {
        set {
            $this->assigning('payment_method', $value);
            $this->payment_method = $value;
        }
    }
    /**
     * When included, this hash creates a PaymentMethod that is set as the [`payment_method`](https://docs.stripe.com/api/setup_intents/object#setup_intent_object-payment_method)
     * value in the SetupIntent.
     */
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Confirm\Post\MethodDataRequest $payment_method_data;
    /**
     * Payment method-specific configuration for this SetupIntent.
     */
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Confirm\Post\MethodOptionsRequest $payment_method_options;
    /**
     * The URL to redirect your customer back to after they authenticate on the payment method's app or site.
     * If you'd prefer to redirect to a mobile application, you can alternatively supply an application URI scheme.
     * This parameter is only used for cards and other redirect-based payment methods.
     */
    public string $return_url;
    /**
     * Set to `true` when confirming server-side and using Stripe.js, iOS, or Android client-side SDKs to handle the next actions.
     */
    public bool $use_stripe_sdk;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'client_secret' => is_string($value) ? $this->client_secret = $value : parent::assignMember($name, $value),
            'confirmation_token' => is_string($value) ? $this->confirmation_token = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'payment_method' => is_string($value) ? $this->payment_method = $value : parent::assignMember($name, $value),
            'return_url' => is_string($value) ? $this->return_url = $value : parent::assignMember($name, $value),
            'use_stripe_sdk' => is_bool($value) ? $this->use_stripe_sdk = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
