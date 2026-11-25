<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Features\Post;

/**
 * outbound_payments
 *
 * Includes Features related to initiating money movement out of the FinancialAccount to someone else's bucket of money.
 */
final class OutboundPaymentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Features\Post\OutboundPayments\PaymentsAchRequest $ach;
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Features\Post\OutboundPayments\DomesticWireRequest $us_domestic_wire;
}
