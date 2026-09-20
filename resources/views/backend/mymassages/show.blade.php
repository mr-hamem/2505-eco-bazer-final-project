@extends('layouts.backend')

@section('title', 'Message Details')

@section('content')
<style>
    .cm-page {
        padding: 0 24px 24px;
        max-width: 100%;
        overflow-x: hidden;
        box-sizing: border-box;
    }
    .cm-page * { box-sizing: border-box; }
    .cm-back-link {
        display: inline-flex; align-items: center; gap: 6px;
        color: #2F6FED; font-weight: 600; font-size: 14px;
        text-decoration: none; margin-bottom: 20px;
    }
    .cm-back-link:hover { text-decoration: underline; }
    .cm-detail-card {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.06);
        padding: 28px;
        margin-bottom: 24px;
    }
    .cm-detail-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        flex-wrap: wrap;
        gap: 12px;
        margin-bottom: 24px;
        padding-bottom: 20px;
        border-bottom: 1px solid #f0f0f0;
    }
    .cm-sender-info h4 { margin: 0 0 4px; font-weight: 700; color: #1a1a1a; font-size: 18px; }
    .cm-sender-info p { margin: 0; color: #6c757d; font-size: 14px; }
    .cm-badge-status { padding: 5px 14px; border-radius: 20px; font-size: 13px; font-weight: 600; display: inline-block; }
    .cm-badge-unread { background: #FDECEC; color: #E4453A; }
    .cm-badge-read { background: #EAF3EA; color: #00B207; }
    .cm-field { margin-bottom: 20px; }
    .cm-field-label { font-size: 12px; text-transform: uppercase; letter-spacing: .04em; color: #8a8f98; font-weight: 600; margin-bottom: 6px; }
    .cm-field-value { font-size: 15px; color: #333; line-height: 1.6; }
    .cm-section-title {
        font-size: 18px; font-weight: 700; color: #1a1a1a;
        margin-bottom: 16px; padding-bottom: 10px;
        border-bottom: 1px solid #f0f0f0;
    }
    .cm-reply {
        background: #F8FAF8;
        border-radius: 10px;
        padding: 18px 20px;
        margin-bottom: 14px;
    }
    .cm-reply-meta { font-size: 12px; color: #8a8f98; margin-bottom: 6px; }
    .cm-reply-text { font-size: 14px; color: #333; line-height: 1.6; }
    .cm-reply-form {
        background: #fff;
        border: 1px solid #e9ecef;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 24px;
    }
    .cm-reply-form textarea {
        width: 100%; padding: 12px 14px; border-radius: 8px;
        border: 1px solid #d9deea; font-size: 14px; resize: vertical;
        min-height: 100px; font-family: inherit;
    }
    .cm-reply-form textarea:focus {
        border-color: #00B207; outline: none;
        box-shadow: 0 0 0 3px rgba(0,178,7,0.1);
    }
    .cm-btn-send {
        display: inline-flex; align-items: center; gap: 6px;
        padding: 10px 22px; border-radius: 8px; border: none;
        background: #00B207; color: #fff; font-size: 14px; font-weight: 600;
        cursor: pointer; margin-top: 12px;
    }
    .cm-btn-send:hover { background: #009906; }
    .cm-empty { text-align: center; padding: 40px 20px; color: #8a8f98; }
    @media (max-width: 575.98px) {
        .cm-page { padding: 0 14px 16px; }
        .cm-detail-card { padding: 18px; }
    }
</style>

<div class="cm-page">
    <a href="{{ route('admin.contact-messages.index') }}" class="cm-back-link">
        <i class="bi bi-arrow-left"></i> Back to Messages
    </a>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="border-radius: 10px;">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="cm-detail-card">
        <div class="cm-detail-header">
            <div class="cm-sender-info">
                <h4>{{ $contactMessage->name }}</h4>
                <p><i class="bi bi-envelope" style="margin-right:4px;"></i>{{ $contactMessage->email }}</p>
            </div>
            @if ($contactMessage->is_read)
                <span class="cm-badge-status cm-badge-read">Read</span>
            @else
                <span class="cm-badge-status cm-badge-unread">Unread</span>
            @endif
        </div>

        <div class="cm-field">
            <div class="cm-field-label">Subject</div>
            <div class="cm-field-value">{{ $contactMessage->subject }}</div>
        </div>

        <div class="cm-field">
            <div class="cm-field-label">Message</div>
            <div class="cm-field-value">{{ $contactMessage->message }}</div>
        </div>

        <div class="cm-field" style="margin-bottom:0;">
            <div class="cm-field-label">Date</div>
            <div class="cm-field-value">{{ $contactMessage->created_at->format('d M Y, h:i A') }}</div>
        </div>
    </div>

    <h3 class="cm-section-title">Replies ({{ $contactMessage->replies->count() }})</h3>

    <div class="cm-reply-form">
        <form action="{{ route('admin.contact-messages.reply', $contactMessage) }}" method="POST">
            @csrf
            <div class="cm-field">
                <label for="reply" class="cm-field-label">Your Reply</label>
                <textarea name="reply" id="reply" required placeholder="Type your reply here..."></textarea>
            </div>
            <button type="submit" class="cm-btn-send"><i class="bi bi-send"></i> Send Reply</button>
        </form>
    </div>

    @if ($contactMessage->replies->count() > 0)
        @foreach ($contactMessage->replies as $reply)
            <div class="cm-reply">
                <div class="cm-reply-meta">Repllied on {{ $reply->created_at->format('d M Y, h:i A') }}</div>
                <div class="cm-reply-text">{{ $reply->reply }}</div>
            </div>
        @endforeach
    @else
        <div class="cm-empty">
            <i class="bi bi-chat-left" style="font-size:36px; color:#d9deea;"></i>
            <p style="margin-top:12px;">No replies yet.</p>
        </div>
    @endif
</div>
@endsection
