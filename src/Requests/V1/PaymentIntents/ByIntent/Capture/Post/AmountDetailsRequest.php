<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\Capture\Post;

/**
 * amount_details_param
 *
 * Provides industry-specific information about the amount.
 */
final class AmountDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Capture\Post\AmountDetails\DiscountAmountRequest $discount_amount;
    public bool $enforce_arithmetic_validation;
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Capture\Post\AmountDetails\LineItemsRequest $line_items;
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Capture\Post\AmountDetails\DetailsShippingRequest $shipping;
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Capture\Post\AmountDetails\DetailsTaxRequest $tax;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enforce_arithmetic_validation' => is_bool($value) ? $this->enforce_arithmetic_validation = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
