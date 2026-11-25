<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentRecords\ById\ReportPaymentAttempt\Post;

enum ReportPaymentAttemptOutcomeEnum: string
{
    case Canceled = 'canceled';
    case Failed = 'failed';
    case Guaranteed = 'guaranteed';
}
