@extends('layouts.app')

@section('content')

            <div class="card card-default">

            <div class="card-header">
            <img src="{{ $d->user->avatar }}" alt="avatar" width="40px" height="40px">&nbsp;&nbsp;&nbsp;

            <span>{{ $d->user->name }}, <b>( {{ $d->user->points }} )</b></span>



            @if($d->hasBestAnswer())

                <span class="btn btn float-right btn-success">Closed</span>

            @else

            <span class="btn btn float-right btn-danger">Open</span>
            @endif
            
            @if(Auth::id() == $d->user->id)

                @if(!$d->hasBestAnswer())

                <a href="{{ route('discussion.edit', ['slug' => $d->slug ]) }}" class="btn btn-info float-right" style="margin-right: 8px ">Edit</a>


                @endif

            @endif

            @if($d->is_being_watched_by_auth_user())

                <a href="{{ route('discussion.unwatch', ['id' => $d->id ]) }}" class="btn btn-dark float-right" style="margin-right: 8px ">Unwatch</a>

            @else

            <a href="{{ route('discussion.watch', ['id' => $d->id ]) }}" class="btn btn-dark float-right" style="margin-right: 8px"> watch</a>

            @endif



            </div>

            <div class="card-body">

                <h5 class="text-center">
                
            <b> {{ $d->title }}  </b>

                </h5>

                <hr>

                <p class="text-center">    

                  {{ $d->content }}
                  
                </p>


                <hr>

    @if($best_answer)

        <div class="text-center">
        
            <div class="card card-success" style="padding:40px">
                    <h3 class="text-center">Best Answer</h3>
                <div class="card-header">
                
                    
                <img src="{{ $best_answer->user->avatar }}" alt="avatar" width="40px" height="40px">&nbsp;&nbsp;&nbsp; 
                <span>{{ $best_answer->user->name }} <b>( {{ $best_answer->user->points }} )</b></span>               
                
                </div>

                <div class="card-body">
                
                    {{ $best_answer->content }}
                
                </div>
            
             
            </div>
        
        
        </div>
        
    @endif



        
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

        <br>

    @foreach($d->replies as $r)

    <div class="card card-default">

      <div class="card-header">
      <img src="{{ $r->user->avatar }}" alt="avatar" width="40px" height="40px">&nbsp;&nbsp;&nbsp;

        <span>{{ $r->user->name }}, <b>( {{ $r->user->points }} )</b></span>
        
        @if(!$best_answer) 

            @if(Auth::id() == $d->user->id)

            <a href="{{ route('discussion.best.answer', ['id' => $r->id ]) }}" class="btn btn-xs btn-primary float-right" style="margin-left: 8px;">Mark as best answer</a>

            @endif

               

        @endif


            @if(Auth::id() == $r->user->id)

                @if(!$r->best_answer)

                <a href="{{ route('reply.edit', ['id' => $r->id ]) }}" class="btn btn-xs btn-info float-right">Edit</a>


                @endif

            @endif

        </div>
        
        

        <div class="card-body">


            <p class="text-center">
            
                {{ $r->content }}

            </p>


        </div>
        

        <div class="card-footer">


    
           @if($r->is_liked_by_auth_user())


               <a href="{{ route('reply.unlike', ['id' => $r->id ]) }}" class="btn btn-danger btn-xs">Unlike <span class="badge">{{ $r->likes->count() }}</span></a> 

           @else

           <a href="{{ route('reply.like', ['id' => $r->id ]) }}" class="btn btn-success btn-xs">Like <span class="badge">{{ $r->likes->count() }}</span></a> 


           @endif

        </div>
        
        </div>

        <br>


    @endforeach


    <div class="card card-default">
    
        <div class="card-body">

            @if(Auth::check())

            <form action="{{ route('discussion.reply', ['id' => $d->id ]) }}" method="post">
            
            {{ csrf_field() }}

            <div class="form-group">

                <label for="reply">Leave a reply...</label>
            
                <textarea name="reply" id="reply" cols="30" rows="10" class="form-control"></textarea>
            
            
            </div>

            <div class="form-group">
            
                <div class="text-center">
                
                <button class="btn btn-success">Leave a reply</button>
                
                
                </div>
               
            
            </div>

            
        
        
        
        </form>

            @else

                <div class="text-center">
                
                    <h2>Sign in to leave a reply</h2>
                
                </div>

            @endif
           
        
        
        </div>
    
    
    </div>
        
@endsection
