<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\AccountSessions;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account',
        'components',
    ];

    /**
     * The identifier of the account to create an Account Session for.
     */
    public string $account;
    /**
     * Each key of the dictionary represents an embedded component, and each embedded component maps to its configuration (e.g. whether it has been enabled or not).
     */
    public \StripeSDK\Requests\V1\AccountSessions\Post\AccountSessionsComponentsRequest $components;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account' => is_string($value) ? $this->account = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
