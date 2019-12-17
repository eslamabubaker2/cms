<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrenciesController extends Controller
{
    public function addCurrency(Request $request){

        $currency=new Currency();
        $currency->dollar=$request->dollar;
        $currency->euro=$request->euro;
        $currency->dinar=$request->dinar;
        $currency->pound=$request->pound;
        $currency->created_by=$request->created_by;
        $currency->save();

        return redirect()->back()->with(['msg', 'The Message']);

    }

    public function updateCurrency(Request $request,Currency $currency){
        $currency->dollar=$request->dollar;
        $currency->euro=$request->euro;
        $currency->dinar=$request->dinar;
        $currency->pound=$request->pound;
        $currency->updated_by=$request->updated_by;
        $currency->update();

        return redirect()->back()->with(['msg', 'The Message']);

    }

    public function deleteCurrency(Currency $currency){

        $currency->is_delete=1;
        $currency->deleted_by;
        $currency->update();

        return redirect()->back()->with(['msg', 'The Message']);

    }
}
