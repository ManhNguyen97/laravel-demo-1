<?php

namespace App\Http\Controllers;

use App\Models\Nhanvien;
use Illuminate\Http\Request;

class NhanvienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nhanvien = Nhanvien::all();
        // dd($nhanvien);
        return view('index', compact('nhanvien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Nhanvien::create($request->all());
        return redirect()->route('nhanvien.index')->with('thongbao','Thêm nhân viên thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Nhanvien $nhanvien)
    {
        return view('show', compact('nhanvien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nhanvien $nhanvien)
    {
        return view('edit', compact('nhanvien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nhanvien $nhanvien)
    {
        $nhanvien->update($request->all());
        return redirect()->route('nhanvien.index')
        ->with('thongbao','Cập nhật thông tin nhân viên thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nhanvien $nhanvien)
    {
        $nhanvien->delete();
        return redirect()->route('nhanvien.index')
        ->with('thongbao','Xóa thông tin nhân viên thành công.');
    }

    // Search:
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
        // dd($search);
    
        // Search in the title and body columns from the posts table
        $nhanvien = Nhanvien::query()
            ->where('HoTen', 'LIKE', "%{$search}%")
            ->get();
        // dd($nhanvien);
    
        // Return the search view with the resluts compacted
        return view('search', compact('nhanvien'));
    }
}
