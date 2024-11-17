<?php

namespace App\Http\Controllers\Api\Admin\Accounts;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use DataTables;
use Illuminate\Http\Request;

class UsersDatatable extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $data = Admin::query();
        // $data = Admin::where('email', '!=', 'brytphp@gmail.com');

        return Datatables::of($data)
            ->addColumn('action', function ($row) {
                $action = '';

                $action .= '<div class="btn-group"> <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options</button><div class="dropdown-menu bg-light" style="">';

                $action .= '<a class="dropdown-item" href="'.route('admin.accounts.edit', $row->uuid).'">Edit</a>';

                $action .= '<a class="dropdown-item text-danger btn-delete" href="javascript:void(0)" data-href="'.route('api.admin.accounts.delete', $row->uuid).'">Delete Account</a>';

                $action .= '</div></div>';

                return  $action ?? '...';
            })
            ->editColumn('status', function ($row) {
                return $row->status == 1 ? 'Active' : 'Disabled';
            })

            ->editColumn('email', function ($row) {
                return '<a href="mailto:'.$row->email.'">'.$row->email.'</a>';
            })
            ->editColumn('full_name', function ($row) {
                return ' <div class="ul-widget4__img"><img src="'.$row->avatar.'" alt="" style="width:30px" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <a href="'.route('admin.accounts.profile', $row->uuid).'">'.$row->full_name.'</a></div>';
            })

            ->editColumn('identity', function ($row) {
                return '<a href="'.$row->identity.'" target="_blank"><img src="'.$row->identity.'" style="width:30px; width:30px;"></a>';
            })

            ->rawColumns(['action', 'status', 'investment', 'email', 'full_name', 'identity'])
            ->make(true);
    }
}
