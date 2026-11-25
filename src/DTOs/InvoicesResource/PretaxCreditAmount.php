<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\InvoicesResource;

/**
 * InvoicesResourcePretaxCreditAmount
 */
final class PretaxCreditAmount extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'type',
    ];

    /**
     * The amount, in cents (or local equivalent), of the pretax credit amount.
     */
    public int $amount;
    /**
     * The credit balance transaction that was applied to get this pretax credit amount.
     */
    public ?\StripeSDK\DTOs\InvoicesResource\PretaxCreditAmount\BalanceTransactionDTO $credit_balance_transaction;
    /**
     * The discount that was applied to get this pretax credit amount.
     */
    public \StripeSDK\DTOs\InvoicesResource\PretaxCreditAmount\DiscountDTO $discount;
    /**
     * Type of the pretax credit amount referenced.
     */
    public \StripeSDK\Enums\InvoicesResource\PretaxCreditAmount\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\InvoicesResource\PretaxCreditAmount\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
