window.addEventListener('DOMContentLoaded', function () {
    $("iframe").each(function () {
        $(this).attr("loading", "lazy");
        $(this).data("src", $(this).attr("src"));
        $(this).addClass("lazyload");
    });
    initPhotoSwipeFromDOM('.gallery-slider');
    $(document).on("click", ".btnSubmitForm", function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        let $this = $(this);
        $this.attr("disabled", "disabled");
        createAjax($this.data("url"), new FormData(document.getElementById("contact-form")), function () {
            $("#contact-form")[0].reset();
            $this.removeAttr("disabled");
        }, function () {
            $this.removeAttr("disabled");
        });
    });
    setTimeout(function () {
        $("body").tooltip({
            selector: '[data-toggle="tooltip"]',
            trigger: "hover",
            container: "body",
            placement: "top",
            boundary: "window"
        });
    }, 1000);
});



function createAjax(e, t, n = function () { }, o = function () { }) {
    $.ajax({
        type: "POST",
        url: e,
        data: t,
        cache: !1,
        contentType: !1,
        processData: !1,
        dataType: "JSON"
    }).done(function (e) {
        e.success ? (iziToast.success({
            title: e.title,
            message: e.message,
            position: "topCenter",
            displayMode: "once"
        }), n(e), null !== e.redirect && "" !== e.redirect && void 0 !== e.redirect && setTimeout(function () {
            window.location.href = e.redirect
        }, 2e3)) : (iziToast.error({
            title: e.title,
            message: e.message,
            position: "topCenter",
            displayMode: "once"
        }), o(e), null !== e.redirect && "" !== e.redirect && void 0 !== e.redirect && setTimeout(function () {
            window.location.href = e.redirect
        }, 2e3))
    })
}

function createModal(e = null, t = null, n = null, o = 600, i = !0, l = "20px", r = 0, a = "#24b4a5", c = "#fff", u = 1040, s = function () { }, d = function () { }, p = function () { }, f = function () { }, g = function () { }, m = function () { }, h = function () { }, w = !0, b = !1, y = !0, v = !0, S = !1, k = 0) {
    "" === e && null === e || $(e).iziModal({
        title: t,
        subtitle: n,
        headerColor: a,
        background: c,
        width: o,
        zindex: u,
        fullscreen: w,
        openFullscreen: b,
        closeOnEscape: y,
        closeButton: v,
        overlayClose: S,
        autoOpen: k,
        padding: l,
        bodyOverflow: i,
        radius: r,
        onFullScreen: m,
        onResize: h,
        onOpening: s,
        onOpened: d,
        onClosing: p,
        onClosed: f,
        afterRender: g
    })
}

function openModal(e = null, t = function () { }) {
    $(e).iziModal("open", t)
}

function closeModal(e = null, t = function () { }) {
    $(e).iziModal("close", t)
}

function setCookie(e, t, n) {
    let o;
    if (n) {
        let e = new Date;
        e.setTime(e.getTime() + 24 * n * 60 * 60 * 1e3), o = "; expires=" + e.toGMTString()
    } else o = "";
    document.cookie = encodeURIComponent(e) + "=" + encodeURIComponent(t) + o + "; path=/"
}

function getCookie(e) {
    let t = encodeURIComponent(e) + "=",
        n = document.cookie.split(";");
    for (let e = 0; e < n.length; e++) {
        let o = n[e];
        for (;
            " " === o.charAt(0);) o = o.substring(1, o.length);
        if (0 === o.indexOf(t)) return decodeURIComponent(o.substring(t.length, o.length))
    }
    return null
}

function deleteCookie(e) {
    setCookie(e, "", -1)
}

function initPhotoSwipeFromDOM(gallerySelector) {

    // parse slide data (url, title, size ...) from DOM elements
    // (children of gallerySelector)
    let parseThumbnailElements = function (el) {
        let thumbElements = el.childNodes,
            numNodes = thumbElements.length,
            items = [],
            figureEl,
            linkEl,
            size,
            item;

        for (let i = 0; i < numNodes; i++) {

            figureEl = thumbElements[i]; // <figure> element

            // include only element nodes
            if (figureEl.nodeType !== 1) {
                continue;
            }

            linkEl = figureEl.children[0]; // <a> element

            size = linkEl.getAttribute('data-size').split('x');

            // create slide object
            item = {
                src: linkEl.getAttribute('href'),
                w: parseInt(size[0], 10),
                h: parseInt(size[1], 10)
            };



            if (figureEl.children.length > 1) {
                // <figcaption> content
                item.title = figureEl.children[1].innerHTML;
            }

            if (linkEl.children.length > 0) {
                // <img> thumbnail element, retrieving thumbnail url
                item.msrc = linkEl.children[0].getAttribute('src');
            }

            item.el = figureEl; // save link to element for getThumbBoundsFn
            items.push(item);
        }

        return items;
    };

    // find nearest parent element
    let closest = function closest(el, fn) {
        return el && (fn(el) ? el : closest(el.parentNode, fn));
    };

    // triggers when user clicks on thumbnail
    let onThumbnailsClick = function (e) {
        e = e || window.event;
        e.preventDefault ? e.preventDefault() : e.returnValue = false;

        let eTarget = e.target || e.srcElement;

        // find root element of slide
        let clickedListItem = closest(eTarget, function (el) {
            return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
        });

        if (!clickedListItem) {
            return;
        }

        // find index of clicked item by looping through all child nodes
        // alternatively, you may define index via data- attribute
        let clickedGallery = clickedListItem.parentNode,
            childNodes = clickedListItem.parentNode.childNodes,
            numChildNodes = childNodes.length,
            nodeIndex = 0,
            index;

        for (let i = 0; i < numChildNodes; i++) {
            if (childNodes[i].nodeType !== 1) {
                continue;
            }

            if (childNodes[i] === clickedListItem) {
                index = nodeIndex;
                break;
            }
            nodeIndex++;
        }



        if (index >= 0) {
            // open PhotoSwipe if valid index found
            openPhotoSwipe(index, clickedGallery);
        }
        return false;
    };

    // parse picture index and gallery index from URL (#&pid=1&gid=2)
    let photoswipeParseHash = function () {
        let hash = window.location.hash.substring(1),
            params = {};

        if (hash.length < 5) {
            return params;
        }

        let vars = hash.split('&');
        for (let i = 0; i < vars.length; i++) {
            if (!vars[i]) {
                continue;
            }
            let pair = vars[i].split('=');
            if (pair.length < 2) {
                continue;
            }
            params[pair[0]] = pair[1];
        }

        if (params.gid) {
            params.gid = parseInt(params.gid, 10);
        }

        return params;
    };

    let openPhotoSwipe = function (index, galleryElement, disableAnimation, fromURL) {
        let pswpElement = document.querySelectorAll('.pswp')[0],
            gallery,
            options,
            items;

        items = parseThumbnailElements(galleryElement);

        // define options (if needed)
        options = {

            // define gallery index (for URL)
            galleryUID: galleryElement.getAttribute('data-pswp-uid'),

            getThumbBoundsFn: function (index) {
                // See Options -> getThumbBoundsFn section of documentation for more info
                let thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                    pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                    rect = thumbnail.getBoundingClientRect();

                return {
                    x: rect.left,
                    y: rect.top + pageYScroll,
                    w: rect.width
                };
            }

        };

        // PhotoSwipe opened from URL
        if (fromURL) {
            if (options.galleryPIDs) {
                // parse real index when custom PIDs are used
                // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                for (let j = 0; j < items.length; j++) {
                    if (items[j].pid === index) {
                        options.index = j;
                        break;
                    }
                }
            } else {
                // in URL indexes start from 1
                options.index = parseInt(index, 10) - 1;
            }
        } else {
            options.index = parseInt(index, 10);
        }

        // exit if index not found
        if (isNaN(options.index)) {
            return;
        }

        if (disableAnimation) {
            options.showAnimationDuration = 0;
        }

        // Pass data to PhotoSwipe and initialize it
        gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();
    };

    // loop through all gallery elements and bind events
    let galleryElements = document.querySelectorAll(gallerySelector);

    for (let i = 0, l = galleryElements.length; i < l; i++) {
        galleryElements[i].setAttribute('data-pswp-uid', i + 1);
        galleryElements[i].onclick = onThumbnailsClick;
    }

    // Parse URL and open gallery if it contains #&pid=3&gid=1
    let hashData = photoswipeParseHash();
    if (hashData.pid && hashData.gid) {
        openPhotoSwipe(hashData.pid, galleryElements[hashData.gid - 1], true, true);
    }
};