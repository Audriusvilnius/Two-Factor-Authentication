<?php

namespace App\Http\Controllers;


use App\Models\Security;
use Illuminate\Http\Request;

class SecurityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $security = Security::all();
        return view('home', [
            'security' => $security
        ]);
    }

    /**
     * Turn ON the alarm system.
     */
    public function all_armed(Request $request)
    {
        $security = Security::all()->first();
        if ($security->status == 0 && $security->doors != 3) {
            $security->status = 1;
            $security->doors = 1;
            if ($security->windows == 3) {
                $security->windows = 3;
            } else {
                $security->windows = 1;
            }
            $security->indoor_gate = 1;
            $security->outdoor_gate = 1;
            $security->motion = 1;
            $security->glass_break = 1;
            $security->perimeter = 1;
            $security->smoke = 1;
            $security->update();
        }
        // return view('timer.timer');
        return view('timer.timer', [
            'security' => "Home security on:"
        ]);
    }

    /**
     * Turn ON the alarm system.
     */
    public function all_disarmed(Request $request)
    {
        $security = Security::all()->first();
        if ($security->status <= 2) {
            $security->status = 0;
            $security->doors = 1;
            $security->windows = 0;
            $security->indoor_gate = 1;
            $security->outdoor_gate = 1;
            $security->motion = 0;
            $security->glass_break = 0;
            $security->perimeter = 0;
            $security->smoke = 1;
            $security->update();
        }
        return view('timer.timer', [
            'security' => "Home security in:",
        ]);
    }

    /**
     * Perimeter on the alarm system.
     */
    public function perimeter_armed(Request $request)
    {
        $security = Security::all()->first();
        if ($security->perimeter == 0) {
            $security->perimeter = 1;
            $security->update();
        }
        return view('timer.timer', [
            'security' => "Perimeter on in:",
        ]);
    }

    /**
     * Perimeter off the alarm system.
     */
    public function perimeter_disarmed(Request $request)
    {
        $security = Security::all()->first();
        if ($security->perimeter <= 2) {
            $security->perimeter = 0;
            $security->update();
        }
        return view('timer.timer', [
            'security' => "Perimeter off in:",
        ]);
    }

    /**
     * Outdoor gate open the alarm system.
     */
    public function outgate_open(Request $request)
    {
        $security = Security::all()->first();
        if ($security->outdoor_gate <= 2) {
            $security->outdoor_gate = 0;
            $security->update();
        }
        return view('timer.timer', [
            'security' => "Outdoor gate open in:",
        ]);
    }
    /**
     * Outdoor gate open the alarm system.
     */
    public function outgate_close(Request $request)
    {
        $security = Security::all()->first();
        if ($security->outdoor_gate == 0) {
            $security->outdoor_gate = 1;
            $security->update();
        }
        return view('timer.timer', [
            'security' => "Outdoor gate close in:",
        ]);
    }
    /**
     * Indoor gate open the alarm system.
     */
    public function ingate_open(Request $request)
    {
        $security = Security::all()->first();
        if ($security->indoor_gate <= 2) {
            $security->indoor_gate = 0;
            $security->update();
        }
        return view('timer.timer', [
            'security' => "Indoor gate open in:",
        ]);
    }
    /**
     * Indoor gate close the alarm system.
     */
    public function ingate_close(Request $request)
    {
        $security = Security::all()->first();
        if ($security->indoor_gate == 0) {
            $security->indoor_gate = 1;
            $security->update();
        }
        return view('timer.timer', [
            'security' => "Indoor gate close after:",
        ]);
    }
    /**
     * Door lock the alarm system.
     */
    public function door_lock(Request $request)
    {
        $security = Security::all()->first();
        if ($security->doors == 0) {
            $security->doors = 1;
            $security->update();
        }
        return view('timer.timer', [
            'security' => "Door lock in:",
        ]);
    }
    /**
     * Door unlock the alarm system.
     */
    public function door_unlock(Request $request)
    {
        $security = Security::all()->first();
        if ($security->doors <= 2) {
            $security->doors = 0;
            $security->update();
        }
        return view('timer.timer', [
            'security' => "Door unlock in:",
        ]);
    }
}