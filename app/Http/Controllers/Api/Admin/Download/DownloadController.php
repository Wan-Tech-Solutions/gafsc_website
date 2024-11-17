<?php

namespace App\Http\Controllers\Api\Admin\Download;

use App\Http\Controllers\Controller;
use App\Models\Download;
use DataTables;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Download::get();

        return Datatables::of($data)
            ->addColumn('action', function ($row) {
                $action = '';

                $action .= '<div class="btn-group"> <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options</button><div class="dropdown-menu bg-light" style="">';

                $action .= '<a class="dropdown-item text-danger btn-delete" href="javascript:void(0)" data-href="'.route('api.admin.download.destroy', $row->uuid).'">Delete</a>';

                $action .= '</div></div>';
                // impersonate

                return  $action ?? '...';
            })
            ->editColumn('description', function ($row) {
                return '<a href="'.$row->url.'" target="_blank">'.$row->description.'</a>';
            })
            ->rawColumns(['action', 'description'])
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
            'description' => ['required'],
            'download' => ['required'],
        ]);

        $download = Download::create($data);
        $download->syncMedia($request->download, 'download');
        cache()->flush();
    }

    /**
     * Display the specified resource.
     */
    public function show(Download $download)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Download $download)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Download $download)
    {
        $data = $this->validate($request, [
            'title' => ['required'],
            'order_of_appearance' => ['nullable', 'numeric'],
            'sub_title' => ['nullable'],
            'status' => ['required'],
        ]);

        $download->update($data);
        cache()->flush();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Download $download)
    {
        $download->delete();
        cache()->flush();
    }
}
