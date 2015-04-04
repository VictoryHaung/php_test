<?php    
    //指定日期後幾天
    function addDay($date,$days){
        $date = strtotime("+".$days." days", strtotime($date));
        return  date("Y-m-d", $date);
    }
    //指定日期後幾個月
    function addMonth($date,$months){
        $date = strtotime("+".$months." months", strtotime($date));
        return  date("Y-m-d", $date);
    }
    //指定兩個日期裡，星期x的日期
    function get_week_between_day($startTime='2014-08-31',$endTime='2014-12-31',$week=1){
        $weeks = array();
        $startTime = strtotime($startTime);
        $endTime = strtotime($endTime);
        while ($startTime < $endTime) {  
            if( date('w',$startTime)==$week){
                $weeks[] = date('Y-m-d', $startTime); 
            }
            $startTime += strtotime('+1 day', 0);
        }
        return $weeks;
    }
    function get_day_week($week){
        return date("Y-m-d",strtotime(date("Y-m-d")."-".(date("w") - $week)." day"));    
    }
    function get_week_cn($x){
        $week = array("日","一","二","三","四","五","六","日");
        return $week[$x];
    }
    function getWeek($date_time,$x=''){
        $week          = array("日","一","二","三","四","五","六","日");
        if($x != '')$week = array(0,1,2,3,4,5,6,7);
        list($date)    = explode(" ", $date_time); //取出日期部份
        list($Y,$M,$D) = explode("-",$date); //分離出年月日以便製作時戳
        return $week[date("w", mktime(0,0,0,$M,$D,$Y))];
    }
    function getWeekDate($date,$week){
        //先找出今天星期X
        $today_week = date("w",strtotime($date));
        //再 求出目標星期 跟 今天的 差距
        $diff = (int)$today_week - (int)$week;
        // 目標日期 = 今天 - 差距天數
        $target_date = date("Y-m-d",strtotime($date."-".$diff." day"));
        return $target_date;
    }
?>
