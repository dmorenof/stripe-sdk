<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

/**
 * SourceRedirectFlow
 */
final class RedirectFlow extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'return_url',
        'status',
        'url',
    ];

    protected const array VALIDATION = [
        'failure_reason' => [
            'maxLength' => 5000,
        ],
        'return_url' => [
            'maxLength' => 5000,
        ],
        'status' => [
            'maxLength' => 5000,
        ],
        'url' => [
            'maxLength' => 2048,
        ],
    ];

    /**
     * The failure reason for the redirect, either `user_abort` (the customer aborted or dropped out of the redirect flow), `declined` (the authentication failed or the transaction was declined), or `processing_error` (the redirect failed due to a technical error). Present only if the redirect status is `failed`.
     */
    public ?string $failure_reason {
        set {
            $this->assigning('failure_reason', $value);
            $this->failure_reason = $value;
        }
    }
    /**
     * The URL you provide to redirect the customer to after they authenticated their payment.
     */
    public string $return_url {
        set {
            $this->assigning('return_url', $value);
            $this->return_url = $value;
        }
    }
    /**
     * The status of the redirect, either `pending` (ready to be used by your customer to authenticate the transaction), `succeeded` (successful authentication, cannot be reused) or `not_required` (redirect should not be used) or `failed` (failed authentication, cannot be reused).
     */
    public string $status {
        set {
            $this->assigning('status', $value);
            $this->status = $value;
        }
    }
    /**
     * The URL provided to you to redirect a customer to as part of a `redirect` authentication flow.
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
            'failure_reason' => $value === null || is_string($value) ? $this->failure_reason = $value : parent::assignMember($name, $value),
            'return_url' => is_string($value) ? $this->return_url = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
