@extends('layouts.default')
@section('content')
<div class="container">
  <p>{{ Lang::get("location.address") }}, {{ Lang::get("location.tel") }}</p>
  <table cellpadding="0" cellspacing="0"> 
    <tbody>
      <tr> 
        <td style="border:1px solid #cecece;">
          <a href="http://map.naver.com/?dlevel=11&amp;lat=37.4988427&amp;lng=127.0383503&amp;searchCoord=126.9854855%3B37.4797723&amp;query=7ISc7Jq47IucIOqwleuCqOq1rCDsl63sgrwy64%2BZIDcyNy0xNCDtj4ntmZTruYzrlKk%3D&amp;menu=location&amp;tab=1&amp;mapMode=0&amp;enc=b64" target="_blank">
            <img class="img-responsive" src="http://prt.map.naver.com/mashupmap/print?key=p1361455536501_1063864687"   alt="ì§ë í¬ê² ë³´ê¸°" title="ì§ë í¬ê² ë³´ê¸°" border="0" style="vertical-align:top;">
          </a>
        </td> 
      </tr> 
      <tr> 
        <td>  
          <table cellpadding="0" cellspacing="0" width="100%">  
            <tbody>
              <tr>  
                <td height="30" bgcolor="#f9f9f9" align="left" style="padding-left:9px; border-left:1px solid #cecece; border-bottom:1px solid #cecece;">   
                  <span style="font-family: tahoma; font-size: 11px; color:#666;">2013.2.21</span>&nbsp;<span style="font-size: 11px; color:#e5e5e5;">|</span>&nbsp;<a style="font-family: dotum,sans-serif; font-size: 11px; color:#666; text-decoration: none; letter-spacing: -1px;" href="http://map.naver.com/?dlevel=11&amp;lat=37.4988427&amp;lng=127.0383503&amp;searchCoord=126.9854855%3B37.4797723&amp;query=7ISc7Jq47IucIOqwleuCqOq1rCDsl63sgrwy64%2BZIDcyNy0xNCDtj4ntmZTruYzrlKk%3D&amp;menu=location&amp;tab=1&amp;mapMode=0&amp;enc=b64" target="_blank">ì§ë í¬ê² ë³´ê¸°</a>  
                </td>  
                <td width="98" bgcolor="#f9f9f9" align="right" style="text-align:right; padding-right:9px; border-right:1px solid #cecece; border-bottom:1px solid #cecece;">   
                  <span style="float:right;"><span style="font-size:9px; font-family:Verdana, sans-serif; color:#444;">©&nbsp;</span>&nbsp;<a style="font-family:tahoma; font-size:9px; font-weight:bold; color:#009bc8; text-decoration:none;" href="http://www.nhncorp.com" target="_blank">NHN Corp.</a></span>  
                </td>  
              </tr>  
            </tbody>
          </table> 
        </td> 
      </tr>  
    </tbody>
  </table>
</div>
@stop