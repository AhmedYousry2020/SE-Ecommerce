 @extends('app.layout.app')
 @section('content')
     <!-- Categories -->
     <div class="row mt-6">
         <div class="col-12 mb-4">
             <span class="badge bg-pastel-primary text-primary text-uppercase-bold-sm">
                 All categories
             </span>
             <a class="badge bg-pastel-danger text-danger text-uppercase-bold-sm" href="{{ route('products.index') }}">All
                 Products</a>
         </div>


         @foreach ($categories as $category)
             <!-- Category -->
             <div class="col-md-3 mb-4">
                 <a href="{{ route('categories.show', $category->id) }}"
                     class="card align-items-center text-decoration-none border-0 hover-lift-light py-4">
                     <span class="icon-circle icon-circle-lg bg-pastel-primary text-primary">
                         <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512">
                             <title>ionicons-v5-n</title>
                             <path
                                 d="M53.12,199.94l400-151.39a8,8,0,0,1,10.33,10.33l-151.39,400a8,8,0,0,1-15-.34L229.66,292.45a16,16,0,0,0-10.11-10.11L53.46,215A8,8,0,0,1,53.12,199.94Z"
                                 style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                             </path>
                             <line x1="460" y1="52" x2="227" y2="285"
                                 style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                             </line>
                         </svg>
                     </span>
                     <span class="text-dark mt-3">
                         {{ $category->category_name }}
                     </span>
                 </a>
             </div>
         @endforeach

     </div>
 @endsection
