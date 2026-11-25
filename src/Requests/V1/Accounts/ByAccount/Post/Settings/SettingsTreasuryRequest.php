<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\Post\Settings;

/**
 * treasury_settings_specs
 */
final class SettingsTreasuryRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\Settings\Treasury\TosAcceptanceRequest $tos_acceptance;
}
