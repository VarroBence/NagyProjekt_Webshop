<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\isEmpty;

class AdminController extends Controller
{
    public static function check(int $id): bool
    {
        $found = DB::select('select * from users where id = ?', [$id]);
        if(isEmpty($found)){
            return false;
        }
        return true;
    }
}
