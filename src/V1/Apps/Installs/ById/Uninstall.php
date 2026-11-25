<?php

declare(strict_types=1);

namespace StripeSDK\V1\Apps\Installs\ById;

final class Uninstall extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/apps/installs/{id}/uninstall [operationId: PostAppsInstallsIdUninstall] */
    /**
     * Uninstall an app install
     *
     * <p>Uninstalls an app from the account that installed it.</p>
     */
    public static function post(string $id, ?\StripeSDK\Requests\V1\Apps\Installs\ById\Uninstall\Post $payload = null): \StripeSDK\DTOs\Apps\Install|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Apps\Installs\ById\Uninstall::class)->post($id, $payload);
    }
}
