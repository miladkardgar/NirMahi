function loadStyle(e, t) {
    for (var o = 0; o < document.styleSheets.length; o++)
        if (document.styleSheets[o].href == e) return;
    var a = document.getElementsByTagName("head")[0],
        s = document.createElement("link");
    s.rel = "stylesheet", s.type = "text/css", s.href = e, t && (s.onload = function() {
        t()
    }), a.appendChild(s)
}! function(e) {
    var t = "sabin.light.purple.min.css";

    function o() {
        e("body").sabin()
    }
    "undefined" != typeof Storage && localStorage.getItem("theme") && (t = localStorage.getItem("theme")), e(".theme-color[data-theme='" + t + "']").addClass("active"), loadStyle("/css/" + t, function() {
        setTimeout(o, 300)
    }), e("body").on("click", ".theme-color", function(t) {
        t.preventDefault();
        var o = e(this).data("theme");
        "undefined" != typeof Storage && (localStorage.setItem("theme", o), window.location.reload())
    }), e(".theme-button").on("click", function(t) {
        t.preventDefault(), e(this).parents(".theme-colors").toggleClass("shown")
    }), e(document).on("click", function(t) {
        e(t.target).parents().hasClass("theme-colors") || e(t.target).parents().hasClass("theme-button") || e(t.target).hasClass("theme-button") || e(t.target).hasClass("theme-colors") || e(".theme-colors").hasClass("shown") && e(".theme-colors").removeClass("shown")
    })
}(jQuery);
