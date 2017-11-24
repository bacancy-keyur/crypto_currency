<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $initiaData = DB::table('initial_values')->first();
        $lend_interest = number_format($initiaData->lending_base + (0.25 / 100), 2);
        $initiaData->lend_interest = $lend_interest;
        $initiaData->daily_lend_amt = $lend_interest * ($initiaData->lend_amount / 100);

        return view('home')->with(['id' => $initiaData]);
    }

    public function storeInitial(Request $request)
    {
        $post = $request->all();
        $post['created_at'] = new \DateTime();
        $post['updated_at'] = new \DateTime();
        if (DB::table('initial_values')->insert($post)) {
            return response()->json(['status' => 'success', 'message' => 'Successfully Requested.!']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Error Storing Request.!']);
        }
    }

}