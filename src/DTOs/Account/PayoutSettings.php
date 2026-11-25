<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountPayoutSettings
 */
final class PayoutSettings extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'debit_negative_balances',
        'schedule',
    ];

    protected const array VALIDATION = [
        'statement_descriptor' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A Boolean indicating if Stripe should try to reclaim negative balances from an attached bank account. See [Understanding Connect account balances](/connect/account-balances) for details. The default value is `false` when [controller.requirement_collection](/api/accounts/object#account_object-controller-requirement_collection) is `application`, which includes Custom accounts, otherwise `true`.
     */
    public bool $debit_negative_balances;
    public \StripeSDK\DTOs\Transfer\Schedule $schedule;
    /**
     * The text that appears on the bank account statement for payouts. If not set, this defaults to the platform's bank descriptor as set in the Dashboard.
     */
    public ?string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'debit_negative_balances' => is_bool($value) ? $this->debit_negative_balances = $value : parent::assignMember($name, $value),
            'schedule' => $value instanceof \stdClass ? $this->schedule = new \StripeSDK\DTOs\Transfer\Schedule($value) : parent::assignMember($name, $value),
            'statement_descriptor' => $value === null || is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
