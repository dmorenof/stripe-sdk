<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Billing\CreditGrants\Post;

/**
 * amount_param
 *
 * Amount of this credit grant.
 */
final class CreditGrantsAmountRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Requests\V1\Billing\CreditGrants\Post\Amount\AmountMonetaryRequest $monetary;
    public \StripeSDK\Enums\V1\Billing\CreditGrants\Post\Amount\AmountTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Billing\CreditGrants\Post\Amount\AmountTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
