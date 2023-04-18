<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class RegisterController extends Controller
{
    function index() {
        return view('client-registration.client-registration-page');
    }

    function onFormSubmit(Request $request) {
        $this->validate($request,
            [
                'contactName' => 'required',
                'organization' => 'required',
                'email' => 'required',
                'phoneNumber' => 'required',
                'problemBackground' => 'required',
                'confidentialityCheckbox' => 'nullable',
                'budgetCheckbox' => 'nullable',
                'budget' => 'nullable',
                'meetStudentsCheckbox' => 'nullable',
                'assistTestCheckbox' => 'nullable'
            ]
            );
        $data = array(
            'contactName' => $request->contactName,
            'organization' => $request->organization,
            'email' => $request->email,
            'phoneNumber' => $request->phoneNumber,
            'problemBackground' => $request->problemBackground,
            'confidentialityCheckbox' => $request->confidentialityCheckbox,
            'budgetCheckbox' => $request->budgetCheckbox,
            'budget' => $request->budget,
            'meetStudentsCheckbox' => $request->meetStudentsCheckbox,
            'assistTestCheckbox' => $request->assistTestCheckbox
        );
        Mail::send('email.client-registration', $data, function($message) {
            // $message->from();
            $message->to('laravel-yeonha-park@outlook.com');
            $message->subject('Client Registration Form Submission');
        });
        return redirect()->route('client_regristration_submitted');
    }
}
