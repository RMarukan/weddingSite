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
    public function store(Request $request,$id)
    {

        $all = Request::all();
        Guest::create($all);

        return view('front.completeForm');
    }
}
