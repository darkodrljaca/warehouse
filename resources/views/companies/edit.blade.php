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
              <li class="breadcrumb-item active" aria-current="page">Ажурирање фирме</li>
            </ol>
          </nav>                        
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-industry"></i>
                        <a href="{{ route('companies.index') }}" class="float-right"><i class="fas fa-angle-left"></i><span class="px-2">Назад</span></a>
                    </div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('companies.update', $company->id) }}">
                            @csrf
                            @method('PUT')                            
    
                            <div class="form-group row">
                                <label for="city_id" class="col-md-4 col-form-label text-md-right">{{ __('Град') }}</label>                                

                                <div class="col-md-6">
                                    <select name="city_id" class="form-control livesearch" aria-label="Default select example">
                                        @if (session()->has('city_name') && session()->has('city_id'))
                                            <option value="{{ session('city_id') }}" >                                                                                                                                            
                                                {{ session('city_name') }} {{ "<a href='../../companies/". $company->id ."/edit/cities/".session('city_id')."/edit' class='btn btn-link btn-sm float-right'>Измена</a>" }}
                                            </option>
                                        @else
                                            <option value="{{ $company->city_id }}" >                                                                                                                                            
                                                {{ $city_name }} {{ "<a href='../../companies/". $company->id ."/edit/cities/". $company->city_id ."/edit' class='btn btn-link btn-sm float-right'>Измена</a>" }}
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
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $company->name) }}" required>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="maticni_broj" class="col-md-4 col-form-label text-md-right">{{ __('Матични број') }}</label>
    
                                <div class="col-md-6">
                                    <input id="maticni_broj" type="text" class="form-control @error('maticni_broj') is-invalid @enderror" name="maticni_broj" value="{{ old('maticni_broj', $company->maticni_broj) }}" required>
    
                                    @error('maticni_broj')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="sifra_delatnosti" class="col-md-4 col-form-label text-md-right">{{ __('Шифра делатности') }}</label>
    
                                <div class="col-md-6">
                                    <input id="sifra_delatnosti" type="text" class="form-control @error('sifra_delatnosti') is-invalid @enderror" name="sifra_delatnosti" value="{{ old('sifra_delatnosti', $company->sifra_delatnosti) }}" required>
    
                                    @error('sifra_delatnosti')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pib" class="col-md-4 col-form-label text-md-right">{{ __('ПИБ') }}</label>
    
                                <div class="col-md-6">
                                    <input id="pib" type="text" class="form-control @error('pib') is-invalid @enderror" name="pib" value="{{ old('pib', $company->pib) }}" required>
    
                                    @error('pib')
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
    let company_id = {!! json_encode($company->id) !!};
        $('.livesearch').select2({
            placeholder: 'Изаберите град',
            ajax: {
                url: '/ajax-autocomplete-search-cities',
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                    return {
                        results: $.map(data, function (item) {
                            return {
                                text: item.name + " <a href='../../companies/"+company_id+"/edit/cities/"+item.id+"/edit' class='btn btn-link btn-sm float-right'>Измена</a>",
                                id: item.id
                            }
                        })
                    };
                },
                cache: true
            },
            "language": {
                "noResults": function(){
                    return "Град није пронађен <a href='../../companies/"+company_id+"/edit/cities/create' class='btn btn-primary btn-sm'>Креирајте нови</a>";                
                }
            },
            escapeMarkup: function (markup) {
                return markup;
            }
        });
    </script>

@endsection    