<?php
defined('_JEXEC') or die;

// Pobieranie menu z Joomla
$app = JFactory::getApplication();
$menu = $app->getMenu()->getItems('menutype', 'mainmenu');

?>
<link rel="stylesheet" type="text/css" href="<?php echo JUri::base(true); ?>/modules/mod_header/css/header.css" />
<nav>
    <ul class="header-menu">
        <?php foreach ($menu as $item) : ?>
            <li>
                <a href="<?php echo JRoute::_($item->link); ?>"><?php echo $item->title; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>