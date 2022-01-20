@extends('dashboard.layout')

@section('title' , 'Room type')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Room Types</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#defaultModalPrimary"> Add new </button>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <input id="search_input" type="text" class="form-control" name="search" placeholder="Search" value="{{ request()->search }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="datatable" class="table table-hover ">
                                <thead class="table-active">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($room_types as $type)   
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td><img src="#" alt="room"></td>
                                            <td>{{ $type->name }}</td>
                                            <td>{{ Str::substr($type->description, 0, 100) }}...</td>
                                            <td>{{ $type->price }}$</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                                    <a href="{{ route('room-types.edit', $type->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                    <form action="{{ route('room-types.destroy', $type->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<!-- Add New Modal -->
<div class="modal fade" id="defaultModalPrimary" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add new Type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body m-3">
                <div class="mb-3">
                    <label for="email" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="email" placeholder="ex:- Single Room">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" name="price" class="form-control" id="price" placeholder="ex:- 20">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control" name="image" type="file" id="image">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Example textarea</label>
                    <textarea class="form-control" name="desc" id="description" rows="3" placeholder="Type a description"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <script>
        $('#search_input').on('keyup', function(){
            var input = $(this).val();
            console.log(input);
        })
    </script>
    
@endsection