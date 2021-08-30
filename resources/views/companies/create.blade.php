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
              <li class="breadcrumb-item active" aria-current="page">Креирање фирме</li>
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
                        <form id="company_create_form" method="POST" action="{{ route('companies.store') }}">
                            @csrf
                                                            
                            <div class="form-group row">

                                {{-- <input type="hidden" id="tab_id" name="tab_id"  class="companies-create" value={{ $tab_id }}> --}}

                                <label for="city_id" class="col-md-4 col-form-label text-md-right">{{ __('Град') }}</label>                                

                                <div class="col-md-6">
                                    <select name="city_id" class="form-control livesearch" 
                                        aria-label="Default select example" required>
                                        @if (session()->has('city_name') && session()->has('city_id'))
                                            <option value="{{ session('city_id') }}" >                                                                                            
                                                {{ session('city_name') }} {{ "<a href='../../companies/create/cities/".session('city_id')."}/edit' class='btn btn-link btn-sm float-right'>Измена</a>" }}
                                            </option>
                                        @endif 
                                    </select>                                                                                                                                                            
                                    @error('city_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>                                
                            </div>
    
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Назив') }}</label>
    
                                <div class="col-md-6">
                                    <input 
                                            id="name" 
                                            type="text" 
                                            class="form-control @error('name') is-invalid @enderror companies-create" 
                                            name="name" 
                                            value="{{ old('name') }}" 
                                            required autocomplete="name" 
                                            autofocus
                                            data-toggle="tooltip" 
                                            data-placement="right" 
                                            title="Назив предузећа">
    
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
                                    <input 
                                            id="maticni_broj" 
                                            type="text" 
                                            class="form-control @error('maticni_broj') is-invalid @enderror companies-create"                                                 
                                            name="maticni_broj" 
                                            value="{{ old('maticni_broj') }}" 
                                            required autocomplete="maticni_broj" 
                                            autofocus
                                            data-toggle="tooltip" 
                                            data-placement="right" 
                                            title="Матични број предузећа је број од 8 цифара">
    
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
                                    <input 
                                            id="sifra_delatnosti" 
                                            type="text" 
                                            class="form-control 
                                            @error('sifra_delatnosti') is-invalid @enderror @error('maticni_broj') is-invalid @enderror companies-create"  
                                            name="sifra_delatnosti" 
                                            value="{{ old('sifra_delatnosti') }}" 
                                            required 
                                            autocomplete="sifra_delatnosti" 
                                            autofocus
                                            data-toggle="tooltip" 
                                            data-placement="right" 
                                            title="Шифра делатности предузећа">
    
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
                                    <input 
                                        id="pib" 
                                        type="text" 
                                        class="form-control @error('pib') is-invalid 
                                        @enderror @error('maticni_broj') is-invalid @enderror companies-create"  
                                        name="pib" 
                                        value="{{ old('pib') }}" 
                                        required 
                                        autocomplete="pib" 
                                        autofocus
                                        data-toggle="tooltip" 
                                        data-placement="right" 
                                        title="Порески идентификациони број предузећа"
                                        onClick="storeTabId()"
                                    >
    
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

        // function storeTabId(){            
        //     var datastring = $(".companies-create").serializeArray();            
        //     $.ajax({
        //         method: 'POST', 
        //         url: '/permanent-screen-sessions',
        //         data: {
        //             _token: '{{csrf_token()}}',
        //             // 'element_name' : 'companies_create-' + $element_name,
        //             // 'element_value' : $element_value,                    
        //             'datastring' : datastring
        //             }, 
        //         success: function(response){ 
        //             console.log('all cool');
        //         },
        //         error: function(jqXHR, textStatus, errorThrown) { 
        //             console.log(JSON.stringify(jqXHR));
        //             console.log("AJAX error: " + textStatus + ' : ' + errorThrown);                    
        //         }
        //     });
        // }

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
                                text: item.name + "<a href='../../companies/create/cities/"+item.id+"/edit' class='btn btn-link btn-sm float-right'>Измена</a>",
                                id: item.id
                            }
                        })
                    };
                },
                cache: true
            },
            "language": {
                "noResults": function(){
                    return "Град није пронађен <a href='../../companies/create/cities/create' onClick='storeTabId()' class='btn btn-primary btn-sm'>Креирајте нови</a>";                
                }
            },
            escapeMarkup: function (markup) {
                return markup;
            }
        });
// Save fileds values in flash sessions:
        // $( ".companies-create" ).change(function() {
        //     $element_name = $(this).attr('name');
        //     $element_value = $(this).val();                        
        //     $.ajax({
        //         method: 'POST', 
        //         url: '/permanent-screen-sessions',
        //         data: {
        //             _token: '{{csrf_token()}}',
        //             'element_name' : 'companies_create-' + $element_name,
        //             'element_value' : $element_value,                    
        //             }, 
        //         success: function(response){ 
        //             console.log('all cool');
        //         },
        //         error: function(jqXHR, textStatus, errorThrown) { 
        //             console.log(JSON.stringify(jqXHR));
        //             console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
        //         }
        //     })
        // });

        // $(document).ready(function(){
        //     $("button").click(function(){
        //         $("a").trigger("click");
        //     });
        // });
        
    </script>

@endsection    