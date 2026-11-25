<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentRecords\ById\ReportRefund\Post;

/**
 * processor_details
 *
 * Processor information for this refund.
 */
final class ProcessorDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Requests\V1\PaymentRecords\ById\ReportRefund\Post\ProcessorDetails\DetailsCustomRequest $custom;
    public \StripeSDK\Enums\V1\PaymentRecords\ById\ReportRefund\Post\ProcessorDetails\DetailsTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\PaymentRecords\ById\ReportRefund\Post\ProcessorDetails\DetailsTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
