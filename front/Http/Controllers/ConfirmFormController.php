<?php

namespace Front\Http\Controllers;

use App\Models\Guest;
use Request;
use App\Models\Attribute;
use App\Models\Age_Code;

class ConfirmFormController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {

        $all = Request::all();

        $type = Attribute::where('attributeId', $id)->first();
        $ageCode = Age_Code::all();

        return view('front.editForm', ['all' => $all], compact('type', 'ageCode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\Illuminate\Http\Request $request)
    {

        $all = new Guest();

        $all->lstNameK = $request->input('lstNameK');
        $all->fstNameK = $request->input('fstNameK');
        $all->lstNameF = $request->input('lstNameF');
        $all->fstNameF = $request->input('fstNameF');
        $all->attributeId = $request->input('attributeId');
        $all->ageFlg = $request->input('ageFlg');
        $all->attendType = $request->input('attendType');
        $all->attendFlg = $request->input('attendFlg');
        $all->guestComment = $request->input('guestComment');
        $all->dinnerComment = $request->input('dinnerComment');
        $all->anotherComment = $request->input('anotherComment');

        $all->save();
        //Guest::create($all);

        return view('front.completeForm');
    }
}
