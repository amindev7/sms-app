@extends('layouts.app')

@section('content')
    <div style="margin-top: 20px" class="d-flex align-items-center justify-content-center">
        @if (Auth::check())
            <div>
                <div class="form-group">
                    <a href="/create" class="btn btn-success">
                        Send new message
                    </a>
                </div>
                @if (!empty($messages))
                    @foreach ($messages as $message)
                        <p>Your message history</p>
                        <div style="margin-bottom: 20px;">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="/message/{{ $message->id }}">
                                        Message: <strong>{{ $message->text }}</strong>
                                    </a>
                                </li>
                                <li class="list-group-item list-group-item-{{ $message->getListStyle() }}">
                                    Status: <strong>{{ $message->status }}.</strong>
                                </li>
                                <li class="list-group-item">
                                    Recipient: <strong>{{ $message->number }}.</strong>
                                </li>
                            </ul>
                        </div>
                    @endforeach
                @endif
            </div>
        @else
            <h1>Welcome to your sms application</h1>
        @endif
    </div>
@endsection
