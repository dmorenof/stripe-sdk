<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Mandate;

/**
 * mandate_bacs_debit
 */
final class BacsDebit extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'network_status',
        'reference',
        'url',
    ];

    protected const array VALIDATION = [
        'display_name' => [
            'maxLength' => 5000,
        ],
        'reference' => [
            'maxLength' => 5000,
        ],
        'service_user_number' => [
            'maxLength' => 5000,
        ],
        'url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The display name for the account on this mandate.
     */
    public ?string $display_name {
        set {
            $this->assigning('display_name', $value);
            $this->display_name = $value;
        }
    }
    /**
     * The status of the mandate on the Bacs network. Can be one of `pending`, `revoked`, `refused`, or `accepted`.
     */
    public \StripeSDK\Enums\Mandate\BacsDebit\NetworkStatusEnum $network_status;
    /**
     * The unique reference identifying the mandate on the Bacs network.
     */
    public string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }
    /**
     * When the mandate is revoked on the Bacs network this field displays the reason for the revocation.
     */
    public ?\StripeSDK\Enums\Mandate\BacsDebit\RevocationReasonEnum $revocation_reason;
    /**
     * The service user number for the account on this mandate.
     */
    public ?string $service_user_number {
        set {
            $this->assigning('service_user_number', $value);
            $this->service_user_number = $value;
        }
    }
    /**
     * The URL that will contain the mandate that the customer has signed.
     */
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'display_name' => $value === null || is_string($value) ? $this->display_name = $value : parent::assignMember($name, $value),
            'network_status' => is_string($value) ? $this->network_status = \StripeSDK\Enums\Mandate\BacsDebit\NetworkStatusEnum::from($value) : parent::assignMember($name, $value),
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'revocation_reason' => $value === null || is_string($value) ? $this->revocation_reason = $value === null ? null : \StripeSDK\Enums\Mandate\BacsDebit\RevocationReasonEnum::from($value) : parent::assignMember($name, $value),
            'service_user_number' => $value === null || is_string($value) ? $this->service_user_number = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
