//浏览器网站标题
function bT(str){
    $("title").text(str)
}
//网站显示页面内的标题
function wT(str){
    $(".nT").text(str)
}
//点击跳转
function jump(link, type){
    if (type == 'b'){
        window.open(link)
    }else{
        location.href = link
    }
}
