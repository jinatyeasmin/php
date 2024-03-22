<?php 
$time=date('h');
if($time>=12  ){
    print"good morning";
}elseif($time<=17){
    print "good afternoon";
}elseif($time<=20 ){
    echo "good evening";
}else{
    echo "good night";
}