<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Suendri">
    <title>Project 2 Pemrograman Berbasis Web Lanjutan</title>
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <aside>
        <header>
            <div class="brand">P2</div>
            <div class="user">Sistem Akademik</div>
        </header>

        <?php
            if (isset($_GET['page'])) {
                $currentPage = $_GET['page'];
            } else {
                $currentPage = 'dashboard';
            }
            ?>

        <nav>
            <ul>
                <li><a href="index.php" class="<?php echo ($currentPage == 'dashboard') ? 'active' : ''; ?>">Dashboard</a></li>
                <li><a href="index.php?page=mhsw" class="<?php echo ($currentPage == 'mhsw') ? 'active' : ''; ?>">Mahasiswa</a></li>
                <li><a href="index.php?page=dosen" class="<?php echo ($currentPage == 'dosen') ? 'active' : ''; ?>">Dosen</a></li>
                <li><a href="index.php?page=matkul" class="<?php echo ($currentPage == 'matkul') ? 'active' : ''; ?>">Matakuliah</a></li>
            </ul>
        </nav>
    </aside>

    <main>
        <article>
            <?php
                if (isset($_GET['page'])) {
                    include $_GET['page'] . ".php";
                } else {
                    include "main.php";
                }
                ?>
        </article>

        <footer>
            Project 2 &mdash; Pemrograman Berbasis Web
        </footer>
    </main>
</body>

</html>
