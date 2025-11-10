Writing to the error-log (if that is configured to go to stderr) can cause PHP to check if the connection with the client is still open, and stop the script if not.

Test it out by starting the container, and visiting http://localhost.
When you abort soon after, you see the script stops in a couple of seconds unless you uncomment `ignore_user_abort(true);` in `index.php`.