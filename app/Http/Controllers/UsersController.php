<?php

namespace App\Http\Controllers;
use App\Http\Requests\AddUserRequestAdmin;
use App\User;
use App\Bu;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Datatables;


class UsersController extends Controller
{
    public function index(){
      // $user=$user->all();,compact('user')

      return view('admin.users.index');
    }
    public function create(){

      return view('admin.users.add');
    }
    public function store(AddUserRequestAdmin $request,User $user)
    {
      $user->create([
         'name' => $request->name,
         'email' => $request->email,
         'password' => Hash::make($request->password),
     ]);
        return redirect('/adminpanel/users')->with('status','Add New User Succesfully');
    }
    public function edit($id){

      $user=User::find($id);
      return view('admin.users.edit',compact('user'));

    }
    public function update($id,Request $request){
      $user=User::find($id);
      $user->fill($request->all())->save();
      return redirect('/adminpanel/users')->with('status','Edit User Succesfully');

    }
    public function  updatePassword(Request $request){
      $user=User::find($request->user_id);
      $password=Hash::make($request->password);
      $user->fill(['password'=>$password])->save();
      return redirect('/adminpanel/users')->with('status','Edit Password Succesfully');

    }
    public function destroy($id){
      if($id !=1){
        Bu::where('user_id',$id)->delete();
        $user=User::find($id)->delete();
        return redirect('/adminpanel/users')->with('status','Delete User Succesfully');
      }
      return redirect('/adminpanel/users')->with('status','Can not delete User');

    }
    public function anyData()
    {
        $users = User::all();

        return Datatables::of($users)

             ->editColumn('name', function ($model) {
                return '<a href="'.url('/adminpanel/users/' . $model->id . '/edit').'">'.$model->name.'</a>';
            })
            ->editColumn('admin', function ($model) {
                return $model->admin == 0 ? '<span class="badge badge-info">' . 'عضو' . '</span>' : '<span class="badge badge-warning">' . 'مدير الموقع' . '</span>';
            })


            ->editColumn('mybu', function ($model) {
                return '<a href="'.url('/adminpanel/bu/' . $model->id).'"> <span class="btn btn-danger btn-circle"> <i class="fa fa-link"></i> </span> </a>';
            })

            ->editColumn('control', function ($model) {
                $all = '<a href="' . url('/adminpanel/users/' . $model->id . '/edit')  . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                if($model->id != 1){
                    $all .= '<a href="' . url('/adminpanel/users/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';
                }
                return $all;
            })
            ->rawColumns(['name', 'admin', 'mybu','control'])
            ->make(true);
    }



}
