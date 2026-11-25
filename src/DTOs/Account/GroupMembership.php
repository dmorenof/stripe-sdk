<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountGroupMembership
 */
final class GroupMembership extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'payments_pricing' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The group the account is in to determine their payments pricing, and null if the account is on customized pricing. [See the Platform pricing tool documentation](https://docs.stripe.com/connect/platform-pricing-tools) for details.
     */
    public ?string $payments_pricing {
        set {
            $this->assigning('payments_pricing', $value);
            $this->payments_pricing = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payments_pricing' => $value === null || is_string($value) ? $this->payments_pricing = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
