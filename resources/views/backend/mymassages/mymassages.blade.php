@extends('layouts.backend')

@section('title', 'All Contact Messages')

@section('content')
<style>
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
    }
    .cm-stat-icon {
        width: 48px; height: 48px; border-radius: 10px;
        background: #EAF3EA; display: flex; align-items: center; justify-content: center;
        font-size: 20px; color: #00B207; flex-shrink: 0;
    }
    .cm-stat-icon.new { background: #FDECEC; color: #E4453A; }
    .cm-stat-icon.read { background: #EAF0FD; color: #2F6FED; }
    .cm-stat-icon.today { background: #FFF6E5; color: #D99000; }
    .cm-stat-label { text-transform: uppercase; font-size: 12px; letter-spacing: .04em; color: #8a8f98; margin-bottom: 4px; }
    .cm-stat-value { font-size: 26px; font-weight: 700; color: #1a1a1a; line-height: 1; }
    .cm-table-card { background: #fff; border-radius: 10px; box-shadow: 0 1px 3px rgba(0,0,0,0.06); overflow: hidden; }
    .cm-table thead th {
        background: #fff; border-bottom: 1px solid #eee; text-transform: uppercase;
        font-size: 12px; letter-spacing: .04em; color: #8a8f98; font-weight: 600;
        padding: 16px 20px; white-space: nowrap;
    }
    .cm-table tbody td { padding: 16px 20px; vertical-align: middle; border-bottom: 1px solid #f2f2f2; font-size: 14px; color: #333; }
    .cm-table tbody tr:last-child td { border-bottom: none; }
    .cm-table tbody tr:hover { background: #FAFDFA; }
    .cm-name { font-weight: 600; color: #1a1a1a; margin-bottom: 2px; }
    .cm-email { color: #8a8f98; font-size: 13px; }
    .cm-msg-preview { max-width: 280px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; color: #555; }
    .badge-status { padding: 5px 12px; border-radius: 20px; font-size: 12px; font-weight: 600; display: inline-block; }
    .badge-unread { background: #FDECEC; color: #E4453A; }
    .badge-read { background: #EAF3EA; color: #00B207; }
    .cm-action-btn {
        width: 34px; height: 34px; border-radius: 8px; border: none;
        display: inline-flex; align-items: center; justify-content: center;
        margin-right: 6px; font-size: 14px; color: #fff;
    }
    .cm-action-view { background: #2F6FED; }
    .cm-action-delete { background: #E4453A; }
    .cm-empty-state { text-align: center; padding: 60px 20px; }
    .cm-empty-state p { color: #8a8f98; margin-bottom: 20px; font-size: 15px; }

    /* Responsive tweaks for small screens */
    @media (max-width: 575.98px) {
        .cm-header { padding: 18px 20px; }
        .cm-header h2 { font-size: 20px; }
        .cm-stat-card { padding: 16px; gap: 12px; }
        .cm-stat-icon { width: 40px; height: 40px; font-size: 16px; }
        .cm-stat-value { font-size: 20px; }
        .cm-msg-preview { max-width: 160px; }
    }
</style>

<div class="cm-header">
    <div>
        <h2>Contact Messages</h2>
        <p>View and manage messages submitted from the contact form</p>
    </div>
</div>

<div class="row g-3 mb-4">
    <div class="col-6 col-md-3">
        <div class="cm-stat-card">
            <div class="cm-stat-icon"><i class="bi bi-envelope"></i></div>
            <div>
                <div class="cm-stat-label">Total Messages</div>
                <div class="cm-stat-value">12</div>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="cm-stat-card">
            <div class="cm-stat-icon new"><i class="bi bi-envelope-exclamation"></i></div>
            <div>
                <div class="cm-stat-label">Unread</div>
                <div class="cm-stat-value">4</div>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="cm-stat-card">
            <div class="cm-stat-icon read"><i class="bi bi-envelope-open"></i></div>
            <div>
                <div class="cm-stat-label">Read</div>
                <div class="cm-stat-value">8</div>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="cm-stat-card">
            <div class="cm-stat-icon today"><i class="bi bi-calendar-check"></i></div>
            <div>
                <div class="cm-stat-label">Today</div>
                <div class="cm-stat-value">2</div>
            </div>
        </div>
    </div>
</div>

<div class="cm-table-card">
    <div class="table-responsive">
        <table class="table cm-table mb-0">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Sender</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th class="text-end">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <div class="cm-name">Rahim Uddin</div>
                        <div class="cm-email">rahim@example.com</div>
                    </td>
                    <td>Product Inquiry</td>
                    <td><div class="cm-msg-preview" title="I want to know if this product is available in blue color and what the delivery time is.">I want to know if this product is available in blue...</div></td>
                    <td>18 Sep 2026, 10:24 AM</td>
                    <td><span class="badge-status badge-unread">Unread</span></td>
                    <td class="text-end">
                        <a href="#" class="cm-action-btn cm-action-view" title="View"><i class="bi bi-eye"></i></a>
                        <button type="button" class="cm-action-btn cm-action-delete" title="Delete"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        <div class="cm-name">Sadia Islam</div>
                        <div class="cm-email">sadia.islam@example.com</div>
                    </td>
                    <td>Order Issue</td>
                    <td><div class="cm-msg-preview" title="My order has not arrived yet, it has been 5 days already.">My order has not arrived yet, it has been 5 days...</div></td>
                    <td>17 Sep 2026, 04:12 PM</td>
                    <td><span class="badge-status badge-read">Read</span></td>
                    <td class="text-end">
                        <a href="#" class="cm-action-btn cm-action-view" title="View"><i class="bi bi-eye"></i></a>
                        <button type="button" class="cm-action-btn cm-action-delete" title="Delete"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>
                        <div class="cm-name">Tanvir Ahmed</div>
                        <div class="cm-email">tanvir.ahmed@example.com</div>
                    </td>
                    <td>Partnership</td>
                    <td><div class="cm-msg-preview" title="We would like to discuss a bulk supply partnership with your company.">We would like to discuss a bulk supply partnership...</div></td>
                    <td>16 Sep 2026, 09:47 AM</td>
                    <td><span class="badge-status badge-read">Read</span></td>
                    <td class="text-end">
                        <a href="#" class="cm-action-btn cm-action-view" title="View"><i class="bi bi-eye"></i></a>
                        <button type="button" class="cm-action-btn cm-action-delete" title="Delete"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection