<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                2023 © عـــــــــــــــــــاون.
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<!-- END layout-wrapper -->


<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar="init" class="h-100">
        <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: -20px; bottom: 0px;">
                    <div class="simplebar-content-wrapper"
                         style="height: 100%; overflow: hidden scroll; padding-right: 20px; padding-bottom: 0px;">
                        <div class="simplebar-content" style="padding: 0px;">
                            <div class="rightbar-title d-flex align-items-center p-3">

                                <h5 class="m-0 me-2">Settings</h5>

                                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                                    <i class="mdi mdi-close noti-icon"></i>
                                </a>
                            </div>

                            <!-- Settings -->
                            <hr class="m-0">

                            <div class="p-4">
                                <h6 class="mb-3">Layout</h6>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="layout" id="layout-vertical"
                                           value="vertical">
                                    <label class="form-check-label" for="layout-vertical">Vertical</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="layout" id="layout-horizontal"
                                           value="horizontal">
                                    <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                                </div>

                                <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="layout-mode"
                                           id="layout-mode-light" value="light">
                                    <label class="form-check-label" for="layout-mode-light">Light</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="layout-mode"
                                           id="layout-mode-dark" value="dark">
                                    <label class="form-check-label" for="layout-mode-dark">Dark</label>
                                </div>

                                <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="layout-width"
                                           id="layout-width-fuild" value="fuild"
                                           onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                                    <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="layout-width"
                                           id="layout-width-boxed" value="boxed"
                                           onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                                    <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                                </div>

                                <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>

                                <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="topbar-color"
                                           id="topbar-color-light" value="light"
                                           onchange="document.body.setAttribute('data-topbar', 'light')">
                                    <label class="form-check-label" for="topbar-color-light">Light</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="topbar-color"
                                           id="topbar-color-dark" value="dark"
                                           onchange="document.body.setAttribute('data-topbar', 'dark')">
                                    <label class="form-check-label" for="topbar-color-dark">Dark</label>
                                </div>

                                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

                                <div class="form-check sidebar-setting">
                                    <input class="form-check-input" type="radio" name="sidebar-size"
                                           id="sidebar-size-default" value="default"
                                           onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                                    <label class="form-check-label" for="sidebar-size-default">Default</label>
                                </div>
                                <div class="form-check sidebar-setting">
                                    <input class="form-check-input" type="radio" name="sidebar-size"
                                           id="sidebar-size-compact" value="compact"
                                           onchange="document.body.setAttribute('data-sidebar-size', 'small')">
                                    <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                                </div>
                                <div class="form-check sidebar-setting">
                                    <input class="form-check-input" type="radio" name="sidebar-size"
                                           id="sidebar-size-small" value="small"
                                           onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                                    <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                                </div>

                                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

                                <div class="form-check sidebar-setting">
                                    <input class="form-check-input" type="radio" name="sidebar-color"
                                           id="sidebar-color-light" value="light"
                                           onchange="document.body.setAttribute('data-sidebar', 'light')">
                                    <label class="form-check-label" for="sidebar-color-light">Light</label>
                                </div>
                                <div class="form-check sidebar-setting">
                                    <input class="form-check-input" type="radio" name="sidebar-color"
                                           id="sidebar-color-dark" value="dark"
                                           onchange="document.body.setAttribute('data-sidebar', 'dark')">
                                    <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                                </div>
                                <div class="form-check sidebar-setting">
                                    <input class="form-check-input" type="radio" name="sidebar-color"
                                           id="sidebar-color-colored" value="colored"
                                           onchange="document.body.setAttribute('data-sidebar', 'colored')">
                                    <label class="form-check-label" for="sidebar-color-colored">Colored</label>
                                </div>

                                <h6 class="mt-4 mb-3 pt-2">Direction</h6>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="layout-direction"
                                           id="layout-direction-ltr" value="ltr">
                                    <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="layout-direction"
                                           id="layout-direction-rtl" value="rtl">
                                    <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 817px;"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar"
                 style="height: 422px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
        </div>
    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="<?= ASSETS_ROOT ?>admin/js/jquery.min.js"></script>
<script src="<?= ASSETS_ROOT ?>admin/js/bootstrap.bundle.min.js"></script>
<script src="<?= ASSETS_ROOT ?>admin/js/metisMenu.min.js"></script>


<script src="<?= ASSETS_ROOT ?>admin/js/dashboard.init.js"></script>

<!-- App js -->
<script src="<?= ASSETS_ROOT ?>admin/js/app.js"></script>


<script>
    (function () {
        var ws = new WebSocket('ws://' + window.location.host +
            '/jb-server-page?reloadMode=RELOAD_ON_SAVE&' +
            'referrer=' + encodeURIComponent(window.location.pathname));
        ws.onmessage = function (msg) {
            if (msg.data === 'reload') {
                window.location.reload();
            }
            if (msg.data.startsWith('update-css ')) {
                var messageId = msg.data.substring(11);
                var links = document.getElementsByTagName('link');
                for (var i = 0; i < links.length; i++) {
                    var link = links[i];
                    if (link.rel !== 'stylesheet') continue;
                    var clonedLink = link.cloneNode(true);
                    var newHref = link.href.replace(/(&|\?)jbUpdateLinksId=\d+/, "$1jbUpdateLinksId=" + messageId);
                    if (newHref !== link.href) {
                        clonedLink.href = newHref;
                    } else {
                        var indexOfQuest = newHref.indexOf('?');
                        if (indexOfQuest >= 0) {
                            // to support ?foo#hash
                            clonedLink.href = newHref.substring(0, indexOfQuest + 1) + 'jbUpdateLinksId=' + messageId + '&' +
                                newHref.substring(indexOfQuest + 1);
                        } else {
                            clonedLink.href += '?' + 'jbUpdateLinksId=' + messageId;
                        }
                    }
                    link.replaceWith(clonedLink);
                }
            }
        };
    })();
</script>
<svg id="SvgjsSvg1246" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
     xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
     style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
    <defs id="SvgjsDefs1247"></defs>
    <polyline id="SvgjsPolyline1248" points="0,0"></polyline>
    <path id="SvgjsPath1249"
          d="M-1 257.8L-1 257.8C-1 257.8 59.87242147242263 257.8 59.87242147242263 257.8C59.87242147242263 257.8 113.95073764106243 257.8 113.95073764106243 257.8C113.95073764106243 257.8 173.82315911348505 257.8 173.82315911348505 257.8C173.82315911348505 257.8 231.68373846653864 257.8 231.68373846653864 257.8C231.68373846653864 257.8 291.5561599389613 257.8 291.5561599389613 257.8C291.5561599389613 257.8 349.4972129767896 257.8 349.4972129767896 257.8C349.4972129767896 257.8 409.36963444921224 257.8 409.36963444921224 257.8C409.36963444921224 257.8 469.2420559216349 257.8 469.2420559216349 257.8C469.2420559216349 257.8 527.263582644238 257.8 527.263582644238 257.8C527.263582644238 257.8 587.1360041166606 257.8 587.1360041166606 257.8C587.1360041166606 257.8 587.1360041166606 257.8 587.1360041166606 257.8 "></path>
</svg>
</body>
</html>