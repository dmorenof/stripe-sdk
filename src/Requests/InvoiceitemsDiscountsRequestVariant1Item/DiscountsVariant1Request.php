<?php

declare(strict_types=1);

namespace StripeSDK\Requests\InvoiceitemsDiscountsRequestVariant1Item;

/**
 * discounts_data_param
 */
final class DiscountsVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'coupon' => [
            'maxLength' => 5000,
        ],
        'discount' => [
            'maxLength' => 5000,
        ],
        'promotion_code' => [
            'maxLength' => 5000,
        ],
    ];

    public string $coupon {
        set {
            $this->assigning('coupon', $value);
            $this->coupon = $value;
        }
    }
    public string $discount {
        set {
            $this->assigning('discount', $value);
            $this->discount = $value;
        }
    }
    public string $promotion_code {
        set {
            $this->assigning('promotion_code', $value);
            $this->promotion_code = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'coupon' => is_string($value) ? $this->coupon = $value : parent::assignMember($name, $value),
            'discount' => is_string($value) ? $this->discount = $value : parent::assignMember($name, $value),
            'promotion_code' => is_string($value) ? $this->promotion_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
