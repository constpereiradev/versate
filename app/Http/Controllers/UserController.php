<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index(){

        $users = User::all();

        if ($users){

            $statusCode = 200;
            $message = 'Success!';

        } else {

            $statusCode = 500;
            $message = 'Sorry. We could not find users in our database.';
        }

        $headers = [
            'Users: ' => $users,
            'Status: ' => $statusCode,
            'Message: ' => $message,
        ];

        return response()
        ->json([$headers]);
    }

    public function store(Request $request){

        $user = User::create($request->all());
        

        if ($user->save()){

            $statusCode = 200;
            $message = 'Success!';

        } else {

            $statusCode = 500;
            $message = 'Sorry. We could not create a new user.';
        }

        $headers = [
            'User: ' => $user,
            'Status: ' => $statusCode,
            'Message: ' => $message,
        ];

        return response()
        ->json([$headers]);

    }

    public function show(string $id){

        $user = User::find($id);


        if ($user){

            $statusCode = 200;
            $message = 'Success!';

        } else {
            
            $statusCode = 500;
            $message = 'Sorry. We could not find this user';
        }

        $headers = [
            'User' => $user,
            'Status' => $statusCode,
            'Message' => $message,
            
        ];

        return response()
        ->json([$headers]);
    }

    public function update(Request $request, string $id){

        
        $user = User::find($id);

        if($user){

            $input = $request->all();

            $user->name = $input['name'];
            $user->email = $input['email'];
            $user->password = $input['password'];
            
            if ($user->save()){

                $statusCode = 200;
                $message = 'Success!';
    
            } else {
    
                $statusCode = 500;
                $message = 'Sorry. We could not update this user.';
            }
    
            $headers = [
                'User' => $user,
                'Status' => $statusCode,
                'Message' => $message,
              
            ];
    
            return response()
            ->json([$headers]);
    
        }else {

            $statusCode = 500;
            $message = 'Sorry. We could not find this user.';

            return response()->json([$message, $statusCode]);

        }
        
    }

    public function destroy(string $id){

        $user = User::find($id);
        
        if($user){

            $user->delete();

            return response()->json([

                'Message: ' => 'user deleted with success.',

            ], 200);

        }else {

            return response([
                
                'Message: ' => 'We could not find the user.',

            ], 500);
        }
    }
}
