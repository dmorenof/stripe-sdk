<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\InvoicesResource;

/**
 * InvoicesResourceFromInvoice
 */
final class FromInvoice extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'action',
        'invoice',
    ];

    protected const array VALIDATION = [
        'action' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The relation between this invoice and the cloned invoice
     */
    public string $action {
        set {
            $this->assigning('action', $value);
            $this->action = $value;
        }
    }
    /**
     * The invoice that was cloned.
     */
    public \StripeSDK\DTOs\InvoicesResource\FromInvoice\InvoiceDTO $invoice;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => is_string($value) ? $this->action = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
