<?php

namespace App\Http\Controllers;

use App\Traits\TestTrait;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Alert;

class MainController extends Controller
{
    use TestTrait;

    function index()
    {
      return view('login');
    }

    function logout()
    {
      Auth::logout();
      return redirect('/');
    }

    function testTable(Request $request)
    {
        $userName = $request->input('username');
        if($userName){
          $this->addNameToTestTable($userName);
          if($this){
            Alert::success('Success','Inserted to "tests" table');
            return redirect('/dashboard/success');
          } else {
            return redirect('/logout');
          }
        } else {
          return redirect('/logout');
        }
    }
/*
    function validateLogin(Request $request)
    {
      $this->validate($request, [
        'email'=>'required|email',
        'password'=>'required|alphaNum:min:3'
      ]);

      $user_date = array(
        'email'=>$request->get('email'),
        'password'=>$request->get('password')
      );

      if(Auth::attempt($user_data))
      {
        return redirect('/dashboard');
      }
      else
      {
        return back()->with('error', 'Invalid Credentials');
      }
    }

    function dashboard()
    {
      return view('dashboard');
    }


*/
}

?>
