@extends('layouts.default')

@section('content')
    <div style="margin-top: 20px" class="row">
        <div class="col-md-6 offset-md-3">
            <div style="margin-bottom: 20px;">
                <ul class="list-group">
                    <li class="list-group-item active">
                        Message: <strong>{{ $message->text }}</strong>
                    </li>
                    <li class="list-group-item list-group-item-{{ $message->getListStyle() }}">
                        Status: <strong>{{ $message->status }}.</strong>
                    </li>
                    <li class="list-group-item">
                        Recipient: <strong>{{ $message->number }}.</strong>
                    </li>
                    <li class="list-group-item">
                        Sent:
                        {{ $message->created_at }}
                        <strong>
                            {{ \Carbon\Carbon::createFromTimeStamp(strtotime($message->created_at))->diffForHumans() }}
                        </strong>.
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
