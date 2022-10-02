<?php

namespace App\Http\Controllers;

use App\Models\userdetail;
use App\Http\Requests\StoreFormRequest;
use App\Http\Requests\UpdateFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;




class FormoController extends Controller
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
    public function create(Request $request)
    {

        $validator= Validator::make($request->all(),[
            'first_name'=> 'required|max:255',
            'last_name'=> 'required|max:255',
            'email'=> 'required|max:255|email|unique:users,email',
            'city_name'=> 'required|max:255',
            'tel'=> 'required|max:255',
            'password'=> 'required|min:3',
            'profile' => 'required|mimes:jpeg,png',
        ]);
        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator);
        }

        $user = new userdetail;

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->tel = $request->tel;
        $user->city_name = $request->city_name;
        $user->password = Hash::make($request->password);

        $file= $request->file('profile');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('public/Image'), $filename);

        $user->profile= $filename;

        $inserted=$user->save();


      if ($inserted){
          return Redirect::back()->with('message','Insertion Successfully');
      }else{
          return Redirect::back()->with('message','Insertion Failed');
      }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\userdetail  $form
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $userdetails = userdetail::all();
        return view('userdetails', compact('userdetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userdetail  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {

        $userdetails = userdetail::find($request->id);
        return view('edit', compact('userdetails'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormRequest  $request
     * @param  \App\Models\userdetail  $form
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request, userdetail $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userdetail  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(userdetail $form)
    {
        //
    }
}
