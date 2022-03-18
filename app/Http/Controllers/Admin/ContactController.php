<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Context;

class ContactController extends Controller
{
    public function index()
    {
        $contactData = Contacts::first();
        return view('admin.pages.contact',['contactData'=>$contactData]);
    }

    public function saveContactParametrs()
    {
        $validator = validator(request()->all(),[
            'email' => 'nullable|string',
            'phone' => 'required|integer',
            'address' => 'required|string',
            'map' => 'required|string',
            'social-twitter' => 'required|string',
            'social-facebook' => 'required|string',
            'social-instagram' => 'required|string',
            'social-youtube' => 'required|string',
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $social =
                [
                    'twitter' => \request()->get('social-twitter'),
                    'facebook' => \request()->get('social-facebook'),
                    'instagram' => \request()->get('social-instagram'),
                    'youtube' => \request()->get('social-youtube'),
                ];


            $social = json_encode($social);

            $contactData = Contacts::first();

            if ($contactData == null) {

                $contact = new Contacts();
                $contact->email = \request()->get('email');
                $contact->phone = \request()->get('phone');
                $contact->address = \request()->get('address');
                $contact->map = \request()->get('map');
                $contact->social = $social;
                $contact->save();
            }else{

                $update = Contacts::where('id','=',$contactData->id)->update([
                    'email' => request()->get('email'),
                    'phone' => request()->get('phone'),
                    'address' => request()->get('address'),
                    'map' => request()->get('map'),
                    'social' => $social
                ]);
            }

            return $this->index();
        }

    }
}
