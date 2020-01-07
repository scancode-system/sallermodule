<?php

namespace Modules\Saller\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class SallerController extends Controller
{

    public function auth(Request $request)
    {
        return response()->json(auth('app')->user());
    }

}
