var $$ = {
    request:function(obj){
        var xhr;
        try{
            xhr = new XMLHttpRequest();
        }catch (e){
            xhr = new ActiveXObject('Microsoft.XMLHTTP');
        }
        if(obj.mothed == 'get'){
            xhr.open(obj.mothed,obj.url + '?' + obj.data + '&' + Math.random(),true);
            xhr.send();
        }else if(obj.mothed == 'post'){
            xhr.open(obj.mothed,obj.url,true);
            xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
            xhr.send(obj.data);
        }
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4 && xhr.status == 200){
                var res;
                if(obj.dataType == 'xml'){
                    res = xhr.responseXML;
                }else if(obj.dataType == 'text'){
                    res = xhr.responseText;
                }
                eval("res=" + res);
                obj.callback(res);
            }
        }
    }
}