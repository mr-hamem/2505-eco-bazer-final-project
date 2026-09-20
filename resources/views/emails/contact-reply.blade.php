<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Re: {{ $contactMessage->subject }}</title>
</head>
<body style="margin:0; padding:0; font-family:Arial, sans-serif; background:#f4f4f4;">
    <div style="max-width:600px; margin:0 auto; background:#ffffff; border-radius:8px; overflow:hidden;">
        <div style="background:#00B207; padding:24px; text-align:center;">
            <h1 style="color:#ffffff; margin:0; font-size:22px;">EcoBazer</h1>
            <p style="color:#e0f5e0; margin:8px 0 0; font-size:14px;">You have a reply to your message</p>
        </div>
        <div style="padding:28px;">
            <p style="font-size:15px; color:#333; margin-bottom:20px;">Hello <strong>{{ $contactMessage->name }}</strong>,</p>
            <p style="font-size:15px; color:#333; line-height:1.6; margin-bottom:20px;">
                Thank you for contacting us. Your message has been replied to by our team.
            </p>
            <div style="background:#f8faf8; border-radius:8px; padding:20px; margin-bottom:20px;">
                <h3 style="margin:0 0 10px; font-size:16px; color:#1a1a1a;">Original Message</h3>
                <p style="margin:0; font-size:14px; color:#555; line-height:1.6;"><strong>Subject:</strong> {{ $contactMessage->subject }}</p>
                <p style="margin:8px 0 0; font-size:14px; color:#555; line-height:1.6;"><strong>Message:</strong><br>{{ $contactMessage->message }}</p>
            </div>
            <div style="background:#EAF3EA; border-radius:8px; padding:20px; margin-bottom:20px;">
                <h3 style="margin:0 0 10px; font-size:16px; color:#00B207;">Admin Reply</h3>
                <p style="margin:0; font-size:14px; color:#333; line-height:1.6;">{{ $contactMessage->replies->last()->reply ?? 'Reply not found.' }}</p>
            </div>
            <p style="font-size:14px; color:#8a8f98; line-height:1.6;">
                This email was sent automatically. Please do not reply directly to this email.
            </p>
        </div>
        <div style="background:#f4f4f4; padding:20px; text-align:center;">
            <p style="font-size:12px; color:#aaa; margin:0;">&copy; 2026 EcoBazer. All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>
