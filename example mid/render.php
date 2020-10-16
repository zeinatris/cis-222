<?php
echo '<!DOCTYPE html><html lang="en" >';

echo '<body>';

// Render Body
if( isset($_GET['page']) )
{
    switch($_GET['page'])
    {
        case '':
        case'insertfriend':
            require('insertfriend.php');
            break;
        case'updatefriend':
            require('updatefriend.php');
            break;
    }
}
else
{
    require('insertfriend.php');
}

// Render Footer
echo '</body></html>';