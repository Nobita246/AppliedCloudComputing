<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function loginPage(Request $request)
    {
        if ($request->ajax()) {
            $action = $request->has('action') ? $request->get('action') : "";
            if ($action == "submitLoginForm") {
                $validator = Validator::make($request->all(), [
                    'name' => 'required|string',
                    'age' => 'required|max:100',
                    'education' => 'required|string'
                ]);

                if ($validator->fails()) {
                    return $this->sendError("Validation Failed.", $validator->errors(), 200);
                }

                if ($request->get('age') < 18) {
                    return $this->sendError("Sorry ! You are not allow to visit this Site !", [], 200);
                }

                $newLogin = new Login();
                $newLogin->name = $request->get('name');
                $newLogin->age = $request->get('age');
                $newLogin->eduction = $request->get('education');
                $newLogin->save();

                return $this->sendResponse([], "LoggedIn Successfully;");
            }
        }
        return view('welcome');
    }

    public function home(Request $request)
    {
        if ($request->ajax()) {
            $action = $request->has('action') ? $request->get('action') : "";
            if ($action == "getPieChartData") {
                $data = null;
                $loginData = Login::all();
                if (!empty($loginData)) {
                    foreach ($loginData as $key => $value) {
                        $data[] = [
                            'age' => $value->age,
                            'name' => $value->name
                        ];
                    }
                }
                return $this->sendResponse($data, "Data Fetched Successfully !");
            }
        }
        return view('home');
    }
}
