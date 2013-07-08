<?php

/*======================================================================*\
|| #################################################################### ||
|| # Package - Joomla Template based on Shaz3e S3 Framework             ||
|| # Copyright (C) 2010  shaz3e.com. All Rights Reserved.               ||
|| # Authors - Shahrukh A. Khan (Shaz3e) and DiligentCreators           ||
|| # license - PHP files are licensed under  GNU/GPL V2                 ||
|| # license - CSS  - JS - IMAGE files  are Copyrighted material        ||
|| # bound by Proprietary License of shaz3e.com                         ||
|| # for more information visit http://www.shaz3e.com/                  ||
|| # Redistribution and  modification of this software                  ||
|| # is bounded by its licenses websites - http://www.shaz3e.com        ||
|| # A project of DiligentCreators - Construcing Ideas...               ||
|| #################################################################### ||
\*======================================================================*/

defined('_JEXEC') or die;
$app = JFactory::getApplication();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, intial-scale=1, maximum-scale=1, user-scaleable=no">
<meta charset="utf-8">
<jdoc:include type="head" />
<link href="<?php echo $this->baseurl.'/templates/'.$this->template; ?>/css/offline.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->baseurl.'/templates/'.$this->template; ?>/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="dc-offline">
        <div class="dc-offline-system-message"><jdoc:include type="message" /></div>
        <div class="dc-offline-image">
            <?php if ($app->getCfg('offline_image')) : ?>
                <img src="<?php echo $app->getCfg('offline_image'); ?>" alt="<?php echo htmlspecialchars($app->getCfg('sitename')); ?>">
            <?php endif; ?>
        </div>
        <div class="dc-offline-sitename">
            <h1><?php echo htmlspecialchars($app->getCfg('sitename')); ?></h1>
        </div>
        <div class="dc-offline-message">
        <?php if ($app->getCfg('display_offline_message', 1) == 1 && str_replace(' ', '', $app->getCfg('offline_message')) != ''): ?>
            <?php echo $app->getCfg('offline_message'); ?>
            <?php elseif ($app->getCfg('display_offline_message', 1) == 2 && str_replace(' ', '', JText::_('JOFFLINE_MESSAGE')) != ''): ?>
            <?php echo JText::_('JOFFLINE_MESSAGE'); ?>
        <?php  endif; ?>
        </div>
        <div class="dc-offline-login-form">
        <form action="<?php echo JRoute::_('index.php', true); ?>" method="post" id="dc-ofline-form">
            <fieldset class="dc-offline-fieldset">
            	<legend>Login</legend>
                <div class="dc-offline-username">
                    <span class="dc-offline-label">
                        <label for="username"><?php echo JText::_('Username') ?></label>
                    </span>
                    <span class="dc-offline-input">
                        <input name="username" id="username" type="text" class="dc-offline-inputbox" alt="<?php echo JText::_('JGLOBAL_USERNAME') ?>">
                    </span>
                </div>
                
                <div class="dc-offline-password">
                    <span class="dc-offline-label">
                        <label for="passwd"><?php echo JText::_('Password') ?></label>
                    </span>
                    
                    <span class="dc-offline-input">
                        <input type="password" name="password" class="dc-offline-inputbox" alt="<?php echo JText::_('JGLOBAL_PASSWORD') ?>" id="passwd">
                    </span>
                </div>
                
                <div class="dc-offline-remember">
                    <span class="dc-offline-label">
                        <label for="remember"><?php echo JText::_('Remember ME?') ?></label>
                    </span>
                    <span class="dc-offline-input">
                        <input type="checkbox" name="remember" class="inputbox" value="yes" alt="<?php echo JText::_('JGLOBAL_REMEMBER_ME') ?>" id="remember">
                    </span>
                </div>
                <div class="dc-offline-login-button">
                    <input type="submit" name="Submit" class="dc-offline-login-button" value="<?php echo JText::_('JLOGIN') ?>" />
                    <input type="hidden" name="option" value="com_users" />
                    <input type="hidden" name="task" value="user.login" />
                    <input type="hidden" name="return" value="<?php echo base64_encode(JURI::base()) ?>" />
                    <?php echo JHtml::_('form.token'); ?>
                </div>
            </fieldset>
        </form>
        </div>
    </div>
</body>
</html>
