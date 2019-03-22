@extends('layouts.app')

@section('content')

        @foreach($discussions as $d)
            <div class="card card-default">

                <div class="card-header"><img src="{{ $d->user->avatar }}" alt="avatar" width="40px" height="40px">&nbsp;&nbsp;&nbsp;

                <span>{{ $d->user->name }}, <b>{{ $d->created_at->diffforHumans() }}</b></span>

                <a href="{{ route('discussion', ['slug' => $d->slug ]) }}" class="btn btn-dark float-right"> View</a>

                @if($d->hasBestAnswer())

                    <span class="btn btn float-right btn-success" style="margin-right: 8px">Closed</span>
                
                @else

                <span class="btn btn float-right btn-danger" style="margin-right: 8px">Open</span>
                @endif

                
                </div>

                <div class="card-body">

                    <h5 class="text-center">
                    
                   <b> {{ $d->title }}  </b>

                    </h5>

                    <p class="text-center">
                    
                        {{ str_limit($d->content, 100) }}

                    </p>

                    


                </div>

                <div class="card-footer">
                
                    <span>
                    
                        {{ $d->replies->count() }} Replies
                    
                    </span>

                    <a href=" {{ route('channel', ['slug' => $d->channel->slug ]) }} " class="float-right btn btn-default btn-xs">
                    
                        {{ $d->channel->title }}
                    
                    </a>
                
                </div>
            </div>

            <br>


        @endforeach

            <br>       

        <div class="float-right">
        
            {{ $discussions->links() }}
        
        </div>

       
        
@endsection
