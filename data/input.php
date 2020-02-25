<?php
$USER_COMMAND_DOT = substr( $_GET['usercommand'], 0, 1 );
$USER_COMMAND_USERCOMMAND_5 = substr( $_GET['usercommand'], 0, 5 );
$USER_COMMAND_USERCOMMAND_6 = substr( $_GET['usercommand'], 0, 6 );
$USER_COMMAND_USERCOMMAND_8 = substr( $_GET['usercommand'], 0, 8 );

if ( isset( $_GET['usercommand'] ) ) {
    if ( $USER_COMMAND_DOT === '.' ) {
        if ( $USER_COMMAND_USERCOMMAND_5 == '.help' ) {
            header( 'Location: ../index.php?command=help' );
        } elseif ( $USER_COMMAND_USERCOMMAND_6 == '.open ' ) {
            $fileName = substr( $_GET['usercommand'], 6 );
            if ( $fileName == '' ) {
                header( 'Location: ../index.php?error=filenotfound' );
            } else {
                header( 'Location: ../index.php?programmname=' . $fileName );
            }
        } elseif ( $USER_COMMAND_USERCOMMAND_6 == '.clear' ) {
            header( 'Location: ../index.php' );
        } elseif ( $USER_COMMAND_USERCOMMAND_8 == '.create ' ) {
            $fileName = substr( $_GET['usercommand'], 8 );
            header( 'Location: ../index.php?command=create&programmname='. $fileName );
        } else {
            header( 'Location: ../index.php?error=suchinstructionsdonotexist' );
        }
    } else {
        header( 'Location: ../index.php?error=theprogramdidnotaskfordataentry' );
    }
} else {
    header( 'Location: ../index.php?error=commandlibaryerror' );
}