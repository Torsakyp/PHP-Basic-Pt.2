    <?php

    session_start();

    echo $_SESSION['name'];
    echo "<br>";
    echo $_SESSION['age'];

    //session_unset(); //การลบ session

    //session_destroy(); //การพัง session

    ?>
