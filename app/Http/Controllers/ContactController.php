<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            ['Contact', true, route('admin.contact.index')],
            ['Index', false],
        ];
        $title = 'All Contact';
        $contacts = Contact::latest()->get();
        return view('admin.contact.index', compact('breadcrumbs', 'title', 'contacts'));
    }
}
