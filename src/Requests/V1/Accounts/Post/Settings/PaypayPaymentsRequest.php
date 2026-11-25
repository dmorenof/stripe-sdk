<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\Post\Settings;

/**
 * paypay_payments_settings_specs
 */
final class PaypayPaymentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $additional_files;
    public \StripeSDK\Enums\V1\Accounts\Post\Settings\PaypayPayments\GoodsTypeEnum $goods_type;
    public \StripeSDK\Requests\V1\Accounts\Post\Settings\PaypayPayments\PaymentsSiteRequest $site;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'additional_files' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->additional_files = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'goods_type' => is_string($value) ? $this->goods_type = \StripeSDK\Enums\V1\Accounts\Post\Settings\PaypayPayments\GoodsTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
