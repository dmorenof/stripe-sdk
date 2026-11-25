<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\Intent;

enum StatusEnum: string
{
    case Canceled = 'canceled';
    case Processing = 'processing';
    case RequiresAction = 'requires_action';
    case RequiresCapture = 'requires_capture';
    case RequiresConfirmation = 'requires_confirmation';
    case RequiresPaymentMethod = 'requires_payment_method';
    case Succeeded = 'succeeded';
}
