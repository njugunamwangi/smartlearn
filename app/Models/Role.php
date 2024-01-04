<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Role as ModelsRole;

class Role extends ModelsRole
{
    use HasFactory;

    const IS_ADMIN = 1;
    const IS_SCHOOL = 2;
    const IS_TUTOR = 3;
    const IS_STUDENT = 4;
}
