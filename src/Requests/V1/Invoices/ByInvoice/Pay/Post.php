<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\ByInvoice\Pay;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'payment_method' => [
            'maxLength' => 5000,
        ],
        'source' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * In cases where the source used to pay the invoice has insufficient funds, passing `forgive=true` controls whether a charge should be attempted for the full amount available on the source, up to the amount to fully pay the invoice. This effectively forgives the difference between the amount available on the source and the amount due.
     *
     * Passing `forgive=false` will fail the charge if the source hasn't been pre-funded with the right amount. An example for this case is with ACH Credit Transfers and wires: if the amount wired is less than the amount due by a small amount, you might want to forgive the difference. Defaults to `false`.
     */
    public bool $forgive;
    /**
     * ID of the mandate to be used for this invoice. It must correspond to the payment method used to pay the invoice, including the payment_method param or the invoice's default_payment_method or default_source, if set.
     */
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Pay\Post\PayMandateRequest $mandate;
    /**
     * Indicates if a customer is on or off-session while an invoice payment is attempted. Defaults to `true` (off-session).
     */
    public bool $off_session;
    /**
     * Boolean representing whether an invoice is paid outside of Stripe. This will result in no charge being made. Defaults to `false`.
     */
    public bool $paid_out_of_band;
    /**
     * A PaymentMethod to be charged. The PaymentMethod must be the ID of a PaymentMethod belonging to the customer associated with the invoice being paid.
     */
    public string $payment_method {
        set {
            $this->assigning('payment_method', $value);
            $this->payment_method = $value;
        }
    }
    /**
     * A payment source to be charged. The source must be the ID of a source belonging to the customer associated with the invoice being paid.
     */
    public string $source {
        set {
            $this->assigning('source', $value);
            $this->source = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'forgive' => is_bool($value) ? $this->forgive = $value : parent::assignMember($name, $value),
            'off_session' => is_bool($value) ? $this->off_session = $value : parent::assignMember($name, $value),
            'paid_out_of_band' => is_bool($value) ? $this->paid_out_of_band = $value : parent::assignMember($name, $value),
            'payment_method' => is_string($value) ? $this->payment_method = $value : parent::assignMember($name, $value),
            'source' => is_string($value) ? $this->source = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
