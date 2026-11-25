<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\FinancialAccounts\Post;

/**
 * platform_restrictions
 *
 * The set of functionalities that the platform can restrict on the FinancialAccount.
 */
final class PlatformRestrictionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\Treasury\FinancialAccounts\Post\PlatformRestrictions\InboundFlowsEnum $inbound_flows;
    public \StripeSDK\Enums\V1\Treasury\FinancialAccounts\Post\PlatformRestrictions\OutboundFlowsEnum $outbound_flows;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'inbound_flows' => is_string($value) ? $this->inbound_flows = \StripeSDK\Enums\V1\Treasury\FinancialAccounts\Post\PlatformRestrictions\InboundFlowsEnum::from($value) : parent::assignMember($name, $value),
            'outbound_flows' => is_string($value) ? $this->outbound_flows = \StripeSDK\Enums\V1\Treasury\FinancialAccounts\Post\PlatformRestrictions\OutboundFlowsEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
