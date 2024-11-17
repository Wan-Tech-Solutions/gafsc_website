<div class="col-xxl-3">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title mb-3">Basic Info</h5>
            <div class="table-responsive">
                <table class="table table-borderless mb-0">
                    <tbody>
                        <tr>
                            <th class="ps-0" scope="row">Full Name :</th>
                            <td class="text-muted">{{ $user->full_name }}</td>
                        </tr>
                        <tr>
                            <th class="ps-0" scope="row">Mobile :</th>
                            <td class="text-muted">{{ $user->phone }}</td>
                        </tr>
                        <tr>
                            <th class="ps-0" scope="row">E-mail :</th>
                            <td class="text-muted">{{ $user->email }}</td>
                        </tr>

                        <tr>
                            <th class="ps-0" scope="row">Joining Date</th>
                            <td class="text-muted">
                                {{ $user->created_at->format('d M, Y') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div><!-- end card body -->
    </div><!-- end card -->

</div>
