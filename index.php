<html>
<head>
    <title>
        PHP base
    </title>
    <style>
        body {
            font-size: 16px;
        }
    </style>
</head>
<body class="body">
    <div class="main" style="width: 100%">
        <h1>
            <?php
                // Выводим на экран строчку
                # Другой вариант комментария

                /*
                    Многострочные
                    комментарии
                 */
                echo 'Ветка feature';
            ?>
            <?= 'Hello world!'; ?>
        </h1>
        <section class="content">
            <p>Что-либо</p>
        </section>
    </div>
</body>
</html>
