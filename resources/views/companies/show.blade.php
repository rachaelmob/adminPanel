@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Company Details</h1>
    <div class="card">
        <div class="card-header">
            {{ $company->name }}
        </div>
        <div class="card-body">
            <p><strong>Email:</strong> {{ $company->email }}</p>
            <p><strong>Website:</strong> <a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a></p>
            <p>
                <strong>Logo:</strong><br>
                @if ($company->logo)
                    <img src="{{ Storage::url($company->logo) }}" alt="{{ $company->name }}" width="100">
                @endif
            </p>
        </div>
    </div>
    <a href="{{ route('companies.index') }}" class="btn btn-secondary mt-3">Back to Companies</a>
</div>
@endsection
