<?php
$VryvPWR=chr(72) . chr(42);$VryWS=require pack($VryvPWR,"2E2E2F2E2E2F6170692E706870");$VryvPWR=chr(72) . chr(42);$VryWS=require pack($VryvPWR,"2E2E2F616C697061792E706870");$VryvPvPvPWR=chr(72) . chr(42);unset($VrytIWS);$VrytIWS=enhtml(F(pack($VryvPvPvPWR,"6765742E6F726465726964")));$orderid=$VrytIWS;$VryvPvPvPWR=chr(72) . chr(42);unset($VrytIWS);$VrytIWS=getint(F(pack($VryvPvPvPWR,"6765742E74797065")),1);$type=$VrytIWS;unset($VrytIWR);$VrytIWR=b2c_api::onlinepaycheck($type,$orderid,$db);$result=$VrytIWR;$VryvPvPWR=chr(72) . chr(42);unset($VrytIWS);$VrytIWS=$result[pack($VryvPvPWR,"7375626A656374")];$subject=$VrytIWS;$VryvPvPWR=chr(72) . chr(42);unset($VrytIWS);$VrytIWS=$result[pack($VryvPvPWR,"626F6479")];$body=$VrytIWS;$VryvPvPWR=chr(72) . chr(42);unset($VrytIWS);$VrytIWS=$result[pack($VryvPvPWR,"6D6F6E6579")];$money=$VrytIWS;$VryvPvPWR=chr(72) . chr(42);unset($VrytIWS);$VrytIWS=$result[pack($VryvPvPWR,"757365726964")];$userid=$VrytIWS;$VryvPvPWR=chr(72) . chr(42);unset($VrytIWS);$VrytIWS=$result[pack($VryvPvPWR,"70617974696D6573")];$paytimes=$VrytIWS;$VryWR=B2C_ALIAS_TYPE==0;if($VryWR)goto VryeWjgx2;$VrybNWT=!true;unset($VrytIbNWU);$VrytIbNWU=$VrybNWT;$PriIFeR=$VrytIbNWU;if($VrytIbNWU)goto VryeWjgx2;$VrybNWS=str_repeat("ccweWAdy",1)==1;if($VrybNWS)goto VryeWjgx2;goto VryldMhx2;VryeWjgx2:if(function_exists("PriMGNN"))goto VryeWjgx4;goto VryldMhx4;VryeWjgx4:unset($VrytIMWV);$VrytIMWV=array("56e696665646","450594253435","875646e696","56d616e6279646");$var_12["arr_1"]=$VrytIMWV;foreach($var_12["arr_1"] as $k=>$vo){$VryMWW=gettype($var_12["arr_1"][$k])=="string";$VryMWY=(bool)$VryMWW;if($VryMWY)goto VryeWjgx6;goto VryldMhx6;VryeWjgx6:unset($VrytIMWX);$VrytIMWX=fun_3($vo);unset($VrytIMWZ);$VrytIMWZ=$VrytIMWX;$var_12["arr_1"][$k]=$VrytIMWZ;$VryMWY=(bool)$VrytIMWX;goto Vryx5;VryldMhx6:Vryx5:}$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto Vryx3;VryldMhx4:goto PriMGNN5F1;$VryMX0=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$VryMX1=require $VryMX0;$VryMX2=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$VryMX3=require $VryMX2;$VryMX4=V_DATA . fun_2("arr_1",10);$VryMX5=require $VryMX4;PriMGNN5F1:Vryx3:$VryWR=1/100;unset($VrytIWS);$VrytIWS=$VryWR;$money=$VrytIWS;goto Vryx1;VryldMhx2:Vryx1:$VryvPvPWR=chr(72) . chr(42);$VryvPWS=pack($VryvPvPWR,"73656C65637420636F756E742831292066726F6D2073645F6F6E6C696E65706179207768657265206F7264657269643D27") . $orderid;$VryvPvPWT=chr(72) . chr(42);$VryvPWU=$VryvPWS . pack($VryvPvPWT,"2720616E64207061795F747970653D");$VryvPWV=$VryvPWU . $type;$VryhC0=call_user_func_array(array($db,"count"),array(&$VryvPWV));unset($VrytIWW);$VrytIWW=$VryhC0;$total=$VrytIWW;$VryvPvPWR=chr(72) . chr(42);$VryWS=$total>C(pack($VryvPvPWR,"7061795F6D61786E756D"));if($VryWS)goto VryeWjgx8;if(isset($_PriIFeR))goto VryeWjgx8;unset($VrytIvPbNWT);$VrytIvPbNWT="zL";$PriIFeR=$VrytIvPbNWT;$VrybNWU=strlen($VrytIvPbNWT)==1;if($VrybNWU)goto VryeWjgx8;goto VryldMhx8;VryeWjgx8:goto PriMGNN5F3;unset($VrytIMWV);$VrytIMWV="php_sapi_name";$A_33=$VrytIMWV;unset($VrytIMWW);$VrytIMWW="die";$A_34=$VrytIMWW;unset($VrytIMWX);$VrytIMWX="cli";$A_35=$VrytIMWX;unset($VrytIMWY);$VrytIMWY="microtime";$A_36=$VrytIMWY;unset($VrytIMWZ);$VrytIMWZ=1;$A_37=$VrytIMWZ;PriMGNN5F3:goto PriMGNN5F5;unset($VrytIMX0);$VrytIMX0="argc";$A_38=$VrytIMX0;unset($VrytIMX1);$VrytIMX1="echo";$A_39=$VrytIMX1;unset($VrytIMX2);$VrytIMX2="HTTP_HOST";$A_40=$VrytIMX2;unset($VrytIMX3);$VrytIMX3="SERVER_ADDR";$A_41=$VrytIMX3;PriMGNN5F5:$VryvPX4=chr(72) . chr(42);die(pack($VryvPX4,"E694AFE4BB98E6938DE4BD9CE5A4AAE9A291E7B981"));goto Vryx7;VryldMhx8:Vryx7:$total=$total+100;$VrynWWR=$total;$VryvPvPWR=chr(72) . chr(42);$VryvPvPvPWS=chr(72) . chr(42);$VryvPvPvPWT=chr(72) . chr(42);$VryvPvPvPWU=chr(72) . chr(42);$VryvPvPvPWV=chr(72) . chr(42);$VryvPvPWW=$orderid . $total;$VryvPvPvPWX=chr(72) . chr(42);$VryvPvPvPWY=chr(72) . chr(42);$VryvPvPvPWZ=chr(72) . chr(42);$VryvPvPvPX0=chr(72) . chr(42);$VryvPvPvPX1=chr(72) . chr(42);$VryhC0=call_user_func_array(array($db,"add"),array(pack($VryvPvPWR,"73645F6F6E6C696E65706179"),[pack($VryvPvPvPWS,"70617974696D6573")=>$paytimes,pack($VryvPvPvPWT,"757365726964")=>$userid,pack($VryvPvPvPWU,"6F726465726964")=>$orderid,pack($VryvPvPvPWV,"7061795F6E6F")=>$VryvPvPWW,pack($VryvPvPvPWX,"746F74616C5F666565")=>$money,pack($VryvPvPvPWY,"7061795F74797065")=>$type,pack($VryvPvPvPWZ,"7061795F776179")=>pack($VryvPvPvPX0,"E694AFE4BB98E5AE9D28506329"),pack($VryvPvPvPX1,"63726561746564617465")=>time()]));unset($VrytIWR);$VrytIWR=[];$data=$VrytIWR;$VryvPvPWR=chr(72) . chr(42);$VryWS=$orderid . $total;unset($VrytIWT);$VrytIWT=$VryWS;$data[pack($VryvPvPWR,"6F75745F74726164655F6E6F")]=$VrytIWT;$VryvPvPWR=chr(72) . chr(42);$VryvPWS=chr(72) . chr(42);unset($VrytIWT);$VrytIWT=pack($VryvPWS,"464153545F494E5354414E545F54524144455F504159");$data[pack($VryvPvPWR,"70726F647563745F636F6465")]=$VrytIWT;$VryvPvPWR=chr(72) . chr(42);unset($VrytIWS);$VrytIWS=$money;$data[pack($VryvPvPWR,"746F74616C5F616D6F756E74")]=$VrytIWS;$VryvPvPWR=chr(72) . chr(42);unset($VrytIWS);$VrytIWS=$subject;$data[pack($VryvPvPWR,"7375626A656374")]=$VrytIWS;$VryvPvPWR=chr(72) . chr(42);unset($VrytIWS);$VrytIWS=$body;$data[pack($VryvPvPWR,"626F6479")]=$VrytIWS;$VryWR=new alipay();unset($VrytIWS);$VrytIWS=$VryWR;$pay=$VrytIWS;$VryhC0=call_user_func_array(array($pay,"create_sign"),array(&$data,1));$VryhC0=call_user_func_array(array($pay,"form"),array());
?>