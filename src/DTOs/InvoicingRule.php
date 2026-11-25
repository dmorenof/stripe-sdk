<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * InvoicingRule
 */
final class InvoicingRule extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * The type of invoicing rule.
     */
    public \StripeSDK\Enums\InvoicingRule\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\InvoicingRule\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
