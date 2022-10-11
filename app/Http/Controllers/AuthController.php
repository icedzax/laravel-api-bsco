<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tbl_company;
use App\Models\Tbl_pic;

use App\Models\Tbl_pic_list;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|unique:tbl_company|string',
            'country' => 'required|string',
            'address' => 'required|string',
            'website' => 'required|string',
            'type' => 'required|string',
            'note' => 'required|string',
            'pic' => '',
            'sname' => '',
            'userId' => '',

        ]);

        $company = Tbl_company::create([
            'name' => $fields['name'],
            'country' => $fields['country'],
            'address' => $fields['address'],
            'website' => $fields['website'],
            'type' => $fields['type'],
            'note' => $fields['note'],
            'userId' => $fields['userId'],
            'line_name' => $fields['sname'],

        ]);

        // User::create([
        //     'name' => $fields['sname'],
        //     'userId' => $fields['userId'],

        // ]);

        // $pic = Tbl_pic::insert($fields['pic']);

        foreach ($fields['pic'] as $key => $value) {
            if ($value['name'] !== null) {
                $pic = Tbl_pic::create([
                    'name' => $value['name'],
                    'surname' => $value['surname'],
                    'position' => $value['position'],
                    'nationality' => $value['nationality'],
                    'tel' => $value['tel'],
                    'email' => $value['email'],
                    'note' => $value['note'],
                ]);

                Tbl_pic_list::create([
                    'company_id' => $company['id'],
                    'pic_id' => $pic->id,
                ]);
            }
        }



        // $token = $company->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $company,
            // 'token' => $token
        ];

        return response($response, 201);
    }

    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        // Check email
        $user = User::where('email', $fields['email'])->first();

        // Check password
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Bad creds'
            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function loginLineId(Request $request)
    {
        $fields = $request->validate([
            'userId' => 'required|string',

        ]);

        // Check userId
        $user = Tbl_company::where('userId', $fields['userId'])->first();

        // Check password
        if (!$user) {
            return response([], 200);
        }

        // $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            // 'token' => $token
        ];

        return response($response, 201);
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged out'
        ];
    }
}
