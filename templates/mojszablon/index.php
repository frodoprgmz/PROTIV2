<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
    <jdoc:include type="head" />
</head>
<body>

    <!-- HEADER Z MENU -->
    <header>
        <jdoc:include type="modules" name="header" style="none" />
    </header>

    <!-- Główna zawartość -->
    <main>
        <jdoc:include type="component" />
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Moja Strona</p>
    </footer>

    <jdoc:include type="modules" name="debug" />
</body>
</html>
