<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\Post\Settings;

/**
 * card_issuing_settings_specs
 */
final class CardIssuingRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\Settings\CardIssuing\TosAcceptanceRequest $tos_acceptance;
}
