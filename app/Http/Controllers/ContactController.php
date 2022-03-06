<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }
    public function confirm(ContactRequest $request)
    {
        $validated = $request->validated();;
        $contacts = $request->all();
        return view('confirm')->with($contacts);
    }
    public function thanks(ContactRequest $request)
    {
        $validated = $request->validated();
        $contacts = $request->all();
        Contact::create($contacts);
        return view('thanks');
    }
    public function manage(Request $request)
    {
        $contacts = Contact::all();
        $contacts = Contact::Paginate(10);
        return view('manage', ['contacts' => $contacts]);
    }
    public function search(Request $request)
    {
        $contacts = Contact::query();

        $fullname = $request->input('fullname');
        $gender = $request->input('gender');
        $created_at = $request->input('created_at');
        $created_at_until = $request->input('created_at_until');
        $email = $request->input('email');

        if (!empty($fullname)){
            $contacts = Contact::where('fullname', 'LIKE', '%'.$fullname.'%')->get();
        }
        if (!empty($gender)){
            $contacts = Contact::where('gender', $gender)->get();
        }
        if (!empty($created_at && !empty($request['created_at_until']))){
            $contacts = Contact::whereBetween('created_at', [$created_at, $created_at_until])->get();
        }
        if (!empty($email)){
            $contacts = Contact::where('email', 'LIKE', '%'.$email.'%')->get();
        }


        return view('manage', ['contacts' => $contacts]);
    }
    public function delete(Request $request)
    {
        $contacts = Contact::find($request->id)->delete();
        return redirect('/manage');
    }
    }
