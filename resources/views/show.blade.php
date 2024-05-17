@extends('layouts.app')

@section('content')
<div class="overflow-x-auto w-[80%] mx-auto">
    <P class="text-center text-2xl font-bold mt-10 mb-7" >Show Added Information</P>
    <table class="table">
        <!-- head -->
        <thead>
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>EMAIL</th>
                <th>ADDRESS</th>
                <th>SHORT DESCRIPTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($showData as $key => $data)
            <tr>
                <th>{{ $key + 1 }}</th>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->address }}</td>
                <td>{{ $data->short_description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
