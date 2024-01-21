@extends('layouts.app')
@section('title', 'Add Students')
@section('content')

    <div class="add-student text-center">
        <div class="row justify-content-center">
            @if(session('success'))
            <script>
                toastr.success('{{ session('success') }}');
            </script>
        @endif
            <div class="col-md-4">
                <form action="{{route('students.save')}}" method="post">
                    @csrf
                <div class="form">
                    <div class="mb-3">
                        <input type="name" class="form-control" name="name" placeholder="johan dee">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="phone" placeholder="123-456-7890">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                    </div>

                    <div class="save-btn"> <!-- Adjusted the alignment to left -->
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
            </div>

        </div>
    </div>

@endsection
