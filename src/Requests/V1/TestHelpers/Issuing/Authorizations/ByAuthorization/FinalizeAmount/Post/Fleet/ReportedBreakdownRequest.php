<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\FinalizeAmount\Post\Fleet;

/**
 * fleet_reported_breakdown_specs
 */
final class ReportedBreakdownRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\FinalizeAmount\Post\Fleet\ReportedBreakdown\BreakdownFuelRequest $fuel;
    public \StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\FinalizeAmount\Post\Fleet\ReportedBreakdown\NonFuelRequest $non_fuel;
    public \StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\FinalizeAmount\Post\Fleet\ReportedBreakdown\BreakdownTaxRequest $tax;
}
