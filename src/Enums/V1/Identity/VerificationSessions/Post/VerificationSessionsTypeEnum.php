<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Identity\VerificationSessions\Post;

enum VerificationSessionsTypeEnum: string
{
    case Document = 'document';
    case IdNumber = 'id_number';
}
