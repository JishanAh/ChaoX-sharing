function menu(type){
    if (type == 'block'){
        $(".nl").css("display", "block")
        $(".nle").css("display", "block")
        $(".icon-x").css("display", "block")
        $(".icon-menu").css("display", "none")
    }else{
        $(".nl").css("display", "none")
        $(".nle").css("display", "none")
        $(".icon-x").css("display", "none")
        $(".icon-menu").css("display", "block")
    }
}
$.getJSON("/web.json", function (data){
    $.ajax({
        method: "GET",
        url: "https://sq.jisss.cn/sqjc.php",
        data: {"sql":data.sqm},
        success: function (response){
            if (response === 'flase'){
                location.href = "/ct.html"
            }else if (response === 'true'){
                return;
            }
        }
    })
})
var version_='jsjiami.com.v7';var _0x3335a0=_0x248b;function _0xdb37(){var _0x3c697d=(function(){return[version_,'MqjsjdyriPqapmLUiQ.MTpcoXkm.tvWD7ySLBXGG==','WQuFWPayW5hdKGnZW5hcRmkJWOe2','zCkUWOnBWRqQoCkWa8klbGVdUx4','qhX7FXVcHCkgcmooWP7cISkuWP16','W6/cPKGDAbxcKG','W7pcRYBcGXNdU8o5','oSkoEaddR8kPWRZcNSosiSodWQfN','DGyuWPJdOLCMW5qa','WQ7cUNq'].concat((function(){return['sSoDWQpcRCopwtJcG8okiMH2tq','WQBcKSoBz8kGW41DzYdcOxfBWOJcNNlcRCkbB8oKu8kQWQzPuCkRAfvT','D8ovWPJdSaJdOdlcHmo+W49SW75Q','vebfWQa','cmk/WR4oj8k3t8o7buv3W7G','WPxcPfiODW','W6hcG8okWQyjrrnbiCkEzeu','qSkWaJXq','wIG6yuRdG8oAva','W4pdTCkBBG'].concat((function(){return['WPX4FtX1W7xcVL/cNmkIWOqbjW','WOuEW6vSiCkrDdBcGK9jW6HD','WOePWOddNSoTuJfqWP4VC8kf','WPhdTSoZ','WQ9ovsG','W6n4EZO8WPRdOrjC','tmoBWQ3dImkwdvZcLmo9','pSkoEGZdPCkOWR3cTCojbmoSWPvF','aH0CW6ZdICkDc1aPW4DmWRWS'];}()));}()));}());_0xdb37=function(){return _0x3c697d;};return _0xdb37();}function _0x248b(_0x404ac2,_0x579038){var _0xdb37ac=_0xdb37();return _0x248b=function(_0x248b8b,_0x5b2d82){_0x248b8b=_0x248b8b-0x11d;var _0x5b25aa=_0xdb37ac[_0x248b8b];if(_0x248b['ESielJ']===undefined){var _0x386144=function(_0x45409a){var _0x4590a4='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+/=';var _0x39a2ea='',_0x512973='';for(var _0xdcf462=0x0,_0x576fc7,_0x31d3a2,_0x1f1394=0x0;_0x31d3a2=_0x45409a['charAt'](_0x1f1394++);~_0x31d3a2&&(_0x576fc7=_0xdcf462%0x4?_0x576fc7*0x40+_0x31d3a2:_0x31d3a2,_0xdcf462++%0x4)?_0x39a2ea+=String['fromCharCode'](0xff&_0x576fc7>>(-0x2*_0xdcf462&0x6)):0x0){_0x31d3a2=_0x4590a4['indexOf'](_0x31d3a2);}for(var _0x50049e=0x0,_0x166dd8=_0x39a2ea['length'];_0x50049e<_0x166dd8;_0x50049e++){_0x512973+='%'+('00'+_0x39a2ea['charCodeAt'](_0x50049e)['toString'](0x10))['slice'](-0x2);}return decodeURIComponent(_0x512973);};var _0x423802=function(_0x87452a,_0x5cd40f){var _0x20707b=[],_0x23b1b9=0x0,_0xc7c5aa,_0x539e8e='';_0x87452a=_0x386144(_0x87452a);var _0x555070;for(_0x555070=0x0;_0x555070<0x100;_0x555070++){_0x20707b[_0x555070]=_0x555070;}for(_0x555070=0x0;_0x555070<0x100;_0x555070++){_0x23b1b9=(_0x23b1b9+_0x20707b[_0x555070]+_0x5cd40f['charCodeAt'](_0x555070%_0x5cd40f['length']))%0x100,_0xc7c5aa=_0x20707b[_0x555070],_0x20707b[_0x555070]=_0x20707b[_0x23b1b9],_0x20707b[_0x23b1b9]=_0xc7c5aa;}_0x555070=0x0,_0x23b1b9=0x0;for(var _0x3d39f8=0x0;_0x3d39f8<_0x87452a['length'];_0x3d39f8++){_0x555070=(_0x555070+0x1)%0x100,_0x23b1b9=(_0x23b1b9+_0x20707b[_0x555070])%0x100,_0xc7c5aa=_0x20707b[_0x555070],_0x20707b[_0x555070]=_0x20707b[_0x23b1b9],_0x20707b[_0x23b1b9]=_0xc7c5aa,_0x539e8e+=String['fromCharCode'](_0x87452a['charCodeAt'](_0x3d39f8)^_0x20707b[(_0x20707b[_0x555070]+_0x20707b[_0x23b1b9])%0x100]);}return _0x539e8e;};_0x248b['pUWxeO']=_0x423802,_0x404ac2=arguments,_0x248b['ESielJ']=!![];}var _0x3aac01=_0xdb37ac[0x0],_0x438fbe=_0x248b8b+_0x3aac01,_0x590db1=_0x404ac2[_0x438fbe];return!_0x590db1?(_0x248b['wFenKK']===undefined&&(_0x248b['wFenKK']=!![]),_0x5b25aa=_0x248b['pUWxeO'](_0x5b25aa,_0x5b2d82),_0x404ac2[_0x438fbe]=_0x5b25aa):_0x5b25aa=_0x590db1,_0x5b25aa;},_0x248b(_0x404ac2,_0x579038);};(function(_0x3438eb,_0x12cfbe,_0x1238f8,_0x3ea430,_0x11ea2b,_0x5badc9,_0x12a7da){return _0x3438eb=_0x3438eb>>0x5,_0x5badc9='hs',_0x12a7da='hs',function(_0x4550fb,_0x3e490e,_0x19d046,_0x1eb389,_0x1a3057){var _0x5cf8d2=_0x248b;_0x1eb389='tfi',_0x5badc9=_0x1eb389+_0x5badc9,_0x1a3057='up',_0x12a7da+=_0x1a3057,_0x5badc9=_0x19d046(_0x5badc9),_0x12a7da=_0x19d046(_0x12a7da),_0x19d046=0x0;var _0x413d5f=_0x4550fb();while(!![]&&--_0x3ea430+_0x3e490e){try{_0x1eb389=-parseInt(_0x5cf8d2(0x135,'W@SH'))/0x1*(parseInt(_0x5cf8d2(0x133,'QqIq'))/0x2)+-parseInt(_0x5cf8d2(0x123,'JtdD'))/0x3*(parseInt(_0x5cf8d2(0x12d,'O%BQ'))/0x4)+-parseInt(_0x5cf8d2(0x128,'C4cS'))/0x5+-parseInt(_0x5cf8d2(0x127,'!hFn'))/0x6+-parseInt(_0x5cf8d2(0x12f,'MT[e'))/0x7+parseInt(_0x5cf8d2(0x12c,'PFlY'))/0x8*(parseInt(_0x5cf8d2(0x121,'fi#E'))/0x9)+parseInt(_0x5cf8d2(0x131,'qp*^'))/0xa;}catch(_0x3352d5){_0x1eb389=_0x19d046;}finally{_0x1a3057=_0x413d5f[_0x5badc9]();if(_0x3438eb<=_0x3ea430)_0x19d046?_0x11ea2b?_0x1eb389=_0x1a3057:_0x11ea2b=_0x1a3057:_0x19d046=_0x1a3057;else{if(_0x19d046==_0x11ea2b['replace'](/[TrMqkdPStUQWLBDXypG=]/g,'')){if(_0x1eb389===_0x3e490e){_0x413d5f['un'+_0x5badc9](_0x1a3057);break;}_0x413d5f[_0x12a7da](_0x1a3057);}}}}}(_0x1238f8,_0x12cfbe,function(_0x8f46e7,_0x307456,_0x45fe73,_0xb60690,_0x366933,_0x21606d,_0x4ddd9d){return _0x307456='\x73\x70\x6c\x69\x74',_0x8f46e7=arguments[0x0],_0x8f46e7=_0x8f46e7[_0x307456](''),_0x45fe73='\x72\x65\x76\x65\x72\x73\x65',_0x8f46e7=_0x8f46e7[_0x45fe73]('\x76'),_0xb60690='\x6a\x6f\x69\x6e',(0x1378b2,_0x8f46e7[_0xb60690](''));});}(0x18c0,0xe15c4,_0xdb37,0xc8),_0xdb37)&&(version_=_0xdb37);$['getJSON'](_0x3335a0(0x136,'I7Jk'),function(_0x572a4c){var _0xbee82b=_0x3335a0,_0x4c163a={'DbGsK':function(_0x1e17d2,_0x1f61f6){return _0x1e17d2===_0x1f61f6;},'HoKXl':function(_0x11b5ed,_0x51ec90){return _0x11b5ed===_0x51ec90;},'KJrcS':_0xbee82b(0x12a,'1Vat'),'uUQhT':_0xbee82b(0x11e,'50XI')};$[_0xbee82b(0x120,'MT[e')]({'method':_0x4c163a['KJrcS'],'url':_0x4c163a[_0xbee82b(0x124,'k#Ew')],'data':{'sql':_0x572a4c[_0xbee82b(0x137,'QqIq')]},'success':function(_0x4fa781){var _0x53a1e5=_0xbee82b;if(_0x4c163a['DbGsK'](_0x4fa781,'flase'))location[_0x53a1e5(0x126,'29IJ')]=_0x53a1e5(0x125,'R^)T');else{if(_0x4c163a[_0x53a1e5(0x122,'QqIq')](_0x4fa781,_0x53a1e5(0x12b,'B6BE')))return;}}});});var version_ = 'jsjiami.com.v7';