<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UploadProfileImageController extends Controller
{


    
        /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function uploadImage(Request $request, $id)

    {   
        

        $request->validate([

            'imgProfile' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        

        $imageName = time().'.'.$request->imgProfile->extension();  

        

        $patch = $request->imgProfile->move(public_path('images'), $imageName);

        $user = User::findOrFail($id);
        
        $default = 'https://cambodiaict.net/wp-content/uploads/2019/12/computer-icons-user-profile-google-account-photos-icon-account.jpg';

        if($user->imgProfile != $default)
            File::delete(public_path("images/$user->imgProfile"));

        $user->imgProfile = $imageName;

        $user->save();

        
        

        /* Store $imageName name in DATABASE from HERE */

    

        return back()

            ->with('success','You have successfully upload image.');



    }
}
