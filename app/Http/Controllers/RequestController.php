<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Qoute;
use App\Newsletter;

class RequestController extends Controller
{
    //

    public function formRequest(Request $request)
    {
        
        
        if(strtolower($request->qoutetype) =='say hello' ||  strtolower($request->qoutetype) == 'support' || strtolower($request->qoutetype) == 'sales' || strtolower($request->qoutetype) == 'developer')
        {
            
            $contact = Contact::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'company' => $request->company,
                'position' => $request->position,
                'email' => $request->email,
                'contacttype' => strtolower($request->qoutetype) =='say hello' ? 'sales' : strtolower($request->qoutetype),
                'message' => $request->message,
            ]);

            return redirect()->back()->with('successinfo','success');

        }else{
            $qoute="";
            //return $request->qoutetype;
            if($request->qoutetype === "Get A Quote")
                $qoute = str_replace('-',' ',strtolower($request->solutiontype));
            else
                $qoute = strtolower($request->qoutetype);
 
            $qoute = Qoute::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'company' => $request->company,
                'position' => $request->position,
                'email' => $request->email,
                'qoutetype' => $qoute,
                'message' => $request->message,
            ]);

            return redirect()->back()->with('successinfo','success');;
        }

    }

    public function newsletterForm(Request $request)
    {

        $newsletter = Newsletter::create([
            'email' => $request->email
        ]);

        return redirect()->back();
    }
}
