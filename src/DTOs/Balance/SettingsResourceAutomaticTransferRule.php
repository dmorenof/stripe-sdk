<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Balance;

/**
 * BalanceSettingsResourceAutomaticTransferRule
 */
final class SettingsResourceAutomaticTransferRule extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'payout_method',
        'type',
    ];

    protected const array VALIDATION = [
        'payout_method' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The ID of the FinancialAccount that funds will be transferred to during automatic transfers.
     */
    public string $payout_method {
        set {
            $this->assigning('payout_method', $value);
            $this->payout_method = $value;
        }
    }
    /**
     * The maximum amount in minor units to transfer to the FinancialAccount. Only applicable when `type` is `transfer_up_to_amount`.
     */
    public ?int $transfer_up_to_amount;
    /**
     * The type of automatic transfer rule.
     */
    public \StripeSDK\Enums\Balance\SettingsResourceAutomaticTransferRule\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payout_method' => is_string($value) ? $this->payout_method = $value : parent::assignMember($name, $value),
            'transfer_up_to_amount' => $value === null || is_int($value) ? $this->transfer_up_to_amount = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Balance\SettingsResourceAutomaticTransferRule\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
