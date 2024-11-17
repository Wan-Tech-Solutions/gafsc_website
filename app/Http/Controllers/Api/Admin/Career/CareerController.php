<?php

namespace App\Http\Controllers\Api\Admin\Career;

use App\Http\Controllers\Controller;
use App\Models\Career;
use DataTables;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Career::get();

        return Datatables::of($data)
            ->addColumn('action', function ($row) {
                $action = '';

                $action .= '<div class="btn-group"> <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options</button><div class="dropdown-menu bg-light" style="">';

                $action .= '<a class="dropdown-item" href="'.route('admin.career.edit', $row->uuid).'">Edit</a>';

                $action .= '<a class="dropdown-item text-danger btn-delete" href="javascript:void(0)" data-href="'.route('api.admin.career.destroy', $row->uuid).'">Delete</a>';

                $action .= '</div></div>';
                // impersonate

                return  $action ?? '...';
            })
            ->editColumn('description', function ($row) {
                return str()->words(strip_tags($row->description), 100);
            })
            ->editColumn('deadline', function ($row) {
                return $row->deadline->format('d M, Y');
            })

            ->rawColumns(['action', 'description', 'deadline'])
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
            'position' => ['required'],
            'deadline' => ['required'],
            'description' => ['required'],
        ]);

        $career = Career::create($data);
        cache()->flush();
    }

    /**
     * Display the specified resource.
     */
    public function show(Career $career)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Career $career)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Career $career)
    {
        $data = $this->validate($request, [
            'position' => ['required'],
            'deadline' => ['required'],
            'description' => ['required'],
        ]);

        $career->update($data);
        cache()->flush();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Career $career)
    {
        $career->delete();
        cache()->flush();
    }
}
