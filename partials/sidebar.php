<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
?>

<div class="sidebar">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="?page=home" class="nav-link px-2 <?php if ($page == 'home' || $page == '')  echo "active" ?>"><i class="material-icons icon">dashboard</i>
                <span class="text">Dashboard</span></a>
        </li>
        <li class="nav-item">
            <a href="?page=matakuliah" class="nav-link px-2 <?php if ($page == 'matakuliah' || $page == '')  echo "active" ?>"><i class="material-icons icon">update</i>
                <span class="text">Mata Kuliah</span></a>
        </li>
    </ul>
</div>
