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
            <form action="{{ route('products.store') }}" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        {{-- form content START --}}
                        <div class="product_form_wrapper">
                            <h5>Product Information</h5>
                            <hr>
                            <div class="form-group">
                                <label for="product_name" class="form-label">Product Name</label>
                                <input type="text" id="product_name" class="form-control" name="product_name">
                                <div id="lproduct_name" class="form-text">
                                    Enter product name
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="unit" class="form-label">Unit</label>
                                <input type="text" id="unit" class="form-control" name="unit">
                                <div id="lunit" class="form-text">
                                    Enter unit (e.g KG, Pc etc)
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" id="price" class="form-control" name="price">
                                <div id="lprice" class="form-text">
                                    Enter Price
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="refundable"
                                        name="refundable">
                                    <label class="form-check-label" for="refundable">Refundable</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                            </div>

                            <h5>Status</h5>
                            <hr>
                            <div class="form-group">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="featured" name="featured">
                                    <label class="form-check-label" for="featured">Featured</label>
                                </div>
                                <div id="lfeatured" class="form-text">
                                    If you enable this, this product will be granted as a featured product.
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="today_deal" name="today_deal">
                                    <label class="form-check-label" for="today_deal">Todays Deal</label>
                                </div>
                                <div id="ltoday_deal" class="form-text">
                                    If you enable this, this product will be granted as a todays deal product.
                                </div>
                            </div>

                            <h5>Flash Deal</h5>
                            <div id="product_name" class="form-text">
                                If you enable this, this product will be granted as a featured product.
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="flash_title" class="form-label">Add To Flash</label>
                                <input type="text" id="flash_title" class="form-control"
                                    placeholder="Choose Flash Title" name="flash_title">
                            </div>
                            <div class="form-group">
                                <label for="discount" class="form-label">Discount</label>
                                <input type="text" id="discount" class="form-control" placeholder="0"
                                    name="discount">
                            </div>
                            <div class="form-group">
                                <label for="discount_type" class="form-label">Discount Type</label>
                                <input type="text" id="discount_type" class="form-control"
                                    placeholder="Choose Discount Type" name="discount_type">
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
                                        src="{{ asset('backend/assets/img/pic (2).png') }}" alt="">
                                </div>
                                <div class="form-group">
                                    <input onchange="loadFile(event)" class="form-control" type="file"
                                        id="t_image" name="t_image">
                                    <div id="lt_image" class="form-text">
                                        Select Thumbnail Product image
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <h5>Product Gallery</h5>
                                <hr>
                                {{-- multiple images  --}}
                                <div id="product_multiple_image_wrapper">
                                    <div id="holder"></div>
                                </div>
                                <input type="file" id="g_image" name="g_image[]" multiple
                                    class="form-control">
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
                                            <li class="list-group-item">
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header cat_accordian_list_wrapper">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                            </div>
                                                            <button class="accordion-button collapsed"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseOne"
                                                                aria-expanded="false" aria-controls="collapseOne">
                                                                Accordion Item #1
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <div class="form-check">
                                                                    <input class="form-check-input"
                                                                        type="checkbox" value=""
                                                                        id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        Default checkbox
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                        <div class="create_wrap">
                                            <a href="" data-bs-toggle="modal"
                                                data-bs-target="#parent_category">Add New Category</a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="parent_category" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                Create
                                                                New Category</h1>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="category_name"
                                                                        class="form-label">Category Name</label>
                                                                    <input type="text" class="form-control"
                                                                        id="category_name"
                                                                        placeholder="Enter Category Name">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="" data-bs-toggle="modal"
                                                data-bs-target="#sub_category">Add Sub Category</a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="sub_category" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                Create
                                                                Sub Category</h1>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <select class="form-select"
                                                                    aria-label="Default select example">
                                                                    <option selected>Open this select menu</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                                <div id="product_name" class="form-text">
                                                                    Select category for child category
                                                                </div>
                                                            </div>
                                                            <div class="form-group mt-3">
                                                                <label for="category_name" class="form-label">Sub
                                                                    Category
                                                                    Name</label>
                                                                <input type="text" class="form-control"
                                                                    id="category_name"
                                                                    placeholder="Enter New Sub Category Name">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="product_category_wrapper">
                                    <div class="card">
                                        <div class="card-header">
                                            Brand
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Default checkbox
                                                    </label>
                                                </div>
                                            </li>

                                        </ul>
                                        <div class="create_wrap">
                                            <a href="">Add New Brand</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="product_category_wrapper">
                                    <div class="card">
                                        <div class="card-header">
                                            Tag
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Default checkbox
                                                    </label>
                                                </div>
                                            </li>

                                        </ul>
                                        <div class="create_wrap">
                                            <a href="">Add New Tag</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-success">Save</button>
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
    {{-- <script>
        function confirmation(event){
            alert('hi');
            event.preventDefault()

            var urlToRedirect = event.currentTarget.getAttribute('href');

            console.log(urlToRedirect);
            
            swal({
                title : 'Are you sure you want to delete this',

                text : "you won't be able to revert this delete",

                icon : "warning",

                buttons : true,

                dangerMode : true,

            }).then((willCancel){

                if(willCancel){

                    window.location.href = urlToRedirect ;
                }
            })
             
        }
    </script> --}}
@endpush
