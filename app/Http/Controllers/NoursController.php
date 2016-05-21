<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nours;
use App\Http\Requests;
use Response;
class NoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $nours = Nours::all(); //Not a good idea
        return Response::json([
                'data' => $this->transformCollection($nours)
        ], 200);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nour = Nours::find($id);
 
        if(!$nour){
            return Response::json([
                'error' => [
                    'message' => 'Nour does not exist Now But He will Back Soon ISA'
                ]
            ], 404);
        }
 
        return Response::json([
              'data' => $this->transform($nour)
        ], 200);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function transformCollection($nours){
         return array_map([$this, 'transform'], $nours->toArray());
}
 
    private function transform($nour){
        return [
           'nour_id' => $nour['id'],
           'nour' => $nour['body']
         ];
}
    }
