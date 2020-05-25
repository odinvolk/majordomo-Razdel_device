<?php

$this->device_types['razdel'] = array(
    'TITLE'=>'Раздел',
    'PARENT_CLASS'=>'SControllers',
    'CLASS'=>'SRazdel',
    'PROPERTIES'=>array(
            'loadType'=>array('DESCRIPTION'=>LANG_DEVICES_LOADTYPE,
                '_CONFIG_TYPE'=>'select','_CONFIG_HELP'=>'SdLoadType',
                '_CONFIG_OPTIONS'=>'light='.LANG_DEVICES_LOADTYPE_LIGHT.
                    ',heating='.LANG_DEVICES_LOADTYPE_HEATING.
                    ',vent='.LANG_DEVICES_LOADTYPE_VENT.
                    ',curtains='.LANG_DEVICES_LOADTYPE_CURTAINS.
                    ',gates='.LANG_DEVICES_LOADTYPE_GATES.
                    ',power='.LANG_DEVICES_LOADTYPE_POWER),
            'icon'=>array('DESCRIPTION'=>LANG_IMAGE,'_CONFIG_TYPE'=>'style_image','_CONFIG_HELP'=>'SdIcon')
    ),
    'METHODS'=>array(
        'statusUpdated'=>array('DESCRIPTION'=>'Состояние Updated'),
        'switch'=>array('DESCRIPTION'=>'Раздел изменить'),
        'taken'=>array('DESCRIPTION'=>'Раздел взять'),
        'shoot'=>array('DESCRIPTION'=>'Раздел снять')
    )
);

@include_once(ROOT . 'languages/SRazdel_' . SETTINGS_SITE_LANGUAGE . '.php');
@include_once(ROOT . 'languages/SRazdel_default' . '.php');
