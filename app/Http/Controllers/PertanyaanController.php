<?php

namespace App\Http\Controllers;

use App\pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $d['category']=Category::orderBy('created_at','desc')->paginate(10);
        return view('layouts.category.index',$d); 
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
        //save data
        $this->validate($request,[
            'name' => 'required',
            'title' => 'required'
        ]);
        try {
            $question = Question::firstOcreate(
                [
                    'name' => $request->name
                ],
                [
                    'title' => $request->title
                ],
                [
                    'question' => $request->question
                ]
                );
                return redirect('index');
        } catch (\Throwable $e) {
            return redirect('index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function show(pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function edit(pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pertanyaan $pertanyaan)
    {
        //
    }
}
