<?php

declare(strict_types=1);

namespace StripeSDK\Requests\LineItemsRequest5Variant1Item\PaymentMethodOptions;

/**
 * payment_intent_amount_details_line_item_payment_method_options_param
 */
final class OptionsKlarnaRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'image_url' => [
            'maxLength' => 4096,
        ],
        'product_url' => [
            'maxLength' => 4096,
        ],
        'reference' => [
            'maxLength' => 255,
        ],
        'subscription_reference' => [
            'maxLength' => 255,
        ],
    ];

    public string $image_url {
        set {
            $this->assigning('image_url', $value);
            $this->image_url = $value;
        }
    }
    public string $product_url {
        set {
            $this->assigning('product_url', $value);
            $this->product_url = $value;
        }
    }
    public string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }
    public string $subscription_reference {
        set {
            $this->assigning('subscription_reference', $value);
            $this->subscription_reference = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'image_url' => is_string($value) ? $this->image_url = $value : parent::assignMember($name, $value),
            'product_url' => is_string($value) ? $this->product_url = $value : parent::assignMember($name, $value),
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'subscription_reference' => is_string($value) ? $this->subscription_reference = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
