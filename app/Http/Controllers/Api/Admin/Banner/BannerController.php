<?php

namespace App\Http\Controllers\Api\Admin\Banner;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use DataTables;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Banner::get();

        return Datatables::of($data)
            ->addColumn('action', function ($row) {
                $action = '';

                $action .= '<div class="btn-group"> <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options</button><div class="dropdown-menu bg-light" style="">';

                $action .= '<a class="dropdown-item" href="'.route('admin.banner.edit', $row->uuid).'">Edit</a>';

                $action .= '<a class="dropdown-item text-danger btn-delete" href="javascript:void(0)" data-href="'.route('api.admin.banner.destroy', $row->uuid).'">Delete</a>';

                $action .= '</div></div>';
                // impersonate

                return  $action ?? '...';
            })
            ->editColumn('status', function ($row) {
                return $row->status == 1 ? 'Showing' : 'Hidden';
            })
            ->editColumn('banner', function ($row) {
                return '<img style="width:100px; height:70px;" class="img-thumbnail" src="'.$row->img.'">';
            })
            ->rawColumns(['action', 'status', 'banner'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'title' => ['required'],
            'order_of_appearance' => ['nullable', 'numeric'],
            'sub_title' => ['nullable'],
            'status' => ['required'],
            'banner' => ['required'],
        ]);

        $banner = Banner::create($data);
        $banner->syncMedia($request->banner, 'banner');
        cache()->flush();
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        $data = $this->validate($request, [
            'title' => ['required'],
            'order_of_appearance' => ['nullable', 'numeric'],
            'sub_title' => ['nullable'],
            'status' => ['required'],
        ]);

        $banner->update($data);
        cache()->flush();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        cache()->flush();
    }
}
