@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Employee Details</h1>
    <div class="card">
        <div class="card-header">
            {{ $employee->first_name }} {{ $employee->last_name }}
        </div>
        <div class="card-body">
            <p><strong>Company:</strong> {{ $employee->company->name }}</p>
            <p><strong>Email:</strong> {{ $employee->email }}</p>
            <p><strong>Phone:</strong> {{ $employee->phone }}</p>
        </div>
    </div>
    <a href="{{ route('employees.index') }}" class="btn btn-secondary mt-3">Back to Employees</a>
</div>
@endsection
