<?php 
    $pageName = basename($_SERVER['PHP_SELF']);
    switch ($pageName) {
    case "index.php":
        echo "MTB | BRANCH PERFORMANCE";
        break;
    case "brach-activaty.php":
        echo "MTB | BRANCH ACTIVATY";
        break;
    case "branch-average-activaty.php":
        echo "MTB | AVERAGE ACTIVATY";
        break;  
    case "branch-command-execution-time.php":
        echo "MTB | BRANCH COMMAND EXECUTION TIME";
        break; 
    case "branch-engaging-tso-oss":
        echo "MTB | BRANCH ENGAGING TSO & OSS";
        break;
    case "branch-job-volume.php":
        echo "MTB | JOB VOLUME";
        break; 
    case "branch-system-utilization.php":
        echo "MTB | SYSTEM UTILIZATION";
        break; 
    
    case "individual-contribution-oss.php":
        echo "MTB | INDIVIDUAL CONTRIBUTION OSS";
        break;
    case "individual-performance.php":
        echo "MTB | INDIVIDUAL PERFORMANCE";
        break;
    case "individual-system-utilization.php":
        echo "MTB | INDIVIDUAL SYSTEM UTILIZATION";
        break;
    case "individual-tso-wise-performance.php":
        echo "MTB | INDIVIDUAL TSO PERFORMANCE ";
        break;
    case "password-change.php":
        echo "MTB | PASSWORD CHANGE";
        break; 
    case "profile.php":
        echo "MTB | PROFILE";
        break; 
    case "login.php":
        echo "MTB | AUTHENTICATION";
        break; 
}
 ?>