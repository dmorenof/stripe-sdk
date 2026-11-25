<?php

declare(strict_types=1);

namespace StripeSDK\Requests\LineItemsRequestVariant1Item\PaymentMethodOptions;

/**
 * amount_details_line_item_payment_method_options_param
 */
final class OptionsPaypalRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 127,
        ],
        'sold_by' => [
            'maxLength' => 127,
        ],
    ];

    public \StripeSDK\Enums\LineItemsRequestVariant1Item\PaymentMethodOptions\Paypal\PaypalCategoryEnum $category;
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    public string $sold_by {
        set {
            $this->assigning('sold_by', $value);
            $this->sold_by = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'category' => is_string($value) ? $this->category = \StripeSDK\Enums\LineItemsRequestVariant1Item\PaymentMethodOptions\Paypal\PaypalCategoryEnum::from($value) : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'sold_by' => is_string($value) ? $this->sold_by = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
