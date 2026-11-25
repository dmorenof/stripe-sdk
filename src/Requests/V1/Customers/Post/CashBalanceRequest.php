<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Customers\Post;

/**
 * cash_balance_param
 *
 * Balance information and default balance settings for this customer.
 */
final class CashBalanceRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Customers\Post\CashBalance\BalanceSettingsRequest $settings;
}
