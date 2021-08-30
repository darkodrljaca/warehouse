@extends('layouts.main')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('companies.index') }}">Фирме</a></li>
                <li class="breadcrumb-item"><a href="{{ route('companies.create') }}">Креирање фирме</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ажурирање града</li>
            </ol>
        </nav>                        
    </div>
    <div class="container">        
        <div class="row justify-content-center">              
                <div class="col-md-8">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>                                  
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-city"></i>                       
                        <a href="{{ route('companies.create') }}" class="float-right"><i class="fas fa-angle-left"></i><span class="px-2">Назад</span></a>                        
                    </div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('update-city-from-company-create', [$city->id]) }}">
                            @csrf
                            @method('PUT')                            
    
                            <div class="form-group row">
                                <label for="country_id" class="col-md-4 col-form-label text-md-right">{{ __('Држава') }}</label>                                

                                <div class="col-md-6">
                                    <select name="country_id" class="form-control livesearch" aria-label="Default select example">
                                        @if (session()->has('country_name') && session()->has('country_id'))
                                            <option value="{{ session('country_id') }}" >                                                                                            
                                                {{ session('country_name') }} {{ "<a href='../../../../../companies/create/cities/".$city->id."/edit/countries/".session('country_id')."/edit' class='btn btn-link btn-sm float-right'>Измена</a>" }}                                                
                                            </option>
                                        @else
                                            <option value="{{ $city->country_id }}" >                                                                                                                                            
                                                {{ $country_name }} {{ "<a href='../../../../../companies/create/cities/".$city->id."/edit/countries/".$city->country_id."/edit' class='btn btn-link btn-sm float-right'>Измена</a>" }}
                                            </option>    
                                        @endif
                                    </select>                                                                                                                                                            
                                    @error('country_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>                                
                            </div>
     
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Назив') }}</label>
    
                                <div class="col-md-6">                                                                        
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $city->name) }}" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="postal_code" class="col-md-4 col-form-label text-md-right">{{ __('Поштански број') }}</label>
    
                                <div class="col-md-6">
                                    <input id="postal_code" type="text" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" value="{{ old('postal_code', $city->postal_code) }}" required>
    
                                    @error('postal_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Ажурирај') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                @if (isset($errors) && count($errors))
     
                                There were {{count($errors->all())}} Error(s)
                                            <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }} </li>
                                        @endforeach
                                    </ul>
                                    
                            @endif                
            </div>
        </div>
    </div>

    <script type="text/javascript">        
        let city_id = {!! json_encode($city->id) !!};
        // let country_id = {!! json_encode($city->country_id) !!};
        $('.livesearch').select2({
            placeholder: 'Изаберите државу',
            ajax: {
                url: '/ajax-autocomplete-search-countries',
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                    return {
                        results: $.map(data, function (item) {
                            return {
                                text: item.name + " <a href='../../../../companies/create/cities/"+city_id+"/edit/countries/"+item.id+"/edit' class='btn btn-link btn-sm float-right'>Измена</a>",
                                id: item.id
                            }
                        })
                    };
                },
                cache: true
            },
            "language": {
            "noResults": function(){
                return "Држава није пронађена <a href='../../../../companies/create/cities/"+city_id+"/edit/countries/create' class='btn btn-primary'>Креирајте нову</a>";                
            }
        },
            escapeMarkup: function (markup) {
                return markup;
            }
        });
    </script>

@endsection    