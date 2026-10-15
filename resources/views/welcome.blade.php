<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .info-card {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(188, 43, 255, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .info-card h2 {
            text-align: center;
            color: #461458;
            margin-top: 0;
            margin-bottom: 20px;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            font-size: 16px;
        }

        .info-row:last-child {
            margin-bottom: 0;
        }

        .label {
            font-weight: bold;
            color: #555;
        }

        .value {
            color: #222;
        }
    </style>
</head>
<body>

    <div class="info-card">
        <h2>Student Information</h2>
        
        <div class="info-row">
            <span class="label">Student Name:</span>
            <span class="value">Frances Kyle Mary E. Villamor</span>
        </div>
        
        <div class="info-row">
            <span class="label">Student Number:</span>
            <span class="value">0124-1207</span>
        </div>
        
        <div class="info-row">
            <span class="label">Course:</span>
            <span class="value">BS Information Technology</span>
        </div>
        
        <div class="info-row">
            <span class="label">Section:</span>
            <span class="value">BSIT-3C</span>
        </div>
        
        <div class="info-row">
            <span class="label">Subject:</span>
            <span class="value">Client Server Technologies</span>
        </div>
        
        <div class="info-row">
            <span class="label">Current Date:</span>
         <div class="info-row">
            <span class="value">October 9, 2026</span>  
        </div>    

</body>
</html>