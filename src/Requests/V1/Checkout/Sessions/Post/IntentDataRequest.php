<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post;

/**
 * payment_intent_data_params
 *
 * A subset of parameters to be passed to PaymentIntent creation for Checkout Sessions in `payment` mode.
 */
final class IntentDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 1000,
        ],
        'statement_descriptor' => [
            'maxLength' => 22,
        ],
        'statement_descriptor_suffix' => [
            'maxLength' => 22,
        ],
    ];

    public int $application_fee_amount;
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentIntentData\CaptureMethodEnum $capture_method;
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentIntentData\MetadataMapRequest $metadata;
    public string $on_behalf_of;
    public string $receipt_email;
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentIntentData\FutureUsageEnum $setup_future_usage;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentIntentData\DataShippingRequest $shipping;
    public string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }
    public string $statement_descriptor_suffix {
        set {
            $this->assigning('statement_descriptor_suffix', $value);
            $this->statement_descriptor_suffix = $value;
        }
    }
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentIntentData\TransferDataRequest $transfer_data;
    public string $transfer_group;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'application_fee_amount' => is_int($value) ? $this->application_fee_amount = $value : parent::assignMember($name, $value),
            'capture_method' => is_string($value) ? $this->capture_method = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentIntentData\CaptureMethodEnum::from($value) : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'on_behalf_of' => is_string($value) ? $this->on_behalf_of = $value : parent::assignMember($name, $value),
            'receipt_email' => is_string($value) ? $this->receipt_email = $value : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentIntentData\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            'statement_descriptor' => is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            'statement_descriptor_suffix' => is_string($value) ? $this->statement_descriptor_suffix = $value : parent::assignMember($name, $value),
            'transfer_group' => is_string($value) ? $this->transfer_group = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
