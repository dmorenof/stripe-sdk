<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Reporting;

/**
 * Report Run
 *
 * The Report Run object represents an instance of a report type generated with
 * specific run parameters. Once the object is created, Stripe begins processing the report.
 * When the report has finished running, it will give you a reference to a file
 * where you can retrieve your results. For an overview, see
 * [API Access to Reports](https://docs.stripe.com/reporting/statements/api).
 *
 * Note that certain report types can only be run based on your live-mode data (not test-mode
 * data), and will error when queried without a [live-mode API key](https://docs.stripe.com/keys#test-live-modes).
 */
final class ReportRun extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'id',
        'livemode',
        'object_',
        'parameters',
        'report_type',
        'status',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'error' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'report_type' => [
            'maxLength' => 5000,
        ],
        'status' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * If something should go wrong during the run, a message about the failure (populated when
     *  `status=failed`).
     */
    public ?string $error {
        set {
            $this->assigning('error', $value);
            $this->error = $value;
        }
    }
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * `true` if the report is run on live mode data and `false` if it is run on test mode data.
     */
    public bool $livemode;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Reporting\ReportRun\ObjectEnum $object_;
    public \StripeSDK\DTOs\FinancialReportingFinanceReportRunRunParameters $parameters;
    /**
     * The ID of the [report type](https://docs.stripe.com/reports/report-types) to run, such as `"balance.summary.1"`.
     */
    public string $report_type {
        set {
            $this->assigning('report_type', $value);
            $this->report_type = $value;
        }
    }
    /**
     * The file object representing the result of the report run (populated when
     *  `status=succeeded`).
     */
    public ?\StripeSDK\DTOs\File $result;
    /**
     * Status of this report run. This will be `pending` when the run is initially created.
     *  When the run finishes, this will be set to `succeeded` and the `result` field will be populated.
     *  Rarely, we may encounter an error, at which point this will be set to `failed` and the `error` field will be populated.
     */
    public string $status {
        set {
            $this->assigning('status', $value);
            $this->status = $value;
        }
    }
    /**
     * Timestamp at which this run successfully finished (populated when
     *  `status=succeeded`). Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public ?int $succeeded_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'error' => $value === null || is_string($value) ? $this->error = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Reporting\ReportRun\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'parameters' => $value instanceof \stdClass ? $this->parameters = new \StripeSDK\DTOs\FinancialReportingFinanceReportRunRunParameters($value) : parent::assignMember($name, $value),
            'report_type' => is_string($value) ? $this->report_type = $value : parent::assignMember($name, $value),
            'result' => $value === null || $value instanceof \stdClass ? $this->result = $value === null ? null : new \StripeSDK\DTOs\File($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            'succeeded_at' => $value === null || is_int($value) ? $this->succeeded_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
