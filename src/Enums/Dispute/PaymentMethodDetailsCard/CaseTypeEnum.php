<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Dispute\PaymentMethodDetailsCard;

enum CaseTypeEnum: string
{
    case Block = 'block';
    case Chargeback = 'chargeback';
    case Compliance = 'compliance';
    case Inquiry = 'inquiry';
    case Resolution = 'resolution';
}
