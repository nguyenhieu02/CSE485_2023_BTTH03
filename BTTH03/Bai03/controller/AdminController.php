<?php
require("services/AuthorService.php");
require("services/CategoryService.php");
require("services/AdminService.php");
require("services/ArticleService.php");
    class AdminController{
        public function index(){


            $adminService = new AdminService();
            $admins = $adminService->getAllAdmin();

            include("view/admin/index.php");
        }
    }