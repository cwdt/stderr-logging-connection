<?php

//ignore_user_abort(true);

for ($i = 0; $i <= 1000; $i++) {
    usleep(10000);
    error_log(sprintf('Tick %d (aborted %d)', $i, connection_aborted()));
}

register_shutdown_function(function() {
    error_log('Shutdown!');
});

echo 'Hi!';