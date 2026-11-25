<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\Post\Settings\PaypayPayments;

/**
 * paypay_site_specs
 */
final class PaymentsSiteRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Accounts\Post\Settings\PaypayPayments\Site\SiteAccessibleRequest $accessible;
    public \StripeSDK\Requests\V1\Accounts\Post\Settings\PaypayPayments\Site\InDevelopmentRequest $in_development;
    public \StripeSDK\Requests\V1\Accounts\Post\Settings\PaypayPayments\Site\SiteRestrictedRequest $restricted;
    public \StripeSDK\Enums\V1\Accounts\Post\Settings\PaypayPayments\Site\SiteTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Accounts\Post\Settings\PaypayPayments\Site\SiteTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
