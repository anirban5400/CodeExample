<?php

function wire_route($name=null,$id=null){
    if(empty($name))return '';
    if(!Route::has($name))return '';
    if(!empty($name) && !empty($id)){
        return str_replace("public/","",route($name,$id));
    }
    return str_replace("public/","",route($name));
}
function wire_asset($path=null){
    if(empty($path))return '';
    return str_replace("public/public/","public/",asset($path));
}


function tosterAlert($e,$output=[]){
    $m='';
    if(isset($output['message']) && !empty($output['message']))$m=$output['message'];
    if(isset($output['success'])){
        if($output['success']==true){
            $e->dispatchBrowserEvent('toster_alert', ['type' => 'success',  'message' => $m]);
        }elseif($output['success']==false){
            $e->dispatchBrowserEvent('toster_alert', ['type' => 'error',  'message' => $m]);
        }
    }
}

function sweetAlert($e,$output=[]){
    $m='';
    if(isset($output['message']) && !empty($output['message']))$m=$output['message'];
    if(isset($output['success'])){
        if($output['success']==true){
            $e->dispatchBrowserEvent('sweet_alert_success', ['type' => 'success',  'message' => $m]);
        }elseif($output['success']==false){
            $e->dispatchBrowserEvent('sweet_alert_error', ['type' => 'error',  'message' => $m]);
        }
    }
}


/**
 * getImageLocation function
 *
 * $f_info['file_info']=getImageLocation($all_file_path[$i]->getRealPath());
 * @param [real file path] $file
 * @return void
 */
function getImageLocation($file)
    {
        try {
            $out_array=['lat' => null, 'long' => null];
            if (is_file($file)) {
                $info = exif_read_data($file);
                if (isset($info['GPSLatitude']) && isset($info['GPSLongitude']) &&
                    isset($info['GPSLatitudeRef']) && isset($info['GPSLongitudeRef']) &&
                    in_array($info['GPSLatitudeRef'], array('E', 'W', 'N', 'S')) && in_array($info['GPSLongitudeRef'], array('E', 'W', 'N', 'S'))) {

                    $GPSLatitudeRef = strtolower(trim($info['GPSLatitudeRef']));
                    $GPSLongitudeRef = strtolower(trim($info['GPSLongitudeRef']));

                    $lat_degrees_a = explode('/', $info['GPSLatitude'][0]);
                    $lat_minutes_a = explode('/', $info['GPSLatitude'][1]);
                    $lat_seconds_a = explode('/', $info['GPSLatitude'][2]);
                    $lng_degrees_a = explode('/', $info['GPSLongitude'][0]);
                    $lng_minutes_a = explode('/', $info['GPSLongitude'][1]);
                    $lng_seconds_a = explode('/', $info['GPSLongitude'][2]);

                    $lat_degrees = $lat_degrees_a[0] / $lat_degrees_a[1];
                    $lat_minutes = $lat_minutes_a[0] / $lat_minutes_a[1];
                    $lat_seconds = $lat_seconds_a[0] / $lat_seconds_a[1];
                    $lng_degrees = $lng_degrees_a[0] / $lng_degrees_a[1];
                    $lng_minutes = $lng_minutes_a[0] / $lng_minutes_a[1];
                    $lng_seconds = $lng_seconds_a[0] / $lng_seconds_a[1];

                    $lat = (float)$lat_degrees + ((($lat_minutes * 60) + ($lat_seconds)) / 3600);
                    $lng = (float)$lng_degrees + ((($lng_minutes * 60) + ($lng_seconds)) / 3600);

                    $GPSLatitudeRef == 's' ? $lat *= -1 : '';
                    $GPSLongitudeRef == 'w' ? $lng *= -1 : '';
                    $out_array['lat']=$lat;
                    $out_array['long']=$lng;
                }
                if(isset($info['Model']) && !empty($info['Model'])){
                    $out_array['Model']=$info['Model'];
                }
                if(isset($info['DateTime']) && !empty($info['DateTime'])){
                    $out_array['DateTime']=$info['DateTime'];
                }

                // if(isset($out_array['lat']) && !empty($out_array['lat']) && isset($out_array['long']) && !empty($out_array['long'])){
                //     $address=geolocationaddress($out_array['lat'], $out_array['long']);
                //     dd($address);
                // }
            }
            return $out_array;
        } catch (\Exception $e) {
            return [];
        }
    }




    
   
    /**
 * find address using lat long
 */
function geolocationaddress($lat, $long)
{
    $geocode = "https://maps.googleapis.com/maps/api/geocode/json?latlng=$lat,$long&sensor=false&key=AIzaSyCJyDp4TLGUigRfo4YN46dXcWOPRqLD0gQ";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $geocode);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $response = curl_exec($ch);
    curl_close($ch);
    $output = json_decode($response);
    $dataarray = get_object_vars($output);
    if ($dataarray['status'] != 'ZERO_RESULTS' && $dataarray['status'] != 'INVALID_REQUEST') {
        if (isset($dataarray['results'][0]->formatted_address)) {

            $address = $dataarray['results'][0]->formatted_address;

        } else {
            $address = 'Not Found';

        }
    } else {
        $address = 'Not Found';
    }

    return $address;
}