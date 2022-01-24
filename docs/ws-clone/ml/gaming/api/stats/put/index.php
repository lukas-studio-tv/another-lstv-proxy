<?php
function url_origin($s,$use_forwarded_host=false){$ssl=(!empty($s['HTTPS'])&&$s['HTTPS']=='on');$sp=strtolower($s['SERVER_PROTOCOL']);$protocol=substr($sp,0,strpos($sp,'/')).(($ssl)?'s':'');$port=$s['SERVER_PORT'];$port=((!$ssl&&$port=='80')||($ssl&&$port=='443'))?'':':'.$port;$host=($use_forwarded_host&&isset($s['HTTP_X_FORWARDED_HOST']))?$s['HTTP_X_FORWARDED_HOST']:(isset($s['HTTP_HOST'])?$s['HTTP_HOST']:null);$host=isset($host)?$host:$s['SERVER_NAME'].$port;return $protocol.'://'.$host;}function full_url($s,$use_forwarded_host=false){return url_origin($s,$use_forwarded_host).$s['REQUEST_URI'];}$absolute_url=full_url($_SERVER);$url=$absolute_url;$url_components=parse_url($url);parse_str($url_components['query'],$params);
$targetresponse=file_get_contents('../'.$params['g'].'.json');if(!$params['g']==null){if(file_exists('../'.$params['g'].'.json')){if(!$params['key']==null){if($params['key']==="bR0O4kwRQsRvIsvPIeXRvHC1g98mVSZMVeDGa1mahcpK7R3HEIWL7oEfY2g"){if(!$params['content']==null){file_put_contents('../'.$params['g'].'.json', $params['content']);echo'sucess';

/*Error messages: */
}else{echo'error: please specify what do you need to put with &content=content. also, it can not be empty';}
}else{echo'error: invalid key.';}
}else{echo"error: no key provided. you can't do that.";}
}else{echo 'error: this game id was not found';}
}else{echo 'error: you must specify the game id';}
?>