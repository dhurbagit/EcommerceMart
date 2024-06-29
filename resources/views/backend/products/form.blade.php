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
            @if (isset($editlist))
                <form action="{{ route('products.update', $editlist->id) }}" method="Post" enctype="multipart/form-data">
                    @method('put')
                @else
                    <form action="{{ route('products.store') }}" method="Post" enctype="multipart/form-data">
            @endif



            @csrf
            <div class="row">
                <div class="col-lg-8">
                    {{-- form content START --}}
                    <div class="product_form_wrapper">
                        <h5>Product Information</h5>
                        <hr>
                        <div class="form-group">
                            <label for="product_name" class="form-label">Product Name</label>
                            <input type="text" id="product_name" class="form-control" name="product_name"
                                value="{{ isset($editlist) ? $editlist->product_name : old('product_name') }}">
                            @if ($errors->any())
                                <div class="text-danger">
                                    @error('product_name')
                                        {{ $message }}
                                    @enderror
                                </div>
                            @else
                                <div id="lproduct_name" class="form-text">
                                    Enter product name
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <label for="unit" class="form-label">Unit</label>
                            <input type="text" id="unit" class="form-control" name="unit"
                                value="{{ isset($editlist) ? $editlist->unit : old('unit') }}">
                            <div id="lunit" class="form-text">
                                Enter unit (e.g KG, Pc etc)
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" id="price" class="form-control" name="price"
                                value="{{ isset($editlist) ? $editlist->price : old('price') }}">

                            @if ($errors->any())
                                <div class="text-danger">
                                    @error('price')
                                        {{ $message }}
                                    @enderror
                                </div>
                            @else
                                <div id="lprice" class="form-text">
                                    Enter Price
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="refundable"
                                    name="refundable"
                                    @isset($editlist) @if ($editlist->refundable == 1) checked @endif @endisset>
                                <label class="form-check-label" for="refundable">Refundable</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" rows="3" name="description">{{ isset($editlist) ? $editlist->description : old('description') }}</textarea>
                            @if ($errors->any())
                                <div class="text-danger">
                                    @error('description')
                                        {{ $message }}
                                    @enderror
                                </div>
                            @else
                                <div id="ldescription" class="form-text">
                                    Enter description
                                </div>
                            @endif

                        </div>

                        <h5>Status</h5>
                        <hr>
                        <div class="form-group">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="featured"
                                    name="featured"
                                    @isset($editlist) @if ($editlist->featured == 1) checked @endif @endisset>
                                <label class="form-check-label" for="featured">Featured</label>
                            </div>
                            <div id="lfeatured" class="form-text">
                                If you enable this, this product will be granted as a featured product.
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="today_deal"
                                    name="today_deal"
                                    @isset($editlist) @if ($editlist->today_deal == 1) checked @endif @endisset>
                                <label class="form-check-label" for="today_deal">Todays deals</label>
                            </div>
                            <div id="ltoday_deal" class="form-text">
                                If you enable this, this product will be granted as a todays deal product.
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="sales" name="sales"
                                    @isset($editlist) @if ($editlist->sales == 1) checked @endif @endisset>
                                <label class="form-check-label" for="today_deal">Sales</label>
                            </div>
                            <div id="ltoday_deal" class="form-text">
                                If you enable this, this product will be granted as a sales product.
                            </div>
                        </div>

                        @php
                            $colorName = isset($editlist) ? json_decode($editlist->color) : [];

                        @endphp
                        
                        <div class="form-group">
                            <label for="flash_title" class="form-label">Color</label>
                            <div class="row">
                                @forelse ($colorName as $color)
                                    <div class="col-lg-4">
                                        <input type="color" id="flash_title" class="form-control"
                                            placeholder="Choose Flash Title" name="color[]"
                                            value="{{ isset($editlist) ? $color : (old('color')[$loop->index] ?? '') }}" width="25px">

                                    </div>
                                @empty
                                    @for ($i = 0; $i < 3; $i++)
                                        <div class="col-lg-4">
                                            <input type="color" id="flash_title" class="form-control"
                                                placeholder="Choose Flash Title" name="color[]"
                                                value="{{ (old('color')[$i] ?? '') }}" width="25px">
                                        </div>
                                    @endfor
                                @endforelse


                            </div>
                        </div>

                        <h5>Flash Deal</h5>
                        <div id="product_name" class="form-text">
                            If you enable this, this product will be granted as a featured product.
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="flash_title" class="form-label">Add To Flash</label>
                            <input type="text" id="flash_title" class="form-control" placeholder="Choose Flash Title"
                                name="flash_title"
                                value="{{ isset($editlist) ? $editlist->flash_title : old('flash_title') }}">
                        </div>
                        <div class="form-group">
                            <label for="discount" class="form-label">Discount</label>
                            <input type="text" id="discount" class="form-control" placeholder="0" name="discount"
                                value="{{ isset($editlist) ? $editlist->discount : old('discount') }}">
                        </div>
                        <div class="form-group">
                            <label for="discount_type" class="form-label">Discount Type</label>
                            <input type="text" id="discount_type" class="form-control"
                                placeholder="Choose Discount Type" name="discount_type"
                                value="{{ isset($editlist) ? $editlist->discount_type : old('discount_type') }}">
                        </div>

                    </div>
                    {{-- form content END --}}
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <h5>Product Thumbnail</h5>
                            <hr>
                            {{-- single Thumbnail images  --}}
                            <div class="product_image_wrapper mb-2">
                                <img id="placeholder_image"
                                    @if (isset($editlist)) src="{{ asset('uploads/' . $editlist->thumbImage['t_image']) }}"
                                        @else
                                        src="{{ asset('backend/assets/img/pic (2).png') }}" @endif
                                    alt="">
                            </div>
                            <div class="form-group">
                                <input onchange="loadFile(event)" class="form-control" type="file" id="t_image"
                                    name="t_image">
                                @if ($errors->any())
                                    <div class="text-danger">
                                        @error('t_image')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                @else
                                    <div id="lt_image" class="form-text">
                                        Select Thumbnail Product image
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <h5>Product Gallery</h5>
                            <hr>
                            {{-- multiple images  --}}
                            <div id="product_multiple_image_wrapper">
                                <div class="edit_Image_gallery">
                                    @isset($galleryImage)
                                        @foreach ($galleryImage as $imageList)
                                            <span><a data-id="{{ $imageList->id }}" href="javascript:void(0)"
                                                    class="delete_gallery_item"><i class="las la-times"></i></a><img
                                                    src="{{ asset('uploads/' . $imageList->g_image) }}"
                                                    alt=""></span>
                                        @endforeach
                                    @endisset
                                </div>
                                <div id="holder"></div>
                            </div>
                            <input type="file" id="g_image" name="g_image[]" multiple class="form-control">
                            <div id="lg_image" class="form-text">
                                Select multiple image for gallery
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="product_category_wrapper">
                                <div class="card">
                                    <div class="card-header">
                                        Product category
                                    </div>

                                    <ul class="list-group list-group-flush">
                                        @foreach ($categorylist as $data)
                                            <li class="list-group-item">
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header cat_accordian_list_wrapper">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="category_key[]" value="{{ $data->id }}"
                                                                    id="flexCheckDefault{{ $data->id }}"
                                                                    @isset($editlist)
                                                                        @if (!empty(json_decode($editlist->category_key, true)))
                                                                        @foreach (json_decode($editlist->category_key, true) as $value)
                                                                         @if ($value == $data->id) checked @endif 
                                                                        @endforeach
                                                                        @endif
                                                                        @endisset>
                                                            </div>
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapse{{ $data->id }}"
                                                                aria-expanded="false"
                                                                aria-controls="collapse{{ $data->id }}">
                                                                {{ $data->category_title }}
                                                            </button>
                                                        </h2>
                                                        <div id="collapse{{ $data->id }}"
                                                            class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample">
                                                            @if ($data->subCategory()->count() > 0)
                                                                <div class="accordion-body">
                                                                    @foreach ($data->subCategory()->get() as $list)
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox"
                                                                                value="{{ $list->id }}"
                                                                                name="category_key[]"
                                                                                id="flexCheckDefault{{ $list->id }}"
                                                                                @isset($editlist)
                                                                                    @if (!empty(json_decode($editlist->category_key, true)))
                                                                                    @foreach (json_decode($editlist->category_key, true) as $value)
                                                                                    @if ($value == $list->id) checked @endif 
                                                                                    @endforeach
                                                                                    @endif
                                                                                    @endisset>
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault{{ $list->id }}">
                                                                                {{ $list->category_title }}
                                                                            </label>
                                                                        </div>
                                                                        @foreach ($list->subCategory()->get() as $rec)
                                                                            <div class="last_subchild_tree">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox"
                                                                                        value="{{ $rec->id }}"
                                                                                        name="category_key[]"
                                                                                        id="flexCheckDefault{{ $rec->id }}"
                                                                                        @isset($editlist)
                                                                                            @if (!empty(json_decode($editlist->category_key, true)))
                                                                                            @foreach (json_decode($editlist->category_key, true) as $value)
                                                                                             @if ($value == $rec->id) checked @endif @endforeach
                                                                                            @endif
                                                                                            @endisset>
                                                                                    <label class="form-check-label"
                                                                                        for="flexCheckDefault{{ $rec->id }}">
                                                                                        {{ $rec->category_title }}
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach
                                                                    @endforeach
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
                        <div class="col-lg-12 mb-3">
                            <div class="product_category_wrapper" id="Brand_List_wrapper">
                                <div class="card">
                                    <div class="card-header">
                                        Brand
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        @foreach ($brandlist as $data)
                                            <li class="list-group-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="{{ $data->id }}" name="productBrand"
                                                        id="flexCheckDefaultBrand{{ $data->id }}"
                                                        @isset($editlist) @if ($editlist->brand_id == $data->id) checked @endif @endisset>
                                                    <label class="form-check-label"
                                                        for="flexCheckDefaultBrand{{ $data->id }}">
                                                        {{ $data->b_title }}
                                                    </label>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>

                                </div>
                                @if ($errors->any())
                                    <div class="text-danger">
                                        @error('productBrand')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                @else
                                    <div id="lproductBrand" class="form-text">
                                        Select General Brand or Any other brand (In default select General Brand)
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="product_category_wrapper">
                                <div class="card">
                                    <div class="card-header">
                                        Tag
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        @foreach ($taglist as $data)
                                            <li class="list-group-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="{{ $data->id }}" name="ProductTag[]"
                                                        id="flexCheckDefaultTag{{ $data->id }}"
                                                        @isset($editlist)
                                                            @if (!empty(json_decode($editlist->tag_key, true)))
                                                            @foreach (json_decode($editlist->tag_key, true) as $value)
                                                             @if ($value == $data->id) checked @endif @endforeach
                                                            @endif
                                                            @endisset>
                                                    <label class="form-check-label"
                                                        for="flexCheckDefaultTag{{ $data->id }}">
                                                        {{ $data->t_title }}
                                                    </label>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    @if (isset($editlist))
                        <button type="submit" class="btn btn-success" id="savebtn_wrap">update</button>
                    @else
                        <button type="submit" class="btn btn-success" id="savebtn_wrap">Save</button>
                    @endif

                </div>
            </div>
            </form>
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
        $(document).ready(function() {
            if (window.File && window.FileList && window.FileReader) {
                $("#g_image").on("change", function(e) {
                    var files = e.target.files,
                        filesLength = files.length;
                    for (var i = 0; i < filesLength; i++) {
                        var f = files[i]
                        var fileReader = new FileReader();
                        fileReader.onload = (function(e) {
                            var file = e.target;
                            $("<span class=\"pip\">" +
                                "<img class=\"imageThumb\" src=\"" + e.target.result +
                                "\" title=\"" + file.name + "\"/>" +
                                "<br/><span class=\"remove\"><i class='fa fa-times'></i></span>" +
                                "</span>").appendTo("#holder");

                            $(".remove").click(function() {
                                $(this).parent(".pip").remove();
                            });
                        });
                        fileReader.readAsDataURL(f);
                    }
                    console.log(files);
                });
            } else {
                alert("Your browser doesn't support to File API")
            }
        });
    </script>
    <script>
        $("#Brand_List_wrapper .form-check label:contains(General Brand)").css("background-color", "yellow");
    </script>
    <script>
        $('.delete_gallery_item').click(function(e) {
            e.preventDefault();
            var val = $(this).attr('data-id');
            var url = " {{ route('gallery.delete', ':val') }} ";
            url = url.replace(':val', val);
            console.log(url);
            $.ajax({
                url: url,
                type: "delete",
                data: {
                    _token: "{{ csrf_token() }}",
                },
                success: function(res) {
                    location.reload(true);
                    toastr.success(res);
                }
            });

        });
    </script>
@endpush
