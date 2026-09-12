<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <style>
        /* CSS Reset untuk klien email */
        body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { -ms-interpolation-mode: bicubic; border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }

        /* Tema Utama */
        body {
            margin: 0;
            padding: 0;
            background-color: #f5f8fa;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            width: 100% !important;
        }

        .email-wrapper {
            width: 100%;
            background-color: #f5f8fa;
            padding: 40px 20px;
        }

        .email-card {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            text-align: center;
        }

        .card-header {
            padding: 40px 20px 20px;
        }

        .card-body {
            padding: 0 40px 40px;
        }

        .icon-lock {
            font-size: 48px;
            margin-bottom: 10px;
        }

        h1 {
            color: #333333;
            font-size: 24px;
            font-weight: 700;
            margin: 0 0 15px;
        }

        p {
            color: #666666;
            font-size: 16px;
            line-height: 1.6;
            margin: 0 0 30px;
        }

        /* Tombol Gradien dengan Fallback Solid Color */
        .btn-reset {
            display: inline-block;
            padding: 14px 32px;
            background-color: #FF3366; /* Fallback untuk klien email lawas */
            background: linear-gradient(135deg, #FF3366 0%, #9933FF 100%);
            color: #ffffff !important;
            text-decoration: none;
            border-radius: 50px;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .text-muted {
            font-size: 14px;
            color: #999999;
            margin-top: 30px;
        }

        .email-footer {
            max-width: 600px;
            margin: 20px auto 0;
            text-align: center;
            color: #999999;
            font-size: 13px;
        }
    </style>
</head>
<body>

    <div class="email-wrapper">
        <div class="email-card">

            <div class="card-header">
                <div class="icon-lock">🔐</div>
                <h1>Reset Your Password</h1>
            </div>

            <div class="card-body">
                <p>We received a request to reset the password for your account. If you didn't make this request, you can safely ignore this email.</p>

                <!-- Tombol Aksi -->
                <a href="{{ route('reset.password.get', $token) }}" class="btn-reset">
                    Reset Password
                </a>

                <p class="text-muted">
                    This password reset link will expire in 60 minutes.
                    <br><br>
                    If you're having trouble clicking the button, copy and paste the URL below into your web browser:
                    <br>
                    <a href="{{ route('reset.password.get', $token) }}" style="color: #9933FF; word-break: break-all;">
                        {{ route('reset.password.get', $token) }}
                    </a>
                </p>
            </div>

        </div>
        
        <div class="email-footer">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
        </div>
    </div>

</body>
</html>
