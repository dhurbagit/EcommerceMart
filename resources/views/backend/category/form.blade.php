@extends('backend.layout.main')
@section('content')

    <h1 class="mt-4">Add New Product</h1>
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
                        <form action="{{ route('categories.update', $data->id) }}" method="POST">
                            @method('PUT')
                        @else
                            <form action="{{ route('categories.store') }}" method="POST">
                    @endif

                    @csrf
                    <div class="form-group mb-3">
                        <label for="title" class="form-label">Category Name</label>
                        <input type="text" id="title" class="form-control" name="category_title"
                            value="{{ isset($data) ? @$data->category_title : old('category_title') }}">
                        <div id="ltitle" class="form-text">
                            Enter New Category Name
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="unit" class="form-label">Select Parent Category</label>
                        <select class="form-select" aria-label="Default select example" name="category_id">
                            <option value="">None</option>
                            @foreach ($categorylist as $catList)
                                <option value="{{ $catList['id'] }}"
                                    {{ $catList['id'] == @$data->category_id ? 'selected' : '' }}>
                                    {{ $catList['category_title'] }}</option>
                            @endforeach
                        </select>
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
                                Product category
                            </div>
                            <ul class="list-group list-group-flush">
                                @foreach ($categorylist as $catList)
                                    <li class="list-group-item">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header cat_accordian_list_wrapper">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapse{{ $loop->iteration }}"
                                                        aria-expanded="false"
                                                        aria-controls="collapse{{ $loop->iteration }}">
                                                        <div class="d-flex align-items-center">
                                                            {{ $loop->iteration }}.&nbsp;
                                                            <span class="action_button_wrapper">
                                                                <a class="text-primary"
                                                                    href="{{ route('categories.edit', $catList->id) }}"><i
                                                                        class="las la-pen"></i></a>
                                                                <a class="text-danger" data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal{{ $catList->id }}"
                                                                    href="javascript:void(0)"><i
                                                                        class="las la-trash"></i></a>
                                                            </span>
                                                            <span> {{ $catList['category_title'] }}&nbsp;<span
                                                                    class="badge text-bg-secondary">{{ $catList->subCategory()->count() }}</span></span>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <!-- Modal -->
                                                <div class="modal fade customization_model_view"
                                                    id="exampleModal{{ $catList->id }}" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete
                                                                    Category
                                                                    {{ $catList['category_title'] }}</h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you Sure you want to delete category. You won't be able
                                                                to revert back.
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">No</button>
                                                                <form method="POST"
                                                                    action="{{ route('categories.destroy', $catList->id) }}">
                                                                    @method('delete')
                                                                    @csrf
                                                                    <button type="submit"
                                                                        class="btn btn-danger">Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="collapse{{ $loop->iteration }}"
                                                    class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    @if ($catList->subCategory()->count() > 0)
                                                        <div class="accordion-body">
                                                            <ul>
                                                                @foreach ($catList->subCategory()->get() as $list)
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <span>{{ $list['category_title'] }}</span>
                                                                            <span class="action_button_wrapper">
                                                                                <a class="text-primary"
                                                                                    href="{{ route('categories.edit', $list->id) }}"><i
                                                                                        class="las la-pen"></i></a>
                                                                                <a class="text-danger" data-bs-toggle="modal"
                                                                                data-bs-target="#exampleModal{{ $list->id }}"
                                                                                    href="javascript:void(0)"><i
                                                                                        class="las la-trash"></i></a>
                                                                            </span>
                                                                        </div>
                                                                    </li>
                                                                    <!-- Modal -->
                                                                    <div class="modal fade customization_model_view"
                                                                        id="exampleModal{{ $list->id }}" tabindex="-1"
                                                                        aria-labelledby="exampleModalLabel"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h1 class="modal-title fs-5"
                                                                                        id="exampleModalLabel">Delete
                                                                                        Category
                                                                                        {{ $list['category_title'] }}
                                                                                    </h1>
                                                                                    <button type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    Are you Sure you want to delete
                                                                                    category. You won't be able
                                                                                    to revert back.
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                        class="btn btn-secondary"
                                                                                        data-bs-dismiss="modal">No</button>
                                                                                    <form method="POST"
                                                                                        action="{{ route('categories.destroy', $list->id) }}">
                                                                                        @method('delete')
                                                                                        @csrf
                                                                                        <button type="submit"
                                                                                            class="btn btn-danger">Delete</button>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </li>
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
