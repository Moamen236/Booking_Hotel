@extends('dashboard.layout')

@section('title', 'Add new Room')

@section('content')
    
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Add New Room</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        {{-- <div class="card-header">
                            <h5 class="card-title mb-0">Empty card</h5>
                        </div> --}}
                        <div class="card-body">
                            <form action="{{ route('types.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label"><strong>Name</strong></label>
                                            <input type="text" class="form-control form-control-lg" id="name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="qty" class="form-label"><strong>Quantity</strong></label>
                                            <input type="text" class="form-control form-control-lg" id="qty" name="qty" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="image" class="form-label"><strong>Image</strong></label>
                                            <input type="file" class="form-control form-control-lg" id="image" name="image[]" multiple required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="price" class="form-label"><strong>Price</strong></label>
                                            <input type="number" class="form-control form-control-lg" id="price" name="price" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="max_geusts" class="form-label"><strong>Max Geusts</strong></label>
                                            <input type="number" class="form-control form-control-lg" id="max_geusts" name="max_geusts" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="status" class="form-label"><strong>Status</strong></label>
                                            <select class="form-control form-control-lg" id="status" name="status">
                                                <option value="1" selected>Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="content" class="form-label"><strong>Content</strong></label>
                                            <select class="form-select form-select-lg multiple-select" id="content" name="contents[]" multiple="multiple" required>
                                                @foreach ($contents as $content)
                                                    <option value="{{ $content->id }}">{{ $content->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="options" class="form-label"><strong>Options</strong></label>
                                            <select class="form-select form-select-lg multiple-select" id="options" name="options[]" multiple="multiple" required>
                                                @foreach ($options as $option)
                                                    <option value="{{ $option->id }}">{{ $option->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="description" class="form-label"><strong>Description</strong></label>
                                            <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Add discount
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <div class="discount">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="discount_type" class="form-label"><strong>Discount Type</strong></label>
                                                        <select class="form-control form-control-lg" id="discount_type" name="discount_type">
                                                            <option value="" selected>Select options</option>
                                                            <option value="1">Percentage</option>
                                                            <option value="0">Fixed</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="discount_value" class="form-label"><strong>Discount Value</strong></label>
                                                        <input type="number" class="form-control form-control-lg" id="discount_value" name="discount_value" >
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="new_price" class="form-label"><strong>New price</strong></label>
                                                        <input type="number" class="form-control form-control-lg" id="new_price" name="new_price" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="discount_start" class="form-label"><strong>Discount Start</strong></label>
                                                        <input type="date" class="form-control form-control-lg" id="discount_start" name="discount_start" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="discount_end" class="form-label"><strong>Discount End</strong></label>
                                                        <input type="date" class="form-control form-control-lg" id="discount_end" name="discount_end" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg float-end">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

@endsection

@section('scripts')
    <script>

        $(document).ready(function() {
            $('.multiple-select').select2();


            $('.discount').hide();
            $('#flexCheckDefault').click(function() {
                if($(this).is(':checked')) {
                    $('.discount').show(200);
                } else {
                    $('.discount').hide(200);
                }
            });

            // function discount on price
            $('#discount_type').change(function() {
                var price;
                if($(this).val() == 1) {
                    console.log($('#price').val() , $('#discount_value').val());
                    price = ( $('#price').val() * $('#discount_value').val() ) / 100
                } else {
                    price = $('#price').val() - $('#discount_value').val()
                }
                $('#new_price').val(price)
            });
        });

        
    </script>
@endsection