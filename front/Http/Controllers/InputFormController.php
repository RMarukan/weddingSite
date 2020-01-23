<?php

namespace Front\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attribute;
use App\Models\Age_Code;

class InputFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $attendType = Attribute::where('attributeId',$id)->first();
        $ageCode = Age_Code::all();
        return view('front.inputForm', ['ageCode' => $ageCode]) -> with('type',$attendType);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($name = $request->input('lstNameK'));
        return view('front.inputForm');
    }
}
