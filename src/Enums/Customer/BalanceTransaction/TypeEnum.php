<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Customer\BalanceTransaction;

enum TypeEnum: string
{
    case Adjustment = 'adjustment';
    case AppliedToInvoice = 'applied_to_invoice';
    case CheckoutSessionSubscriptionPayment = 'checkout_session_subscription_payment';
    case CheckoutSessionSubscriptionPaymentCanceled = 'checkout_session_subscription_payment_canceled';
    case CreditNote = 'credit_note';
    case Initial = 'initial';
    case InvoiceOverpaid = 'invoice_overpaid';
    case InvoiceTooLarge = 'invoice_too_large';
    case InvoiceTooSmall = 'invoice_too_small';
    case Migration = 'migration';
    case UnappliedFromInvoice = 'unapplied_from_invoice';
    case UnspentReceiverCredit = 'unspent_receiver_credit';
}
