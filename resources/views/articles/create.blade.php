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
                    <input type="text" name="title" class="input" id="title">
                </div>
            </div>

            <div class="field">
                <div class="label" for="excerpt">
                    Excerpt
                </div>
                <div class="control">
                    <textarea class="textarea" name="excerpt" id="" cols="30" rows="10"></textarea>
                </div>
            </div>

            <div class="field">
                <div class="label" for="body">
                    Body
                </div>
                <div class="control">
                    <textarea class="textarea" name="body" id="" cols="30" rows="10"></textarea>
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
