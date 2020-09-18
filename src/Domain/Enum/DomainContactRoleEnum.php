<?php declare(strict_types = 1);

namespace SandwaveIo\RealtimeRegister\Domain\Enum;

class DomainContactRoleEnum extends AbstractEnum
{
    const ROLE_ADMIN = 'ADMIN';
    const ROLE_BILLING = 'BILLING';
    const ROLE_TECH = 'TECH';

    protected static $values = [
        DomainContactRoleEnum::ROLE_ADMIN,
        DomainContactRoleEnum::ROLE_BILLING,
        DomainContactRoleEnum::ROLE_TECH,
    ];

    /** @param string $value */
    public static function validate($value): void
    {
        DomainContactRoleEnum::assertValueValid($value);
    }
}
