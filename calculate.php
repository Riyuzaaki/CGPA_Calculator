<?php
include 'dbh.php';
session_start();

if(isset($_POST['submit']))
{
$credit1 = $_POST['credit1'];
$grade1 = $_POST['grade1'];
$credit2 = $_POST['credit2'];
$grade2 = $_POST['grade2'];
$credit3 = $_POST['credit3'];
$grade3 = $_POST['grade3'];
$credit4 = $_POST['credit4'];
$grade4 = $_POST['grade4'];
$credit5 = $_POST['credit5'];
$grade5 = $_POST['grade5'];
$credit6 = $_POST['credit6'];
$grade6 = $_POST['grade6'];
$credit7 = $_POST['credit7'];
$grade7 = $_POST['grade7'];
$credit8 = $_POST['credit8'];
$grade8 = $_POST['grade8'];
$credit9 = $_POST['credit9'];
$grade9 = $_POST['grade9'];
$credit10 = $_POST['credit10'];
$grade10 = $_POST['grade10'];
$cgpa=0;
$overall = 0;
    if(!empty($credit1))
    { $cgpa = $cgpa + ($credit1 * $grade1);
        $overall = $overall + ($credit1 * 10);
    }
    if(!empty($credit2))
        { $cgpa = $cgpa + ($credit2 * $grade2);
        $overall = $overall + ($credit2 * 10);
    }
    if(!empty($credit3))
        { $cgpa = $cgpa + ($credit3 * $grade3);
        $overall = $overall + ($credit3 * 10);
    }
    if(!empty($credit4))
        { $cgpa = $cgpa + ($credit4 * $grade4);
        $overall = $overall + ($credit4 * 10);
    }
    if(!empty($credit5))
        { $cgpa = $cgpa + ($credit5 * $grade5);
        $overall = $overall + ($credit5 * 10);
    }
    if(!empty($credit6))
        { $cgpa = $cgpa + ($credit6 * $grade6);
        $overall = $overall + ($credit6 * 10);
    }
    if(!empty($credit7))
        { $cgpa = $cgpa + ($credit7 * $grade7);
        $overall = $overall + ($credit7 * 10);
    }
    if(!empty($credit8))
        { $cgpa = $cgpa + ($credit8 * $grade8);
        $overall = $overall + ($credit8 * 10);
    }
    if(!empty($credit9))
        { $cgpa = $cgpa + ($credit9 * $grade9);
        $overall = $overall + ($credit9 * 10);
    }
    if(!empty($credit10))
        { $cgpa = $cgpa + ($credit10 * $grade10);
        $overall = $overall + ($credit10 * 10);
    }
   $cgpa = ($cgpa/$overall) * 10;
$_SESSION['cgpa']= $cgpa;
     header("Location: cgpa.php");

}