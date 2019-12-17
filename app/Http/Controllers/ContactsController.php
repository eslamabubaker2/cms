<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function addContacts(Request $request){

        $contacts=new Contacts();
        $contacts->name=$request->name;
        $contacts->email=$request->email;
        $contacts->mobile=$request->mobile;
        $contacts->subject=$request->subject;
        $contacts->text=$request->text;
        $contacts->save();

        return redirect()->back()->with(['msg', 'The Message']);

    }

    public function deleteContacts(Contacts $contacts){

        $contacts->is_delete=1;
        $contacts->deleted_by;
        $contacts->update();

        return redirect()->back()->with(['msg', 'The Message']);

    }
}
