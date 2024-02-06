<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDocument;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {         
        // $users = User::where('first_name', 'Test')->get();
        // dd($users);
        // $arr = [];
        // foreach ($users as $user)
        // {
        //     $arr[]=$user->first_name;
        // }
        // dd($arr);

        // $blackList = User::where('first_name', 'Test')->get();
        // $users = User::all();
        // $normalList = $users->diff($blackList);
        // dd($normalList);

        // $user = User::find(2);
        // $user->update([
        //     'first_name' => 'Gulnur777'
        // ]);
        // dd(User::all());

        // $user = User::find(2);
        // $user->delete();
        // dd(User::all());

        // $user = User::find(1);
        // echo $user->first_name;

        // UserDocument::create([
        //     'document_name' => 'Password',
        //     'document_number' => '123456',
        //     'user_id' => 1
        // ]);

        // UserDocument::create([
        //     'document_name' => 'National ID',
        //     'document_number' => '123456',
        //     'user_id' => 1
        // ]);

        $user = User::find(1);
        echo $user->first_name.' Documents:<br>';
        foreach ($user->documents as $doc)
        {
            echo $doc->document_name.'<br>';
            echo $doc->document_number.'<br><br>';
        }


    }
}
