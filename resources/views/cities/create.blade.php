@extends('layouts.main')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Градови</h1>                        
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
                        {{ __('Креирање') }}
                        @if (session()->has('route_previous'))
                            <a href="{{ session('route_previous') }}" class="float-right">Назад</a>   
                        @else
                            <a href="{{ route('cities.index') }}" class="float-right">Назад</a>
                        @endif                                               
                    </div>    
                    <div class="card-body">
                        <form method="POST" action="{{ route('cities.store') }}">
                            @csrf                                                        

                            <div class="form-group row">
                                <label for="country_id" class="col-md-4 col-form-label text-md-right">{{ __('Држава') }}</label>                                

                                <div class="col-md-6">
                                    <select name="country_id" class="form-control livesearch" aria-label="Default select example">
                                        @if (session()->has('country_name') && session()->has('country_id'))
                                            <option value="{{ session('country_id') }}" >                                                                                            
                                                {{ session('country_name') }} {{ "<a href='../../cities/create/countries/".session('country_id')."/edit' class='btn btn-link btn-sm float-right'>Измена</a>" }}
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
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
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
                                    <input id="postal_code" type="text" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" value="{{ old('postal_code') }}" required autocomplete="postal_code" autofocus>
    
                                    @error('postal_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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
                                                         
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Креирање') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
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
                                text: item.name + " <a href='../cities/create/countries/"+item.id+"/edit' class='btn btn-link btn-sm float-right'>Измена</a>",
                                id: item.id
                            }
                        })
                    };
                },
                cache: true
            },
            "language": {
                "noResults": function(){
                    return "Држава није пронађена <a href='../cities/create/countries/create' class='btn btn-primary btn-sm'>Креирајте нову</a>";                
                }
            },
            escapeMarkup: function (markup) {
                return markup;
            }
        });
    </script>

@endsection    