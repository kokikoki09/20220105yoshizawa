<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ClientRequest;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function confirm(ClientRequest $request)
    {
        return view('contacts.confirm');
    }

    public function process(ClientRequest $request)
    {
    }

    public function complete()
    {
        return view('contacts.complete');
    }
}