<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestPostRequest;
use App\Models\TestFuruMichi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // /db
    public function db() {
/*
        $data = DB::table('int_1')->get();
var_dump($data);
*/
        // $data = TestFuruMichi::query()->get();
        $data = TestFuruMichi::find(1);
var_dump($data->toArray());
// var_dump($data);

echo 'DBDB'; exit;
    }

    // /
    public function index() {
        return view('welcome');
    }

    // /2nd
    public function second() {
        return view('2nd');
    }

    // /user/XXXXX
    public function user($id) {
        $context = [
            'id' => $id,
            'array' => [
                'string' => 'もじれつ',
            ],
        ];
        return view('2nd', $context);
    }

    // /test/post
    public function post(TestPostRequest $request) {
        // $all = $request->all();
        /*
        $valid_all = $request->validate([
            // 'name' => 'required|email',
            'name' => ['required', 'email'],
        ]);
        */
        $valid_all = $request->validated();
var_dump($valid_all);

        // DBに保存する
        TestFuruMichi::create($valid_all);

echo 'TTTT'; exit;
    }

    public function location() {
        // return redirect('/2nd');
        return redirect()->route('second');
    }
}
