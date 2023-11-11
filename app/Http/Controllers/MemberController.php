<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //show all members
    public function showAllMembers()
    {
        $members = Member::all();

        return view('members', [
            'members' => $members
        ]);
    }
}
