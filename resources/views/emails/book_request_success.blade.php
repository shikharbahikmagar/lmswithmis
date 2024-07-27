<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application Status Update</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0;">

    <table cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
        <tr>
            <td style="background-color: #f8f8f8; padding: 20px 0; text-align: center;">
                <h2 style="color: #333;">Job Application Status Update</h2>
            </td>
        </tr>
        <tr>
            <td style="padding: 20px;">
                <p>Hello, <span style="text-transform:uppercase">{{ $user_details['name']}}</span></p>
                <p>We wanted to inform you about the status of your recent job application with our company {{ $job_post_details['company_name'] }}. Here's the update:</p>
                <p><strong>Job Title:</strong> {{ $job_post_details['job_title'] }}</p>
                <p><strong>Status:</strong> {{ $status }}</p>
                <p>If you have any questions or concerns, feel free to contact us.</p>
                <p>Best regards,<br> {{ $job_post_details['company_name'] }}</p>
            </td>
        </tr>
        <tr>
            <td style="background-color: #f8f8f8; padding: 20px 0; text-align: center;">
                <p style="color: #888;">This is an automated message. Please do not reply to this email.</p>
            </td>
        </tr>
    </table>

</body>
</html>