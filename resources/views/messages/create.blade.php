@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="/message/send" method="post">
                @csrf
                <div class="form-group">
                    <label for="number">
                        Phone number
                    </label>
                    <input required placeholder="0700000000" id="number"
                        class="form-control {{ $errors->has('number') ? 'is-invalid' : '' }}" name="number"
                        value="{{ old('number') }}">
                </div>

                <div class="form-group">
                    <label for="text">
                        Message
                    </label>
                    <textarea required placeholder="Hello," id="text"
                        class="form-control {{ $errors->has('text') ? 'is-invalid' : '' }}"
                        name="text">{{ old('text') }}</textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">
                        Send message
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
