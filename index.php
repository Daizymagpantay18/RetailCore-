<?php
require_once __DIR__ . '/init.php';

// If user is already logged in, redirect to their respective dashboard
if (isLoggedIn()) {
    $role = strtolower($_SESSION['role'] ?? '');
    switch ($role) {
        case 'admin':
            redirectTo('/SariSmarts/admin/dashboard.php');
            break;
        case 'hr':
            redirectTo('/SariSmarts/hr/dashboard.php');
            break;
        case 'finance':
            redirectTo('/SariSmarts/finance/dashboard.php');
            break;
        case 'inventory':
            redirectTo('/SariSmarts/inventory/dashboard.php');
            break;
        case 'cashier':
            redirectTo('/SariSmarts/cashier/pointofsales.php');
            break;
        case 'super admin':
            redirectTo('/SariSmarts/platform/superAdmin/dashboard.php');
            break;
        case 'marketing hr':
            redirectTo('/SariSmarts/platform/superAdmin/leads.php');
            break;
        case 'platform finance':
            redirectTo('/SariSmarts/platform/superAdmin/billing.php');
            break;
        default:
            redirectTo('/SariSmarts/accounts/acc_log_in.php');
            break;
    }
}

// Otherwise, land on the public platform landing page
header("Location: /SariSmarts/platform/index.php");
exit();
