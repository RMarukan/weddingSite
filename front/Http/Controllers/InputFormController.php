<?php

namespace Front\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Attribute;
use App\Models\Age_Code;
use Request;

class InputFormController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $type = Attribute::where('attributeId',$id)->first();
        $ageCode = Age_Code::all();
        return view('front.inputForm', ['ageCode' => $ageCode],compact('type'));
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

        $type = Attribute::where('attributeId',$id)->first();
        $ageName = Age_Code::where('ageId',$all['age'])->first();

        return view('front.confirmForm',['all' => $all],compact('type','ageName'));
    }
}
