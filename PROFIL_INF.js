function addckpr(id){
    let prinf = $.cookie('prinf')
    if(prinf){ 
        prinf += `','${id}`
        $.cookie('prinf', prinf, {expires: 364, path: '/'});
    }else{
        $.cookie('prinf', `','${id}`, {expires: 364, path: '/'});
    }
};