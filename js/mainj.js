function getQueryParams(qs) {
    qs = qs.split('+').join(' ');

    var params = {},
        tokens,
        re = /[?&]?([^=]+)=([^&]*)/g;

    while (tokens = re.exec(qs)) {
        params[decodeURIComponent(tokens[1])] = decodeURIComponent(tokens[2]);
    }

    return params;
}
window.addEventListener('DOMContentLoaded', (event) => {
    var query = getQueryParams(document.location.search);
    if (query && query.jmsg) {
        alert(query.jmsg)
    }
});
