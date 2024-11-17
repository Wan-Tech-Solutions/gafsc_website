<?php

namespace App\Http\Controllers\Api\Admin\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use DataTables;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Gallery::get();

        return Datatables::of($data)
            ->addColumn('action', function ($row) {
                $action = '';

                $action .= '<div class="btn-group"> <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options</button><div class="dropdown-menu bg-light" style="">';

                $action .= '<a class="dropdown-item" href="'.route('admin.banner.edit', $row->uuid).'">Edit</a>';

                $action .= '<a class="dropdown-item text-danger btn-delete" href="javascript:void(0)" data-href="'.route('api.admin.gallery.destroy', $row->uuid).'">Delete</a>';

                $action .= '</div></div>';
                // impersonate

                return  $action ?? '...';
            })
            ->editColumn('images', function ($row) {
                return $row->media->count();
            })
            ->editColumn('group', function ($row) {
                // return '';
                return '<img style="width:100px; height:70px;" class="img-thumbnail" src="'.$row->media[0]->getUrl().'"> '.$row->group;
            })
            ->rawColumns(['action', 'images', 'group'])
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
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        cache()->flush();
    }
}
