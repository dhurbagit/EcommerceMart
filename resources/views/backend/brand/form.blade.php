@extends('backend.layout.main')
@section('content')

    <h1 class="mt-4">Add New Brand</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-lg-3">
            @include('backend.layout.pagesidebar')
        </div>
        <div class="col-lg-9">
            <div class="row">
                <div class="col-lg-7">
                    @if (isset($data))
                        <form action="{{ route('brand.update', $data->id) }}" method="POST">
                            @method('PUT')
                        @else
                            <form action="{{ route('brand.store') }}" method="POST">
                    @endif

                    @csrf
                    <div class="form-group mb-3">
                        <label for="b_title" class="form-label">Brand Name</label>
                        <input type="text" id="b_title" class="form-control" name="b_title"
                            value="{{ isset($data) ? $data->b_title : old('b_title') }}">
                        <div id="lb_title" class="form-text">
                            Enter New Brand Name
                        </div>
                    </div>

                    <div class="form-group">
                        @if (isset($data))
                            <button type="submit" class="btn btn-success">Update</button>
                        @else
                            <button type="submit" class="btn btn-success">Save</button>
                        @endif

                    </div>
                    </form>
                </div>
                <div class="col-lg-5">
                    <div class="product_category_wrapper">
                        <div class="card">
                            <div class="card-header">
                                Product Tag
                            </div>

                            <ul class="list-group">
                                @foreach ($brandlist as $data)
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center">
                                            {{ $loop->iteration }}.&nbsp;
                                            @if($data->b_title != 'General Brand')
                                            <span class="action_button_wrapper">
                                                <a class="text-primary" href="{{ route('brand.edit', $data->id) }}"><i
                                                        class="las la-pen"></i></a>
                                                <a class="text-danger" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal{{ $data->id }}"
                                                    href="javascript:void(0)"><i class="las la-trash"></i></a>
                                            </span>
                                            @endif
                                            <span> {{ $data['b_title'] }} </span>
                                        </div>
                                    </li>
                                    <div class="modal fade customization_model_view" id="exampleModal{{ $data->id }}"
                                        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete
                                                        Brand
                                                        {{ $data['b_title'] }}</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you Sure you want to delete Brand. You won't be able
                                                    to revert back.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">No</button>
                                                    <form method="POST" action="{{ route('brand.destroy', $data->id) }}">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </ul>

                        </div>
                    </div>


                </div>
            </div>
        </div>


    </div>
@stop
@push('scripts')
@endpush
