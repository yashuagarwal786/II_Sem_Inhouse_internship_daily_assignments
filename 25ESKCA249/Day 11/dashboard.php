<?php
session_start();
include("dashboardHeader.php");
?>

<main class="dashboard-page">
    <div class="container">
        <section class="dashboard-hero mb-4">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <p class="mb-2 text-white-50">Welcome back</p>

                    <h1 class="h2 fw-bold mb-2">Hi, <?=$_SESSION['user_name']?>!</h1>

                    <p class="mb-0 text-white-50">
                        Manage your Account
                    </p>
                </div>

                <div class="col-lg-4 text-lg-end">
                    <a href="registration.php" class="btn btn-light me-2">New User</a>
                    <a href="updatePassword.php" class="btn btn-outline-light">Update Password</a>
                </div>

            </div>
        </section>

        <section class="row g-4 mb-4">
            <div class="col-md-6 col-xl-3">
                <div class="dashboard-card p-4">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <p class="text-secondary mb-1">Profile</p>
                            <h3 class="h4 mb-0">Active</h3>
                        </div>
                        <span class="stat-icon icon-blue">P</span>
                    </div>
                    <p class="small text-secondary mb-0 mt-3">Account is ready to use.</p>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="dashboard-card p-4">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <p class="text-secondary mb-1">Security</p>
                            <h3 class="h4 mb-0">Good</h3>
                        </div>
                        <span class="stat-icon icon-green">S</span>
                    </div>
                    <p class="small text-secondary mb-0 mt-3">Login verification completed.</p>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="dashboard-card p-4">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <p class="text-secondary mb-1">Tasks</p>
                            <h3 class="h4 mb-0">12</h3>
                        </div>
                        <span class="stat-icon icon-orange">T</span>
                    </div>
                    <p class="small text-secondary mb-0 mt-3">3 tasks need attention.</p>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="dashboard-card p-4">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <p class="text-secondary mb-1">Messages</p>
                            <h3 class="h4 mb-0">5</h3>
                        </div>
                        <span class="stat-icon icon-dark">M</span>
                    </div>
                    <p class="small text-secondary mb-0 mt-3">Latest updates are available.</p>
                </div>
            </div>
        </section>

        <section class="row g-4">
            <div class="col-lg-8">
                <div class="dashboard-card p-4 mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h2 class="h5 mb-0">Recent Activity</h2>
                        <span class="badge text-bg-primary">Today</span>
                    </div>

                    <div class="d-flex gap-3 py-3 border-bottom">
                        <span class="activity-dot"></span>
                        <div>
                            <h3 class="h6 mb-1">Login successful</h3>
                            <p class="text-secondary mb-0 small">You logged in to your account successfully.</p>
                        </div>
                    </div>

                    <div class="d-flex gap-3 py-3 border-bottom">
                        <span class="activity-dot"></span>
                        <div>
                            <h3 class="h6 mb-1">Dashboard opened</h3>
                            <p class="text-secondary mb-0 small">Your dashboard page is now active.</p>
                        </div>
                    </div>

                    <div class="d-flex gap-3 py-3">
                        <span class="activity-dot"></span>
                        <div>
                            <h3 class="h6 mb-1">Profile status checked</h3>
                            <p class="text-secondary mb-0 small">Your account status is showing active.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php
include("footer.php");
?>
