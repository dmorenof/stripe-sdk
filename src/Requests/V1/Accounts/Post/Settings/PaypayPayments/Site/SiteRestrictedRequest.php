<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\Post\Settings\PaypayPayments\Site;

/**
 * paypay_site_restricted_specs
 */
final class SiteRestrictedRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'payment_flow_file' => [
            'maxLength' => 5000,
        ],
    ];

    public string $payment_flow_file {
        set {
            $this->assigning('payment_flow_file', $value);
            $this->payment_flow_file = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payment_flow_file' => is_string($value) ? $this->payment_flow_file = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
