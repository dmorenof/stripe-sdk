<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentLinks\Post\CustomFieldsItem;

enum FieldsItemTypeEnum: string
{
    case Dropdown = 'dropdown';
    case Numeric = 'numeric';
    case Text = 'text';
}
