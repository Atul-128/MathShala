<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8fafc;
            margin: 0;
            padding: 0;
            color: #334155;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(to right, #f97316, #06b6d4);
            padding: 40px 20px;
            text-align: center;
        }
        .header h1 {
            color: #ffffff;
            margin: 0;
            font-size: 28px;
            font-weight: 800;
        }
        .content {
            padding: 40px 30px;
        }
        .content p {
            line-height: 1.6;
            font-size: 16px;
            margin-bottom: 20px;
        }
        .details-card {
            background-color: #f1f5f9;
            border-radius: 8px;
            padding: 20px;
            margin: 30px 0;
        }
        .details-card h3 {
            margin-top: 0;
            color: #0f172a;
            font-size: 18px;
            border-bottom: 1px solid #cbd5e1;
            padding-bottom: 10px;
        }
        .detail-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 15px;
        }
        .detail-label {
            font-weight: 600;
            color: #64748b;
        }
        .detail-value {
            font-weight: 700;
            color: #0f172a;
        }
        .footer {
            background-color: #0f172a;
            color: #94a3b8;
            text-align: center;
            padding: 20px;
            font-size: 13px;
        }
        .btn {
            display: inline-block;
            background-color: #f97316;
            color: #ffffff;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 6px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Welcome to MathShala!</h1>
        </div>
        <div class="content">
            <p>Dear <strong>{{ $enrollment->name }}</strong>,</p>
            
            <p>Thank you for choosing MathShala. Your payment has been received successfully, and your enrollment is confirmed. We are excited to have you on board!</p>
            
            <div class="details-card">
                <h3>Enrollment Details</h3>
                
                <div class="detail-row">
                    <span class="detail-label">Program:</span>
                    <span class="detail-value">{{ $enrollment->course }}</span>
                </div>
                
                <div class="detail-row">
                    <span class="detail-label">Enrollment Type:</span>
                    <span class="detail-value" style="text-transform: capitalize;">
                        {{ $enrollment->enrollment_type === 'demo' ? 'Demo Class' : 'Full Class' }}
                    </span>
                </div>

                <div class="detail-row">
                    <span class="detail-label">Amount Paid:</span>
                    <span class="detail-value">₹ {{ $enrollment->amount }}</span>
                </div>
                
                <div class="detail-row">
                    <span class="detail-label">Payment ID:</span>
                    <span class="detail-value">{{ $enrollment->payment_id }}</span>
                </div>
            </div>
            
            <p>Our academic coordinator will reach out to you shortly on your registered number (<strong>{{ $enrollment->phone }}</strong>) to provide you with the schedule and next steps.</p>
            
            <p>If you have any questions, feel free to reply to this email or contact our support team.</p>
        </div>
        
        <div class="footer">
            <p>&copy; {{ date('Y') }} MathShala. All rights reserved.</p>
            <p>Building the analytical minds of tomorrow.</p>
        </div>
    </div>
</body>
</html>
