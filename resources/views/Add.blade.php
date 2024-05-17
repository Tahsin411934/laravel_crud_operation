@extends('layouts.app')

@section('content')
<div class="w-[40%] mx-auto shadow-xl">
    <P class="text-center text-2xl font-bold mt-10" >Add Your Information</P>
    @if (Session::has('msg'))
    <p class="text-green-500 text-xl font-semibold w-[250px] pt-[2rem] mx-auto">{{ Session::get('msg') }}</p>
@endif

    <form action="{{url('/store') }}" method="POST" class="card-body">
        @csrf <!-- Add CSRF protection -->
        <div class="form-control">
            <label class="label">
                <span class="label-text">Name</span>
            </label>
            <input type="text" name="name" placeholder="Name" class="input input-bordered" required>
        </div>
        <div class="form-control">
            <label class="label">
                <span class="label-text">Email</span>
            </label>
            <input type="email" name="email" placeholder="Email" class="input input-bordered" required>
        </div>
        <div class="form-control">
            <label class="label">
                <span class="label-text">Address</span>
            </label>
            <input type="text" name="address" placeholder="Address" class="input input-bordered" required>
        </div>
        <div class="form-control">
            <label class="label">
                <span class="label-text">Short Description</span>
            </label>
            <input type="text" name="short_description" placeholder="Short Description" class="input input-bordered" required>
        </div>
        <div class="form-control mt-6">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
</div>
@endsection
