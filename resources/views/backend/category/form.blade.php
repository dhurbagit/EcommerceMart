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
                        <form action="{{ route('categories.update', $data->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                        @else
                            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                    @endif

                    @csrf
                    <div class="form-group mb-3">
                        <label for="title" class="form-label">Image</label>
                        <div class="d-flex">
                            <div class="input-group mb-3">
                                <input onchange="loadFile(event)" type="file" class="form-control" id="imageGroup"
                                    name="image" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                            </div>
                            <div class="image_holder_wrapper">
                                <img @if (isset($data)) src="{{ asset('uploads/' . $data->image) }}"
                                        @else
                                        src="{{ asset('backend/assets/img/pic (2).png') }}" @endif
                                    alt="" id="placeholder_image">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="title" class="form-label">Icon</label>
                        <div class="d-flex">
                            <div class="input-group mb-3">

                                <input onchange="loadFile1(event)" type="file" class="form-control" id="iconGroup"
                                    name="icon" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                            </div>
                            <div class="image_holder_wrapper">
                                <img @if (isset($data)) src="{{ asset('uploads/' . $data->icon) }}"
                                        @else
                                        src="{{ asset('backend/assets/img/pic (2).png') }}" @endif
                                    alt="" id="placeholder_image1">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="title" class="form-label">Category Name</label>
                        <input type="text" id="title" class="form-control" name="category_title"
                            value="{{ isset($data) ? @$data->category_title : old('category_title') }}">
                        @if ($errors->any())
                            {!! implode('', $errors->all('<div>:message</div>')) !!}
                        @else
                            <div id="ltitle" class="form-text">
                                Enter New Category Name
                            </div>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <label for="sub_title" class="form-label">Sub Title</label>
                        <input type="text" class="form-control" id="sub_title" name="sub_title"
                        value="{{ isset($data) ? @$data->sub_title : old('sub_title') }}"
                            placeholder="Short Title">
                    </div>

                    <div class="form-group mb-3">
                        <label for="unit" class="form-label">Select Parent Category</label>
                        <select class="form-select" aria-label="Default select example" name="category_id">
                            <option value="">None</option>
                            @foreach ($rootCategories as $catList)
                                <option value="{{ $catList['id'] }}"
                                    {{ $catList['id'] == @$data->category_id ? 'selected' : '' }}>
                                    {{ $catList['category_title'] }}</option>
                                @foreach ($catList->children as $catList)
                                    <option value="{{ $catList['id'] }}"
                                        {{ $catList['id'] == @$data->category_id ? 'selected' : '' }}>
                                        --{{ $catList['category_title'] }}</option>
                                @endforeach
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="category_description" class="form-label">Description</label>
                        <textarea class="form-control" id="category_description" rows="3" name="description">{{ isset($data) ? @$data->description : old('description') }}</textarea>
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

                                @foreach ($rootCategorieslist as $catList)
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
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    @if ($catList->children->count() > 0)
                                                        <div class="accordion-body">
                                                            <ul>
                                                                @foreach ($catList->children as $list)
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <span>{{ $loop->iteration }}.
                                                                                {{ $list['category_title'] }} <span
                                                                                    class="badge text-bg-secondary">{{ $list->children->count() }}</span></span>
                                                                            <span class="action_button_wrapper">
                                                                                <a class="text-primary"
                                                                                    href="{{ route('categories.edit', $list->id) }}"><i
                                                                                        class="las la-pen"></i></a>
                                                                                <a class="text-danger"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#exampleModal{{ $list->id }}"
                                                                                    href="javascript:void(0)"><i
                                                                                        class="las la-trash"></i></a>
                                                                            </span>
                                                                        </div>
                                                                    </li>
                                                                    <!-- Modal -->
                                                                    <div class="modal fade customization_model_view"
                                                                        id="exampleModal{{ $list->id }}"
                                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
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

                                                                    <ul>
                                                                        @foreach ($list->children as $recordsList)
                                                                            <li>
                                                                                <div
                                                                                    class="d-flex justify-content-between">
                                                                                    <span>{{ $loop->iteration }}.
                                                                                        {{ $recordsList['category_title'] }}</span>
                                                                                    <span class="action_button_wrapper">
                                                                                        <a class="text-primary"
                                                                                            href="{{ route('categories.edit', $recordsList->id) }}"><i
                                                                                                class="las la-pen"></i></a>
                                                                                        <a class="text-danger"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#exampleModal{{ $recordsList->id }}"
                                                                                            href="javascript:void(0)"><i
                                                                                                class="las la-trash"></i></a>
                                                                                    </span>
                                                                                </div>
                                                                            </li>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade customization_model_view"
                                                                                id="exampleModal{{ $recordsList->id }}"
                                                                                tabindex="-1"
                                                                                aria-labelledby="exampleModalLabel"
                                                                                aria-hidden="true">
                                                                                <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h1 class="modal-title fs-5"
                                                                                                id="exampleModalLabel">
                                                                                                Delete
                                                                                                Category
                                                                                                {{ $recordsList['category_title'] }}
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
                                                                                                action="{{ route('categories.destroy', $recordsList->id) }}">
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
    <script>
        var loadFile = function(event) {
            var image = document.getElementById('placeholder_image');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
    <script>
        var loadFile1 = function(event) {
            var image = document.getElementById('placeholder_image1');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
@endpush
