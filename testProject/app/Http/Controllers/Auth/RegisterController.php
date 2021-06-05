<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Users;
use Carbon\Carbon;

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
        //return view('allusers', ['data' => $user->where('first_name', '=', 'Alex')->get()]);
    }

    public function updateUser($id) {
        $user = new User;
        return view('update-user', ['data' => $user->find($id)]);
    }

    /*public function create(array $data): string
    {
        $c = 10000;
        do {
            $c++;
            $check_user = Users::where("c", $c)->first();
        } while ($check_user != null);


        $colors = ['primary', 'success', 'orange', 'warning', 'danger', 'purple'];
        $random_color = array_rand($colors, 1);
        $random_color = $colors($random_color);

        $user = Users::create([
            'c' => $c,
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'company_name' => $data['company_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'last_active' => Carbon::now()->toDateTimeString(),
            'color' => $random_color,
            'role' => 'user'
        ]);

        $stripe = new StripeController();
        $stripe->update_stripe_customer($user->id);

        $email_controller = new SendEmailController();
        $email_controller->send_email('welcome!', $user->email);

        Log::info("[$user->id] $user->first_name $user->last_name just registered!");

        return $user;
    }*/
}
