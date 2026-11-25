<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Close;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * A different bank account where funds can be deposited/debited in order to get the closing FA's balance to $0
     */
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Close\Post\ForwardingSettingsRequest $forwarding_settings;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
