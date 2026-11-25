<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Post\Features;

/**
 * outbound_payments
 */
final class OutboundPaymentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Post\Features\OutboundPayments\PaymentsAchRequest $ach;
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Post\Features\OutboundPayments\DomesticWireRequest $us_domestic_wire;
}
