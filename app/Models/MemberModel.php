<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberModel extends Model
{
    use HasFactory;
    protected $table = 'member';
    protected $primaryKey = 'member_id';
    protected $fillable = ['firstname', 'lastname', 'dependent', 'warning'];

    public static function getData()
    {
        return self::orderBy('lastname', 'asc')->get();
    }
}
