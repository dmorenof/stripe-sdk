<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\BillingPortal\Sessions\Post\FlowData;

enum DataTypeEnum: string
{
    case CustomerUpdate = 'customer_update';
    case PaymentMethodUpdate = 'payment_method_update';
    case SubscriptionCancel = 'subscription_cancel';
    case SubscriptionUpdate = 'subscription_update';
    case SubscriptionUpdateConfirm = 'subscription_update_confirm';
}
