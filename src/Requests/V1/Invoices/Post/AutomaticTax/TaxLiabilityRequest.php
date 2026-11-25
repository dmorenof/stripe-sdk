<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\Post\AutomaticTax;

/**
 * param
 */
final class TaxLiabilityRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public string $account;
    public \StripeSDK\Enums\V1\Invoices\Post\AutomaticTax\Liability\LiabilityTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account' => is_string($value) ? $this->account = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Invoices\Post\AutomaticTax\Liability\LiabilityTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
