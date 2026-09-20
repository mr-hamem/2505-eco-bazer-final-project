<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ContactReplyMailable;
use App\Models\ContactMessage;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactMessageController extends Controller
{
    public function index(Request $request)
    {
        $messages = ContactMessage::query()
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = '%' . $request->string('search') . '%';
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', $search)
                        ->orWhere('email', 'like', $search)
                        ->orWhere('subject', 'like', $search)
                        ->orWhere('message', 'like', $search);
                });
            })
            ->latest()
            ->paginate(20)
            ->withQueryString();

        $totalMessages = ContactMessage::count();
        $unreadCount = ContactMessage::where('is_read', false)->count();
        $readCount = ContactMessage::where('is_read', true)->count();
        $todayCount = ContactMessage::whereDate('created_at', today())->count();

        return view('backend.mymassages.mymassages', compact(
            'messages',
            'totalMessages',
            'unreadCount',
            'readCount',
            'todayCount'
        ));
    }

    public function show(ContactMessage $contactMessage)
    {
        $contactMessage->update(['is_read' => true]);

        return view('backend.mymassages.show', compact('contactMessage'));
    }

    public function reply(Request $request, ContactMessage $contactMessage)
    {
        $request->validate([
            'reply' => 'required|string|min:2|max:5000',
        ]);

        $reply = Reply::create([
            'contact_message_id' => $contactMessage->id,
            'reply' => $request->string('reply'),
        ]);

        Mail::to($contactMessage->email)->send(new ContactReplyMailable($contactMessage));

        return back()->with('success', 'Reply sent successfully. Customer has been notified via email.');
    }

    public function destroy(ContactMessage $contactMessage)
    {
        $contactMessage->delete();

        return back()->with('success', 'Contact message deleted successfully.');
    }
}
