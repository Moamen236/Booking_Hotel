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
                                    <a href="{{ route('types.create') }}" class="btn btn-primary"> Add new </a>
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
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Options</th>
                                        <th scope="col">Content</th>
                                        <th scope="col">Max Geusts</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Status</th>
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
                                            <td>{{ $type->qty }}</td>
                                            <?php
                                                $get_options = [];
                                                $options = explode(',', $type->options);
                                                foreach ($options as $key => $option) {
                                                    $get_options[] = App\Models\RoomOptions::find($option);
                                                }
                                                
                                                $get_contents = [];
                                                $contents = explode(',', $type->contents);
                                                foreach ($contents as $key => $content) {
                                                    $get_contents[] = App\Models\RoomContent::find($content);
                                                }
                                            ?>
                                            <td>
                                                @foreach ($get_options as $option)
                                                    <span class="badge bg-primary">{{ $option->name }}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($get_contents as $content)
                                                    <span class="badge bg-primary">{{ $content->name }}</span>
                                                @endforeach
                                            </td>
                                            <td>{{ $type->max_geusts }}</td>
                                            <td>{{ $type->price }}$</td>
                                            <td>
                                                @if ($type->is_active == 1)
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            <td>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                                    <a href="{{ route('types.edit', $type->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                    <form action="{{ route('types.destroy', $type->id) }}" method="POST" class="d-inline">
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

@endsection

@section('scripts')
    <script>
        $('#search_input').on('keyup', function(){
            var input = $(this).val();
            console.log(input);
        })
    </script>
    
@endsection