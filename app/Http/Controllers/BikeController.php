<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Bike;
use App\Hotel;
use App\lokasi;
use DB;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bikes = Bike::latest()->paginate(5);
        return view('bike.index',compact('bikes'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bike.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'jenis_sepeda' => 'required',
            'merek_sepeda' => 'required',
            'kode_sepeda' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        // $photo = $request->file('image')->getClientOriginalName();
        // // $destination = base_path() . '/public/images';
        // $destination ='./images/';
        // // dd($destination);
        // $request->file('image')->move($destination, $photo);
        // dd($request);

        if ($request->hasFile('image') && $request->file('image')->isValid())
                {
                    $path = $request->image->store('images');
                    if(!empty($path)){
                        $edit = Model::FindOrFail($id);
    //                    Delete old image
                        $exists = Storage::disk('local')->exists($edit->image);
                        if($exists){
                            Storage::delete($edit->image);
                        }
                        $edit->image = $path;
                        $edit->save();
                    }
                }


        Bike::create($request->all());
        return redirect()->route('bike.index')
        ->with('success','Sepeda telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $file = $request->file('image');
        // $destinationPath = 'public/images/';
        // $originalFile = $file->getClientOriginalName();
        // $file->move($destinationPath, $originalFile);

        $bike = Bike::find($id);

        return view('bike.show',compact('bike'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bike = Bike::find($id);

        return view('bike.edit',compact('bike'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'jenis_sepeda' => 'required',
            'merek_sepeda' => 'required',
            'kode_sepeda' => 'required',
        ]);

        Bike::find($id)->update($request->all());
        return redirect()->route('bike.index')
        ->with('success','Sepeda telah diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bike::find($id)->delete();
        return redirect()->route('bike.index')
        ->with('success', 'Sepeda telah sukses di hapus');
    }

    public function waktu()
    {
        return view('bike.waktu');
    }
}
