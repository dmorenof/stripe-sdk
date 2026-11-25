<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BalanceSettings\Post\Payments;

/**
 * settlement_timing
 */
final class SettlementTimingRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\BalanceSettings\Post\Payments\SettlementTiming\DaysOverrideRequest $delay_days_override;
    public \StripeSDK\Requests\V1\BalanceSettings\Post\Payments\SettlementTiming\StartDayRequest $start_of_day;
}
