<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Card;
use Auth;

class CardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $cards = Card::orderBy('id','desc')->get();
        // $cards = DB::select('select * from cards');

        $cards = DB::table('cards as a')
            ->join('profiles as b', 'b.id', '=', 'a.who')
            ->select('a.*', 'b.city as city' ,'b.country as country' ,'b.profile as profile','b.hobby as hobby' ,'b.interests as interests')
            ->get();

        return view('frontend.card.card',compact('cards'));
    }

    public function request(Request $request)
    {

        if(!empty($request->id)){
            $profiles = DB::table('profiles')
            ->select('*')
            ->where('id','=',$request->id)
            ->get();
        }else{
            $profiles = DB::table('profiles')
            ->select('*')
            ->get();
        }

        return view('frontend.card.request' ,compact('profiles'));
    }

    public function submit(Request $request)
    {

        // if($file = $request->file('knowledge')){
        //         // $name = time().$file->getClientOriginalName();
        //         $name = rand().$file->getClientOriginalName();
        //         $file->move('uploads/cards', $name);
        //         $input['knowledge'] = $name;
        // }

        $user = Auth::user()->id;
        $input['user_id'] = $user;
        $input['photo'] = $request->photo;
        $input['video'] = $request->video;
        $input['audio'] = $request->audio;
        $input['knowledge'] = $request->knowledge;
        $input['what'] = $request->what;
        $input['who'] = $request->who;
        $input['special_need'] = $request->special_need;
        $input['notes'] = $request->notes;
        $input['currency'] = $request->currency;
        $input['amount'] = $request->amount;

        $data = Card::create($input);
        $data->save();

        return redirect('card');

    }


    // END
}
