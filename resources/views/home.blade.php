@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('rosa') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="rrrrr">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('rosa!') }}
                    <ul>esto es una pagina</ul>
                </div>
            </div>
        </div>
    </div>

    <style>

.card-header{

    color:#f00012;
}




</style>
</div>
@endsection
