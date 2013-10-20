(function(){
    var tags = [
        'header', 'footer', 'figure',
        'figcaption','details','summary',
        'hgroup','nav','aside','article',
        'section','mark','abbr','meter',
        'output','progress','time','video',
        'audio','canvas','dialog'
    ];
    for(var i = tags.length - 1; i > -1; i--){
        document.createElement(tags[i]);
    }
})();