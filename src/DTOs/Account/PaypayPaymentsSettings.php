<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountPaypayPaymentsSettings
 */
final class PaypayPaymentsSettings extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Additional files that are required to support the onboarding process of your business.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $additional_files;
    /**
     * The type of goods your business sells. Use `digital_content` if you sell digital content. Use `other` for all other types of goods or services.
     */
    public \StripeSDK\Enums\Account\PaypayPaymentsSettings\GoodsTypeEnum $goods_type;
    public \StripeSDK\DTOs\Account\PaypaySiteSettings $site;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'additional_files' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->additional_files = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'goods_type' => is_string($value) ? $this->goods_type = \StripeSDK\Enums\Account\PaypayPaymentsSettings\GoodsTypeEnum::from($value) : parent::assignMember($name, $value),
            'site' => $value instanceof \stdClass ? $this->site = new \StripeSDK\DTOs\Account\PaypaySiteSettings($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
