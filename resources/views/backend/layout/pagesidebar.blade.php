<div class="product_sidebar_wrapper">
    <ul class="product-nav">
        <li class="productnav-link {{ request()->is('product/create') ? 'active' : '' }}"><a href="{{ route('products.create') }}">General</a></li>
        <li class="productnav-link {{ request()->is('brand/*') ? 'active' : '' }}"><a href="{{ route('brand.create') }}">Add Brands</a></li>
        <li class="productnav-link {{ request()->is('category/*') ? 'active' : '' }}"><a href="{{ route('categories.create') }}">Add Category</a></li>
        <li class="productnav-link {{ request()->is('tag/*') ? 'active' : '' }}"><a href="{{ route('tag.create') }}">Add Tags</a></li>
    </ul>
 </div>