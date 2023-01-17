<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\isEmpty;

class AdminController extends Controller
{
    public static function check($id): bool
    {

        if ($id == null){
            return false;
        }

        $found = DB::select('select * from admins where id = ?', [$id]);
        if(empty($found)){
            return false;
        }
        return true;
    }
}
