<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\FinancialAccounts\Post;

/**
 * feature_access
 *
 * Encodes whether a FinancialAccount has access to a particular feature. Stripe or the platform can control features via the requested field.
 */
final class FinancialAccountsFeaturesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\Post\Features\CardIssuingRequest $card_issuing;
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\Post\Features\DepositInsuranceRequest $deposit_insurance;
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\Post\Features\FinancialAddressesRequest $financial_addresses;
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\Post\Features\InboundTransfersRequest $inbound_transfers;
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\Post\Features\StripeFlowsRequest $intra_stripe_flows;
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\Post\Features\OutboundPaymentsRequest $outbound_payments;
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\Post\Features\OutboundTransfersRequest $outbound_transfers;
}
