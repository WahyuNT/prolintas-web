<div>
    <h3 class="text-center fw-bold color-primary">OUR SERVICES</h3>
    <div class="card shadow-sm border-0 mt-5 borad-15">
        <div class="card-body">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Title</th>
                        <th scope="col">desc</th>
                        <th scope="col">Active</th>
                        <th scope="col">Set</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->icon }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->desc }}</td>
                            <td>
                                @if ($item->is_active)
                                    <span class="badge bg-success"><i class="fa-solid fa-eye"></i></span>
                                @else
                                    <span class="badge bg-danger"><i class="fa-solid fa-eye-slash"></i></span>
                                @endif
                            </td>
                            <td>
                                @if ($item->is_active)
                                <span class="badge  bg-danger ">Set Inactive</span>
                                @else
                                <span class="badge  bg-success ">Set Active</span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex justify-content-between gap-1">

                                    <button class="btn btn-primary btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
