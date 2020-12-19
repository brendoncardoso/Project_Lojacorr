<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\State;
use App\UserColumn;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use DB;


class UserController extends Controller
{
    public $user;

    public function __construct(){
        $this->user = new User();
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = DB::table('users')->paginate(10);
        $countUsers = User::all()->count();
        $columns_users = UserColumn::all();
        $states = State::all();

        return view('admin.users.users', [
            'users' => $users, 
            'usersColumns' => $columns_users, 
            'states' => $states,
            'countUsers' => $countUsers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = State::all();
        return view('admin.users.cadaster', [
                'states' => $states
            ] 
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $campos = $request->only(['email', 'name', 'password', 'password_confirmation', 'zip_code', 'public_place', 'district', 'city', 'state', 'number']);
        $validator = $this->validator($campos);

        $email = $request->input('email');
        $verifyEmailExists = User::where('email', $email)->first();

        if(!$verifyEmailExists){
            if($validator->fails()){
                return redirect()->route('cadaster_user')->withErrors($validator)->withInput();
            }else{
                $user = new User();
                $user->name = $request->input('name');
                $user->email = $request->input('email');
                $user->zip_code = $request->input('zip_code');
                $user->public_place = $request->input('public_place');
                $user->district = $request->input('district');
                $user->city = $request->input('city');
                $user->state = $request->input('state');
                $user->number = $request->input('number');
                $user->password = Hash::make($request->input('password'));
                $user->save();
                return redirect()->route('cadaster_user')->with('success', 'Usuário cadastrado com Sucesso!');
            }
            
        }else{
            return redirect()->route('cadaster_user')->with('warning', 'O email inserido está em uso.')->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $states = State::all();

        return view('admin.users.edit', [
            'user' => $user,
            'states' => $states,
            'idLogged' => Auth::user()->id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        if(User::find($id)){
            $nome = $request->input('name');
            $email =  $request->input('email');
            $zip_code =  $request->input('zip_code');
            $public_place =  $request->input('public_place');
            $district =  $request->input('district');
            $city =  $request->input('city');
            $state =  $request->input('state');
            $number =  $request->input('number');
            $password = Hash::make($request->input('password'));

            $verifyEmailExists = User::where('email', $email)->first();
            
            if($email == Auth::user()->email){
                if(!empty($nome)){
                    $user = User::find($id);
                    $user->name = $nome;
                    $user->email = $email;
                    $user->zip_code = $zip_code;
                    $user->public_place = $public_place;
                    $user->district = $district;
                    $user->city = $city;
                    $user->state = $state;
                    $user->number = $number;
                    if(!empty($request->input('password'))){
                        $campos = $request->only(['password', 'password_confirmation']);
                        $validator = $this->validatorPassword($campos);
                        if($validator->fails()){
                            return redirect()->route('edit', $id)->withErrors($validator)->withInput();
                        }else{
                            $user->password = $password;
                        }
                    }
                    $user->save();
                    
                    return redirect()->route('edit', $id)->with('success', 'Usuário alterado com Sucesso!');
                }else{
                    return redirect()->route('edit', $id)->with('warning', 'O Campo nome está vazio.')->withInput();
                }
            }else{
                $verifyEmailExists = User::where('email', $email)->first();
                if(!$verifyEmailExists){
                    if(!empty($nome)){
                        $user = User::find($id);
                        $user->name = $nome;
                        $user->email = $email;
                        $user->zip_code = $zip_code;
                        $user->public_place = $public_place;
                        $user->district = $district;
                        $user->city = $city;
                        $user->state = $state;
                        $user->number = $number;
                        if(!empty($request->input('password'))){
                            $campos = $request->only(['password', 'password_confirmation']);
                            $validator = $this->validatorPassword($campos);
                            if($validator->fails()){
                                return redirect()->route('edit', $id)->withErrors($validator)->withInput();
                            }else{
                                $user->password = $password;
                            }
                        }
                        $user->save();
                        
                        return redirect()->route('edit', $id)->with('success', 'Usuário alterado com Sucesso!');
                    }else{
                        return redirect()->route('edit', $id)->with('warning', 'O Campo nome está vazio.')->withInput();
                    }
                }else{
                    return redirect()->route('edit', $id)->with('warning', 'O email inserido está em uso.')->withInput();
                }
            }
        }else{
            return redirect()->route('users');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request){
        $user = User::find($id);
        if($user){
            User::destroy($id);
            return redirect()->route('users');
        }else{
            return redirect()->route('users');
        }
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:500'],
            'email' => ['required', 'string', 'email', 'max:500', 'unique:users'],
            'zip_code' => ['required', 'string', 'max:9'],
            'public_place' => ['required', 'string', 'max:500'],
            'district' => ['required', 'string', 'max:500'],
            'city' => ['required', 'string', 'max:500'],
            'state' => ['required', 'string', 'max:2'],
            'number' => ['required', 'string', 'max:4'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
            'password_confirmation' => ['required', 'string', 'min:4'],
        ]);
    }

    protected function validatorPassword(array $data)
    {
        return Validator::make($data, [
            'password' => ['required', 'string', 'min:4', 'confirmed'],
            'password_confirmation' => ['required', 'string', 'min:4'],
        ]);
    }
}
