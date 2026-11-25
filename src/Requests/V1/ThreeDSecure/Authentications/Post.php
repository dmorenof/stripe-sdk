<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\ThreeDSecure\Authentications;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'channel',
        'message_category',
    ];

    protected const array VALIDATION = [
        'payment_method' => [
            'maxLength' => 255,
        ],
    ];

    /**
     * Contains additional details about the acquirer for this 3DS Authentication.
     *
     * Refer to the [Pass acquirer details and directory server section of the standalone 3DS guide](/payments/3d-secure/standalone-3d-secure#pass-acquirer-details-and-directory-server) for more information.
     */
    public \StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post\AcquirerDetailsRequest $acquirer_details;
    /**
     * A non-negative integer representing the amount in the [smallest currency unit](/currencies#zero-decimal). You can't include this parameter if `message_category` is `non_payment_authentication`
     */
    public int $amount;
    /**
     * Contains additional details on the channel used for this 3DS Authentication.
     */
    public \StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post\AuthenticationsChannelRequest $channel;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * The 3DS directory server with which this 3DS Authentication was processed.
     */
    public \StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\DirectoryServerEnum $directory_server;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Contains additional details on your flow preference for this 3DS Authentication.
     *
     * Refer to the [Specify a flow preference section of the standalone 3DS guide](/payments/3d-secure/standalone-3d-secure#specify-a-flow-preference) for more information.
     */
    public \StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post\FlowPreferenceRequest $flow_preference;
    /**
     * Contains information about future usage of this 3DS Authentication
     */
    public \StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post\FutureUsageRequest $future_usage;
    /**
     * Indicates whether this 3DS Authentication is being performed for a payment or non-payment use case.
     */
    public \StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\MessageCategoryEnum $message_category;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post\AuthenticationsMetadataRequest $metadata;
    /**
     * ID of the payment method (a PaymentMethod object) to attach to this 3DS Authentication.
     */
    public string $payment_method {
        set {
            $this->assigning('payment_method', $value);
            $this->payment_method = $value;
        }
    }
    /**
     * Hash used to generate the PaymentMethod to be used for this Authentication. This is mutually exclusive with the `payment_method` parameter.
     */
    public \StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post\MethodDataRequest $payment_method_data;
    /**
     * The reason for invoking standalone 3DS. This is tailored specifically for cases when you want Stripe to help determine the standalone 3DS flow to fit your use case instead of needing to select a specific 3DS flow.
     *
     * This parameter is exclusive with `flow_preference`. You can either use `reason` for controlling 3DS according to your business requirements, or use `flow_preference` for having fine-grained control over your 3DS flow preference.
     */
    public \StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\AuthenticationsReasonEnum $reason;
    /**
     * The shipping address requested by the cardholder. You should try to include as complete address information as possible.
     */
    public \StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post\ShippingAddressRequest $shipping_address;
    /**
     * Set to `always` to skip the fingerprinting step and submit this Authentication immediately or `if_fingerprinting_not_supported` to submit this Authentication only if fingerprinting is not available. This parameter defaults to `never`.
     *
     * Refer to the [Submit at creation section of the standalone 3DS guide](/payments/3d-secure/standalone-3d-secure#submit-at-creation) for more information.
     */
    public \StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\AuthenticationsSubmitEnum $submit;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'directory_server' => is_string($value) ? $this->directory_server = \StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\DirectoryServerEnum::from($value) : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'message_category' => is_string($value) ? $this->message_category = \StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\MessageCategoryEnum::from($value) : parent::assignMember($name, $value),
            'payment_method' => is_string($value) ? $this->payment_method = $value : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = \StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\AuthenticationsReasonEnum::from($value) : parent::assignMember($name, $value),
            'submit' => is_string($value) ? $this->submit = \StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\AuthenticationsSubmitEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
