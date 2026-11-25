<?php

declare(strict_types=1);

namespace StripeSDK\Enums\TerminalReaderReaderResource\ReaderAction;

enum TypeEnum: string
{
    case CollectInputs = 'collect_inputs';
    case CollectPaymentMethod = 'collect_payment_method';
    case ConfirmPaymentIntent = 'confirm_payment_intent';
    case PrintContent = 'print_content';
    case ProcessPaymentIntent = 'process_payment_intent';
    case ProcessSetupIntent = 'process_setup_intent';
    case RefundPayment = 'refund_payment';
    case SetReaderDisplay = 'set_reader_display';
}
