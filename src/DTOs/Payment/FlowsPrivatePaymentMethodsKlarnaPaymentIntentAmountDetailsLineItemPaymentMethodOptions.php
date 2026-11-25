<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentFlowsPrivatePaymentMethodsKlarnaPaymentIntentAmountDetailsLineItemPaymentMethodOptions
 */
final class FlowsPrivatePaymentMethodsKlarnaPaymentIntentAmountDetailsLineItemPaymentMethodOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'image_url' => [
            'maxLength' => 2048,
        ],
        'product_url' => [
            'maxLength' => 2048,
        ],
        'reference' => [
            'maxLength' => 255,
        ],
        'subscription_reference' => [
            'maxLength' => 2048,
        ],
    ];

    public ?string $image_url {
        set {
            $this->assigning('image_url', $value);
            $this->image_url = $value;
        }
    }
    public ?string $product_url {
        set {
            $this->assigning('product_url', $value);
            $this->product_url = $value;
        }
    }
    public ?string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }
    public ?string $subscription_reference {
        set {
            $this->assigning('subscription_reference', $value);
            $this->subscription_reference = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'image_url' => $value === null || is_string($value) ? $this->image_url = $value : parent::assignMember($name, $value),
            'product_url' => $value === null || is_string($value) ? $this->product_url = $value : parent::assignMember($name, $value),
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'subscription_reference' => $value === null || is_string($value) ? $this->subscription_reference = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
