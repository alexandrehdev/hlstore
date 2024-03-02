<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static ADMINISTRATOR()
 * @method static static OWNER()
 * @method static static CLIENT()
 */
final class UserType extends Enum
{
    const ADMIN = "admin";
    const OWNER = "owner";
    const CLIENT = "client";
}
