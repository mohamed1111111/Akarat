<?php

namespace App\Http\Controllers;
use App\Bu;
use App\User;
use App\Http\Requests\BuRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Datatables;

use Illuminate\Http\Request;


class BuController extends Controller
{
    public function index(){
      // $bu=Bu::all();
      return view('admin.bu.index');

    }

    public function create(){
      return view('admin.bu.add');
    }
    public function show(){

    }

    public function store(BuRequest $request){
      $bu=new Bu();
        $user=Auth::user();
      // $data=[
      //   'bu_name' => $request->bu_name,
      //   'bu_price'=> $request->bu_price,
      //   'bu_rent' => $request->bu_rent,
      //   'bu_square'=>$request->bu_square,
      //   'bu_type' => $request->bu_type,
      //   'bu_small_dis'=>$request->bu_small_dis,
      //   'bu_meta'=>  $request->bu_meta,
      //   'bu_longitude'=>$request->bu_longitude,
      //   'bu_latitude'=>$request->bu_latitude,
      //   'bu_status'=> $request->bu_status,
      //   'bu_long_dis'=>$request->bu_long_dis,
      //   'user_id'=> $user->id,
      //   'rooms'=>$request->rooms
      // ];
      // $request->merge(['osama'=>'yasser'])
      $use=$user->id;
      $request->merge(['user_id'=>$use]);
      // dd($request->all());
      $bu::create($request->all());
      return Redirect ('/adminpanel/bu')->withFlashMassage('New Building Added');
    }
    public function edit($id){
      $bu= Bu::find($id);
      return view('admin.bu.edit',compact('bu'));
    }


      public function update($id,BuRequest $request){
      $user=Auth::user();
      $use=$user->id;
      $request->merge(['user_id'=>$use]);
      $bu= Bu::find($id);
      $bu->fill($request->all())->save();
      return redirect('/adminpanel/bu')->withFlashMassage('Edit Building Succesfully');
    }

    public function destroy($id){
      $bu=Bu::find($id)->delete();
      return redirect('/adminpanel/bu')->withFlashMassage('Delete Building Succesfully');
    }

    public function anyData()
    {
        $bus = Bu::all();
        return Datatables::of($bus)

             ->editColumn('bu_name', function ($model) {
                return '<a href="'.url('/adminpanel/bu/' . $model->id . '/edit').'">'.$model->bu_name.'</a>';
            })
            ->editColumn('bu_type', function ($model) {

                return
                 $model->bu_type == 0 ? '<span class="badge badge-info">' . 'Flat' . '</span>' :
                 $model->bu_type == 1 ? '<span class="badge badge-info">' . 'Chalet' . '</span>':
                   '<span class="badge badge-warning">' . ' Vella' . '</span>';

            })
            ->editColumn('bu_status', function ($model) {
                return $model->bu_status == 1 ? '<span class="badge badge-info">' . 'Deactive' . '</span>' : '<span class="badge badge-warning">' . ' active' . '</span>';
            })

            ->editColumn('mybu', function ($model) {
                return '<a href="'.url('/adminpanel/bu/' . $model->id).'"> <span class="btn btn-danger btn-circle"> <i class="fa fa-link"></i> </span> </a>';
            })

            ->editColumn('control', function ($model) {
                $all = '<a href="' . url('/adminpanel/bu/' . $model->id . '/edit')  . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                    $all .= '<a href="' . url('/adminpanel/bu/' . $model->id . '/destroy') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';

                return $all;
            })
            ->rawColumns(['bu_name','bu_type', 'bu_status', 'mybu','control'])
            ->make(true);
    }

    public function showAll(Bu $bu){

      $buAll=$bu->where('bu_status',0)->orderBy('id','desc')->paginate(2);
      return view('website.bu.all',compact('buAll'));
    }
    public function forRent(Bu $bu){
      $buAll=$bu->where('bu_status',0)->where('bu_rent',0)->orderBy('id','desc')->paginate(2);
      return view('website.bu.all',compact('buAll'));

    }
    public function forBuy(Bu $bu){
      $buAll=$bu->where('bu_status',0)->where('bu_rent',1)->orderBy('id','desc')->paginate(2);
      return view('website.bu.all',compact('buAll'));

    }

    public function showByType($type,Bu $bu){
      if(in_array($type,[0,1,2])){
        $buAll=$bu->where('bu_status',0)->where('bu_type', $type)->orderBy('id','desc')->paginate(2);
        return view('website.bu.all',compact('buAll'));
      }
      else {
      return  redirect::Back();
      }


    }
}
