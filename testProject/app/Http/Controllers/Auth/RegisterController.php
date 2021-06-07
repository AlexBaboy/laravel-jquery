<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Users;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;

class RegisterController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function create(Request $req)
    {
        $validation = $req->validate([
            'email' => 'required|email',
            'first-name' => 'required',
            'last-name' => 'required',
            'password' => 'required|min:5',
            'confirm-password' => 'required|min:5'
        ]);
        return $this->addUser($req);
    }

    public function addUser(Request $req)
    {
        $user = new Users();
        $user->email = $req->input('email');
        $user->first_name = $req->input('first-name');
        $user->last_name = $req->input('last-name');
        $user->company_name = $req->input('company-name');
        $user->phone = $req->input('phone');
        $user->password = Hash::make($req->input('password'));
        $user->last_active = Carbon::now()->toDateTimeString();
        $user->c = 10000;
        $user->color = 'primary';

        $user->save();

        return redirect()->route('home')->with('success', 'record was added successfully!');
    }

    public function allusers() {
        $user = new User;
        return view('allusers', ['data' => $user->orderBy('id', 'desc')->get()]);
    }

    public function updateUser($id) {
        $user = new User;
        return view('update-user', ['data' => $user->find($id)]);
    }

    public function updateUserMake(Request $req): \Illuminate\Http\JsonResponse
    {
        $user = User::find($req->id);
        $user->email = $req->input('email');
        $user->first_name = $req->input('first_name');
        $user->last_name = $req->input('last_name');
        $user->company_name = $req->input('company_name');
        $user->phone = $req->input('phone');

        $user->save();

        return response()->json($user);
    }

    public function makedelete(Request $req)
    {
        $user = User::find($req->id)->delete();
        return redirect()->route('home')->with('success', 'record was deleted successfully!');

    }
}
