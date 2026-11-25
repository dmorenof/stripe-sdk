<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * automatic_transfer_rule
 */
final class ValueVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'payout_method',
        'type',
    ];

    public string $payout_method;
    public int $transfer_up_to_amount;
    public \StripeSDK\Enums\Variant1ValueRequestVariant1Item\Variant1ValueRequestVariant1ItemTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payout_method' => is_string($value) ? $this->payout_method = $value : parent::assignMember($name, $value),
            'transfer_up_to_amount' => is_int($value) ? $this->transfer_up_to_amount = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Variant1ValueRequestVariant1Item\Variant1ValueRequestVariant1ItemTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
