@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('termino el inicio del secion') }}</div>

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
    font-size:200%;
}
.APP_NAME{
    color: #000;
}





</style>
</div>
@endsection
