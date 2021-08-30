@extends('layouts.main')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Корисници</h1>                        
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
                  <form method="GET" action="{{ route('users.index') }}">
                    <div class="form-row align-items-center">
                      <div class="col">
                        <input type="search" name="search" class="form-control mb-2" id="inlineFormInput"
                        placeholder="">                        
                      </div>
                      <div class="col">
                        <button type="submit" class="btn btn-primary mb-2">Претрага</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div>
                  <a href="{{ route('users.create') }}" class="float-right">Креирање</a>
                </div>                
              </div>              
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Презиме</th>                                                  
                        <th scope="col">Име</th>                        
                        <th scope="col">Корис. име</th>
                        <th scope="col">Пошта</th>
                        <th scope="col">Активан</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>                      
                      @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->last_name }}</td>                            
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td> @if($user->isActive) Da @else Ne @endif </td>                                                                                                                                                                                                                                                               
                            @if ($user->created_at == $user->updated_at)
                              <td> Креирано {{ date('d M Y h:m', strtotime($user->created_at)) }} </td>
                            @else
                              <td> Ажурирано {{ date('d M Y h:m', strtotime($user->updated_at)) }} </td>
                            @endif
                            <td>
                              <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success">Измена</a>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection    