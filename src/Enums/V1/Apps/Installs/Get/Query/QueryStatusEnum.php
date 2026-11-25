<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Apps\Installs\Get\Query;

enum QueryStatusEnum: string
{
    case InstallFailed = 'install_failed';
    case Installed = 'installed';
    case Installing = 'installing';
    case UninstallFailed = 'uninstall_failed';
    case Uninstalling = 'uninstalling';
}
