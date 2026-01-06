<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DriveXight - Accident Reports</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            margin: 0;
            background-color: #f4f8fb;
        }

        .sidebar {
            width: 250px;
            background: #ffffff;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 100%;
            height: auto;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin-top: 20px;
        }

        .sidebar ul li {
            padding: 12px;
            cursor: pointer;
            text-align: left;
            transition: background 0.3s ease-in-out;
            border-radius: 5px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .sidebar ul li:hover,
        .sidebar ul li.active {
            background: #007bff;
            color: white;
            font-weight: bold;
        }

        .bottom-nav {
            margin-top: auto;
            padding-top: 20px;
        }

        .bottom-nav button {
            width: 100%;
            padding: 10px;
            border: none;
            cursor: pointer;
            font-size: 14px;
            background: #d3d5d7;
            color: rgb(12, 11, 11);
            border-radius: 5px;
            margin-top: 5px;
        }

        .logout {
            background: #d3d5d7 !important;
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            background: #ffffff;
            padding: 10px;
            border-radius: 5px;
            align-items: center;
        }

        .search-bar {
            flex-grow: 1;
            display: flex;
            align-items: center;
            border-radius: 25px;
            background: #f1f3f4;
            padding: 8px 15px;
        }

        .search-bar input {
            border: none;
            background: transparent;
            outline: none;
            width: 100%;
            font-size: 16px;
        }

        .notification {
            position: relative;
            background: rgb(248, 247, 247);
            padding: 10px;
            border-radius: 50%;
            cursor: pointer;
            margin-right: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: red;
            color: white;
            padding: 3px 7px;
            border-radius: 50%;
            font-size: 12px;
            font-weight: bold;
        }

        .report-section {
            margin-top: 20px;
        }

        .report-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .details {
            flex: 1;
        }

        .video {
            background: #ddd;
            width: 50%;
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
        }

        .play-button {
            font-size: 20px;
            background: none;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <img src="png.png" alt="DriveXight Logo">
        </div>
        <ul>
            <li><i class="fas fa-home"></i> Dashboard</li>
            <li><a href="accident_reports.php" style="text-decoration: none; color: inherit;"><i class="fas fa-car-crash"></i> Accident Reports</a></li>
            <li><i class="fas fa-chart-line"></i> Driver Behavior Analytics</li>
            <li><i class="fas fa-user-shield"></i> Fraud Detection</li>
            <li><i class="fas fa-map-marker-alt"></i> Live GPS Tracking</li>
        </ul>

        <div class="bottom-nav">
            <button class="settings">⚙️ Settings</button>
            <button class="logout">Logout</button>
        </div>
    </div>

    <div class="main-content">
        <div class="top-bar">
            <div class="search-bar">
                 <input type="text" placeholder="Search that you need...">
            </div>
            <div class="notification">
                <i class="fas fa-bell"></i>
                <span class="notification-badge">3</span>
            </div>
            <div class="profile">👤 Saanvi Jeevankishore</div>
        </div>
        
        <div class="report-section">
            <h3>Accident Reports</h3>
            <div class="report-card">
                <div class="details">
                    <h4>Incident - 1</h4>
                    <p><strong>Timestamp:</strong> 02:18:25 pm</p>
                    <p><strong>Location:</strong> Hosur, Tamil Nadu</p>
                    <p><strong>Vehicle Info:</strong> TN70AP3132 (Car)</p>
                    <p><strong>Severity Level:</strong> Minor</p>
                </div>
                <div class="video">
                    <button class="play-button">▶</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>';
?>
