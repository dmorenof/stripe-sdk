<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Promotion;

/**
 * PromotionCodesResourcePromotion
 */
final class CodesResourcePromotion extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * If promotion `type` is `coupon`, the coupon for this promotion.
     */
    public ?\StripeSDK\DTOs\Promotion\CodesResourcePromotion\CouponDTO $coupon;
    /**
     * The type of promotion.
     */
    public \StripeSDK\Enums\Promotion\CodesResourcePromotion\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Promotion\CodesResourcePromotion\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
