<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingAuthorizationNetworkData
 */
final class AuthorizationNetworkData extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'acquiring_institution_id' => [
            'maxLength' => 5000,
        ],
        'system_trace_audit_number' => [
            'maxLength' => 5000,
        ],
        'transaction_id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Identifier assigned to the acquirer by the card network. Sometimes this value is not provided by the network; in this case, the value will be `null`.
     */
    public ?string $acquiring_institution_id {
        set {
            $this->assigning('acquiring_institution_id', $value);
            $this->acquiring_institution_id = $value;
        }
    }
    /**
     * The System Trace Audit Number (STAN) is a 6-digit identifier assigned by the acquirer. Prefer `network_data.transaction_id` if present, unless you have special requirements.
     */
    public ?string $system_trace_audit_number {
        set {
            $this->assigning('system_trace_audit_number', $value);
            $this->system_trace_audit_number = $value;
        }
    }
    /**
     * Unique identifier for the authorization assigned by the card network used to match subsequent messages, disputes, and transactions.
     */
    public ?string $transaction_id {
        set {
            $this->assigning('transaction_id', $value);
            $this->transaction_id = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'acquiring_institution_id' => $value === null || is_string($value) ? $this->acquiring_institution_id = $value : parent::assignMember($name, $value),
            'system_trace_audit_number' => $value === null || is_string($value) ? $this->system_trace_audit_number = $value : parent::assignMember($name, $value),
            'transaction_id' => $value === null || is_string($value) ? $this->transaction_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
