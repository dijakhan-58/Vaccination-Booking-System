<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Message</title>
</head>

<body style="margin:0; padding:0; background-color:#eef2f0; font-family:'Segoe UI', Arial, Helvetica, sans-serif;">

    <div style="width:100%; padding:40px 15px; box-sizing:border-box;">

        <div
            style="max-width:650px; margin:0 auto; background:#ffffff; border-radius:16px; overflow:hidden; box-shadow:0 8px 30px rgba(0,0,0,0.1);">

            <!-- Header -->
            <div
                style="background:linear-gradient(135deg, #198754 0%, #14532d 100%); padding:35px 30px; text-align:center;">
                <div
                    style="width:60px; height:60px; background:rgba(255,255,255,0.15); border-radius:50%; margin:0 auto 15px; line-height:60px; font-size:28px;">
                    ✉️
                </div>
                <h1 style="margin:0; color:#ffffff; font-size:24px; font-weight:600;">
                    New Contact Message
                </h1>
                <p style="margin:8px 0 0; color:#d4f0e0; font-size:14px;">
                    Someone reached out through your website
                </p>
            </div>

            <!-- Content -->
            <div style="padding:35px 30px;">

                <p style="margin-top:0; margin-bottom:25px; color:#555555; font-size:15px; line-height:1.6;">
                    You've received a new message through your website contact form. Details are below:
                </p>

                <!-- Info Grid: Name + Email side-by-side style (table for email compatibility) -->
                <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:16px;">
                    <tr>
                        <td width="50%" style="padding-right:8px; vertical-align:top;">
                            <div
                                style="background:#f8faf9; border:1px solid #e5e9e7; border-radius:10px; padding:14px 16px;">
                                <p
                                    style="margin:0 0 5px; color:#198754; font-weight:700; font-size:12px; text-transform:uppercase; letter-spacing:0.5px;">
                                    👤 Name
                                </p>
                                <p style="margin:0; color:#222222; font-size:15px;">
                                    {{ $data['name'] }}
                                </p>
                            </div>
                        </td>
                        <td width="50%" style="padding-left:8px; vertical-align:top;">
                            <div
                                style="background:#f8faf9; border:1px solid #e5e9e7; border-radius:10px; padding:14px 16px;">
                                <p
                                    style="margin:0 0 5px; color:#198754; font-weight:700; font-size:12px; text-transform:uppercase; letter-spacing:0.5px;">
                                    📧 Email
                                </p>
                                <p style="margin:0; color:#222222; font-size:15px; word-break:break-all;">
                                    {{ $data['email'] }}
                                </p>
                            </div>
                        </td>
                    </tr>
                </table>

                <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:16px;">
                    <tr>
                        <td width="50%" style="padding-right:8px; vertical-align:top;">
                            <div
                                style="background:#f8faf9; border:1px solid #e5e9e7; border-radius:10px; padding:14px 16px;">
                                <p
                                    style="margin:0 0 5px; color:#198754; font-weight:700; font-size:12px; text-transform:uppercase; letter-spacing:0.5px;">
                                    📞 Phone
                                </p>
                                <p style="margin:0; color:#222222; font-size:15px;">
                                    {{ $data['phone'] ?? 'Not provided' }}
                                </p>
                            </div>
                        </td>
                        <td width="50%" style="padding-left:8px; vertical-align:top;">
                            <div
                                style="background:#f8faf9; border:1px solid #e5e9e7; border-radius:10px; padding:14px 16px;">
                                <p
                                    style="margin:0 0 5px; color:#198754; font-weight:700; font-size:12px; text-transform:uppercase; letter-spacing:0.5px;">
                                    📝 Subject
                                </p>
                                <p style="margin:0; color:#222222; font-size:15px;">
                                    {{ $data['subject'] ?? 'No subject' }}
                                </p>
                            </div>
                        </td>
                    </tr>
                </table>

                <!-- Message (full width, highlighted) -->
                <div
                    style="background:#f0f7f3; border-left:4px solid #198754; border-radius:8px; padding:18px 20px; margin-top:20px;">
                    <p
                        style="margin:0 0 8px; color:#198754; font-weight:700; font-size:12px; text-transform:uppercase; letter-spacing:0.5px;">
                        💬 Message
                    </p>
                    <p style="margin:0; color:#333333; font-size:15px; line-height:1.7; white-space:pre-line;">
                        {{ $data['message'] }}
                    </p>
                </div>

            </div>

            <!-- Footer -->
            <div style="background:#f7f9f8; padding:20px 30px; text-align:center; border-top:1px solid #eeeeee;">
                <p style="margin:0; color:#888888; font-size:12px;">
                    This message was sent from your website contact form.
                </p>
                <p style="margin:6px 0 0; color:#aaaaaa; font-size:11px;">
                    Please do not reply to this automated notification.
                </p>
            </div>

        </div>

    </div>

</body>

</html>