@foreach ($messages as $message)
    <div class="message {{ $message->sender_email == auth()->user()->email ? 'current-user' : '' }}">
        <div class="message-content">
            <p>{{ $message->message }}</p>
            <small>{{ $message->created_at->diffForHumans() }}</small>
        </div>
    </div>
@endforeach
