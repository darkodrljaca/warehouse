@extends('layouts.main')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('companies.index') }}">Фирме</a></li>
                <li class="breadcrumb-item"><a href="{{ route('companies.create') }}">Креирање фирме</a></li>
                <li class="breadcrumb-item"><a href="{{ route('edit-city-from-company-create', ['city' => $city->id]) }}">{{ $city->name }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ажурирање државе</li>
            </ol>
        </nav>                        
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-globe"></i>
                        <a href="{{ route('edit-city-from-company-create', ['city' => $city->id]) }}" class="float-right"><i class="fas fa-angle-left"></i><span class="px-2">Назад</span></a>   
                    </div>
                    
                    <div class="card-body">
                        <form method="POST" action="{{ route('update-country-from-company-create_2', ['city'=>$city->id, 'country'=>$country->id]) }}">
                            @csrf
                            @method('PUT')
    
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Назив') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $country->name) }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>                            
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Сачувај') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>                
            </div>                        
        </div>
    </div>

@endsection    