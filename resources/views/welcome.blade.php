@extends('layouts.app')

@section('content')
    <div style="margin-top: 20px" class="d-flex align-items-center justify-content-center">
        @if (Auth::check())
            <div>
                @if (!empty($messages))
                    @foreach ($messages as $message)
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
                @else
                    <h3>Create your first <a href="#">message</a></h3>
                @endif
            </div>
        @else
            <h1>Welcome to your sms application</h1>
        @endif
    </div>
@endsection
