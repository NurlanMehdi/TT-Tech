<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $contact = Contacts::first();

        return view('user.pages.contacts',['contact'=>$contact]);
    }
}
