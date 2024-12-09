<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact.form');
    }

    public function submitForm(Request $request)
    {
        $sanitizedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $sanitizedData['name'] = htmlspecialchars($sanitizedData['name'], ENT_QUOTES, 'UTF-8');
        $sanitizedData['email'] = htmlspecialchars($sanitizedData['email'], ENT_QUOTES, 'UTF-8');
        $sanitizedData['subject'] = htmlspecialchars($sanitizedData['subject'], ENT_QUOTES, 'UTF-8');
        $sanitizedData['message'] = htmlspecialchars($sanitizedData['message'], ENT_QUOTES, 'UTF-8');

        // Store the sanitized data in the ContactForm model
        ContactForm::create($sanitizedData);

        // Send the email
        Mail::to('info.isernepal@gmail.com')->send(new ContactFormMail($sanitizedData));

        return redirect()->route('contact.thankyou');
    }

    public function index()
    {
        // Retrieve all data from both models
        $contacts_all = Contact::all();
        $contact_forms_all = ContactForm::all();

        $data = [
            'contacts_all' => $contacts_all,
            'contact_forms_all' => $contact_forms_all,
        ];

        return view('contact', ['data' => $data]);
    }
}
