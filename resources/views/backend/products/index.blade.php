@extends('backend.layout.main')
@section('content')

    <h1 class="mt-4">All Product</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Product List
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Active</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Active</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($Productlist as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->product_name }}</td>
                                    <td>{{ $data->price }}</td>
                                    <td><img class="image_viewer" src="{{ asset('uploads/' . $data->thumbImage['t_image']) }}"
                                            alt=""></td>
                                    <td>
                                        <div class="form-check form-switch in_flex_center">
                                            <input data-id="{{ $data->id }}" class="form-check-input status_action" type="checkbox" role="switch" name="status"
                                                id="flexSwitchCheckChecked" @if ($data->status == 1) checked @endif>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="in_flex_center">
                                            <a class="btn btn-primary" href="{{ route('products.edit', $data->id ) }}"><i class="las la-pen"></i></a>
                                            <a  data-bs-toggle="modal"
                                            data-bs-target="#exampleModal{{ $data->id }}" class="btn btn-danger" href=""><i class="las la-trash"></i></a>
                                            {{-- model  --}}
                                            <div class="modal fade customization_model_view" id="exampleModal{{ $data->id }}"
                                                tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Delete
                                                                Product
                                                                {{ $data['product_name'] }}</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you Sure you want to delete Product. You won't be able
                                                            to revert back.
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">No</button>
                                                            <form method="POST" action="{{ route('products.destroy', $data->id) }}">
                                                                @method('delete')
                                                                @csrf
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop
@push('scripts')
    <script>
        $(document).ready(function(){
            $('.status_action').change(function() {
            var id = $(this).attr('data-id');
            $.ajax({
                type: "post",
                url: "{{ route('status.save') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id,
                },
                success: function(res) {
                    toastr.success(res);
                }
            });
        });
        });
    </script>
@endpush
