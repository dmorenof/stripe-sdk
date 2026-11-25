<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\CreatePreview\Post\ScheduleDetails;

/**
 * phase_configuration_params
 */
final class DetailsPhasesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'items',
    ];

    protected const array VALIDATION = [
        'default_payment_method' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Collections\V1\Invoices\CreatePreview\Post\ScheduleDetails\PhasesItem\InvoiceItemsCollection $add_invoice_items;
    public float $application_fee_percent;
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\ScheduleDetails\PhasesItem\AutomaticTaxRequest $automatic_tax;
    public \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\ScheduleDetails\PhasesItem\CycleAnchorEnum $billing_cycle_anchor;
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\ScheduleDetails\PhasesItem\BillingThresholdsRequest $billing_thresholds;
    public \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\ScheduleDetails\PhasesItem\CollectionMethodEnum $collection_method;
    public string $default_payment_method {
        set {
            $this->assigning('default_payment_method', $value);
            $this->default_payment_method = $value;
        }
    }
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\ScheduleDetails\PhasesItem\TaxRatesRequest $default_tax_rates;
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\ScheduleDetails\PhasesItem\PhasesItemDescriptionRequest $description;
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\ScheduleDetails\PhasesItem\PhasesItemDiscountsRequest $discounts;
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\ScheduleDetails\PhasesItem\PhasesItemDurationRequest $duration;
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\ScheduleDetails\PhasesItem\EndDateRequest $end_date;
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\ScheduleDetails\PhasesItem\InvoiceSettingsRequest $invoice_settings;
    public \StripeSDK\Collections\V1\Invoices\CreatePreview\Post\ScheduleDetails\PhasesItem\PhasesItemItemsCollection $items;
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\ScheduleDetails\PhasesItem\MetadataMapRequest $metadata;
    public string $on_behalf_of;
    public \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\ScheduleDetails\PhasesItem\ProrationBehaviorEnum $proration_behavior;
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\ScheduleDetails\PhasesItem\StartDateRequest $start_date;
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\ScheduleDetails\PhasesItem\TransferDataRequest $transfer_data;
    public bool $trial;
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\ScheduleDetails\PhasesItem\TrialEndRequest $trial_end;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'application_fee_percent' => is_float($value) ? $this->application_fee_percent = $value : parent::assignMember($name, $value),
            'billing_cycle_anchor' => is_string($value) ? $this->billing_cycle_anchor = \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\ScheduleDetails\PhasesItem\CycleAnchorEnum::from($value) : parent::assignMember($name, $value),
            'collection_method' => is_string($value) ? $this->collection_method = \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\ScheduleDetails\PhasesItem\CollectionMethodEnum::from($value) : parent::assignMember($name, $value),
            'default_payment_method' => is_string($value) ? $this->default_payment_method = $value : parent::assignMember($name, $value),
            'on_behalf_of' => is_string($value) ? $this->on_behalf_of = $value : parent::assignMember($name, $value),
            'proration_behavior' => is_string($value) ? $this->proration_behavior = \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\ScheduleDetails\PhasesItem\ProrationBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'trial' => is_bool($value) ? $this->trial = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
