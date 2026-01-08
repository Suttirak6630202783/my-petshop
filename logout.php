<?php
session_start();

// เคลียร์ session ทั้งหมด
session_unset();

// ลบ session ออกจากระบบ
session_destroy();

// ส่งกลับไปหน้า Home
header("Location: index.php");
exit();
