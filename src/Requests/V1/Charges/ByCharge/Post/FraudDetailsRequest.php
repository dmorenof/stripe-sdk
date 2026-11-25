<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Charges\ByCharge\Post;

/**
 * fraud_details
 *
 * A set of key-value pairs you can attach to a charge giving information about its riskiness. If you believe a charge is fraudulent, include a `user_report` key with a value of `fraudulent`. If you believe a charge is safe, include a `user_report` key with a value of `safe`. Stripe will use the information you send to improve our fraud detection algorithms.
 */
final class FraudDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'user_report',
    ];

    protected const array VALIDATION = [
        'user_report' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Enums\V1\Charges\ByCharge\Post\FraudDetails\UserReportEnum $user_report {
        set {
            $this->assigning('user_report', $value);
            $this->user_report = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'user_report' => is_string($value) ? $this->user_report = \StripeSDK\Enums\V1\Charges\ByCharge\Post\FraudDetails\UserReportEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
