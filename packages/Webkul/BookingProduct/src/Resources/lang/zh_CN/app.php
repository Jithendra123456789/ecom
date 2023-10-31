<?php

return [
    'admin' => [
        'catalog' => [
            'products' => [
                'booking'                   => '预订信息',
                'booking-type'              => '预订类型',
                'default'                   => '默认',
                'appointment-booking'       => '预约',
                'event-booking'             => '活动预订',
                'rental-booking'            => '租赁预订',
                'table-booking'             => '订座电话',
                'slot-duration'             => '插入持续时间 (分钟)',
                'break-time'                => '休息时间黑白插槽 (分钟)',
                'available-every-week'      => '每周可用',
                'yes'                       => 'Yes',
                'no'                        => 'No',
                'available-from'            => '可用从',
                'available-to'              => '可用到',
                'same-slot-all-days'        => '同一时段全天',
                'slot-has-quantity'         => '插槽有数量',
                'slots'                     => '插槽',
                'from'                      => '从',
                'to'                        => '到',
                'qty'                       => '数量',
                'add-slot'                  => '添加插槽',
                'sunday'                    => '星期天',
                'monday'                    => '星期一',
                'tuesday'                   => '星期二',
                'wednesday'                 => '星期三',
                'thursday'                  => '星期四',
                'friday'                    => '星期五',
                'saturday'                  => '星期六',
                'renting-type'              => '租赁类型',
                'daily'                     => '每日基础',
                'hourly'                    => '每小时基础',
                'daily-hourly'              => '两者(每日和每小时)',
                'daily-price'               => '每日价格',
                'hourly-price'              => '每小时价格',
                'location'                  => '位置',
                'show-location'             => '显示位置',
                'event-start-date'          => '事件开始日期',
                'event-end-date'            => '事件结束日期',
                'tickets'                   => '门票',
                'add-ticket'                => '添加票证',
                'name'                      => '名称',
                'price'                     => '价格',
                'quantity'                  => '数量',
                'description'               => '描述',
                'special-price'             => '特殊价格',
                'special-price-from'        => '有效期从',
                'special-price-to'          => '有效期至',
                'charged-per'               => '每次收费',
                'guest'                     => '访客',
                'table'                     => '桌',
                'prevent-scheduling-before' => '阻止之前的调度',
                'guest-limit'               => '每桌客人限制',
                'guest-capacity'            => '客人容量',
                'type'                      => '类型',
                'many-bookings-for-one-day' => '一日多预订',
                'one-booking-for-many-days' => '一票多日',
                'day'                       => '日',
                'status'                    => '状态',
                'open'                      => '开门',
                'close'                     => '关门',
                'time-error'                => '这个时间必须大于开始时间.',
            ],
        ],

        'sales' => [
            'bookings' => [
                'title'         => '预订信息',
                'table-view'    => '表視圖',
                'calender-view' => '日曆視圖',
            ],
        ],

        'datagrid' => [
            'from' => '从',
            'to'   => '到',
        ],
    ],

    'shop' => [
        'products' => [
            'booking-information'      => '预订信息',
            'location'                 => '位置',
            'contact'                  => '联系',
            'email'                    => '电子邮件',
            'slot-duration'            => '插槽周期',
            'slot-duration-in-minutes' => ':minutes 分钟',
            'today-availability'       => '今天的可用性',
            'slots-for-all-days'       => '全天显示',
            'sunday'                   => '星期天',
            'monday'                   => '星期一',
            'tuesday'                  => '星期二',
            'wednesday'                => '星期三',
            'thursday'                 => '星期四',
            'friday'                   => '星期五',
            'saturday'                 => '星期六',
            'closed'                   => '已关门',
            'book-an-appointment'      => '预约',
            'date'                     => '日期',
            'slot'                     => '插槽',
            'no-slots-available'       => '没有可用的插槽',
            'rent-an-item'             => '租一个项目',
            'choose-rent-option'       => '选择租金选项',
            'daily-basis'              => '每日基础',
            'hourly-basis'             => '每小时基础',
            'select-time-slot'         => '选择时间段',
            'select-slot'              => '选择插槽',
            'select-date'              => '选择日期',
            'select-rent-time'         => '选择租用时间',
            'from'                     => '从',
            'to'                       => '到',
            'book-a-table'             => '预订座位',
            'special-notes'            => '特殊要求/注意事项',
            'event-on'                 => '活动开启',
            'book-your-ticket'         => '订票',
            'per-ticket-price'         => '每张票 :price',
            'number-of-tickets'        => '票数',
            'total-tickets'            => '总票数',
            'base-price'               => '基本价格',
            'total-price'              => '总价',
            'base-price-info'          => '(这将适用于每种数量的每种类型的票)',
        ],

        'cart' => [
            'renting_type' => '租金类型',
            'daily'        => '每日',
            'hourly'       => '每小时',
            'event-ticket' => '活动门票',
            'event-from'   => '事件从',
            'event-till'   => '活动截止日期',
            'rent-type'    => '租金类型',
            'rent-from'    => '租自',
            'rent-till'    => '租到',
            'booking-from' => '预订从',
            'booking-till' => '预订截止',
            'special-note' => '特殊要求/注意事项',
        ],
    ],
];
