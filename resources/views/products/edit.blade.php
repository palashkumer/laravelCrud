<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Laravel CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="bg-dark py-3">
        <h3 class="text-white text-center">Simple laravel CRUD</h3>
    </div>

    <div class="container">

        <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end ">
                <a href="{{route('products.index')}}" class="btn btn-dark">Back</a>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Edit product</h3>
                    </div>
                    <form enctype="multipart/form-data" action="{{route('products.update',$product->id)}}" method="post">
                        @method ("put")
                        @csrf
                        <div class="card-body ">
                            <div class="mb-3">
                                <label for="" class="form-lebel h5">Name</label>
                                <input type="text" value="{{old('name', $product->name)}}" class="@error('name') is-invalid @enderror form-control form-control-lg" placeholder="Name" name="name">
                                @error('name')
                                <p class="invalid-feedback"> {{$message}} </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-lebel h5">SKU</label>
                                <input type="text" value="{{old('sku',$product->sku)}}" class="@error('sku') is-invalid @enderror form-control form-control-lg" placeholder="SKU" name="sku">
                                @error('sku')
                                <p class="invalid-feedback"> {{$message}} </p>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <label for="" class="form-lebel h5">Price</label>
                                <input type="text" value="{{old('price', $product->price)}}" class="@error('price') is-invalid @enderror form-control form-control-lg" placeholder="Price" name="price">
                                @error('price')
                                <p class="invalid-feedback"> {{$message}} </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-lebel h5">Description</label>
                                <textarea name="description" cols="30" rows="5" class="form-control form-control-lg" value="{{old('description', $product->description)}}"></textarea>
                            </div>
                            <!-- <div class="mb-3">
                                <label for="" class="form-lebel h5">Image</label>
                                <input type="file" class="form-control form-control-lg" placeholder="image" name="image">
                                @if ($product->image != "")
                                <img class="w-50 my-3" src="{{ asset('uploads/products/'.$product->image)}}" alt="">
                                @endif
                            </div> -->
                            <div class="d-grid">
                                <button class="btn btn-lg btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>