<?php
  
namespace App\Http\Controllers;
  
use App\Model\User;
use Illuminate\Http\Request;
use DataTables;


class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crud = User::latest()->paginate(10);
  
        return view('crud.index',compact('crud'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $request->validate([

            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required',
            'class' => 'required',
            'address' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            
        ]);
       
        if ($request->status == 'on')
        {
            $request->status=1;
        }
        else
         {
            $request->status=0;

        }
        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'dob' =>  $request->dob,
            'class' =>  $request->class,
            'address' =>  $request->address,
            'country' =>  $request->country,
            'state' =>  $request->state,
            'city' =>  $request->city,
            'status' =>  $request->status,

            
        ]);
        return redirect()->route('crud.index')
                        ->with('success','User created successfully.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::where('id',$id)->first();

        return view('crud.show',compact('user'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $user=User::where('id',$id)->first();
       
        return view('crud.edit' ,compact('user'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required',
            'class' => 'required',
            'address' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            
        ]);

        if ($request->status != null)
        {
            $request->status=1;
        }
        else
         {
            $request->status=0;

        }
        User::where('id',$request->id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'dob' =>  $request->dob,
            'class' =>  $request->class,
            'address' =>  $request->address,
            'country' =>  $request->country,
            'state' =>  $request->state,
            'city' =>  $request->city,
            'status' =>  $request->status,

            
        ]);


  
        return redirect()->route('crud.index')
                        ->with('success','User updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function delete( $id)
    {
        $user=User::where('id',$id)->delete();
  
        return redirect()->route('crud.index')
                        ->with('success','User deleted successfully');
    }
}