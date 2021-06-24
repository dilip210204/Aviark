<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Card;
use App\User;
use Auth;

class CardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cards = DB::table('cards as a')
            ->join('users as b', 'b.id', '=', 'a.who')
            ->select('a.*', 'b.city as city' ,'b.country as country' ,'b.profile as profile','b.hobby as hobby' ,'b.interests as interests')
            ->get();

        return view('frontend.card.card',compact('cards'));
    }

    public function noah()
    {
        $cards = DB::table('cards as a')
                ->join('users as b', 'b.id', '=', 'a.requesting')
                ->select('a.*','b.*')
                ->where('a.global','=','yes')
                ->get();

        return view('frontend.card.card',compact('cards'));
    }

    public function lighthouse()
    {
        $cards = array();
        return view('frontend.card.lighthouse',compact('cards'));
    }

    public function request(Request $request)
    {

        if(!empty($request->id)){
            $profiles = DB::table('users')
            ->select('*')
            ->where('id','=',$request->id)
            ->get();
        }else{
            $profiles = DB::table('users')
            ->select('*')
            ->get();
        }

        $global = '';
        if(empty($request->id)){
            $global = 'yes';
        }

        return view('frontend.card.request' ,compact('profiles','global'));
    }

    public function request2(Request $request)
    {


       $cards = Card::find($request->id);

       if($cards->global == "yes"){

        $card = DB::table('cards as a')
                ->join('users as b', 'b.id', '=', 'a.requesting')
                ->select('a.*','b.*')
                ->where('a.id','=',$request->id)
                ->orwhere('b.profession','=','a.who')
                ->orwhere('b.hobby','like','%a.who.hobby%')
                ->get();

                // echo "<pre>";
                // print_r($card);
                // die();

       }else{
          $card = DB::table('cards as a')
                ->select('a.*','b.name as name','b.pro as pro', 'b.city as city' ,'b.country as country' ,'b.profile as profile','b.hobby as hobby' ,'b.interests as interests','b.profession as profession')
                ->join('users as b', 'b.name', '=', 'a.capturing')
                ->where('a.id','=',$request->id)
                // ->where('b.id','=',$userid)
                ->get();
       }

       // echo "<pre>";
       // print_r($card);
       // die();

      return view('frontend.card.request2' ,compact('card'));
    }

    public function next(Request $request)
    {   
        $input['requesting'] = Auth::user()->id;
        $input['capturing'] = $request->capturing;
        $input['photo'] = $request->photo;
        $input['video'] = $request->video;
        $input['audio'] = $request->audio;
        $input['knowledge'] = $request->knowledge;
        $input['what'] = $request->what;
        $input['who'] = $request->who;
        $input['where'] = $request->where;
        $input['special_need'] = $request->special_need;
        $input['notes'] = $request->notes;
        if(!empty($request->global)){
          $input['global'] = $request->global;
        }

        $data = Card::create($input);
        $data->save();

        return redirect('card/request2/'.$data['id']);

    }

    public function submit(Request $request)
    {
        $input['pro'] = $request->pro;
        $input['commercial'] = $request->commercial;
        $input['used_for'] = $request->used_for;
        $input['proposed_price'] = $request->proposed_price;
        $input['currency'] = $request->currency;
        $input['amount'] = $request->amount;
        $input['start_date'] = $request->start_date;
        $input['end_date'] = $request->end_date;
        $input['what'] = $request->what;
        $input['status'] = 'in_progress';
        
        $card = Card::find($request->id);
        $card->update($input);

        if($card->global == "yes"){
            return redirect('noah');
        }else{
            return redirect('lighthouse');
        }
    }

    public function in_progress(Request $request)
    {
         $cards = DB::table('cards as a')
            ->join('users as b', 'b.id', '=', 'a.requesting')
            ->select('a.*', 'b.city as city' ,'b.country as country' ,'b.profile as profile','b.hobby as hobby' ,'b.interests as interests')
            // ->where('global','=','no')
            ->where('status','=','in_progress')
            ->where('requesting','=', Auth::user()->id)
            ->get();


            // echo "<pre>";
            // print_r($cards);
            // die();

        return view('frontend.card.tab.in_progress',compact('cards'));
    }

    public function completed(Request $request)
    {
         $cards = DB::table('cards as a')
            ->join('users as b', 'b.id', '=', 'a.requesting')
            ->select('a.*', 'b.city as city' ,'b.country as country' ,'b.profile as profile','b.hobby as hobby' ,'b.interests as interests')
            // ->where('global','=','no')
            ->where('status','=','completed')
            ->where('user_id','=', Auth::user()->id)
            ->orWhere('who','=', Auth::user()->id)
            ->get();

        return view('frontend.card.tab.completed',compact('cards'));
    }

    public function saved_for_later(Request $request)
    {
         $cards = DB::table('cards as a')
            ->join('users as b', 'b.id', '=', 'a.requesting')
            ->select('a.*', 'b.city as city' ,'b.country as country' ,'b.profile as profile','b.hobby as hobby' ,'b.interests as interests')
            // ->where('global','=','no')
            ->where('status','=','saved_for_later')
            ->where('requesting','=', Auth::user()->id)
            ->orWhere('who','=', Auth::user()->id)
            ->get();
        return view('frontend.card.tab.saved_for_later',compact('cards'));
    }

    public function declined(Request $request)
    {
        $cards = DB::table('cards as a')
            ->join('users as b', 'b.id', '=', 'a.requesting')
            ->select('a.*', 'b.city as city' ,'b.country as country' ,'b.profile as profile','b.hobby as hobby' ,'b.interests as interests')
            // ->where('global','=','no')
            ->where('status','=','declined')
            ->where('requesting','=', Auth::user()->id)
            ->orWhere('who','=', Auth::user()->id)
            ->get();
        return view('frontend.card.tab.declined',compact('cards'));
    }

    public function dustbin(Request $request)
    {
        $cards = DB::table('cards as a')
            ->join('users as b', 'b.id', '=', 'a.requesting')
            ->select('a.*', 'b.city as city' ,'b.country as country' ,'b.profile as profile','b.hobby as hobby' ,'b.interests as interests')
            // ->where('global','=','no')
            ->where('status','=','dustbin')
            ->where('requesting','=', Auth::user()->id)
            ->orWhere('who','=', Auth::user()->id)
            ->get();
        return view('frontend.card.tab.dustbin',compact('cards'));
    }


    public function request_details(Request $request)
    {
        $cards = DB::table('cards as a')
        ->join('users as b', 'b.id', '=', 'a.requesting')

        ->select('a.*', 'b.city as city' ,'b.country as country' ,'b.profile as profile','b.hobby as hobby' ,'b.interests as interests')
        ->where('a.id','=', $request->id)
        ->get();

        // echo "<pre>";
        // print_r($cards);
        // die();

        return view('frontend.card.request_details',compact('cards'));
    }


    // END
}
