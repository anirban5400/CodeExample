<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;


function encode4($data){
    return base64_encode(base64_encode(base64_encode(base64_encode($data))));
}

function decode4($data){
    return base64_decode(base64_decode(base64_decode(base64_decode($data))));
}

function shortName($name){
    if(empty($name)){
        return '';
    }
    $names = explode(" ",$name);
    $res = '';
    foreach($names as $val){
        $res.=substr($val, 0, 1);
        //$res.=' ';
    }
    return $res;
}

function mime2ext($mime){
    $all_mimes = '{"png":["image\/png","image\/x-png"],"bmp":["image\/bmp","image\/x-bmp","image\/x-bitmap","image\/x-xbitmap","image\/x-win-bitmap","image\/x-windows-bmp","image\/ms-bmp","image\/x-ms-bmp","application\/bmp","application\/x-bmp","application\/x-win-bitmap"],"gif":["image\/gif"],"jpeg":["image\/jpeg","image\/pjpeg"],"xspf":["application\/xspf+xml"],"vlc":["application\/videolan"],"wmv":["video\/x-ms-wmv","video\/x-ms-asf"],"au":["audio\/x-au"],"ac3":["audio\/ac3"],"flac":["audio\/x-flac"],"ogg":["audio\/ogg","video\/ogg","application\/ogg"],"kmz":["application\/vnd.google-earth.kmz"],"kml":["application\/vnd.google-earth.kml+xml"],"rtx":["text\/richtext"],"rtf":["text\/rtf"],"jar":["application\/java-archive","application\/x-java-application","application\/x-jar"],"zip":["application\/x-zip","application\/zip","application\/x-zip-compressed","application\/s-compressed","multipart\/x-zip"],"7zip":["application\/x-compressed"],"xml":["application\/xml","text\/xml"],"svg":["image\/svg+xml"],"3g2":["video\/3gpp2"],"3gp":["video\/3gp","video\/3gpp"],"mp4":["video\/mp4"],"m4a":["audio\/x-m4a"],"f4v":["video\/x-f4v"],"flv":["video\/x-flv"],"webm":["video\/webm"],"aac":["audio\/x-acc"],"m4u":["application\/vnd.mpegurl"],"pdf":["application\/pdf","application\/octet-stream"],"pptx":["application\/vnd.openxmlformats-officedocument.presentationml.presentation"],"ppt":["application\/powerpoint","application\/vnd.ms-powerpoint","application\/vnd.ms-office","application\/msword"],"docx":["application\/vnd.openxmlformats-officedocument.wordprocessingml.document"],"xlsx":["application\/vnd.openxmlformats-officedocument.spreadsheetml.sheet","application\/vnd.ms-excel"],"xl":["application\/excel"],"xls":["application\/msexcel","application\/x-msexcel","application\/x-ms-excel","application\/x-excel","application\/x-dos_ms_excel","application\/xls","application\/x-xls"],"xsl":["text\/xsl"],"mpeg":["video\/mpeg"],"mov":["video\/quicktime"],"avi":["video\/x-msvideo","video\/msvideo","video\/avi","application\/x-troff-msvideo"],"movie":["video\/x-sgi-movie"],"log":["text\/x-log"],"txt":["text\/plain"],"css":["text\/css"],"html":["text\/html"],"wav":["audio\/x-wav","audio\/wave","audio\/wav"],"xhtml":["application\/xhtml+xml"],"tar":["application\/x-tar"],"tgz":["application\/x-gzip-compressed"],"psd":["application\/x-photoshop","image\/vnd.adobe.photoshop"],"exe":["application\/x-msdownload"],"js":["application\/x-javascript"],"mp3":["audio\/mpeg","audio\/mpg","audio\/mpeg3","audio\/mp3"],"rar":["application\/x-rar","application\/rar","application\/x-rar-compressed"],"gzip":["application\/x-gzip"],"hqx":["application\/mac-binhex40","application\/mac-binhex","application\/x-binhex40","application\/x-mac-binhex40"],"cpt":["application\/mac-compactpro"],"bin":["application\/macbinary","application\/mac-binary","application\/x-binary","application\/x-macbinary"],"oda":["application\/oda"],"ai":["application\/postscript"],"smil":["application\/smil"],"mif":["application\/vnd.mif"],"wbxml":["application\/wbxml"],"wmlc":["application\/wmlc"],"dcr":["application\/x-director"],"dvi":["application\/x-dvi"],"gtar":["application\/x-gtar"],"php":["application\/x-httpd-php","application\/php","application\/x-php","text\/php","text\/x-php","application\/x-httpd-php-source"],"swf":["application\/x-shockwave-flash"],"sit":["application\/x-stuffit"],"z":["application\/x-compress"],"mid":["audio\/midi"],"aif":["audio\/x-aiff","audio\/aiff"],"ram":["audio\/x-pn-realaudio"],"rpm":["audio\/x-pn-realaudio-plugin"],"ra":["audio\/x-realaudio"],"rv":["video\/vnd.rn-realvideo"],"jp2":["image\/jp2","video\/mj2","image\/jpx","image\/jpm"],"tiff":["image\/tiff"],"eml":["message\/rfc822"],"pem":["application\/x-x509-user-cert","application\/x-pem-file"],"p10":["application\/x-pkcs10","application\/pkcs10"],"p12":["application\/x-pkcs12"],"p7a":["application\/x-pkcs7-signature"],"p7c":["application\/pkcs7-mime","application\/x-pkcs7-mime"],"p7r":["application\/x-pkcs7-certreqresp"],"p7s":["application\/pkcs7-signature"],"crt":["application\/x-x509-ca-cert","application\/pkix-cert"],"crl":["application\/pkix-crl","application\/pkcs-crl"],"pgp":["application\/pgp"],"gpg":["application\/gpg-keys"],"rsa":["application\/x-pkcs7"],"ics":["text\/calendar"],"zsh":["text\/x-scriptzsh"],"cdr":["application\/cdr","application\/coreldraw","application\/x-cdr","application\/x-coreldraw","image\/cdr","image\/x-cdr","zz-application\/zz-winassoc-cdr"],"wma":["audio\/x-ms-wma"],"vcf":["text\/x-vcard"],"srt":["text\/srt"],"vtt":["text\/vtt"],"ico":["image\/x-icon","image\/x-ico","image\/vnd.microsoft.icon"],"csv":["text\/x-comma-separated-values","text\/comma-separated-values","application\/vnd.msexcel"],"json":["application\/json","text\/json"]}';
    $all_mimes = json_decode($all_mimes,true);
    foreach ($all_mimes as $key => $value) {
      if(array_search($mime,$value) !== false) return $key;
    }
    return false;
}

function formatPhone2($phoneNumber){
    $phoneNumber = preg_replace('/[^0-9]/','',$phoneNumber);

    if(strlen($phoneNumber) > 10) {
        $countryCode = substr($phoneNumber, 0, strlen($phoneNumber)-10);
        $areaCode = substr($phoneNumber, -10, 3);
        $nextThree = substr($phoneNumber, -7, 3);
        $lastFour = substr($phoneNumber, -4, 4);

        $phoneNumber = '+'.$countryCode.' ('.$areaCode.') '.$nextThree.'-'.$lastFour;
    }
    else if(strlen($phoneNumber) == 10) {
        $areaCode = substr($phoneNumber, 0, 3);
        $nextThree = substr($phoneNumber, 3, 3);
        $lastFour = substr($phoneNumber, 6, 4);

        $phoneNumber = '('.$areaCode.') '.$nextThree.'-'.$lastFour;
    }
    else if(strlen($phoneNumber) == 7) {
        $nextThree = substr($phoneNumber, 0, 3);
        $lastFour = substr($phoneNumber, 3, 4);

        $phoneNumber = $nextThree.'-'.$lastFour;
    }

    return $phoneNumber;
}

function formatPhone($phoneNumber){
    $phone = preg_replace('~.*(\d{3})[^\d]{0,7}(\d{3})[^\d]{0,7}(\d{4}).*~', '($1) $2-$3', $phoneNumber); //Remove all non-numers

    return $phone;

}

function unformatPhone($phone){
    $phone = str_replace( array( '+1', '+', '-' , '(', ')', ' ' ), '', $phone);

      // Returning the result
      return $phone;
}

if (!function_exists('tableExist')) {
    //Check Table doesn't exist
     function tableExist($table_name=''){
         if(empty($table_name))return false;
         if (Schema::hasTable($table_name)) {
             return true;
         }
         return false;
     }
 }
 
 if (!function_exists('tableColumnExist')) {
     //Check Column doesn't exist
     function tableColumnExist($table_name='',$column_name=''){
         if(empty($table_name))return false;
         if(empty($column_name))return false;
         if (Schema::hasColumn($table_name, $column_name)) {
             return true;
         }
         return false;
     }
 }
 
 if (!function_exists('remove_space')) {
     function remove_space($str){
         return trim(preg_replace('/\s\s+/', '', str_replace("\n", " ", $str)));
     }
 }

 if (!function_exists('numberFormatHelp')) {
    /**
     * use only for view purpose any number
     * numberFormatHelp(1000,2)=>1,000.00
     * numberFormatHelp(1,000.00,2)=>1,000.00
     * @return formated_number
     */
    function numberFormatHelp($n=null,$d=0){
        if($n==null)return '0.00';
        if($n==0 || $n=='0')return '0.00';
        $n=str_replace(",","",$n);
        $n = (float) $n;
        if(!is_numeric($n)) {
            return $n;
        }
        $n=number_format($n,$d);
        if(empty($n))$n=0.00;
        return $n;
    }
}

if (!function_exists('convert_date_format')) {
    function convert_date_format($date, $format = 'Y-m-d H:i:s'){
        $dt = DateTime::createFromFormat($format, $date);
        $is_valid= $dt && $dt->format($format) === $date;
        if(!$is_valid){
            $date=date_create($date);
            return date_format($date,$format);
        }else{
            return $date;
        }
    }
}

if (!function_exists('valid_date_format')) {
    function valid_date_format($date, $format = 'Y-m-d H:i:s'){
        $dt = DateTime::createFromFormat($format, $date);
        return $dt && $dt->format($format) === $date;
    }
}

if (!function_exists('validate_email')) {
    function validate_email($email=null)
    {
        if(empty($email))return false;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }else{
            return true;
        }
    }
}
if (!function_exists('validate_phone_number')) {
    function validate_phone_number($phone=null)
    {
        if(empty($phone))return false;
        $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
        $phone_to_check = str_replace("-", "", $filtered_phone_number);
        if(strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
            return false;
        }else{
            return true;
        }
    }
}

if (!function_exists('getPhoneNumber')) {
    /**
     * get phone number from string.
     *
     */

    function getPhoneNumber($n=null){
        $output_country_code='';
        $output_phone_number='';
        if ($n==0 || $n==null) return ['country_code'=>$output_country_code,'phone_number'=>$output_phone_number];

        $get_phone_number=filter_var($n, FILTER_SANITIZE_NUMBER_INT);
        if(!empty($get_phone_number)){
            $strval=strval($get_phone_number);
            $strval=str_replace("(","",$strval);
            $strval=str_replace(")","",$strval);
            $strval=str_replace("-","",$strval);
            $strval=str_replace(" ","",$strval);
            if(strlen($strval)>=10){
                $st=strlen($strval)-10;
                $end=strlen($strval);
                $output_country_code=substr($strval,0,$st);
                $output_phone_number= (int) substr($strval,$st,$end);
            }else{
                // may be not a valid phone number
                $output_phone_number= (int) $strval;
            }
        }
        return ['country_code'=>$output_country_code,'phone_number'=>$output_phone_number, 'full_number'=>$output_country_code.$output_phone_number];

    }
}
if (!function_exists('maskPhoneNumber')) {
    /**
     * get phone number from string.
     * maskPhoneNumber('4664654655','US');//['phone_number'= '+1 (466) 465-4655']
     */

    function maskPhoneNumber($n=null,$country_code='US'){
        $output_phone_number='';
        if ($n==0 || $n==null) return ['phone_number'=>$output_phone_number];

        $get_phone_number=filter_var($n, FILTER_SANITIZE_NUMBER_INT);
        if(!empty($get_phone_number)){
            $strval=strval($get_phone_number);
            $strval=str_replace("+1","",$strval);
            $strval=str_replace("(","",$strval);
            $strval=str_replace(")","",$strval);
            $strval=str_replace("-","",$strval);
            $strval=str_replace(" ","",$strval);
            if(strlen($strval)>=10){
                $st=strlen($strval)-10;
                $end=strlen($strval);
                $phone_number= substr($strval,$st,$end);
            }else{
                // may be not a valid phone number
                $phone_number= $strval;
            }
            $sa=str_split($phone_number);
            if($country_code=='US' || $country_code=='us'){
                $output_phone_number='+1 ('.$sa[0]??''.$sa[1]??''.$sa[2]??''.') '.$sa[3]??''.$sa[4]??''.$sa[5]??''.'-'.$sa[6]??''.$sa[7]??''.$sa[8]??''.$sa[9]??'';
            }
            if($country_code=='IN' || $country_code=='in'){
                $output_phone_number='+91 '.$sa[0]??''.$sa[1]??''.$sa[2]??''.$sa[3]??''.$sa[4]??''.$sa[5]??''.$sa[6]??''.$sa[7]??''.$sa[8]??''.$sa[9]??'';
            }
        }
        return ['phone_number'=>$output_phone_number];
    }
}

if (!function_exists('filter_filename')) {

    function filter_filename($filename,$beautify_filename=false) {
        $filename = preg_replace('~[<>:"/\\|?*]|[\x00-\x1F]|[\x7F\xA0\xAD]|[#\[\]@!$&\'()+,;=]|[{}^\~`]~x','-', $filename);
        $filename = ltrim($filename, '.-');
        if($beautify_filename){
            $filename = preg_replace(array('/ +/','/_+/','/-+/'), '-', $filename);
            $filename = preg_replace(array('/-*\.-*/','/\.{2,}/'), '.', $filename);
            $filename = mb_strtolower($filename, mb_detect_encoding($filename));
            $filename = trim($filename, '.-');
        }
        return $filename;
    }
}

function createdAtFormat($datetime='',$show_time=false,$tz=''){
    if(empty($datetime))return '';
    if($show_time==true){
        if(IsDateTime($datetime)){
            $dt = new DateTime();
            if(isset($tz) && !empty($tz))$dt->setTimezone(new DateTimeZone($tz));
            $dt->setTimestamp(strtotime($datetime));
            $output=$dt->format('M-d-Y h:i a');
            return $output;
        }
        // return date('M-d-Y h:i a', strtotime($datetime));
    }else{
        if(IsDateTime($datetime)){
            $dt = new DateTime();
            if(isset($tz) && !empty($tz))$dt->setTimezone(new DateTimeZone($tz));
            $dt->setTimestamp(strtotime($datetime));
            return $dt->format('M-d-Y');
            // return date('M-d-Y', strtotime($datetime));
        }
    }
    return '';
}
function IsDateTime($datetime) {
    try {
        $fTime = new DateTime($datetime);
        $fTime->format('m/d/Y H:i:s');
        return true;
    }
    catch (Exception $e) {
        return false;
    }
}

function dateTimeSplit($datetime = null){

    if(empty($datetime)){
        $date['date'] = '00-00-0000';
        $date['time'] = '00:00';
        return $date;
    }
    $timestamp = strtotime($datetime);
    $date_format = date('M-d-Y', $timestamp);
    $time_format = date('H:i', $timestamp);
    $date['date'] = $date_format;
    $date['time'] = $time_format;

    return $date;
}

function daysBetween($date1,$date2){
    $date1 = new DateTime($date1);
    $date2 = new DateTime($date2);

    $diff = $date1->diff($date2)->format("%r%a"); //3
    //$neg_diff = $later->diff($earlier)->format("%r%a"); //-3
    return $diff;
}

function round2d($num){
    // $number = sprintf('%.2f', (float)$num);
    $number = round($num,2);
    return $number;
}

function charAt($str,$pos,$char=1){
    return substr($str,$pos-1,$char);
}

function charAtR($str,$pos,$char=1){
    return substr($str,-$pos,$char);
}

function array_sort($array, $on, $order=SORT_ASC){

    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }

        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
                break;
            case SORT_DESC:
                arsort($sortable_array);
                break;
        }

        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
}

function daysInterval($id = null){
    if($id == 'yd'){
        $date = Carbon::yesterday()->format('Y-m-d');
        return [$date.' 00:00:00',$date.' 23:59:59'];
    }elseif($id == 'td'){
        $date = Carbon::now()->format('Y-m-d');
        return [$date.' 00:00:00',$date.' 23:59:59'];
    }elseif($id == 'tm'){
        $sdate = Carbon::now()->startOfMonth()->format('Y-m-d');
        $edate = Carbon::now()->endOfMonth()->format('Y-m-d');
        return [$sdate.' 00:00:00',$edate.' 23:59:59'];
    }elseif($id == 'ty'){
        $sdate = Carbon::now()->startOfYear()->format('Y-m-d');
        $edate = Carbon::now()->endOfYear()->format('Y-m-d');
        return [$sdate.' 00:00:00',$edate.' 23:59:59'];
    }elseif($id == 'l7d'){
        $sdate = Carbon::now()->subDays(7)->format('Y-m-d');
        $edate = Carbon::now()->format('Y-m-d');
        return [$sdate.' 00:00:00',$edate.' 23:59:59'];
    }elseif($id == 'l30d'){
        $sdate = Carbon::now()->subDays(30)->format('Y-m-d');
        $edate = Carbon::now()->format('Y-m-d');
        return [$sdate.' 00:00:00',$edate.' 23:59:59'];
    }elseif($id == 'l365d'){
        $sdate = Carbon::now()->subDays(365)->format('Y-m-d');
        $edate = Carbon::now()->format('Y-m-d');
        return [$sdate.' 00:00:00',$edate.' 23:59:59'];
    }elseif($id == 'l1m'){
        $sdate = Carbon::now()->subMonths(1)->startofMonth()->format('Y-m-d');
        $edate = Carbon::now()->subMonths(1)->endOfMonth()->format('Y-m-d');
        return [$sdate.' 00:00:00',$edate.' 23:59:59'];
    }elseif($id == 'l3m'){
        $sdate = Carbon::now()->subMonths(3)->startofMonth()->format('Y-m-d');
        $edate = Carbon::now()->subMonths(1)->endOfMonth()->format('Y-m-d');
        return [$sdate.' 00:00:00',$edate.' 23:59:59'];
    }elseif($id == 'l6m'){
        $sdate = Carbon::now()->subMonths(6)->startofMonth()->format('Y-m-d');
        $edate = Carbon::now()->subMonths(1)->endOfMonth()->format('Y-m-d');
        return [$sdate.' 00:00:00',$edate.' 23:59:59'];
    }elseif($id == 'l1y'){
        $sdate = Carbon::now()->subYears(1)->startofYear()->format('Y-m-d');
        $edate = Carbon::now()->subYear(1)->endOfYear()->format('Y-m-d');
        return [$sdate.' 00:00:00',$edate.' 23:59:59'];
    }
}

function time_intervel_points_array($day='',$s='00:01',$e='23:59',$intervel="0"){
    $output=[];
    $mins = number_format($intervel,2);
    $mins=$mins*60;
    $mins=(int)$mins;
    $start = Carbon::parse($s);
    $end = Carbon::parse($e);
    $diff = $start->diff($end);
    if($diff->invert==0 && $mins>0){
        $newHours=Carbon::parse($s);
        while($newHours->diff($end)->invert==0){
            $start_time=$newHours->format('h:i A');
            $newHours=$newHours->addMinutes($mins);
            $end_time=$newHours->format('h:i A');
            $output[]=['day'=>$day,'start_time'=>$start_time,'end_time'=>$end_time];
        }
    }else{
        $output[]=['day'=>$day,'start_time'=>$start->format('h:i A'),'end_time'=>$end->format('h:i A')];
    }
    return $output;
}
function time_intervel_points_option_list($day='',$s='00:01',$e='23:59',$intervel="0"){
    $output=[];
    $mins = number_format($intervel,2);
    $mins=$mins*60;
    $mins=(int)$mins;
    $start = Carbon::parse($s);
    $end = Carbon::parse($e);
    $diff = $start->diff($end);
    if($diff->invert==0 && $mins>0){
        $newHours=Carbon::parse($s);
        while($newHours->diff($end)->invert==0){
            $start_time=$newHours->format('h:i A');
            $newHours=$newHours->addMinutes($mins);
            $end_time=$newHours->format('h:i A');
            $output[]=$day." ".$start_time.' - '.$end_time;
        }
    }else{
        $output[]=$day." ".$start->format('h:i A').' - '.$end->format('h:i A');
    }
    $new[$day]=$output;
    return [$new];
}

function getCurrentRouteName(){
	return  \Route::currentRouteName();
}

function getCurrentRouteParameters(){
	$routeInfo = \Route::current();

	return $routeInfo->parameters;
	// dd($routeInfo);
}

if (!function_exists('codeExampleMenuList')) {
    /**
     * @return menuListArray;
     */
    function codeExampleMenuList($route_name=''){
        if(empty($route_name)) return [];
        $home_menu_array=['menu_name'=>'Home','route_icon'=>'<i class="fad fa-home"></i>','route_name'=>'code.home'];
        $blog_menu_array=['menu_name'=>'Blog List','route_icon'=>'<i class="fad fa-blog"></i>','route_name'=>'code.blog.list'];


        $menu_header_list_array=[
            "code.home"=>[$home_menu_array],
            "code.dashboard"=>[$home_menu_array]
            // ========Blog======
            ,"code.blog.list"=>[$home_menu_array,$blog_menu_array]
            ,"code.blog.add"=>[$home_menu_array,$blog_menu_array,['menu_name'=>'Add Blog','route_icon'=>'<i class="fad fa-plus-circle"></i>','route_name'=>'code.blog.add']]
            ,"code.blog.edit"=>[$home_menu_array,$blog_menu_array,['menu_name'=>'Edit Blog','route_icon'=>'<i class="fad fa-edit"></i>','route_name'=>'code.blog.edit']]
        ];
        return $menu_header_list_array[$route_name]??[];
    }

}