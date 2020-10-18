<?php
echo '<!DOCTYPE html><html lang="en" >';


echo '<body>';

// Render Body

if( isset($_GET['page']) )
{
    switch($_GET['page'])
    {
        case '':
        case'insertcar':
            require('insertcar.php');
            break;
        case 'updatecar':
            require('updatecar.php');
            break;
        case 'deletecar':
            require('deletecar.php');
            break;
        case 'findcar':
            require('findcar.php');
            break;
    }
}

echo '</body></html>';