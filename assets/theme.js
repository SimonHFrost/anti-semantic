// Script to dynamically load theme based on query params 

function getQueryVariable(variable) {
    var query = window.location.search.substring(1);
    var vars = query.split('&');
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split('=');
        if (decodeURIComponent(pair[0]) == variable) {
            return decodeURIComponent(pair[1]);
        }
    }
    console.log('Query variable %s not found', variable);
}

var currentTheme = getQueryVariable('theme') || style1;
var themeString = `/assets/${getQueryVariable('theme')}.css`;

var fileref = document.createElement("link")
fileref.setAttribute("rel", "stylesheet")
fileref.setAttribute("type", "text/css")
fileref.setAttribute("href", `<?php echo get_bloginfo('template_directory'); ?>${themeString}`)
document.getElementsByTagName("head")[0].appendChild(fileref)