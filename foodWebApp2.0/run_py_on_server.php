
        <?php

       // $command = escapeshellcmd('/usr/custom/test.py');
        //$command = escapeshellcmd('kill $(lsof -t -i:5009)');
        $output = shell_exec('kill $(lsof -t -i:5009)');
        echo $output;

        ob_start();
        passthru('/usr/bin/python3 /var/www/html/foodWebApp2.0/food_rs_webservice.py arg1 arg2');
        $output = ob_get_clean();
        ?>
