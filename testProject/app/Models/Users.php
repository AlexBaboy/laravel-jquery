<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    /**
     * @var mixed
     */
    private $company_name;
    /**
     * @var mixed
     */
    private $email;
    /**
     * @var mixed
     */
    private $first_name;
    /**
     * @var mixed
     */
    private $last_name;
    /**
     * @var mixed
     */
    private $phone;
    /**
     * @var mixed|string
     */
    private $password;
    /**
     * @var mixed|string
     */
    private $last_active;
    /**
     * @var int|mixed
     */
    private $c;
    /**
     * @var mixed|string
     */
    private $color;

    /**
     * @var mixed
     */

    public static function create(array $array)
    {
    }
}
