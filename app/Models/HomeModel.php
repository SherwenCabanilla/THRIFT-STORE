<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Cast\Array_;

class HomeModel extends Model
{
    use HasFactory;

    public static function getMember()
    {
        $totalUsers = MemberModel::count();
        return [
            'totalMember' => $totalUsers,
        ];
    }
}
