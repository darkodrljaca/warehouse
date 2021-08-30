@extends('layouts.main')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-industry"></i><span class="px-2">Фирме</span></h1>
        <a href="{{ route('companies-all-show-pdf') }}" class="float-right"><span class="px-2">Штампа</span><i class="fas fa-print"></i></a>                        
    </div>
    <div class="row">
        <div class="card mx-auto">
          <div>
            @if (session()->has('message'))
              <div class="alert alert-success">
                {{ session('message') }}
              </div>
            @endif
          </div>
            <div class="card-header">
              <div class="row">
                <div class="col">
                  <form method="GET" action="{{ route('companies.index') }}">
                    <div class="form-row align-items-center">
                      <div class="col">
                        <input type="search" name="search" class="form-control mb-2" id="inlineFormInput"
                        placeholder="">                        
                      </div>
                      <div class="col">
                        <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-search"></i><span class="px-2">Претрага</span></button>
                      </div>
                    </div>
                  </form>
                </div>
                <div>
                  <a href="{{ route('companies.create') }}" class="float-right"><span class="px-2">Креирање</span><i class="fas fa-angle-right"></i></a>
                </div>                
              </div>              
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                      <tr>                                                
                        <th scope="col">@sortablelink('name', 'Назив')</th>                        
                        <th scope="col">@sortablelink('city.name', 'Град')</th>                        
                        <th scope="col"></th>                                                                        
                      </tr>
                    </thead>
                    <tbody>                      
                      @foreach ($companies as $company)
                        <tr>                                                                                                                 
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->city->name }}</td>                                                                                    
                            <td>                            
                              <a href="{{ route('companies.edit', $company->id) }}" title="Ажурирање">  
                                <i class="fas fa-edit text-success fa-lg"></i>            
                              </a>
                              <a data-toggle="modal" id="smallButton" data-target="#smallModal" data-attr="{{ route('delete-company', $company->id) }}" title="Брисање">
                                <i class="fas fa-trash text-danger  fa-lg"></i>
                              </a>
                              <a href="#" 
                                @if ($company->created_at == $company->updated_at)
                                  title="Креирао {{ $company->user->username }} {{ date('d M Y h:m', strtotime($company->created_at)) }} " 
                                @else
                                  title="Ажурирао {{ $company->user->username }}  {{ date('d M Y h:m', strtotime($company->updated_at)) }} "   
                                @endif
                                style="cursor: default;"                                 
                              >  
                                <i class="fas fa-info-circle fa-lg"></i>            
                              </a>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    
      <div class="d-flex justify-content-center">
          {{-- {!! $companies->links() !!} --}}
          {!! $companies->appends(\Request::except('page'))->render() !!}
      </div >
    

<!-- small modal -->
<div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body" id="smallBody">
              <div>
                  <!-- the result to be displayed apply here -->
              </div>
          </div>
      </div>
  </div>
</div>


<script>
  // display a modal (small modal)
  $(document).on('click', '#smallButton', function(event) {
      event.preventDefault();
      let href = $(this).attr('data-attr');
      $.ajax({
          url: href
          , beforeSend: function() {
              $('#loader').show();
          },
          // return the result
          success: function(result) {
              $('#smallModal').modal("show");
              $('#smallBody').html(result).show();
          }
          , complete: function() {
              $('#loader').hide();
          }
          , error: function(jqXHR, testStatus, error) {
              console.log(error);
              alert("Page " + href + " cannot open. Error:" + error);
              $('#loader').hide();
          }
          , timeout: 8000
      })
  });

</script>

@endsection    