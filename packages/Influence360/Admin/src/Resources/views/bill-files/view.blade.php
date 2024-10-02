<!-- packages/Influence360/BillFiles/src/Resources/views/view.blade.php -->

@extends('admin::components.layouts.index')

@section('content')
    <div class="container">
        <h1>{{ $billFile->billname }}</h1>
        <p><strong>Status:</strong> {{ $billFile->status }}</p>
        <p><strong>Year:</strong> {{ $billFile->year }}</p>
        <p><strong>Session:</strong> {{ $billFile->session }}</p>
        <p><strong>Sponsor:</strong> {{ $billFile->sponsor }}</p>
        <!-- Add more fields as necessary -->
        <a href="{{ route('admin.bill-files.index') }}" class="btn btn-secondary">Back to Bill Files</a>
    </div>
@endsection
