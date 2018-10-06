<?php
    $module_name = 'jckl_DashboardTemplates';
    $viewdefs [$module_name] =
        array (
            'DetailView' =>
                array (
                    'templateMeta' =>
                        array (
                            'form' =>
                                array (
                                    'buttons' =>
                                        array (
                                            0 => 'EDIT',
                                            1 => 'DUPLICATE',
                                            2 => 'DELETE',
                                            3 => 'FIND_DUPLICATES',
                                            4 => array('customCode' => '<a class="button" href="index.php?module=jckl_DashboardTemplates&action=Deploy&step=1&template={$fields.id.value}">{$MOD.LBL_DEPLOY_DASHBOARD}</a>'),
                                        ),
                                ),
                            'maxColumns' => '2',
                            'widths' =>
                                array (
                                    0 =>
                                        array (
                                            'label' => '10',
                                            'field' => '30',
                                        ),
                                    1 =>
                                        array (
                                            'label' => '10',
                                            'field' => '30',
                                        ),
                                ),
                            'useTabs' => false,
                            'tabDefs' =>
                                array (
                                    'DEFAULT' =>
                                        array (
                                            'newTab' => false,
                                            'panelDefault' => 'expanded',
                                        ),
                                ),
                        ),
                    'panels' =>
                        array (
                            'default' =>
                                array (
                                    0 =>
                                        array (
                                            0 => 'name',
                                            1 => 'assigned_user_name',
                                        ),
                                    1 =>
                                        array (
                                            0 =>
                                                array (
                                                    'name' => 'data_last_refreshed',
                                                    'label' => 'LBL_DATA_LAST_REFRESHED',
                                                ),
                                            1 => '',
                                        ),
                                    2 =>
                                        array (
                                            0 => 'date_entered',
                                            1 => 'date_modified',
                                        ),
                                    3 =>
                                        array (
                                            0 => 'description',
                                        ),
                                ),
                        ),
                ),
        );
?>
