<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * FinancialAccount Feature
 *
 * Encodes whether a FinancialAccount has access to a particular Feature, with a `status` enum and associated `status_details`.
 * Stripe or the platform can control Features via the requested field.
 */
final class FinancialAccountFeatures extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'object_',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    public \StripeSDK\DTOs\Treasury\FinancialAccountsResourceToggleSettings $card_issuing;
    public \StripeSDK\DTOs\Treasury\FinancialAccountsResourceToggleSettings $deposit_insurance;
    public \StripeSDK\DTOs\Treasury\FinancialAccountsResourceFinancialAddressesFeatures $financial_addresses;
    public \StripeSDK\DTOs\Treasury\FinancialAccountsResourceInboundTransfers $inbound_transfers;
    public \StripeSDK\DTOs\Treasury\FinancialAccountsResourceToggleSettings $intra_stripe_flows;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Treasury\FinancialAccountFeatures\ObjectEnum $object_;
    public \StripeSDK\DTOs\Treasury\FinancialAccountsResourceOutboundPayments $outbound_payments;
    public \StripeSDK\DTOs\Treasury\FinancialAccountsResourceOutboundTransfers $outbound_transfers;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'card_issuing' => $value instanceof \stdClass ? $this->card_issuing = new \StripeSDK\DTOs\Treasury\FinancialAccountsResourceToggleSettings($value) : parent::assignMember($name, $value),
            'deposit_insurance' => $value instanceof \stdClass ? $this->deposit_insurance = new \StripeSDK\DTOs\Treasury\FinancialAccountsResourceToggleSettings($value) : parent::assignMember($name, $value),
            'financial_addresses' => $value instanceof \stdClass ? $this->financial_addresses = new \StripeSDK\DTOs\Treasury\FinancialAccountsResourceFinancialAddressesFeatures($value) : parent::assignMember($name, $value),
            'inbound_transfers' => $value instanceof \stdClass ? $this->inbound_transfers = new \StripeSDK\DTOs\Treasury\FinancialAccountsResourceInboundTransfers($value) : parent::assignMember($name, $value),
            'intra_stripe_flows' => $value instanceof \stdClass ? $this->intra_stripe_flows = new \StripeSDK\DTOs\Treasury\FinancialAccountsResourceToggleSettings($value) : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Treasury\FinancialAccountFeatures\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'outbound_payments' => $value instanceof \stdClass ? $this->outbound_payments = new \StripeSDK\DTOs\Treasury\FinancialAccountsResourceOutboundPayments($value) : parent::assignMember($name, $value),
            'outbound_transfers' => $value instanceof \stdClass ? $this->outbound_transfers = new \StripeSDK\DTOs\Treasury\FinancialAccountsResourceOutboundTransfers($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
