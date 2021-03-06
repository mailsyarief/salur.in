<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;

class MajikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    public function __construct()
    {
        $this->middleware('majikan');
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = Auth::id();
        // dd($user);

        if ($request->file('foto-profil') != NULL)
        {
            $berkas = $request->file('foto-profil');
            $namafile= time().'.'.$berkas->getClientOriginalExtension();
            $path = public_path('/fotoprofil');
            $berkas->move($path,$namafile);

            $query = DB::table('users')->where('id',$id)->first();

            //dd ($file_foto);

            if ($query->foto != NULL)
            {
                //File::delete('/fotoprofil/'.$file_foto->foto);
                File::delete(public_path('/fotoprofil/'.$query->foto));
            }

            $gantifoto = array(
                'foto' => $namafile
            );

            User::find($id)->update($gantifoto);
        }

        $DataMajikan = array(
            //'foto' => $namafile,
            'nama_lengkap' => $request->input('nama_lengkap'),
            'email' => $request->input('email'),
            'wilayah' => $request->input('wilayah'),
            'telepon' => $request->input('telepon'),
            'alamat' => $request->input('alamat')
        );

        User::find($id)->update($DataMajikan);

        //return redirect('/home');
        return redirect()->back()->with("success","Data Berhasil di Update !");        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
