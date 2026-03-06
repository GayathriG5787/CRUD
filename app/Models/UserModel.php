<?php

namespace App\Models;

use CodeIgniter\Models;

class UserModel extends Models {
    protected $table = 'users';
    protected $primarykey = 'id';

    protected $allowedFields = [
        'name',
        'email',
        'phone',
        'image'
    ];
}