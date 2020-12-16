<?php
echo '<!DOCTYPE html><html lang="en" >';

require('templates/head.php');

echo '<body>';

// Render Body
require('templates/nav.php');
if( isset($_GET['page']) )
{
    switch($_GET['page'])
    {
        case '':
        case'home':
            require('pages/homepage.php');
            break;
        case 'contact':
            require('pages/contact.php');
            break;
        case 'about':
            require('pages/about.php');
            break;
        case 'catalog':
            require('pages/catalog.php');
            break;
        case 'detail':
            require('pages/detail.php');
            break;
        case 'login':
            require('pages/login.php');
            break;
        case 'cart':
            require('pages/cart.php');
            break;
        case 'checkout':
            require('pages/checkout.php');
            break;
        default:
            require('pages/404.php');
    }
}
else
{
    require('pages/homepage.php');
}

// Render Footer
require('templates/footer.php');
echo '</body></html>';