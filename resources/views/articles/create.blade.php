@extends('layout')
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
@endsection

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4">New Article</h1>

        <form method="POST"  action="/articles">
            @csrf
            <div class="field">
                <div class="label" for="title">
                    Title
                </div>
                <div class="control">
                    <input
                        class="input @error('title') is-danger @enderror"
                        type="text"
                        name="title"
                        id="title"
                        value="{{old('title')}}"
                    >

                    @error('title')
                        <p class="help is-danger">{{$errors->first('title')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <div class="label" for="excerpt">
                    Excerpt
                </div>
                <div class="control">
                    <textarea class="textarea @error('excerpt') is-danger @enderror" name="excerpt" id="" cols="30" rows="10">
                        {{old('excerpt')}}
                    </textarea>
                    @error('excerpt')
                    <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <div class="label" for="body">
                    Body
                </div>
                <div class="control">
                    <textarea class="textarea  @error('body') is-danger @enderror" name="body" id="" cols="30" rows="10">
                        {{old('body')}}
                    </textarea>
                    @error('body')
                    <p class="help is-danger">{{$errors->first('body')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection
