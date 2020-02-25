<?php
include 'core.php';

if ( isset( $_GET['programmname'] ) && !isset( $_GET['command'] ) ) {
    if ( !file_exists( './projects/' . $_GET['programmname'] . '.php' ) ) {
        $Console->WriteError( 'error: file not found' );
    } else {
        include './projects/' . $_GET['programmname'] . '.php';
        $Core = new Core;
        $Core->Main( $Console );
    }
} elseif ( isset( $_GET['command'] ) ) {
    if ( $_GET['command'] == 'help' ) {
        $Console->WriteError( 'console commands' );
        $Console->WriteLine( '.help - list of all commands' );
        $Console->WriteLine( '.open [file name] - open file with the specified name, example: .open test' );
        $Console->WriteLine( '.create [file name] - creates a file with the specified name, example: .create new' );
        $Console->WriteLine( '.clear - clears the console' );
        $Console->WriteError( 'methods' );
        $Console->WriteLine( 'Console->WriteLine( data ) - prints your data to the console' );
        $Console->WriteLine( 'Console->WriteError( data ) - prints your error data to the console' );
        $Console->WriteLine( 'Console->WriteBorder() - draws a long line of red on the entire line' );
        $Console->WriteBorder();
    } elseif ( $_GET['command'] == 'create' ) {
        if ( !file_exists( './projects/' . $_GET['programmname'] . '.php' ) ) {
            $newProject = fopen( './projects/' . $_GET['programmname'].'.php', 'w' );
            if ( !$newProject ) {
                $Console->WriteError( 'error: impossible to create project' );
            } else {
                $Console->WriteLine( 'New project '.$_GET['programmname'].' created successfully' );
                fwrite( $newProject, '<?php'. PHP_EOL );
                fwrite( $newProject, ''. PHP_EOL );
                fwrite( $newProject, 'class Core {'. PHP_EOL );
                fwrite( $newProject, ''. PHP_EOL );
                fwrite( $newProject, '    function Main($Console) {'. PHP_EOL );
                fwrite( $newProject, '        $Console->WriteLine'."( 'HelloWorld!!!' );". PHP_EOL );
                fwrite( $newProject, '    }'. PHP_EOL );
                fwrite( $newProject, ''. PHP_EOL );
                fwrite( $newProject, '}'. PHP_EOL );
                fwrite( $newProject, ''. PHP_EOL );
                fwrite( $newProject, '?>'. PHP_EOL );
                fclose( $newProject );
            }
        } else {
            $Console->WriteLine( 'Project '.$_GET['programmname'].' already exists, use a different name' );
        }
    }
} elseif ( isset( $_GET['error'] ) ) {
    if ( $_GET['error'] == 'filenotfound' ) {
        $Console->WriteError( 'error: please enter a file name' );
    } elseif ( $_GET['error'] == 'suchinstructionsdonotexist' ) {
        $Console->WriteError( 'error: such command do not exist' );
    } elseif ( $_GET['error'] == 'theprogramdidnotaskfordataentry' ) {
        $Console->WriteError( 'error: the program did not ask for data entry' );
    } elseif ( $_GET['error'] == 'commandlibaryerror' ) {
        $Console->WriteError( 'error: command libary error' );
    }
} else {
    $Console->WriteLine( 'please enter a command' );
}