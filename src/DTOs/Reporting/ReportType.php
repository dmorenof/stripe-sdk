<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Reporting;

/**
 * Report Type
 *
 * The Report Type resource corresponds to a particular type of report, such as
 * the "Activity summary" or "Itemized payouts" reports. These objects are
 * identified by an ID belonging to a set of enumerated values. See
 * [API Access to Reports documentation](https://docs.stripe.com/reporting/statements/api)
 * for those Report Type IDs, along with required and optional parameters.
 *
 * Note that certain report types can only be run based on your live-mode data (not test-mode
 * data), and will error when queried without a [live-mode API key](https://docs.stripe.com/keys#test-live-modes).
 */
final class ReportType extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'data_available_end',
        'data_available_start',
        'id',
        'livemode',
        'name',
        'object_',
        'updated',
        'version',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Most recent time for which this Report Type is available. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $data_available_end;
    /**
     * Earliest time for which this Report Type is available. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $data_available_start;
    /**
     * List of column names that are included by default when this Report Type gets run. (If the Report Type doesn't support the `columns` parameter, this will be null.)
     */
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $default_columns;
    /**
     * The [ID of the Report Type](https://docs.stripe.com/reporting/statements/api#available-report-types), such as `balance.summary.1`.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Human-readable name of the Report Type
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Reporting\ReportType\ObjectEnum $object_;
    /**
     * When this Report Type was latest updated. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $updated;
    /**
     * Version of the Report Type. Different versions report with the same ID will have the same purpose, but may take different run parameters or have different result schemas.
     */
    public int $version;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'data_available_end' => is_int($value) ? $this->data_available_end = $value : parent::assignMember($name, $value),
            'data_available_start' => is_int($value) ? $this->data_available_start = $value : parent::assignMember($name, $value),
            'default_columns' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->default_columns = $value === null ? null : new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Reporting\ReportType\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'updated' => is_int($value) ? $this->updated = $value : parent::assignMember($name, $value),
            'version' => is_int($value) ? $this->version = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
