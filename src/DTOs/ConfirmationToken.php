<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Confirmation Token
 *
 * ConfirmationTokens help transport client side data collected by Stripe JS over
 * to your server for confirming a PaymentIntent or SetupIntent. If the confirmation
 * is successful, values present on the ConfirmationToken are written onto the Intent.
 *
 * To learn more about how to use ConfirmationToken, visit the related guides:
 * - [Finalize payments on the server](https://docs.stripe.com/payments/finalize-payments-on-the-server)
 * - [Build two-step confirmation](https://docs.stripe.com/payments/build-a-two-step-confirmation).
 */
final class ConfirmationToken extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'id',
        'livemode',
        'object_',
        'use_stripe_sdk',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
        'payment_intent' => [
            'maxLength' => 5000,
        ],
        'return_url' => [
            'maxLength' => 5000,
        ],
        'setup_intent' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * Time at which this ConfirmationToken expires and can no longer be used to confirm a PaymentIntent or SetupIntent.
     * Format: unix-time
     */
    public ?int $expires_at;
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Data used for generating a Mandate.
     */
    public ?\StripeSDK\DTOs\ConfirmationTokensResource\MandateData $mandate_data;
    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\ConfirmationToken\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\ConfirmationToken\ObjectEnum $object_;
    /**
     * ID of the PaymentIntent that this ConfirmationToken was used to confirm, or null if this ConfirmationToken has not yet been used.
     */
    public ?string $payment_intent {
        set {
            $this->assigning('payment_intent', $value);
            $this->payment_intent = $value;
        }
    }
    /**
     * Payment-method-specific configuration for this ConfirmationToken.
     */
    public ?\StripeSDK\DTOs\ConfirmationTokensResource\PaymentMethodOptions $payment_method_options;
    /**
     * Payment details collected by the Payment Element, used to create a PaymentMethod when a PaymentIntent or SetupIntent is confirmed with this ConfirmationToken.
     */
    public ?\StripeSDK\DTOs\ConfirmationTokensResource\PaymentMethodPreview $payment_method_preview;
    /**
     * Return URL used to confirm the Intent.
     */
    public ?string $return_url {
        set {
            $this->assigning('return_url', $value);
            $this->return_url = $value;
        }
    }
    /**
     * Indicates that you intend to make future payments with this ConfirmationToken's payment method.
     *
     * The presence of this property will [attach the payment method](https://docs.stripe.com/payments/save-during-payment) to the PaymentIntent's Customer, if present, after the PaymentIntent is confirmed and any required actions from the user are complete.
     */
    public ?\StripeSDK\Enums\ConfirmationToken\FutureUsageEnum $setup_future_usage;
    /**
     * ID of the SetupIntent that this ConfirmationToken was used to confirm, or null if this ConfirmationToken has not yet been used.
     */
    public ?string $setup_intent {
        set {
            $this->assigning('setup_intent', $value);
            $this->setup_intent = $value;
        }
    }
    /**
     * Shipping information collected on this ConfirmationToken.
     */
    public ?\StripeSDK\DTOs\ConfirmationTokensResource\Shipping $shipping;
    /**
     * Indicates whether the Stripe SDK is used to handle confirmation flow. Defaults to `true` on ConfirmationToken.
     */
    public bool $use_stripe_sdk;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'expires_at' => $value === null || is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'mandate_data' => $value === null || $value instanceof \stdClass ? $this->mandate_data = $value === null ? null : new \StripeSDK\DTOs\ConfirmationTokensResource\MandateData($value) : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\ConfirmationToken\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'payment_intent' => $value === null || is_string($value) ? $this->payment_intent = $value : parent::assignMember($name, $value),
            'payment_method_options' => $value === null || $value instanceof \stdClass ? $this->payment_method_options = $value === null ? null : new \StripeSDK\DTOs\ConfirmationTokensResource\PaymentMethodOptions($value) : parent::assignMember($name, $value),
            'payment_method_preview' => $value === null || $value instanceof \stdClass ? $this->payment_method_preview = $value === null ? null : new \StripeSDK\DTOs\ConfirmationTokensResource\PaymentMethodPreview($value) : parent::assignMember($name, $value),
            'return_url' => $value === null || is_string($value) ? $this->return_url = $value : parent::assignMember($name, $value),
            'setup_future_usage' => $value === null || is_string($value) ? $this->setup_future_usage = $value === null ? null : \StripeSDK\Enums\ConfirmationToken\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            'setup_intent' => $value === null || is_string($value) ? $this->setup_intent = $value : parent::assignMember($name, $value),
            'shipping' => $value === null || $value instanceof \stdClass ? $this->shipping = $value === null ? null : new \StripeSDK\DTOs\ConfirmationTokensResource\Shipping($value) : parent::assignMember($name, $value),
            'use_stripe_sdk' => is_bool($value) ? $this->use_stripe_sdk = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
