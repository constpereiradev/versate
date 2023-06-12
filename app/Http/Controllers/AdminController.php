<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index(){

        $admins = Admin::all();

        return response()->json([
            'Admins' => $admins,
        ]);
    }

    public function store(Request $request){

        $input = $request->validate([
            'name' => ['required', '255'],
            'email' => ['required', 'email', '255', 'unique'],
            'password' => ['required'],
            'cpf' => ['required', 'unique'],
        ]);

        $admin = Admin::create($input);

        if($admin->save()){

            return response()->json([

                'Message: ' => 'Admin created.',
                'New admin: ' => $admin,

            ], 200);

        }else {

            return response([

                'Message: ' => 'We could not create the admin.',

            ], 500);
        }
    }

    public function show(string $id){

        $admin = Admin::find($id);

        if($admin){

            return response()->json([

                'Message: ' => 'Admin found.',
                'Admin: ' => $admin,

            ], 200);

        }else {

            return response([

                'Message: ' => 'We could not find the admin.',

            ], 500);
        }

    }

    public function update(Request $request, string $id){

        $admin = Admin::find($id);

        if($admin){

            $input = $request->validate([
                'name' => ['required', '255'],
                'email' => ['required', 'email', '255', 'unique'],
                'password' => ['required'],
                'cpf' => ['required', 'unique'],
            ]);    

            $admin->name = $input['name'];
            $admin->email = $input['email'];
            $admin->password = $input['password'];
            $admin->cpf = $input['cpf'];

            if($admin->save()){

                return response()->json([

                    'Message: ' => 'Admin updated.',
                    'Admin: ' => $admin

                ], 200);


            }else {

                return response([

                    'Message: ' => 'We could not update the admin.',
    
                ], 500);

            }
        }else {

            return response([

                'Mensagem: ' => 'We could not find the admin.',

            ], 500);
        }
    }

    public function destroy(string $id){

        $admin = Admin::find($id);
        
        if($admin){

            $admin->delete();

            return response()->json([

                'Message: ' => 'Admin deleted with success.',

            ], 200);

        }else {

            return response([
                
                'Message: ' => 'We could not find the admin.',

            ], 500);
        }
    }
}
