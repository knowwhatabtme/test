<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostManage;
use Illuminate\Support\Str;


class PostManageController extends Controller
{

    public function __construct()
    {
       
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = PostManage::all();
        return view('admin.postingan.index', compact('posts'));
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
        
    

        // Retrieve the checkbox data from the form
        $checkboxTransport = $request->input('checkbox0');
        $checkboxFkos = $request->input('checkbox1');
        $checkboxFsekitar = $request->input('checkbox3');
        $mapsInput = $request->input('maps');
        // $harga = $request->input('harga');


        if (!is_array($checkboxTransport)) {
            $checkboxTransport = [$checkboxTransport];
        }
        $checkboxString0 = implode( ',' , $checkboxTransport);

        if (!is_array($checkboxFkos)) {
            $checkboxFkos = [$checkboxFkos];
        }
        $checkboxString1 = implode( ',' , $checkboxFkos);

        if (!is_array($checkboxFsekitar)) {
            $checkboxFsekitar = [$checkboxFsekitar];
        }

        // Convert the checkbox data array to a comma-separated string for storage
        
        
        $checkboxString3 = implode( ',' , $checkboxFsekitar);

        // Store the data in the database
        // $checkbox->jalur_transportasi = $checkboxString0;
        // $checkbox->fasilitas_kamar = $checkboxString1;
        // $checkbox->fasilitas_sekitar = $checkboxString3;

        // Hanlde up Photo
        
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/blogs', $filename);
        } else {
            $filename = 'default.jpg';
        }
        
        $mapsOlah = explode("\"", $mapsInput)[1];
        if (!Str::startsWith($mapsOlah, "https://www.google.com/maps/embed?pb=")) return redirect()->back();

        // $harga = strrev(chunk_split(strrev($harga), 3, '.'));

        $store = PostManage::create(array_merge($request->all(), [
            'maps'=>$mapsOlah,
            'nik_user' => auth()->user()->nik,
            'picture' => $filename,
            'jalurTransport' => $checkboxString0,
            'fasilitas_kamar' => $checkboxString1,
            'fasilitas_sekitar' => $checkboxString3,
        ]));
        
        return redirect()->route('managepost.index')->with('success', 'Postingan berhasil ditambahkan');
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
            $posts = PostManage::find($id);
            return view('admin.postingan.index', compact('posts'));
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
        // $post = PostManage::findOrFail($id);
        // Retrieve the checkbox data from the form
        $checkboxTransport = $request->input('checkbox0');
        $checkboxFkos = $request->input('checkbox1');
        $checkboxFsekitar = $request->input('checkbox3');
        $mapsInput = $request->input('maps');
        $harga = $request->input('harga');


        if (!is_array($checkboxTransport)) {
            $checkboxTransport = [$checkboxTransport];
        }
        $checkboxString0 = implode( ',' , $checkboxTransport);

        if (!is_array($checkboxFkos)) {
            $checkboxFkos = [$checkboxFkos];
        }
        $checkboxString1 = implode( ',' , $checkboxFkos);

        if (!is_array($checkboxFsekitar)) {
            $checkboxFsekitar = [$checkboxFsekitar];
        }

        // Convert the checkbox data array to a comma-separated string for storage
        
        
        $checkboxString3 = implode( ',' , $checkboxFsekitar);

        // Store the data in the database
        // $checkbox->jalur_transportasi = $checkboxString0;
        // $checkbox->fasilitas_kamar = $checkboxString1;
        // $checkbox->fasilitas_sekitar = $checkboxString3;

        // Hanlde up Photo
        
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/blogs', $filename);
        } else {
            $filename = 'default.jpg';
        }
        
        $mapsOlah = explode("\"", $mapsInput)[1];
        if (!Str::startsWith($mapsOlah, "https://www.google.com/maps/embed?pb=")) return redirect()->back();

        // $harga = strrev(chunk_split(strrev($harga), 3, '.'));


        // $store = PostManage::update(array_merge($request->all(), [
        //     'maps'=>$mapsOlah,
        //     'nik_user' => auth()->user()->nik,
        //     'picture' => $filename,
        //     'jalurTransport' => $checkboxString0,
        //     'fasilitas_kamar' => $checkboxString1,
        //     'fasilitas_sekitar' => $checkboxString3,
        //     'harga' => $harga,
        // ])
        // , $id    
        // );
        // return redirect()->route('managepost.index');

        // Update other fields as needed



        $post = PostManage::findOrFail($id);
        $post->namaKos = $request->input('namaKos');
        $post->desc = $request->input('desc');
        $post->jenisKos = $request->input('jenisKos');
        $post->jumLantai = $request->input('max_lantai');
        $post->jumKamar = $request->input('max_kamarT');
        $post->jumKamarMandi = $request->input('max_kamarM');
        $post->picture = $filename;
        $post->jalurTransport = $checkboxString0;
        $post->fasilitas_kamar = $checkboxString1;
        $post->fasilitas_sekitar = $checkboxString3;
        $post->address = $request->input('alamat_kost');
        $post->maps = $mapsOlah;
        $post->harga = $request->input('harga');


        // // Update other fields as needed

        // if ($request->hasFile('picture')) {
        //     // Handle file upload
        //     $file = $request->file('picture');
        //     // Add code to store and update the file path in the database
        // }
        $post->save();

        return redirect()->route('managepost.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = PostManage::find($id);
        $delete->delete();
        return redirect()->route('managepost.index');
    }
}
