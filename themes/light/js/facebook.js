
(function() {
    var element = document.createElement('script');
    element.type = "text/javascript";
    element.async = true;
    element.id = "facebook-jssdk"
    element.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(element, s);
})();
