<?php

declare(strict_types=1);

namespace StripeSDK\Requests\LineItemsRequest2Variant1Item\PaymentMethodOptions;

/**
 * amount_details_line_item_payment_method_options_param
 */
final class CardPresentRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'commodity_code' => [
            'maxLength' => 12,
        ],
    ];

    public string $commodity_code {
        set {
            $this->assigning('commodity_code', $value);
            $this->commodity_code = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'commodity_code' => is_string($value) ? $this->commodity_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
