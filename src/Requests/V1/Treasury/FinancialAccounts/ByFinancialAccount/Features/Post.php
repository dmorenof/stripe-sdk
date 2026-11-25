<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Features;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Encodes the FinancialAccount's ability to be used with the Issuing product, including attaching cards to and drawing funds from the FinancialAccount.
     */
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Features\Post\CardIssuingRequest $card_issuing;
    /**
     * Represents whether this FinancialAccount is eligible for deposit insurance. Various factors determine the insurance amount.
     */
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Features\Post\DepositInsuranceRequest $deposit_insurance;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Contains Features that add FinancialAddresses to the FinancialAccount.
     */
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Features\Post\FinancialAddressesRequest $financial_addresses;
    /**
     * Contains settings related to adding funds to a FinancialAccount from another Account with the same owner.
     */
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Features\Post\InboundTransfersRequest $inbound_transfers;
    /**
     * Represents the ability for the FinancialAccount to send money to, or receive money from other FinancialAccounts (for example, via OutboundPayment).
     */
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Features\Post\StripeFlowsRequest $intra_stripe_flows;
    /**
     * Includes Features related to initiating money movement out of the FinancialAccount to someone else's bucket of money.
     */
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Features\Post\OutboundPaymentsRequest $outbound_payments;
    /**
     * Contains a Feature and settings related to moving money out of the FinancialAccount into another Account with the same owner.
     */
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Features\Post\OutboundTransfersRequest $outbound_transfers;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
