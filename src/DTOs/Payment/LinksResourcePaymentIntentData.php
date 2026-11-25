<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentLinksResourcePaymentIntentData
 */
final class LinksResourcePaymentIntentData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'metadata',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
        'statement_descriptor' => [
            'maxLength' => 5000,
        ],
        'statement_descriptor_suffix' => [
            'maxLength' => 5000,
        ],
        'transfer_group' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Indicates when the funds will be captured from the customer's account.
     */
    public ?\StripeSDK\Enums\Payment\LinksResourcePaymentIntentData\CaptureMethodEnum $capture_method;
    /**
     * An arbitrary string attached to the object. Often useful for displaying to users.
     */
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that will set metadata on [Payment Intents](https://docs.stripe.com/api/payment_intents) generated from this payment link.
     */
    public \StripeSDK\DTOs\Payment\LinksResourcePaymentIntentData\MetadataMap $metadata;
    /**
     * Indicates that you intend to make future payments with the payment method collected during checkout.
     */
    public ?\StripeSDK\Enums\Payment\LinksResourcePaymentIntentData\FutureUsageEnum $setup_future_usage;
    /**
     * For a non-card payment, information about the charge that appears on the customer's statement when this payment succeeds in creating a charge.
     */
    public ?string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }
    /**
     * For a card payment, information about the charge that appears on the customer's statement when this payment succeeds in creating a charge. Concatenated with the account's statement descriptor prefix to form the complete statement descriptor.
     */
    public ?string $statement_descriptor_suffix {
        set {
            $this->assigning('statement_descriptor_suffix', $value);
            $this->statement_descriptor_suffix = $value;
        }
    }
    /**
     * A string that identifies the resulting payment as part of a group. See the PaymentIntents [use case for connected accounts](https://docs.stripe.com/connect/separate-charges-and-transfers) for details.
     */
    public ?string $transfer_group {
        set {
            $this->assigning('transfer_group', $value);
            $this->transfer_group = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'capture_method' => $value === null || is_string($value) ? $this->capture_method = $value === null ? null : \StripeSDK\Enums\Payment\LinksResourcePaymentIntentData\CaptureMethodEnum::from($value) : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'setup_future_usage' => $value === null || is_string($value) ? $this->setup_future_usage = $value === null ? null : \StripeSDK\Enums\Payment\LinksResourcePaymentIntentData\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            'statement_descriptor' => $value === null || is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            'statement_descriptor_suffix' => $value === null || is_string($value) ? $this->statement_descriptor_suffix = $value : parent::assignMember($name, $value),
            'transfer_group' => $value === null || is_string($value) ? $this->transfer_group = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
