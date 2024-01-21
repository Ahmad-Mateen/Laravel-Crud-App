@extends('layouts.app')
@section('title', 'Students Records')
@section('content')

    <div class="main-div">
        @if(session('success'))
    <script>
        toastr.success('{{ session('success') }}');
    </script>
@endif
        <a href="{{route('students.add')}}" class="btn btn-primary add-student">Add Student</a>
        <div class="table-dive">
            <table id="example" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($students as $index => $data)
                        <tr>
                            <td>{{ $data['name'] }}</td>
                            <td>{{ $data['email'] }}</td>
                            <td>{{ $data['phone'] }}</td>
                            <td>{{ $data['address'] }}</td>
                            <td>{{ $data['created_at'] }}</td>
                            <td>
                                <a href="{{route('students.edit',['id'=>$data['id']])}}" class="btn btn-warning">Edit</a>
                                <a href="{{route('students.delete',['id'=>$data['id']])}}" class="btn btn-warning">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
        </div>

    </div>



@endsection
