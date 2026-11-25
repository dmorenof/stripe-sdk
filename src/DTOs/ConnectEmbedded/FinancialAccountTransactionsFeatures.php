<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ConnectEmbedded;

/**
 * ConnectEmbeddedFinancialAccountTransactionsFeatures
 */
final class FinancialAccountTransactionsFeatures extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'card_spend_dispute_management',
    ];

    /**
     * Whether to allow card spend dispute management features.
     */
    public bool $card_spend_dispute_management;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'card_spend_dispute_management' => is_bool($value) ? $this->card_spend_dispute_management = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
