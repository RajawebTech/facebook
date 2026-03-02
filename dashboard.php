<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>RajaBook Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f0f2f5;
        }

        .sidebar {
            height: 100vh;
            background: #ffffff;
            padding: 20px;
            border-right: 1px solid #ddd;
        }

        .cover {
            height: 250px;
            background: linear-gradient(to right, #1877f2, #4e73df);
            border-radius: 8px;
        }

        .profile-img {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            border: 5px solid white;
            object-fit: cover;
        }

        .card-box {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
        }

        .logout-btn {
            margin-top: 30px;
        }
        .cover {
            height: 250px;
            background: linear-gradient(135deg, #000000, #0f2027, #203a43, #2c5364);
            border-radius: 8px;
        }
    </style>
</head>

<body>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-3 sidebar">
            <h4>Manage Page</h4>
            <hr>

            <p><strong><?php echo $_SESSION['user']; ?></strong></p>

            <ul class="list-unstyled">
                <li class="mb-3">📊 Professional Dashboard</li>
                <li class="mb-3">📈 Insights</li>
                <li class="mb-3">📢 Ad Center</li>
                <li class="mb-3">⚙ Settings</li>
            </ul>

            <a href="logout.php" class="btn btn-danger w-100 logout-btn">Logout</a>
        </div>

        <!-- Main Content -->
        <div class="col-md-9 p-4">

            <!-- Cover + Profile Section -->
            <div class="position-relative">

                <div class="cover"></div>

                <div class="position-absolute" style="bottom:-80px; left:40px;">
                    <img src="images/test.jpeg" class="profile-img">
                </div>

            </div>

            <!-- Page Name -->
            <div style="margin-top:100px; margin-left:40px;">
                <h2>Raja Techie</h2>
                <p>148 followers · 174 following</p>
            </div>

            <!-- Post Box -->
            <div class="card-box">
                <input type="text" class="form-control mb-3" placeholder="What's on your mind?">
                <div class="d-flex gap-3">
                    <button class="btn btn-outline-primary">Photo/Video</button>
                    <button class="btn btn-outline-danger">Live</button>
                </div>
            </div>

            <!-- Sample Post -->
            <div class="card-box">
                <h5>Sample Post</h5>
                <p>This is a demo dashboard layout for RajaBook.</p>
            </div>

        </div>

    </div>
</div>

</body>
</html>