@extends('layouts.app')

@section('content')
            <div class="card card-default">
                <div class="card-header text-center">Update a Discussion</div>
                <div class="card-body">
                   <form action="{{ route('discussions.update', ['id' => $discussion->id ]) }}" method="post">
                   
                   {{ csrf_field() }}

                    <div class="form-group">
                    
                     <label for="content">Ask a question</label>

                    <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{ $discussion->content }}</textarea>  

                    <div class="form-group">
                        <br>
                    <div class="text-center">
                    
                        <button class="btn btn-success" type="submit">Save discussion changes</button>
                    </div>
                    </div>                  
                    
                    </div>
                   </form>

                </div>
            </div>
       
@endsection
