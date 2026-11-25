<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PromotionCodes\Post;

/**
 * promotion
 *
 * The promotion referenced by this promotion code.
 */
final class PromotionCodesPromotionRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'coupon' => [
            'maxLength' => 5000,
        ],
    ];

    public string $coupon {
        set {
            $this->assigning('coupon', $value);
            $this->coupon = $value;
        }
    }
    public \StripeSDK\Enums\V1\PromotionCodes\Post\Promotion\PromotionTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'coupon' => is_string($value) ? $this->coupon = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\PromotionCodes\Post\Promotion\PromotionTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
