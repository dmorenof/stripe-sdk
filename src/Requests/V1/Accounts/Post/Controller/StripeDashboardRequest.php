<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\Post\Controller;

/**
 * controller_dashboard_specs
 */
final class StripeDashboardRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\Accounts\Post\Controller\StripeDashboard\DashboardTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Accounts\Post\Controller\StripeDashboard\DashboardTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
