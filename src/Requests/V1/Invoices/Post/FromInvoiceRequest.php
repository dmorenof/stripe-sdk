<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\Post;

/**
 * from_invoice
 *
 * Revise an existing invoice. The new invoice will be created in `status=draft`. See the [revision documentation](https://docs.stripe.com/invoicing/invoice-revisions) for more details.
 */
final class FromInvoiceRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'action',
        'invoice',
    ];

    protected const array VALIDATION = [
        'action' => [
            'maxLength' => 5000,
        ],
        'invoice' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Enums\V1\Invoices\Post\FromInvoice\InvoiceActionEnum $action {
        set {
            $this->assigning('action', $value);
            $this->action = $value;
        }
    }
    public string $invoice {
        set {
            $this->assigning('invoice', $value);
            $this->invoice = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => is_string($value) ? $this->action = \StripeSDK\Enums\V1\Invoices\Post\FromInvoice\InvoiceActionEnum::from($value) : parent::assignMember($name, $value),
            'invoice' => is_string($value) ? $this->invoice = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
