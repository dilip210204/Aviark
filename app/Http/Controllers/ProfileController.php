<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function browse()
    {
        $profiles = DB::table('profiles')
        ->select('*')
        ->orderby('id','desc')
        ->get();

        return view('frontend.profile.browse',compact('profiles'));
    }

    public function request()
    {
        return view('frontend.profile.request');
    }


    public function submit(Request $request)
    {


        if($file = $request->file('profile')){
                $name = rand().$file->getClientOriginalName();
                $file->move('uploads/profiles', $name);
                $input['profile'] = $name;
        }

        $input['name'] = $request->name;
        $input['city'] = $request->city;
        $input['country'] = $request->country;
        $input['student'] = $request->student;
        $input['student_study_fields'] = $request->student_study_fields;
        $input['profession'] = $request->profession;
        $input['hobby'] = $request->hobby;
        $input['interests'] = $request->interests;
        $input['pro'] = $request->pro;
        $input['relevant_websites'] = $request->relevant_websites;
        $input['notes'] = $request->notes;

        $data = Profile::create($input);
        $data->save();

        return redirect('profile/browse');

    }


    public function detail(Request $request)
    {
        $profile_detail = Profile::find($request->id);
        return view('frontend.profile.detail',compact('profile_detail'));
    }


    public function search(Request $request)
    {
         $search =  $request->search;

         if(!empty($search)){
             $profiles = DB::table('profiles')
            ->select('*')
            ->where('name', 'like', '%'.$search.'%')
            ->orwhere('city', 'like', '%'.$search.'%')
            ->orwhere('country', 'like', '%'.$search.'%')
            ->orwhere('profession', 'like', '%'.$search.'%')
            ->get();
         }else{
            $profiles = DB::table('profiles')
            ->select('*')
            ->orderby('id','desc')
            ->get();
         }

      

        return view('frontend.profile.profile-search',compact('profiles'));
    }

    public function filters(Request $request)
    {
        
        return view('frontend.profile.filters');
    }

    public function filters_search(Request $request)
    {
        $city =  $request->city;
        $country =  $request->country;
        $profession =  $request->profession;
        $hobby =  $request->hobby;
        $interests =  $request->interests;
        $pro =  $request->pro;

        $profiles = DB::table('profiles')
        ->select('*')
        ->where('city', 'like', '%'.$city.'%')
        ->where('country', 'like', '%'.$country.'%')
        ->where('profession', 'like', '%'.$profession.'%')
        ->where('hobby', 'like', '%'.$hobby.'%')
        ->where('interests', 'like', '%'.$interests.'%')
        ->where('pro', 'like', '%'.$pro.'%')
        ->get();

        return view('frontend.profile.browse',compact('profiles'));

    }
}
