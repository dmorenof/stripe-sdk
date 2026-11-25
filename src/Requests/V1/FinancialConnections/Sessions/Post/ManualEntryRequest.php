<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\FinancialConnections\Sessions\Post;

/**
 * manual_entry_params
 *
 * Customize manual entry behavior
 */
final class ManualEntryRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\FinancialConnections\Sessions\Post\ManualEntry\EntryModeEnum $mode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mode' => is_string($value) ? $this->mode = \StripeSDK\Enums\V1\FinancialConnections\Sessions\Post\ManualEntry\EntryModeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
