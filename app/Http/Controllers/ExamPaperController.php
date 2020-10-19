<?php

namespace App\Http\Controllers;

use App\Models\ExamPaper;
use Illuminate\Http\Request;
use Validator;

class ExamPaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(ExamPaper::get(), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'user_id' => 'required',
            'exam_id' => 'required',
            'exampaperid' => 'required|unique:questions,id',
        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json($validator->errors(),400);
        }
        $exampaper = ExamPaper::create($request->all());
        return response()->json($exampaper, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exampaper = ExamPaper::find($id);
        if(is_null($exampaper)){
            return response()->json(["message"=>"Exam Not Found!"], 404);
        }
        return response()->json($exampaper, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $exampaper = ExamPaper::find($id);
        if(is_null($exampaper)){
            return response()->json(["message"=>"Exam paper Not Found!"], 404);
        }
        $exampaper->update($request->all());
        return response()->json($exampaper,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exampaper = ExamPaper::find($id);
        if(is_null($exampaper)){
            return response()->json(["message"=>"Exam paper Not Found!"], 404);
        }
        $exampaper->delete();
        return response()->json(null, 204);
    }
}
