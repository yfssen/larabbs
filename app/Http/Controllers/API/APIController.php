<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function cateAPI()
    {
        $model = Category::all();
        return response()->json(['code' => 200, 'msg' => '请求成功', 'data' => $model]);
    }
}
