<?php

$entry_point_registry['getCourseById'] = array('file' => 'custom/modules/mks_Courses/getCourseById.php', 'auth' => false);
$entry_point_registry['getCustomPaymentPlan'] = array('file' => 'custom/modules/mks_Registration/getCustomPaymentPlan.php', 'auth' => false);
$entry_point_registry['saveMessageFb'] = array('file' => 'custom/modules/mks_MessagesFb/saveMessageFb.php', 'auth' => true);
$entry_point_registry['getMessagesFb'] = array('file' => 'custom/modules/mks_MessagesFb/getMessagesFb.php', 'auth' => true);
$entry_point_registry['fbWebhookMessages'] = array('file' => 'custom/modules/mks_MessagesFb/fbWebhookMessages.php', 'auth' => false);
