<?php

namespace App\Http\Controllers;

use App\Jobs\ActiveUsersJob;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class UserController extends Controller
{
    public function index()
    {


        /**
         * Old way to change big data
         */

        // $user_ids = User::where('status', 0)->pluck('id');
        // $jsonResponse = array();
        // foreach ($user_ids as $id) {
        //     User::where('id', $id)->update([
        //         'status' => 1
        //     ]);
        //     array_push($jsonResponse, ["ID" => $id, "status_now" => 1]);
        // }
        // return $jsonResponse;

        /**
         * Using queue
         */
        ActiveUsersJob::dispatch();
        return "The job is working now";
    }
}
