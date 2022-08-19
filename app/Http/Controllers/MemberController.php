<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
// aaa
{
    public function top()
        {
            //membersテーブルのデータからid,name,phone,emailのデータを選び取得する。
            //それを変数membersに入れる
            $members = DB::table('members')
            ->select('id','name','phone','email')
            ->get();

            //compactでビューに変数membersを渡す
            return view('member.top', compact('members'));  
        }
   
    public function register()
        {
            return view('member.index');  
        }

    public function store(Request $request)
    {
        member::create([
            "name" => $request->name,
            "phone" => $request->phone,
            "email" => $request->email,
        ]);

        return redirect('/top');
    }



    public function show(Request $request)
    {
        $member = Member::find($request->id);
        return view('member.show',['member' => $member]);

    }

    public function update(Request $request)
    {
        $member = Member::find($request->id);
            $member->update([
                "name" => $request->name,
                "phone" => $request->phone,
                "email" => $request->email
    ]);

        return redirect("/top");
    }

    public function delete(Request $request)
    {
            $member = Member::find($request->id);
            $member -> delete();

        return redirect("/top");
    }

}