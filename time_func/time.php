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
