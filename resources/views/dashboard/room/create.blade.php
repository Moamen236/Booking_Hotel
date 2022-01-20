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
                            <form action="{{ route('rooms.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="number" class="form-label">Number</label>
                                            <input type="text" class="form-control form-control-lg" id="number" name="number" placeholder="Enter room number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="room_type" class="form-label">Room Type</label>
                                            <select class="form-control form-control-lg" id="room_type" name="room_type">
                                                <option value="">Select room type</option>
                                                @foreach ($room_types as $room_type)
                                                    <option value="{{ $room_type->id }}">{{ $room_type->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Image</label>
                                            <input type="file" class="form-control form-control-lg" id="image" name="image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="price" class="form-label">Price</label>
                                            <input type="number" class="form-control form-control-lg" id="price" name="price" placeholder="Enter room price">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="max_geusts" class="form-label">Max Geusts</label>
                                            <input type="number" class="form-control form-control-lg" id="max_geusts" name="max_geusts" placeholder="Enter room Max Geusts">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="options" class="form-label">Options</label>
                                            <select class="form-control form-control-lg" id="options" name="options">
                                                <option value="">Select options</option>
                                                @foreach ($room_types as $room_type)
                                                    <option value="{{ $room_type->id }}">{{ $room_type->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="content" class="form-label">Content</label>
                                            <select class="form-control form-control-lg" id="content" name="content">
                                                <option value="">Select Content</option>
                                                @foreach ($room_types as $room_type)
                                                    <option value="{{ $room_type->id }}">{{ $room_type->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Status</label>
                                            <select class="form-control form-control-lg" id="status" name="status">
                                                <option value="">Select status</option>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

@endsection