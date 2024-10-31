<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class DTRController extends Controller
{

    public function index() {
    
        return view('pages/dtr_input');

    }

    // check role if the id is an employee
    public function checkRole(Request $request) {

        $request->validate([
            'idInput' => 'required'
        ]);

        $idInput = $request->input('idInput');
        $currentDateCheck = $request->input('currentDateCheck');

        $employee = DB::table('example_user')->where('user_id', $idInput)->first();

        if ($employee->role !== 'student') {

            $employeeCheck = DB::table('employee_dtr')->where('id_number', $idInput)->where('day', $currentDateCheck)->first();

            if (empty($employeeCheck->time_in)) {
                $timeInOut = 'TIME IN';
            }
            else if (empty($employeeCheck->time_in) === false && empty($employeeCheck->time_out) === false && $employeeCheck->time_out !== '00:00:00') {
                return redirect()->back()->with('alert', 'You have already timed out.');
            }
            else {
                $timeInOut = 'TIME OUT';
            }
            
            return redirect()->back()->with(['name' => $employee->name,
                                             'idInput' => $idInput,
                                             'timeInOut' => $timeInOut
                                            ]);
        }
        else {
            return redirect()->back()->with('alert', 'Cannot enter a student ID.');
        }

    }

    // insert time in and time out into database
    public function logTime(Request $request) {

        $idInputHidden = $request->input('idInputHidden');

        $currentTime = $request->input('currentTime');
        $currentDate = $request->input('currentDate');

        $monthYear = Carbon::parse($currentDate)->format('M Y');

        $employee = DB::table('employee_dtr')->where('id_number', $idInputHidden)->where('day', $currentDate)->first();
        $schedule = DB::table('example_employee_schedule')->where('user_id', $idInputHidden)->first();

        if (empty($employee)) {

            //calculate late time in
            list($hours, $minutes, $seconds) = explode(":", $currentTime);
            $currentTimeSeconds = ($hours * 3600) + ($minutes * 60) + $seconds;

            list($hours, $minutes, $seconds) = explode(":", $schedule->time_in_schedule);
            $scheduleTimeInSeconds = ($hours * 3600) + ($minutes * 60) + $seconds;

            $lateSeconds = $currentTimeSeconds - $scheduleTimeInSeconds;

            if ($lateSeconds <= 0) {
                $currentTime = $schedule->time_in_schedule;
                $lateTimeIn = "00:00:00";

            } else {
                $hours = floor($lateSeconds / 3600);
                $minutes = floor(($lateSeconds % 3600) / 60);
                $seconds = $lateSeconds % 60;
                
                // back to the format
                $lateTimeIn = sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);
            }

//kung needed maglagay ka rin ng code para mahandle yung time in na logged after time out schedule ##########################################################
#############################################################################################################################################################
            
            DB::table('employee_dtr')->insert([

                'month_year' => $monthYear,
                'id_number' => $idInputHidden,
                'day' => $currentDate,
                'time_in' => $currentTime,
                'late' => $lateTimeIn,
                'time_out' => '00:00:00',
                'undertime' => '00:00:00',
                'overtime' => '00:00:00',
                'hours_worked' => '0.00 Hours'

            ]);
        }
        else {

            //calculate late time out
            list($hours, $minutes, $seconds) = explode(":", $currentTime);
            $currentTimeSeconds = ($hours * 3600) + ($minutes * 60) + $seconds;

            list($hours, $minutes, $seconds) = explode(":", $schedule->time_out_schedule);
            $scheduleTimeOutSeconds = ($hours * 3600) + ($minutes * 60) + $seconds;

            $undertimeSeconds = $scheduleTimeOutSeconds - $currentTimeSeconds;

            if ($undertimeSeconds == 0) {
                $undertime = "00:00:00";
                $overtime = "00:00:00";

            }
            elseif ($undertimeSeconds < 0) {

                $undertime = "00:00:00";
                $overtimeSeconds = $currentTimeSeconds - $scheduleTimeOutSeconds;
                
                $hours = floor($overtimeSeconds / 3600);
                $minutes = floor(($overtimeSeconds % 3600) / 60);
                $seconds = $overtimeSeconds % 60;
                
                // back to the format
                $overtime = sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);

            }
            else {
                $hours = floor($undertimeSeconds / 3600);
                $minutes = floor(($undertimeSeconds % 3600) / 60);
                $seconds = $undertimeSeconds % 60;
                
                // back to the format
                $undertime = sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);
                $overtime = "00:00:00";
            }

            // calculate hours_worked
            list($hours, $minutes, $seconds) = explode(":", $currentTime);
            $currentTimeSeconds = ($hours * 3600) + ($minutes * 60) + $seconds;

            list($hours, $minutes, $seconds) = explode(":", $employee->time_in);
            $timeInSeconds = ($hours * 3600) + ($minutes * 60) + $seconds;

            $secondsWorked = $currentTimeSeconds - $timeInSeconds;

            $hours = number_format($secondsWorked / 3600, 2);
        
            $hoursWorked = $hours . " Hours";

            DB::table('employee_dtr')->where('id_number', $idInputHidden)->where('day', $currentDate)->update([

                'time_out' => $currentTime,
                'undertime' => $undertime,
                'overtime' => $overtime,
                'hours_worked' => $hoursWorked

            ]);
        }

        return redirect()->back();

    }

    // get dtr data of the employee and display it
    public function getDTR(Request $request, $id) {

        $currentDate = $request->input('currentDate');
        $monthYear = Carbon::parse($currentDate)->format('M Y');

        $employee = DB::table('employee_dtr')->where('id_number', $id)->where('month_year', $monthYear)->get();
        $monthYears = DB::table('employee_dtr')->where('id_number', $id)->distinct()->pluck('month_year');

        return view('pages/dtr_show', ['employee' => $employee,
                                       'monthYears' => $monthYears, 
                                       'id' => $id, 
                                       'monthYearDisplay' => $monthYear
                                      ]);

    }

    // get dtr data selected from the dropdown
    public function getDateDTR(Request $request) {

        $monthYear = $request->input('selected_date');
        $id = $request->input('employeeID');

        $employee = DB::table('employee_dtr')->where('id_number', $id)->where('month_year', $monthYear)->get();
        $monthYears = DB::table('employee_dtr')->where('id_number', $id)->distinct()->pluck('month_year');

        return view('pages/dtr_show', ['employee' => $employee,
                                       'monthYears' => $monthYears,
                                       'id' => $id, 
                                       'monthYearDisplay' => $monthYear
                                      ]);

    }

    // login example user
    public function login(Request $request) {

        $id = $request->input('login_user');

        $validID = DB::table('example_user')->where('role', '!=', 'student')->where('user_id', $id)->first();
        
        if (!$validID) {
            return redirect()->back()->with('alert', 'user not found.');
        } else {
            return redirect()->route('show.time', ['id' => $id]);
        }
    }
}
