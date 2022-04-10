<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    
    public function GetVisitorDetails(){
        $ip_address = $_SERVER["REMOTE_ADDR"];
        date_default_timezone_set("Asia/Kathmandu");
        $visit_time = date("h:i:sa");
        $visit_date = date("Y-m-d");

        $result = Visitor::insert([
            'ip_address' => $ip_address,
            'visit_time' => $visit_time,
            'visit_date' => $visit_date,
        ]);

        return $result;
    }

}
