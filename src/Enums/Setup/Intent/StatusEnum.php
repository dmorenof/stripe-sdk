<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Setup\Intent;

enum StatusEnum: string
{
    case Canceled = 'canceled';
    case Processing = 'processing';
    case RequiresAction = 'requires_action';
    case RequiresConfirmation = 'requires_confirmation';
    case RequiresPaymentMethod = 'requires_payment_method';
    case Succeeded = 'succeeded';
}
