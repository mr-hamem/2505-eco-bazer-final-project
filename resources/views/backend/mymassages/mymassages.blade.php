@extends('layouts.backend')

@section('title', 'All Contact Messages')

@section('content')
<style>
    /* Page wrapper: gives breathing room on both sides and stops the whole
       page from scrolling sideways. Only the table itself is allowed to
       scroll horizontally, inside its own card, on small screens. */
    .cm-page {
        padding: 0 24px 24px;
        max-width: 100%;
        overflow-x: hidden;
        box-sizing: border-box;
    }
    .cm-page * {
        box-sizing: border-box;
    }

    .cm-header {
        background: #EAF3EA;
        padding: 24px 28px;
        border-radius: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 24px;
        flex-wrap: wrap;
        gap: 16px;
    }
    .cm-header-text {
        flex: 1 1 240px;
        min-width: 200px;
    }
    .cm-header h2 { font-weight: 700; margin-bottom: 4px; color: #1a1a1a; }
    .cm-header p { margin: 0; color: #6c757d; font-size: 14px; }
    .cm-stat-card {
        background: #fff;
        border-radius: 10px;
        padding: 20px 22px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.06);
        display: flex;
        align-items: center;
        gap: 16px;
        height: 100%;
        min-width: 0;
    }
    .cm-stat-icon {
        width: 52px; height: 52px; border-radius: 12px;
        background: #EAF3EA; display: flex; align-items: center; justify-content: center;
        font-size: 20px; color: #00B207; flex-shrink: 0;
    }
    .cm-stat-label { text-transform: uppercase; font-size: 12px; letter-spacing: .04em; color: #8a8f98; margin-bottom: 4px; }
    .cm-stat-value { font-size: 26px; font-weight: 700; color: #1a1a1a; line-height: 1; }
    .cm-table-card {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.06);
        overflow: hidden;
        max-width: 100%;
    }
    .cm-table-card .table-responsive {
        max-width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
    .cm-table {
        margin-bottom: 0;
        min-width: 640px; /* lets the table scroll inside the card on small screens instead of the page */
    }
    .cm-table thead th {
        background: #fff; border-bottom: 1px solid #eee; text-transform: uppercase;
        font-size: 12px; letter-spacing: .04em; color: #8a8f98; font-weight: 600;
        padding: 18px 20px; white-space: nowrap;
    }
    .cm-table tbody td { padding: 16px 20px; vertical-align: middle; border-bottom: 1px solid #f2f2f2; font-size: 14px; color: #333; }
    .cm-table tbody tr:last-child td { border-bottom: none; }
    .cm-table tbody tr:hover { background: #FAFDFA; }
    .cm-name { font-weight: 700; color: #1a1a1a; margin-bottom: 2px; }
    .cm-email { color: #8a8f98; font-size: 13px; }
    .cm-msg-preview { max-width: 280px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; color: #6c757d; }
    .badge-status { padding: 5px 14px; border-radius: 20px; font-size: 13px; font-weight: 600; display: inline-block; }
    .badge-unread { background: #FDECEC; color: #E4453A; }
    .badge-read { background: #EAF3EA; color: #00B207; }
    /* Action buttons: a flex row that can wrap onto its own line cleanly
       (instead of the browser default inline-wrap, which was clipping/
       overlapping "View" and "Delete" when the column got squeezed). */
    .cm-action-cell {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        flex-wrap: wrap;
        gap: 8px;
        min-width: 150px;
    }
    .cm-action-cell form { flex: 0 0 auto; margin: 0; }
    .cm-action-btn {
        display: inline-flex; align-items: center; gap: 6px;
        padding: 8px 14px; border-radius: 8px; border: none;
        font-size: 13px; font-weight: 600;
        white-space: nowrap;
        flex: 0 0 auto;
    }
    .cm-action-view { background: #EAF0FD; color: #2F6FED; }
    .cm-action-view:hover { background: #DDE9FC; color: #2F6FED; }
    .cm-action-delete { background: #FDECEC; color: #E4453A; }
    .cm-action-delete:hover { background: #FBDCDC; color: #E4453A; }
    .cm-empty-state { text-align: center; padding: 60px 20px; }
    .cm-empty-state p { color: #8a8f98; margin-bottom: 20px; font-size: 15px; }
    .cm-search-box {
        position: relative;
        flex: 0 1 240px;
        width: 240px;
        max-width: 100%;
    }
    .cm-search-box .form-control {
        padding-left: 34px;
        border-radius: 8px;
        border: 1px solid #d9deea;
        width: 100%;
    }
    .cm-search-box .form-control:focus {
        border-color: #00B207;
        box-shadow: 0 0 0 2px rgba(0,178,7,0.15);
    }
    .cm-search-box .search-icon {
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        color: #8a8f98;
        font-size: 16px;
        pointer-events: none;
    }

    /* Responsive tweaks for small screens */
    @media (max-width: 575.98px) {
        .cm-page { padding: 0 14px 16px; }
        .cm-header { padding: 18px 20px; }
        .cm-header h2 { font-size: 20px; }
        .cm-stat-card { padding: 16px; gap: 12px; }
        .cm-stat-icon { width: 40px; height: 40px; font-size: 16px; }
        .cm-stat-value { font-size: 20px; }
        .cm-msg-preview { max-width: 160px; }
    }
    @media (max-width: 767.98px) {
        .cm-page { padding: 0 16px 20px; }
        .cm-header {
            padding: 16px 18px;
            flex-direction: column;
            align-items: stretch;
        }
        .cm-header-text { flex-basis: auto; }
        .cm-search-box { flex-basis: auto; width: 100%; }
        .cm-stat-card { padding: 16px; gap: 10px; }
        .cm-stat-icon { width: 38px; height: 38px; font-size: 14px; }
        .cm-stat-value { font-size: 18px; }
        .cm-stat-label { font-size: 11px; }
        .cm-table td { padding: 12px 14px; font-size: 13px; }
        .cm-table th { padding: 12px 14px; }
        .cm-action-btn { padding: 6px 10px; font-size: 12px; }
        .cm-action-cell { justify-content: flex-start; min-width: 0; }
    }
</style>

<div class="cm-page">
    <div class="cm-header">
        <div class="cm-header-text">
            <h2>Contact Messages</h2>
            <p>View and manage messages submitted from the contact form</p>
        </div>
        <form method="GET" action="{{ route('admin.contact-messages.index') }}" class="cm-search-box">
            <input type="search" name="search" value="{{ request('search') }}" class="form-control" placeholder="Search messages…">
            <iconify-icon class="search-icon" icon="mdi:magnify"></iconify-icon>
        </form>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="border-radius: 10px;">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row g-3 mb-4">
    @foreach ([
        ['col-12 col-sm-6 col-md-3', 'bi bi-envelope', 'Total Messages', $totalMessages],
        ['col-12 col-sm-6 col-md-3', 'bi bi-envelope-exclamation', 'Unread', $unreadCount],
        ['col-12 col-sm-6 col-md-3', 'bi bi-envelope-open', 'Read', $readCount],
        ['col-12 col-sm-6 col-md-3', 'bi bi-calendar-check', 'Today', $todayCount],
    ] as $stat)
        <div class="{{ $stat[0] }}">
            <div class="cm-stat-card">
                <div class="cm-stat-icon"><i class="bi {{ $stat[1] }}"></i></div>
                <div>
                    <div class="cm-stat-label">{{ $stat[2] }}</div>
                    <div class="cm-stat-value">{{ $stat[3] }}</div>
                </div>
            </div>
        </div>
    @endforeach
    </div>

    <div class="cm-table-card">
        <div class="table-responsive">
            <table class="table cm-table">
                <thead>
                    <tr>
                        <th class="d-none d-md-table-cell">SL</th>
                        <th>Sender</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th class="d-none d-sm-table-cell">Date</th>
                        <th>Status</th>
                        <th class="text-end" style="min-width: 150px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($messages as $message)
                        <tr>
                            <td class="d-none d-md-table-cell">{{ $messages->firstItem() + $loop->index }}</td>
                            <td>
                                <div class="cm-name">{{ $message->name }}</div>
                                <div class="cm-email">{{ $message->email }}</div>
                            </td>
                            <td>{{ \Str::limit($message->subject, 30) }}</td>
                            <td><div class="cm-msg-preview" title="{{ $message->message }}">{{ \Str::limit($message->message, 70) }}</div></td>
                            <td class="d-none d-sm-table-cell">{{ $message->created_at->format('d M Y, h:i A') }}</td>
                            <td>
                                @if ($message->is_read)
                                    <span class="badge-status badge-read">Read</span>
                                @else
                                    <span class="badge-status badge-unread">Unread</span>
                                @endif
                            </td>
                            <td class="text-end">
                                    <div class="cm-action-cell">
                                        <a href="{{ route('admin.contact-messages.show', $message) }}" class="cm-action-btn cm-action-view" title="View"><i class="bi bi-eye"></i> View</a>
                                        <form action="{{ route('admin.contact-messages.reply', $message) }}" method="POST" style="display:inline;" onsubmit="return confirm('Open reply form?')">
                                            @csrf
                                            <button type="submit" class="cm-action-btn cm-action-view" title="Reply" style="background:#EAF0FD;color:#2F6FED;"><i class="bi bi-reply"></i> Reply</button>
                                        </form>
                                        <form action="{{ route('admin.contact-messages.destroy', $message) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="cm-action-btn cm-action-delete" title="Delete"
                                                onclick="return confirm('Are you sure you want to delete this message?')"><i class="bi bi-trash"></i> Delete</button>
                                        </form>
                                    </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">
                                <div class="cm-empty-state">
                                    <i class="bi bi-envelope-open" style="font-size: 48px; color: #d9deea;"></i>
                                    <p>No contact messages found.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @if ($messages->total() > $messages->perPage())
        <div class="mt-3">
            {{ $messages->links() }}
        </div>
    @endif
</div>
@endsection