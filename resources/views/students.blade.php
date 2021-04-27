

@extends('layout')

@section('main_content')
<section style="padding-top:100px;">
     <div class="container">
        <div class="row">
           <div class="col-md-12">
                {!! $dataTable->table() !!}
           </div>
        </div>
     </div>
</section>
{!! $dataTable->scripts() !!}
@endsection
