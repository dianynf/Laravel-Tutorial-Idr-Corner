<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests\TambahContactRequest;

class PageController extends Controller
{
    public function about()
    {
        $nama = "dian bugas";
        $hobi = "bola";
        //cara pertama
        // return view('about')
        //             ->with('nama',$nama)
        //             ->with('hobi', $hobi);
        // cara ke 2
        // return view('about')
        //             ->withNama($nama)
        //             ->withHobi($hobi);
        // cara ke 3 
        return view('about', compact('nama', 'hobi'));
    }

    public function galeri()
    {
        return view('geleri');
    }

    public function contacts(){
        $contacts=Contact::all();
        //cara pertama dan ke dua
        //return view('contacts')->withContacts($contacts);
        return view('contacts', compact('contacts'));
    }

    public function tambahcontact(){
        return view('formcontact');
    }

    public function prosestambah(TambahContactRequest $request){
        Contact::create([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'tlp' => $request->tlp,
        ]);

        return redirect(route('contacts'));
    }

    public function editcontact(Contact $contact){
        return view('formcontact')->withContact($contact);
    }
    //sudah berdasarkan id
    public function prosesedit(TambahContactRequest $request, Contact $contact){
        $contact->update([
            'nama' => $request->nama,
                'alamat' => $request->alamat,
                'tlp' => $request->tlp,
        ]);
        return redirect(route('contacts'));
    }


    public function deletecontact(Contact $contact){
        $contact->delete();
        return redirect(route('contacts'));
    }
}
