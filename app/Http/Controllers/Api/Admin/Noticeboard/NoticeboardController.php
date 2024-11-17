<?php

namespace App\Http\Controllers\Api\Admin\Noticeboard;

use App\Http\Controllers\Controller;
use App\Models\Noticeboard;
use DataTables;
use Illuminate\Http\Request;

class NoticeboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Noticeboard::get();

        return Datatables::of($data)
            ->addColumn('action', function ($row) {
                $action = '';

                $action .= '<div class="btn-group"> <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options</button><div class="dropdown-menu bg-light" style="">';

                $action .= '<a class="dropdown-item" href="'.route('admin.noticeboard.edit', $row->uuid).'">Edit</a>';

                $action .= '<a class="dropdown-item text-danger btn-delete" href="javascript:void(0)" data-href="'.route('api.admin.noticeboard.destroy', $row->uuid).'">Delete</a>';

                $action .= '</div></div>';
                // impersonate

                return  $action ?? '...';
            })
            ->editColumn('status', function ($row) {
                return $row->status == 1 ? 'Showing' : 'Hidden';
            })
            ->rawColumns(['action', 'status'])
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
            'content' => ['required'],
            'status' => ['required'],
            'image' => ['required'],
        ]);

        $noticeboard = Noticeboard::create($data);
        $noticeboard->syncMedia($request->image, 'noticeboard');
        cache()->flush();
    }

    /**
     * Display the specified resource.
     */
    public function show(Noticeboard $noticeboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Noticeboard $noticeboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Noticeboard $noticeboard)
    {
        $data = $this->validate($request, [
            'title' => ['required'],
            'content' => ['required'],
            'status' => ['required'],
        ]);

        $noticeboard->update($data);
        cache()->flush();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Noticeboard $noticeboard)
    {
        $noticeboard->delete();
        cache()->flush();
    }
}
