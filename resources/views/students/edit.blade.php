@extends('layouts.app')
@section('title', 'Edit student')
@section('content')

    <div class="add-student text-center">
        <div class="row justify-content-center">

            <div class="col-md-4">
                <form action="{{ route('students.update', ['id' => $student['id']]) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" value="{{ old('name', $student->name) }}" placeholder="John Doe">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email" value="{{ old('email', $student->email) }}" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="phone" value="{{ old('phone', $student->phone) }}" placeholder="123-456-7890">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="address" name="address" rows="3">{{ old('address', $student->address) }}</textarea>
                        </div>

                        <div class="save-btn">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

@endsection
