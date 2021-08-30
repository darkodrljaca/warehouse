@extends('layouts.main')

@section('content')

   <div class="row">
       <div class="col-md-6 offset-md-3">
           <div class="card">
               <div class="card-header">
                   Импортовање држава
               </div>
               <div class="card-body">
                    <form action="{{ route('import.countries') }}" 
                            method="POST" 
                            enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="file">Изаберите CSV или Excel фајл</label>
                            <input type="file" name="file" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Импортуј</button>
                    </form>
               </div>
           </div>
       </div>
   </div>

@endsection