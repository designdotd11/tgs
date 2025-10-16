<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE GOOD SHEPHERD'S</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        h1 {
            font-size: 24px;
            color: #4CAF50;
        }
        p {
            font-size: 16px;
            line-height: 1.5;
        }
        .ticket-details {
            margin-top: 20px;
        }
        .ticket-details table {
            width: 100%;
            border-collapse: collapse;
        }
        .ticket-details th, .ticket-details td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .ticket-details th {
            background-color: #f2f2f2;
        }
        .footer {
            margin-top: 30px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="email-container">
         <div style="border-bottom: 4px solid #818181;text-align:center; padding-bottom:20px">
		    <img src="<?= base_url('assets/admin/')?>images/logo.png" width="221" height="74" alt="THE GOOD SHEPHERD'S" style="width: auto; height: 80px;">
		  </div>
        <h1>Admission Enquiry</h1>
        <p>Dear Admin,</p>
        <p>A new request has been received. Below are the details of the student:</p>

        <div class="ticket-details">
            <table>
                
                <tr>
                    <th>Session</th>
                    <td><?= $user['session']?></td>
                </tr>
                
                <tr>
                    <th>Student Name</th>
                    <td><?= $user['student_name']?></td>
                </tr>
                
                <tr>
                    <th>Student Class</th>
                    <td><?= $user['student_class']?></td>
                </tr>
                <tr>
                    <th>Father's Name</th>
                    <td><?= $user['fathers_name']?></td>
                </tr>
                <tr>
                    <th>Contact</th>
                    <td>
                        <?= $user['phone']?>
                    </td>
                </tr>
                
                <tr>
                    <th>School</th>
                    <td>
                        <?= $user['school']?>
                    </td>
                </tr>
                
                <tr>
                    <th>Location</th>
                    <td>
                        <?= $user['location']?>
                    </td>
                </tr>
            </table>
        </div>

        <!--<p>We look forward to seeing you at the show. Please present this email at the entrance.</p>-->
        
        <p>If you have any questions or need further assistance, feel free to contact our support team.</p>

        <div class="footer">
            <p>Best Regards,</p>
            <p><strong>THE GOOD SHEPHERD'S</strong></p>
            <p>Email: mail@tgss.in | Phone: +91-7090031100 , +91- 999 999 9999</p>
        </div>
    </div>
</body>
</html>
