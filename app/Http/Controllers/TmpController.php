<?php

namespace App\Http\Controllers;


use App\Models\zzmb51tmp;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class TmpController extends Controller
{

    public function get(Request $request)
    {

        $fields = $request->validate([
            'id' => 'number',
        ]);

        $rs = zzmb51tmp::paginate(5);


        return response($rs, 200);
    }

    public function w()
    {
        // return view('vendor.pagination.default', [
        return view('mb51', [
            'paginator' =>  zzmb51tmp::paginate(100),
            'search' => 'SAY HI',
           
        ]);
    }


}
