<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Open_work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Nette\Utils\Strings;

class OffersController extends Controller
{

    public function index(){

        $offers = Offer::where('user_id','=',auth()->id())->get();
           
        return view('Offers.index',compact('offers'));
    }

    public function store(Request $request){

        $work = Open_work::find($request->id);

        if(!$work)
        {
            return response([
                'message' => 'Post not found.'
            ], 403);
        }

        $offers = $work->offers()->where('user_id', auth()->user()->id)->first();




        if(!$offers)
        {
        //   return $request;
             Offer::create([
                 'open_work_id' =>$request->id,
                 'user_id'     => auth()->id(),
                 'description'   => $request->description,
                 'num_day'   => $request->num_day,
                 'pric'   => $request->pric,
                 'statu'   => '1',
                 'is_active'   => 1,

             ]);

             $id =Open_work::where('id',$request->id)->first();

          $urlid =(string)$request->id ;

           $body ="    <a href='w/$urlid'>عرض جديد لعملك</a>";
           $detaile =[
               'title'=> 'قدم عرض لاحد اعمالك ',
               'icon'=> 'exclamation-circle text-info',
               'body'=>  $body,
               'user'=> Auth::user()->name ,
               'username'=>  Auth::user()->username,
           ];
           if (Auth::user()->id != $id->user->id ) {
               $id->user->notify(new \App\Notifications\InvoicePaid($detaile));
           }

             return redirect()->route('openwork.show',['open_work'=> $request->id])->with('success','تم اضافة العرض ');
        }

            //  return    $request->id;
            return redirect()->route('openwork.show',['open_work'=> $request->id])->with('error','لم يضاف العرض  - انت مضيف عرض !');
        }


        public function acceptOffer(Request $request){

            $offer = Offer::find($request->id);

            if ($offer->statu == '1' and $offer->open_work->stage == '1') {
              
                Offer::where('id',$offer->id)->update(['statu'=>'2']);
                Open_work::where('id',$offer->open_work->id)->update(['stage'=>'2']);

                $body ="تفقد العروض";
                $detaile =[
                    'title'=> 'قبل عرضك',
                    'icon'=> 'bi-exclamation-circle text-info',
                    'body'=>  $body,
                    'user'=> Auth::user()->name ,
                    'username'=>  Auth::user()->username,
                ];
                if (Auth::user()->id != $offer->id ) {
                    $offer->user->notify(new \App\Notifications\InvoicePaid($detaile));
                }
     

                return redirect()->route('openwork.show',['open_work'=> $offer->open_work->id])->with('success','تم القبول العرض ');

            }
        }

        public function was(Request $request){

            $offer = Offer::find($request->id);

            if ($offer->statu == '2' and $offer->open_work->stage == '2') {
              
                Offer::where('id',$offer->id)->update(['statu'=>'3']);
                Open_work::where('id',$offer->open_work->id)->update(['stage'=>'3']);

                $body =" انهاء العمل";
                $detaile =[
                    'title'=> 'تم الانتهى من العمل',
                    'icon'=> 'bi-exclamation-circle text-info',
                    'body'=>  $body,
                    'user'=> Auth::user()->name ,
                    'username'=>  Auth::user()->username,
                ];
                if (Auth::user()->id != $offer->open_work->user->id) {
                    $offer->open_work->user->notify(new \App\Notifications\InvoicePaid($detaile));
                }
     
               

                return redirect()->route('offer',['offers'=>Offer::where('user_id','=',auth()->id())->get()])->with('success',' تم انهاء العمل ');

            }
        }

}
