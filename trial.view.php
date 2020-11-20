<! Doctype html>
<html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Document</title>


    <style>
        body{
            background: lavender;
        }

        header{
            background: gray;
            padding: 10px;
            text-align: center;
            border-radius: 10px;
        }

        #topic{
            background: gray;
            text-align: -moz-left;
            padding: 30px;
            width:300px;
            border-radius: 30px;
        }


    </style>

</head>
<body>
    <header>

        <h1>

            <?= 'Hello, ' . $_GET['name']; ?>

        </h1>

    </header>



    <h2 id="topic" ><strong>TODOS</strong></h2>


        <ul>

            <?php foreach ($results as $task) : ?>
                <li>

                    <?php if($task -> Status) : ?>
                        <?= $task ->Description; ?>
                        &#9989
                    <?php else: ?>
                        <?= $task ->Description;  ?>
                    <?php endif; ?>

                </li>

            <?php endforeach; ?>

        </ul>

</body>
</html>

