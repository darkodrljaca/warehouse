@extends('layouts.main')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-industry"></i><span class="px-2">Фирме</span></h1>
        <a href="{{ route('companies.index') }}" class="float-right"><i class="fas fa-angle-left"></i><span class="px-2">Назад</span></a>                        
    </div>
    <div class="container mt-5">
        <h2 class="text-center mb-3">Списак свих фирми</h2>

        <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-primary" href="{{ URL::to('companies-all-generate-pdf') }}">Преузимање PDF-а</a>
        </div>

        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">                    
                    <th scope="col">Назив</th>
                    <th scope="col">Место</th>
                    <th scope="col">Држава</th>
                </tr>
            </thead>
            <tbody>
                @foreach($companies ?? '' as $company)
                <tr>                    
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->city->name }}</td>
                    <td>{{ $company->city->country->name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection   