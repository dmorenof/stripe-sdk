<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\Post\Settings;

/**
 * treasury_settings_specs
 */
final class SettingsTreasuryRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Accounts\Post\Settings\Treasury\TosAcceptanceRequest $tos_acceptance;
}
