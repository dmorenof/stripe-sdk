<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Portal;

/**
 * PortalFlowsSubscriptionUpdateConfirmDiscount
 */
final class FlowsSubscriptionUpdateConfirmDiscount extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'coupon' => [
            'maxLength' => 5000,
        ],
        'promotion_code' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The ID of the coupon to apply to this subscription update.
     */
    public ?string $coupon {
        set {
            $this->assigning('coupon', $value);
            $this->coupon = $value;
        }
    }
    /**
     * The ID of a promotion code to apply to this subscription update.
     */
    public ?string $promotion_code {
        set {
            $this->assigning('promotion_code', $value);
            $this->promotion_code = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'coupon' => $value === null || is_string($value) ? $this->coupon = $value : parent::assignMember($name, $value),
            'promotion_code' => $value === null || is_string($value) ? $this->promotion_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
