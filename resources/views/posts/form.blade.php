@extends('layouts.app')

@section('content')

                <div class="panel-heading">Pinches escribe un post</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('posts.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">

                            <label for="content" class="col-md-4 control-label">Post</label>

                            <div class="col-md-6">
                                <textarea id="content" class="form-control"  name="content" required autofocus>
                                    {{ old('content') }}
                                </textarea>

                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   Hatear
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
           
@endsection
