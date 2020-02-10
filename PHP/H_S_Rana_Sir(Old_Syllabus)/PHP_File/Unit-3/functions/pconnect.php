<?php
class MySQLConnectionFactory {
    static $SERVERS = array(
    array(
        'host' => 'myHost1',
        'username' => 'myUsername1',
        'password' => 'myPassword1',
        'database' => 'myDatabase1'),
    array(
        'host' => 'myHost2',
        'username' => 'myUsername1',
        'password' => 'myPassword2',
        'database' => 'myDatabase2')
    );

    public static function create() {
    // Figure out which connections are open, automatically opening any connections
    // which are failed or not yet opened but can be (re)established.
    $cons = array();
    for ($i = 0, $n = count(MySQLConnectionFactory::$SERVERS); $i < $n; $i++) {
        $server = MySQLConnectionFactory::$SERVERS[$i];
        $con = mysql_pconnect($server['host'], $server['username'], $server['password']);
        if (!($con === false)) {
        if (mysql_select_db($server['database'], $con) === false) {
            echo('Could not select database: ' . mysql_error());
            continue;
        }
        $cons[] = $con;
        }
    }
    // If no servers are responding, throw an exception.
    if (count($cons) == 0) {
        throw new Exception
        ('Unable to connect to any database servers - last error: ' . mysql_error());
    }
    // Pick a random connection from the list of live connections.
    $serverIdx = rand(0, count($cons)-1);
    $con = $cons[$serverIdx];
    // Return the connection.
    return $con;
    }
}
?>