@extends('dashboard.layout')

@section('title', 'Rooms')

@section('content')

    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Rooms</strong></h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable" class="table table-hover ">
                                <thead class="table-active">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Number</th>
                                        <th scope="col">Room Type</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rooms as $room)    
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $room->number }}</td>
                                            <td>{{ $room->roomType->name }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                                    <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                    <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" class="d-inline">
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
