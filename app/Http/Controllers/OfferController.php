<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tbl_offer;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class OfferController extends Controller
{
    public function create(Request $request)
    {
        $fields = $request;


        $offer = Tbl_offer::create([
            'user_id' => 1,
            'company_id' => 1,
            'pic_id' => 1,
            'matgroup' => 'matgroup',
            'matcode' => 'matcode',
            'matdesc' => 'matdesc',
            'offer_group' => $fields['group_'],
            'sub' => $fields['sub'],
            'size' => $fields['size'],
            'grade' => $fields['grade'],
            'length' => $fields['length'],
            'qty' => $fields['qty'],
            // 'weight' => 1,
            'currency' => $fields['price_currency'],
            'price_type' => $fields['price_type'],
            'price' => $fields['price'],
            'ship_eta' => $fields['ship_type'],
            'ship_date' => $fields['ship_date'],
            // 'validity_start' => $fields['validity_start'],
            // 'validity_time' => $fields['valid_time'],
            'offer_status' => 'xx',
            'remark' => 'xx',


        ]);

        return response($offer, 201);
    }
}
