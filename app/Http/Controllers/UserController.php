<?php

namespace App\Http\Controllers;

use App\Mail\sendemail;
use App\Mail\sendUserEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->img);
        $cak = '';
        if ($request->input('urgent') == 'on') {
            $cak = '1';
        } else {
            $cak = '0';
        }

        $request->validate([
            'title' => 'required|string|max:100',
            'message' => 'required|string',
            'email' => 'required|max:45',
            'Your_student_number' => 'required|digits:9|numeric',
            'radio1' => 'required|in:Suggestion,complaints',
            'name' => 'required|max:45|string',
            'img' => 'image|mimes:jpg,png|max:1024',
        ]);



        $save = new User;
        $save->title = $request->input('title');
        $save->message = $request->input('message');
        $save->email = $request->input('email');
        $save->Your_student_number = $request->input('Your_student_number');
        $save->name_student = $request->input('name');
        $save->type = $request->input('radio1');
        $save->urgent = $cak;
        $save->status;
        //كود اضافة صورة
        if ($request->hasFile('img')) {
            $userImage = $request->file('img');
            $imageName = time() . '_image_' . '.' . $userImage->getClientOriginalExtension();
            $userImage->storePubliclyAs('users', $imageName, ['disk' => 'public']);
            $save->image = 'users/' . $imageName;
        }



        $ss =  $save->save();
        // if (1) {
        //     // Mail::to($request->user())->send(new sendemail($save));
        //     Mail::to($request->user())->send(new sendUserEmail($save));
        // }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $save = User::find($id);
        $save->response = $request->input('response');
        $save->save();
        return redirect()->route('showdata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

    public function Adit_status(Request $request, $id)
    {
        $save = User::find($id);
        $save->status = 'Closed';
        $save->closed_date = now();

        $save->save();
        return redirect()->route('showdata');
    }






    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function shows(Request $request)
    {

        $request->validate([
            'ss' => 'required|exists:users,id', 
            'email' => 'required|email',

        ]);


        $id = $request->input('ss');
        $email = $request->input('email');

        $ss = User::where('id', '=', $id)->get();

        return response()->view('show_s', ['data' => $ss, 'email' => $email]);
    }
}
