<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetDateModel extends Model
{
    use HasFactory;
    protected $table = "butangdate";
    protected $primaryKey = 'id';
    protected $fillable = ['date'];

    public static function getButang()
    {
        return self::orderBy('date', 'asc')->get();
    }
}
