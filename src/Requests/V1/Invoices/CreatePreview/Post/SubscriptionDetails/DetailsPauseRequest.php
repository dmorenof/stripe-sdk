<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\CreatePreview\Post\SubscriptionDetails;

/**
 * subscription_details_pause_params
 */
final class DetailsPauseRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\SubscriptionDetails\Pause\BillForRequest $bill_for;
    public \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\SubscriptionDetails\Pause\InvoicingBehaviorEnum $invoicing_behavior;
    public \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\SubscriptionDetails\Pause\PauseTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'invoicing_behavior' => is_string($value) ? $this->invoicing_behavior = \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\SubscriptionDetails\Pause\InvoicingBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\SubscriptionDetails\Pause\PauseTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
