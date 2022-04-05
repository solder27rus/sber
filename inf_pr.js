function inf_pr(id){
    let inf = $.cookie('inf')
    if(inf){ 
        inf += `','${id}`
        $.cookie('inf', inf, {expires: 364, path: '/'});
    }else{
        $.cookie('inf', `','${id}`, {expires: 364, path: '/'});
    }
};