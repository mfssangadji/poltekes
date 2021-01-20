<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    private $url;
    public function __construct()
    {
        $this->url = "http://sister.poltekkesternate.ac.id:8027/api.php/0.1/";
    }

    public function login()
    {
    	return view('auths.login');
    }

    public function loginpost(Request $request)
    {
    	if(Auth::attempt($request->only('email', 'password'))){
            $username = "I3ZmRCjjL3FXDVILnT6GSX5reHPYydvFLz6Bdhxz2hbeYqBdb6dllN18tC1bQSw9";
            $password = "OkizOaoUGgXaaWw8xNY1rj7rpwyKx3nTafVVYqYkV3YhDBYKSt6FO77KzCur2thl";
            $id_pengguna = "402788bd-9fdf-46fe-a433-8dab47ef6d2e";
            $data = [
                'username' => $username,
                'password' => $password,
                'id_pengguna' => $id_pengguna, 
            ];

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => $this->url . "Login",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30000,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => json_encode($data),
                CURLOPT_HTTPHEADER => array(
                    "accept: */*",
                    "accept-language: en-US,en;q=0.8",
                    "content-type: application/json",
                ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                $json = json_decode($response);
                Session::put('token', $json->data->id_token);
                return redirect()->route('dashboard');
            }
    	}

    	return redirect()->route('login');
    }

    public function logout()
    {
    	Auth::logout();
        Session::forget('token');
    	return redirect()->route('login');
    }
}
