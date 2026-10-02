<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Inquiry</title>
</head>

<body style="margin:0; padding:0; background:#f1f5f9; font-family:Arial, Helvetica, sans-serif; color:#0f172a;">

    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#f1f5f9; padding:40px 20px;">
        <tr>
            <td align="center">

                <table width="100%" cellpadding="0" cellspacing="0" border="0"
                    style="max-width:680px; background:#ffffff; border-radius:16px; overflow:hidden;">

                    {{-- Header --}}
                    <tr>
                        <td style="background:#0f172a; padding:28px 32px;">

                            <div style="font-size:22px; font-weight:700; color:#ffffff;">
                                PT Trivora Prima Indonesia
                            </div>

                            <div style="margin-top:6px; font-size:13px; color:#94a3b8;">
                                General Trading & Supply Chain
                            </div>

                        </td>
                    </tr>


                    {{-- Title --}}
                    <tr>
                        <td style="padding:32px 32px 20px;">

                            <div
                                style="font-size:13px; font-weight:700; color:#2563eb; text-transform:uppercase; letter-spacing:1px;">
                                New Website Inquiry
                            </div>

                            <h1 style="margin:10px 0 0; font-size:26px; line-height:1.3; color:#0f172a;">
                                {{ $data['subject'] }}
                            </h1>

                            <p style="margin:12px 0 0; font-size:14px; line-height:1.7; color:#64748b;">
                                Pesan baru diterima melalui formulir kontak website PT Trivora Prima Indonesia.
                            </p>

                        </td>
                    </tr>


                    {{-- Contact Information --}}
                    <tr>
                        <td style="padding:0 32px 24px;">

                            <table width="100%" cellpadding="0" cellspacing="0" border="0">

                                <tr>
                                    <td style="padding:12px 0; border-bottom:1px solid #e2e8f0;">
                                        <div style="font-size:12px; color:#64748b;">
                                            Nama Lengkap
                                        </div>

                                        <div style="margin-top:4px; font-size:15px; font-weight:600; color:#0f172a;">
                                            {{ $data['name'] }}
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:12px 0; border-bottom:1px solid #e2e8f0;">
                                        <div style="font-size:12px; color:#64748b;">
                                            Perusahaan
                                        </div>

                                        <div style="margin-top:4px; font-size:15px; color:#0f172a;">
                                            {{ $data['company'] ?: '-' }}
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:12px 0; border-bottom:1px solid #e2e8f0;">
                                        <div style="font-size:12px; color:#64748b;">
                                            Email
                                        </div>

                                        <div style="margin-top:4px; font-size:15px; color:#0f172a;">
                                            <a href="mailto:{{ $data['email'] }}"
                                                style="color:#2563eb; text-decoration:none;">
                                                {{ $data['email'] }}
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:12px 0;">
                                        <div style="font-size:12px; color:#64748b;">
                                            Nomor Telepon
                                        </div>

                                        <div style="margin-top:4px; font-size:15px; color:#0f172a;">
                                            {{ $data['phone'] }}
                                        </div>
                                    </td>
                                </tr>

                            </table>

                        </td>
                    </tr>


                    {{-- Message --}}
                    <tr>
                        <td style="padding:0 32px 32px;">

                            <div
                                style="padding:22px; background:#f8fafc; border:1px solid #e2e8f0; border-radius:12px;">

                                <div
                                    style="font-size:12px; font-weight:700; color:#64748b; text-transform:uppercase; letter-spacing:.5px;">
                                    Pesan
                                </div>

                                <div
                                    style="margin-top:12px; font-size:15px; line-height:1.8; color:#334155; white-space:pre-line;">
                                    {{ $data['message'] }}
                                </div>

                            </div>

                        </td>
                    </tr>


                    {{-- Reply button --}}
                    <tr>
                        <td align="center" style="padding:0 32px 36px;">

                            <a href="mailto:{{ $data['email'] }}"
                                style="display:inline-block; background:#2563eb; color:#ffffff; text-decoration:none; font-size:14px; font-weight:600; padding:13px 24px; border-radius:10px;">
                                Balas Inquiry
                            </a>

                        </td>
                    </tr>


                    {{-- Footer --}}
                    <tr>
                        <td style="background:#f8fafc; border-top:1px solid #e2e8f0; padding:22px 32px;">

                            <div style="font-size:12px; line-height:1.7; color:#64748b;">
                                Email ini dikirim secara otomatis dari formulir kontak website
                                <strong>PT Trivora Prima Indonesia</strong>.
                            </div>

                            <div style="margin-top:8px; font-size:12px; color:#94a3b8;">
                                marketing@trivora.co.id
                            </div>

                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>
