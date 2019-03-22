@extends('layouts.app')

@section('content')
            <div class="card card-default">
                <div class="card-header text-center">Update a reply</div>
                <div class="card-body">
                   <form action="{{ route('reply.update', ['id' => $reply->id ]) }}" method="post">
                   
                   {{ csrf_field() }}

                    <div class="form-group">
                    
                     <label for="content">Answer a question</label>

                    <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{ $reply->content }}</textarea>  

                    <div class="form-group">
                        <br>
                    <div class="text-center">
                    
                        <button class="btn btn-success" type="submit">Save reply changes</button>
                    </div>
                    </div>                  
                    
                    </div>
                   </form>

                </div>
            </div>



       
@endsection
