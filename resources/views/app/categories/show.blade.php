@extends('app.layout.app')
@section('content')
    <!-- Categories -->
    <div class="row mt-6">
        <div class="col-12 mb-4">
            <span class="badge bg-pastel-danegr text-danger text-uppercase-bold-sm">
                {{ $category->category_name }}
            </span>
        </div>

        @foreach ($category->products as $product)
            <!-- Category -->
            <div class="col-md-3 mb-4">
                <a href="#" class="card align-items-center text-decoration-none border-0 hover-lift-light py-4">
                    <span class="icon-circle icon-circle-lg bg-pastel-primary text-primary">

                        <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512">
                            <title>ionicons-v5-p</title>
                            <path
                                d="M403.29,32H280.36a14.46,14.46,0,0,0-10.2,4.2L24.4,281.9a28.85,28.85,0,0,0,0,40.7l117,117a28.86,28.86,0,0,0,40.71,0L427.8,194a14.46,14.46,0,0,0,4.2-10.2V60.8A28.66,28.66,0,0,0,403.29,32Z"
                                style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                            </path>
                            <path d="M352,144a32,32,0,1,1,32-32A32,32,0,0,1,352,144Z"></path>
                            <path d="M230,480,492,218a13.81,13.81,0,0,0,4-10V80"
                                style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                            </path>
                        </svg>
                    </span>
                    <span class="text-dark mt-3">
                        {{ 'Name: ' . $product->product_title }}
                    </span>
                    <span class="text-dark mt-3">
                        {{ 'Sku: ' . $product->product_sku }}
                    </span>
                    <span class="text-dark mt-3">
                        {{ 'qty: ' . $product->qty }}
                    </span>
                    <span class="text-dark mt-3">
                        {{ 'price: ' . $product->price }}
                    </span>
                </a>
            </div>
        @endforeach
    @endsection
