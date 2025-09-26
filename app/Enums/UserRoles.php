<?php

namespace App\Enums;

enum UserRoles: string
{
    case SuperAdmin = 'SuperAdmin';
    case Customer = 'Customer';
    case Manager = 'Manager';
}
