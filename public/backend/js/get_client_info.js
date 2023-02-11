
(function(){

    
    function browser_uid(){
      if(typeof window.localStorage.getItem('JC_uid')== undefined || !window.localStorage.getItem('JC_uid')){
      // return Date.now().toString(36) + Math.random().toString(36).substr(2);
        var idStrLen = 10;
        var idStr = "JC_"+(Math.floor((Math.random() * 25)) + 10).toString(36) + "_";
        idStr += (new Date()).getTime().toString(36) + "_";
        do {idStr += (Math.floor((Math.random() * 35))).toString(36);
        } while (idStr.length < idStrLen);
        window.localStorage.setItem('JC_uid',idStr);
        return (idStr);
      }
      else{
        return window.localStorage.getItem('JC_uid');
      }
    }

    // ===========================
    function store_info(call_count){
    //   if(!window.navigator.onLine)return false;
      let data=browser_uid();
      if(data){
        $('#jc_uid').val(data);
      }
    }


    // ====================

    // var log_counter = 0;
    // let log_set_interval = setInterval(function(){
    //   if(log_counter>0){store_info(log_counter);}
    //   log_counter++;
    // }, 60000);

    // setTimeout(function(){store_info(0);},1000);
    
    store_info(0);

} )();
