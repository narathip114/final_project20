@extends('app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <ul>
    <img src= "https://scontent.fbkk5-5.fna.fbcdn.net/v/t1.15752-9/311002574_1476443956172836_7625553538965832409_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeG2mNc3Aw0UsY18QW6XMVNlB8SyJub0Bu4HxLIm5vQG7iDQRqc3HBDIvCIngEj5z-tYdp-IAJ9GeHgwB88ZSRfl&_nc_ohc=jlbi6C4OTJoAX9nGAMv&tn=C4rrpRRPa04ZRY_W&_nc_ht=scontent.fbkk5-5.fna&oh=03_AdS1awS9tJ4KSg8jFRZKmv_A2WhGN1PIuZQSH5K9_f-XQg&oe=6394ACA2" width="670 px" height="525 px">
</ul>
            </div>
        </div>
    </div>
</div>
@endsection
