<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentRecords\ReportPayment\Post;

enum ReportPaymentOutcomeEnum: string
{
    case Canceled = 'canceled';
    case Failed = 'failed';
    case Guaranteed = 'guaranteed';
}
