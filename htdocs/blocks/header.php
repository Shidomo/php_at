<header>
    <span class="logo">Blog Master</span>
    <nav>
        <a href="/">Главная</a>
        <a href="/contacts.php">Контакты</a>
        <a href="/users.php">Список пользователей</a>
        <?php if (isset($_COOKIE['login'])) : ?>
            <a href="/add-article.php" class="btn">Добавить Статью</a>
            <a href="/login.php" class="btn">Кабинет пользователя</a>
            
        <?php else : ?>
            <a href="/login.php" class="btn">Войти</a>
            <a href="/register.php" class="btn">Регистрация</a>
        <?php endif; ?>
    </nav>
</header>