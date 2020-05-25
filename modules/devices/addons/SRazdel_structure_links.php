<?php

$this->device_links['SRazdel']=array(
        array(
            'LINK_NAME'=>'razdel_switch',
            'LINK_TITLE'=>LANG_DEVICES_LINK_RAZDEL_SWITCH,
            'LINK_DESCRIPTION'=>LANG_DEVICES_LINK_RAZDEL_SWITCH_DESCRIPTION,
            'TARGET_CLASS'=>'SControllers',
            'PARAMS'=>array(
                array(
                    'PARAM_NAME'=>'invert_status',
                    'PARAM_TITLE'=>LANG_DEVICES_LINK_RAZDEL_INVERT,
                    'PARAM_TYPE'=>'select',
                    'PARAM_OPTIONS'=>array(
                        array('TITLE'=>LANG_NO,'VALUE'=>'0'),
                        array('TITLE'=>LANG_YES,'VALUE'=>'1'),
                        array('TITLE'=>LANG_AUTO,'VALUE'=>'2')
                    )
                )
            )
        ),
        array(
            'LINK_NAME'=>'switch_timer',
            'LINK_TITLE'=>LANG_DEVICES_LINK_SWITCH_TIMER,
            'LINK_DESCRIPTION'=>LANG_DEVICES_LINK_SWITCH_TIMER_DESCRIPTION,
            'TARGET_CLASS'=>'SControllers',
            'PARAMS'=>array(
                array(
                    'PARAM_NAME'=>'action_delay',
                    'PARAM_TITLE'=>LANG_DEVICES_LINK_SWITCH_TIMER_PARAM_ACTION_DELAY,
                    'PARAM_TYPE'=>'num'
                ),
                array(
                    'PARAM_NAME'=>'darktime',
                    'PARAM_TITLE'=>LANG_DEVICES_LINK_SWITCH_TIMER_PARAM_DARKTIME,
                    'PARAM_TYPE'=>'select',
                    'PARAM_OPTIONS'=>array(
                        array('TITLE'=>LANG_NO,'VALUE'=>'0'),
                        array('TITLE'=>LANG_YES,'VALUE'=>'1')
                    )
                )
            )
        ),
        array(
            'LINK_NAME'=>'switch_it',
            'LINK_TITLE'=>LANG_DEVICES_LINK_SWITCH_IT,
            'LINK_DESCRIPTION'=>LANG_DEVICES_LINK_SWITCH_IT_DESCRIPTION,
            'TARGET_CLASS'=>'SControllers',
            'PARAMS'=>array(
                array(
                    'PARAM_NAME'=>'action_type',
                    'PARAM_TITLE'=>LANG_DEVICES_LINK_ACTION_TYPE,
                    'PARAM_TYPE'=>'select',
                    'PARAM_OPTIONS'=>array(
                        array('TITLE'=>LANG_DEVICES_LINK_TYPE_TURN_ON,'VALUE'=>'turnon'),
                        array('TITLE'=>LANG_DEVICES_LINK_TYPE_TURN_OFF,'VALUE'=>'turnoff'),
                        array('TITLE'=>LANG_DEVICES_LINK_TYPE_SWITCH,'VALUE'=>'switch')
                        )
                ),
                array(
                    'PARAM_NAME'=>'action_delay',
                    'PARAM_TITLE'=>LANG_DEVICES_LINK_SWITCH_IT_PARAM_ACTION_DELAY,
                    'PARAM_TYPE'=>'num'
                )
            )
            ),
        array(
            'LINK_NAME'=>'set_color',
            'LINK_TITLE'=>LANG_DEVICES_LINK_SET_COLOR,
            'LINK_DESCRIPTION'=>LANG_DEVICES_LINK_SET_COLOR_DESCRIPTION,
            'TARGET_CLASS'=>'SRGB',
            'PARAMS'=>array(
                array(
                    'PARAM_NAME'=>'action_color',
                    'PARAM_TITLE'=>LANG_DEVICES_LINK_SET_COLOR_PARAM_ACTION_COLOR,
                    'PARAM_TYPE'=>'color'
                ),
                array(
                    'PARAM_NAME'=>'action_delay',
                    'PARAM_TITLE'=>LANG_DEVICES_LINK_SWITCH_IT_PARAM_ACTION_DELAY,
                    'PARAM_TYPE'=>'num'
                )
            )
        )
);
