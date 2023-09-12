@extends('layouts.main')

@section('page-title', 'Homepage')

{{-- @section('page-title')
Homepage
@endsection --}}

@section('main-content')
<div class="container">
    <div class="row mb-5">
        <div class="col">
            <h1>
                Comics
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @foreach ($Comics as $comic)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="card-img-top">
                        <div class="card-body">
                            <h2 class="text-primary">
                                {{ $comic['title'] }}
                            </h2>

                            <h3>
                                {{ $comic['series'] }}

                                <small>
                                    {{ $comic['sale_date'] }}
                                </small>
                            </h3>

                            <h4 class="text-success">
                                {{ $comic['price'] }}
                            </h4>
        
                            <p>
                                {{ $comic['description'] }}
                            </p>
        
                        
                        </div>
                    </div>
                  
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
