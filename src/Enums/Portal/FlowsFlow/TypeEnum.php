<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Portal\FlowsFlow;

enum TypeEnum: string
{
    case CustomerUpdate = 'customer_update';
    case PaymentMethodUpdate = 'payment_method_update';
    case SubscriptionCancel = 'subscription_cancel';
    case SubscriptionUpdate = 'subscription_update';
    case SubscriptionUpdateConfirm = 'subscription_update_confirm';
}
