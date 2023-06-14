<link rel="stylesheet" href="/styles/footer.css">
<section class="footer-section">
    <div class="container">
        <footer>
            <div>
                <p class="text"><b>Дуальное обучение “АВПК”</b></p>
                <ul>
                    <a href="index.php">
                        <li class="text">Главная</li>
                    </a>
                    <?php if (isset($user)): ?>
                        <a href="dashboard.php"><li class="text">Личный кабинет</li></a>
                        <?php if ($user["role"] === "admin"): ?>
                            <a href="admissions.php"><li class="text">Заявки</li></a>
                        <?php else: ?>
                            <a href="admission.php"><li class="text">Подать заявку</li></a>
                        <?php endif; ?>
                    <?php else: ?>
                        <a href="login.php">
                            <li class="text">Войти</li>
                        </a>
                        <a href="register.php">
                            <li class="text">Регистрация</li>
                        </a>
                    <?php endif;?>
                </ul>
            </div>

            <div>
                <p class="text"><b>Колледж “АВПК”</b></p>
                <ul>
                    <a href="http://ahpc.edu.kz">
                        <li class="text">Сайт колледжа</li>
                    </a>
                    <a href="http://moodle.ahpc.edu.kz">
                        <li class="text">Cистема “Moodle”</li>
                    </a>
                    <a href="http://ahpc.edu.kz/контакты">
                        <li class="text">Контакты</li>
                    </a>
                </ul>
            </div>
        </footer>
        <div class="copyright-wrapper">
            <p class="copyright">© 2023 АКТЮБИНСКИЙ ВЫСШИЙ ПОЛИТЕХНИЧЕСКИЙ КОЛЛЕДЖ</p>
        </div>
    </div>
</section>