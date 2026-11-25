<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post;

/**
 * payment_intent_data_update_params
 *
 * A subset of parameters to be passed to PaymentIntent creation for Checkout Sessions in `payment` mode.
 */
final class IntentDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\PaymentIntentData\DataDescriptionRequest $description;
    public \StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\PaymentIntentData\DataMetadataRequest $metadata;
    public \StripeSDK\Enums\V1\PaymentLinks\ByPaymentLink\Post\PaymentIntentData\FutureUsageEnum $setup_future_usage;
    public \StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\PaymentIntentData\StatementDescriptorRequest $statement_descriptor;
    public \StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\PaymentIntentData\DescriptorSuffixRequest $statement_descriptor_suffix;
    public \StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\PaymentIntentData\TransferGroupRequest $transfer_group;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\V1\PaymentLinks\ByPaymentLink\Post\PaymentIntentData\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
