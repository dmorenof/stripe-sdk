<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Post;

/**
 * feature_access
 *
 * Encodes whether a FinancialAccount has access to a particular feature, with a status enum and associated `status_details`. Stripe or the platform may control features via the requested field.
 */
final class ByFinancialAccountFeaturesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Post\Features\CardIssuingRequest $card_issuing;
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Post\Features\DepositInsuranceRequest $deposit_insurance;
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Post\Features\FinancialAddressesRequest $financial_addresses;
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Post\Features\InboundTransfersRequest $inbound_transfers;
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Post\Features\StripeFlowsRequest $intra_stripe_flows;
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Post\Features\OutboundPaymentsRequest $outbound_payments;
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Post\Features\OutboundTransfersRequest $outbound_transfers;
}
