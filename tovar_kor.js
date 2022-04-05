function addck(id){
    let tovar = $.cookie('tovar')
    if(tovar){ 
        tovar += `','${id}`
        $.cookie('tovar', tovar, {expires: 364, path: '/'});
    }else{
        $.cookie('tovar', `','${id}`, {expires: 364, path: '/'});
    }
};
function dellck(id){
    let tovar = $.cookie('tovar')
    if(tovar){ 
        tovar += `','${id}`
        $.removeCookie('tovar', tovar, {expires: 364, path: '/'});
    }else{
        $.removeCookie('tovar', `','${id}`, {expires: 364, path: '/'});
    }
    document.location.reload();
};