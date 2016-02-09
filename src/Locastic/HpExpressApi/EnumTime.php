<?php
namespace Locastic\HpExpressApi;

class EnumTime
{
    const __default = 'TIME_0800';
    const TIME_0800 = 'TIME_0800';
    const TIME_0830 = 'TIME_0830';
    const TIME_0900 = 'TIME_0900';
    const TIME_0930 = 'TIME_0930';
    const TIME_1000 = 'TIME_1000';
    const TIME_1030 = 'TIME_1030';
    const TIME_1100 = 'TIME_1100';
    const TIME_1130 = 'TIME_1130';
    const TIME_1200 = 'TIME_1200';
    const TIME_1230 = 'TIME_1230';
    const TIME_1300 = 'TIME_1300';
    const TIME_1330 = 'TIME_1330';
    const TIME_1400 = 'TIME_1400';
    const TIME_1430 = 'TIME_1430';
    const TIME_1500 = 'TIME_1500';
    const TIME_1530 = 'TIME_1530';
    const TIME_1600 = 'TIME_1600';
    const TIME_1630 = 'TIME_1630';
    const TIME_1700 = 'TIME_1700';
    const TIME_1730 = 'TIME_1730';
    const TIME_1800 = 'TIME_1800';
    const TIME_1830 = 'TIME_1830';
    const TIME_1900 = 'TIME_1900';
    const TIME_1930 = 'TIME_1930';
    const TIME_2000 = 'TIME_2000';
    const TIME_2030 = 'TIME_2030';
    const TIME_2100 = 'TIME_2100';
    const TIME_2130 = 'TIME_2130';
    const TIME_2200 = 'TIME_2200';
    const TIME_2230 = 'TIME_2230';
    const TIME_2300 = 'TIME_2300';
    const TIME_2330 = 'TIME_2330';

    public static function getAllConsts() {
        return (new \ReflectionClass(get_class()))->getConstants();
    }
}
