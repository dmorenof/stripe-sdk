<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * schedule_update_at_period_end_condition_param
 */
final class ConditionsVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Enums\EndConditionsRequestVariant1Item\EndConditionsRequestVariant1ItemTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\EndConditionsRequestVariant1Item\EndConditionsRequestVariant1ItemTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
