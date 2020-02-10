<?php
// a db link for queries
$lh  = mysql_connect( 'server', 'uname', 'pword' );
// and a controller link
$clh = mysql_connect( 'server', 'uname', 'pword', true );

if ( mysql_select_db ( 'big_database', $lh ) )
{
  $began  =  time();
  $tout   = 60 * 5; // five minute limit
  $qry    = "SELECT * FROM my_bigass_table";
  $rh     = mysql_unbuffered_query( $qry, $lh );
  $thread = mysql_thread_id ( $lh );
  while ( $res = mysql_fetch_row( $rh ) )
  {
    /* do what you need to do
     * ...
     * ...
     */
    if ( ( time() - $began ) > $tout )
    {
      // this is taking too long
      mysql_query( "KILL $thread", $clh );
      break;
    }
  }
}
?>