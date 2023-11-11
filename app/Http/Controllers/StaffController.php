<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{

    //show all staff
    public function showAllStaff()
    {
        $staffs = Staff::with('branch')->get();

        return view('staff', [
            'staffs' => $staffs
        ]);
    }
}
