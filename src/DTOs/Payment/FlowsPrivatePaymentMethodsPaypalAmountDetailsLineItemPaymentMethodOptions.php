<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentFlowsPrivatePaymentMethodsPaypalAmountDetailsLineItemPaymentMethodOptions
 */
final class FlowsPrivatePaymentMethodsPaypalAmountDetailsLineItemPaymentMethodOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
        'sold_by' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Type of the line item.
     */
    public \StripeSDK\Enums\Payment\FlowsPrivatePaymentMethodsPaypalAmountDetailsLineItemPaymentMethodOptions\CategoryEnum $category;
    /**
     * Description of the line item.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * The Stripe account ID of the connected account that sells the item. This is only needed when using [Separate Charges and Transfers](https://docs.stripe.com/connect/separate-charges-and-transfers).
     */
    public string $sold_by {
        set {
            $this->assigning('sold_by', $value);
            $this->sold_by = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'category' => is_string($value) ? $this->category = \StripeSDK\Enums\Payment\FlowsPrivatePaymentMethodsPaypalAmountDetailsLineItemPaymentMethodOptions\CategoryEnum::from($value) : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'sold_by' => is_string($value) ? $this->sold_by = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
