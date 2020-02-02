<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;

class CalculBio extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bio.form');
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
        if (empty($request->input('birthDate')) || empty($request->input('userName'))) {
            return view('bio.error', ['error' => 'ERROR! Introdueix les dades correctement']);
        } else {
            $daysDifference = $this->calculateDaysBetweenDates(time(), strtotime($request->input('birthDate')));
            $physical = $this->calculateBiorythm($daysDifference, 23);
            $emotional = $this->calculateBiorythm($daysDifference, 28);
            $intellectual = $this->calculateBiorythm($daysDifference, 33);

            $physicalPercentage = round($physical, 0);
            $emotionalPercentage = round($emotional, 0);
            $intellectualPercentage = round($intellectual, 0);

            $birthDate = date("d/m/Y", strtotime($request->input('birthDate')));

            return view('bio.result', [
                'userName' => $request->input('userName'),
                'birthDate' => $birthDate,
                'physical' => $physical,
                'physicalPercentage' => $physicalPercentage,
                'emotional' => $emotional,
                'emotionalPercentage' => $emotionalPercentage,
                'intellectual' => $intellectual,
                'intellectualPercentage' => $intellectualPercentage
            ]);
        }
    }

    public function calculateDaysBetweenDates($date1, $date2)
    {
        try {
            return round(($date1 - $date2) / (60 * 60 * 24)); // Diferència de dies
        } catch (Exception $e) {
            return view('bio.error', ['error' => 'ERROR! Error en el càlcul']);
        }
    }

    public function calculateBiorythm($daysDifference, $cicle)
    {
        try {
            return ((sin(($daysDifference / $cicle) * 2 * pi()) + 1) * 100) / 2;
        } catch (Exception $e) {
            return view('bio.error', ['error' => 'ERROR! Error en el càlcul']);
        }
    }

    public function console_log($data)
    {
        echo '<script>';
        echo 'console.log(' . json_encode($data) . ')';
        echo '</script>';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
