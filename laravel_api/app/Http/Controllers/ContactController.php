<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function contact(){

        $contact=Contact::all();
        return response()->json([
            'contact'=>$contact,
            'message'=>'contact',
            'code'=>200
        ]);
    }

    //method to show
     public function show($id)
    {
        $contact= Contact::find($id);
        return response()->json($contact);
    }
    //method to update
     public function update($id, Request $request)
    {
        $contact= Contact::find($id);
        $contact->update($request->all());
        return response()->json('Contact updated!');
    }


    //method to delete
     public function destroy($id)
    {
        $contact = Contact::find($id);
         $contact->delete();
        return response()->json('contact deleted!');
    }
  // method to save contact
    public function save_contact(Request $request){
        $contact=new Contact();
        if($request->has('image') && !empty($request->image)){
            $imageName=time().'.'.$reuest->image->getClientOriginalExtension();
            $request->image->move(public_path('images/gallery'),$imageName);
           $path=('public/images/gallery').$imageName;
            $contact->image=$path; 
        }
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->designation=$request->designation;
        $contact->contatc_no=$request->contatc_no;

        if($contact->save()){
                return response()->json([
                    'status'=>true,
                    'message'=>'contact added succefully'
                ]);
                    
                }else{
                    return response()->json([
                    'status'=>false,
                    'message'=>'there is some problemes'
                ]);
        }
    }
}
