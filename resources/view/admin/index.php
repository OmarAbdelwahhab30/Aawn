<?php
$pageTitle = 'الرئيسية';
include INCLUDES_ADMIN_PATH."header.php";
?>


        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item active">الصفحة الرئيسية</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-end mt-2" style="position: relative;">
                                    <div id="total-revenue-chart" data-colors="[&quot;--bs-primary&quot;]"
                                         style="min-height: 40px;">
                                        <div id="apexcharts583bidasg"
                                             class="apexcharts-canvas apexcharts583bidasg apexcharts-theme-light"
                                             style="width: 70px; height: 40px;">
                                            <svg id="SvgjsSvg1136" width="70" height="40"
                                                 xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                 xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                 style="background: transparent;">
                                                <g id="SvgjsG1138" class="apexcharts-inner apexcharts-graphical"
                                                   transform="translate(0, 0)">
                                                    <defs id="SvgjsDefs1137">
                                                        <linearGradient id="SvgjsLinearGradient1142" x1="0" y1="0"
                                                                        x2="0" y2="1">
                                                            <stop id="SvgjsStop1143" stop-opacity="0.4"
                                                                  stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                            <stop id="SvgjsStop1144" stop-opacity="0.5"
                                                                  stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                            <stop id="SvgjsStop1145" stop-opacity="0.5"
                                                                  stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        </linearGradient>
                                                        <clipPath id="gridRectMask583bidasg">
                                                            <rect id="SvgjsRect1148" width="74" height="40" x="-2" y="0"
                                                                  rx="0" ry="0" opacity="1" stroke-width="0"
                                                                  stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMask583bidasg">
                                                            <rect id="SvgjsRect1149" width="74" height="44" x="-2"
                                                                  y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                  stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <line id="SvgjsLine1147" x1="0" y1="0" x2="0" y2="40"
                                                          stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0"
                                                          y="0" width="1" height="40"
                                                          fill="url(#SvgjsLinearGradient1142)" filter="none"
                                                          fill-opacity="0.9" stroke-width="0"></line>
                                                    <g id="SvgjsG1164" class="apexcharts-xaxis"
                                                       transform="translate(0, 0)">
                                                        <g id="SvgjsG1165" class="apexcharts-xaxis-texts-g"
                                                           transform="translate(0, 2.75)"></g>
                                                    </g>
                                                    <g id="SvgjsG1167" class="apexcharts-grid">
                                                        <g id="SvgjsG1168" class="apexcharts-gridlines-horizontal"
                                                           style="display: none;">
                                                            <line id="SvgjsLine1170" x1="0" y1="0" x2="70" y2="0"
                                                                  stroke="#e0e0e0" stroke-dasharray="0"
                                                                  class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1171" x1="0" y1="8" x2="70" y2="8"
                                                                  stroke="#e0e0e0" stroke-dasharray="0"
                                                                  class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1172" x1="0" y1="16" x2="70" y2="16"
                                                                  stroke="#e0e0e0" stroke-dasharray="0"
                                                                  class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1173" x1="0" y1="24" x2="70" y2="24"
                                                                  stroke="#e0e0e0" stroke-dasharray="0"
                                                                  class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1174" x1="0" y1="32" x2="70" y2="32"
                                                                  stroke="#e0e0e0" stroke-dasharray="0"
                                                                  class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1175" x1="0" y1="40" x2="70" y2="40"
                                                                  stroke="#e0e0e0" stroke-dasharray="0"
                                                                  class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG1169" class="apexcharts-gridlines-vertical"
                                                           style="display: none;"></g>
                                                        <line id="SvgjsLine1177" x1="0" y1="40" x2="70" y2="40"
                                                              stroke="transparent" stroke-dasharray="0"></line>
                                                        <line id="SvgjsLine1176" x1="0" y1="1" x2="0" y2="40"
                                                              stroke="transparent" stroke-dasharray="0"></line>
                                                    </g>
                                                    <g id="SvgjsG1150"
                                                       class="apexcharts-bar-series apexcharts-plot-series">
                                                        <g id="SvgjsG1151" class="apexcharts-series" rel="1"
                                                           seriesname="seriesx1" data:realindex="0">
                                                            <path id="SvgjsPath1153"
                                                                  d="M 1.5909090909090908 40L 1.5909090909090908 30L 4.7727272727272725 30L 4.7727272727272725 30L 4.7727272727272725 40L 4.7727272727272725 40z"
                                                                  fill="rgba(91,115,232,0.85)" fill-opacity="1"
                                                                  stroke-opacity="1" stroke-linecap="square"
                                                                  stroke-width="0" stroke-dasharray="0"
                                                                  class="apexcharts-bar-area" index="0"
                                                                  clip-path="url(#gridRectMask583bidasg)"
                                                                  pathto="M 1.5909090909090908 40L 1.5909090909090908 30L 4.7727272727272725 30L 4.7727272727272725 30L 4.7727272727272725 40L 4.7727272727272725 40z"
                                                                  pathfrom="M 1.5909090909090908 40L 1.5909090909090908 40L 4.7727272727272725 40L 4.7727272727272725 40L 4.7727272727272725 40L 1.5909090909090908 40"
                                                                  cy="30" cx="7.954545454545454" j="0" val="25"
                                                                  barheight="10" barwidth="3.1818181818181817"></path>
                                                            <path id="SvgjsPath1154"
                                                                  d="M 7.954545454545454 40L 7.954545454545454 13.600000000000001L 11.136363636363637 13.600000000000001L 11.136363636363637 13.600000000000001L 11.136363636363637 40L 11.136363636363637 40z"
                                                                  fill="rgba(91,115,232,0.85)" fill-opacity="1"
                                                                  stroke-opacity="1" stroke-linecap="square"
                                                                  stroke-width="0" stroke-dasharray="0"
                                                                  class="apexcharts-bar-area" index="0"
                                                                  clip-path="url(#gridRectMask583bidasg)"
                                                                  pathto="M 7.954545454545454 40L 7.954545454545454 13.600000000000001L 11.136363636363637 13.600000000000001L 11.136363636363637 13.600000000000001L 11.136363636363637 40L 11.136363636363637 40z"
                                                                  pathfrom="M 7.954545454545454 40L 7.954545454545454 40L 11.136363636363637 40L 11.136363636363637 40L 11.136363636363637 40L 7.954545454545454 40"
                                                                  cy="13.600000000000001" cx="14.318181818181817" j="1"
                                                                  val="66" barheight="26.4"
                                                                  barwidth="3.1818181818181817"></path>
                                                            <path id="SvgjsPath1155"
                                                                  d="M 14.318181818181817 40L 14.318181818181817 23.6L 17.5 23.6L 17.5 23.6L 17.5 40L 17.5 40z"
                                                                  fill="rgba(91,115,232,0.85)" fill-opacity="1"
                                                                  stroke-opacity="1" stroke-linecap="square"
                                                                  stroke-width="0" stroke-dasharray="0"
                                                                  class="apexcharts-bar-area" index="0"
                                                                  clip-path="url(#gridRectMask583bidasg)"
                                                                  pathto="M 14.318181818181817 40L 14.318181818181817 23.6L 17.5 23.6L 17.5 23.6L 17.5 40L 17.5 40z"
                                                                  pathfrom="M 14.318181818181817 40L 14.318181818181817 40L 17.5 40L 17.5 40L 17.5 40L 14.318181818181817 40"
                                                                  cy="23.6" cx="20.68181818181818" j="2" val="41"
                                                                  barheight="16.4" barwidth="3.1818181818181817"></path>
                                                            <path id="SvgjsPath1156"
                                                                  d="M 20.68181818181818 40L 20.68181818181818 4.399999999999999L 23.86363636363636 4.399999999999999L 23.86363636363636 4.399999999999999L 23.86363636363636 40L 23.86363636363636 40z"
                                                                  fill="rgba(91,115,232,0.85)" fill-opacity="1"
                                                                  stroke-opacity="1" stroke-linecap="square"
                                                                  stroke-width="0" stroke-dasharray="0"
                                                                  class="apexcharts-bar-area" index="0"
                                                                  clip-path="url(#gridRectMask583bidasg)"
                                                                  pathto="M 20.68181818181818 40L 20.68181818181818 4.399999999999999L 23.86363636363636 4.399999999999999L 23.86363636363636 4.399999999999999L 23.86363636363636 40L 23.86363636363636 40z"
                                                                  pathfrom="M 20.68181818181818 40L 20.68181818181818 40L 23.86363636363636 40L 23.86363636363636 40L 23.86363636363636 40L 20.68181818181818 40"
                                                                  cy="4.399999999999999" cx="27.045454545454543" j="3"
                                                                  val="89" barheight="35.6"
                                                                  barwidth="3.1818181818181817"></path>
                                                            <path id="SvgjsPath1157"
                                                                  d="M 27.045454545454543 40L 27.045454545454543 14.8L 30.227272727272727 14.8L 30.227272727272727 14.8L 30.227272727272727 40L 30.227272727272727 40z"
                                                                  fill="rgba(91,115,232,0.85)" fill-opacity="1"
                                                                  stroke-opacity="1" stroke-linecap="square"
                                                                  stroke-width="0" stroke-dasharray="0"
                                                                  class="apexcharts-bar-area" index="0"
                                                                  clip-path="url(#gridRectMask583bidasg)"
                                                                  pathto="M 27.045454545454543 40L 27.045454545454543 14.8L 30.227272727272727 14.8L 30.227272727272727 14.8L 30.227272727272727 40L 30.227272727272727 40z"
                                                                  pathfrom="M 27.045454545454543 40L 27.045454545454543 40L 30.227272727272727 40L 30.227272727272727 40L 30.227272727272727 40L 27.045454545454543 40"
                                                                  cy="14.8" cx="33.40909090909091" j="4" val="63"
                                                                  barheight="25.2" barwidth="3.1818181818181817"></path>
                                                            <path id="SvgjsPath1158"
                                                                  d="M 33.40909090909091 40L 33.40909090909091 30L 36.590909090909086 30L 36.590909090909086 30L 36.590909090909086 40L 36.590909090909086 40z"
                                                                  fill="rgba(91,115,232,0.85)" fill-opacity="1"
                                                                  stroke-opacity="1" stroke-linecap="square"
                                                                  stroke-width="0" stroke-dasharray="0"
                                                                  class="apexcharts-bar-area" index="0"
                                                                  clip-path="url(#gridRectMask583bidasg)"
                                                                  pathto="M 33.40909090909091 40L 33.40909090909091 30L 36.590909090909086 30L 36.590909090909086 30L 36.590909090909086 40L 36.590909090909086 40z"
                                                                  pathfrom="M 33.40909090909091 40L 33.40909090909091 40L 36.590909090909086 40L 36.590909090909086 40L 36.590909090909086 40L 33.40909090909091 40"
                                                                  cy="30" cx="39.772727272727266" j="5" val="25"
                                                                  barheight="10" barwidth="3.1818181818181817"></path>
                                                            <path id="SvgjsPath1159"
                                                                  d="M 39.772727272727266 40L 39.772727272727266 22.4L 42.954545454545446 22.4L 42.954545454545446 22.4L 42.954545454545446 40L 42.954545454545446 40z"
                                                                  fill="rgba(91,115,232,0.85)" fill-opacity="1"
                                                                  stroke-opacity="1" stroke-linecap="square"
                                                                  stroke-width="0" stroke-dasharray="0"
                                                                  class="apexcharts-bar-area" index="0"
                                                                  clip-path="url(#gridRectMask583bidasg)"
                                                                  pathto="M 39.772727272727266 40L 39.772727272727266 22.4L 42.954545454545446 22.4L 42.954545454545446 22.4L 42.954545454545446 40L 42.954545454545446 40z"
                                                                  pathfrom="M 39.772727272727266 40L 39.772727272727266 40L 42.954545454545446 40L 42.954545454545446 40L 42.954545454545446 40L 39.772727272727266 40"
                                                                  cy="22.4" cx="46.136363636363626" j="6" val="44"
                                                                  barheight="17.6" barwidth="3.1818181818181817"></path>
                                                            <path id="SvgjsPath1160"
                                                                  d="M 46.136363636363626 40L 46.136363636363626 32L 49.318181818181806 32L 49.318181818181806 32L 49.318181818181806 40L 49.318181818181806 40z"
                                                                  fill="rgba(91,115,232,0.85)" fill-opacity="1"
                                                                  stroke-opacity="1" stroke-linecap="square"
                                                                  stroke-width="0" stroke-dasharray="0"
                                                                  class="apexcharts-bar-area" index="0"
                                                                  clip-path="url(#gridRectMask583bidasg)"
                                                                  pathto="M 46.136363636363626 40L 46.136363636363626 32L 49.318181818181806 32L 49.318181818181806 32L 49.318181818181806 40L 49.318181818181806 40z"
                                                                  pathfrom="M 46.136363636363626 40L 46.136363636363626 40L 49.318181818181806 40L 49.318181818181806 40L 49.318181818181806 40L 46.136363636363626 40"
                                                                  cy="32" cx="52.499999999999986" j="7" val="20"
                                                                  barheight="8" barwidth="3.1818181818181817"></path>
                                                            <path id="SvgjsPath1161"
                                                                  d="M 52.499999999999986 40L 52.499999999999986 25.6L 55.681818181818166 25.6L 55.681818181818166 25.6L 55.681818181818166 40L 55.681818181818166 40z"
                                                                  fill="rgba(91,115,232,0.85)" fill-opacity="1"
                                                                  stroke-opacity="1" stroke-linecap="square"
                                                                  stroke-width="0" stroke-dasharray="0"
                                                                  class="apexcharts-bar-area" index="0"
                                                                  clip-path="url(#gridRectMask583bidasg)"
                                                                  pathto="M 52.499999999999986 40L 52.499999999999986 25.6L 55.681818181818166 25.6L 55.681818181818166 25.6L 55.681818181818166 40L 55.681818181818166 40z"
                                                                  pathfrom="M 52.499999999999986 40L 52.499999999999986 40L 55.681818181818166 40L 55.681818181818166 40L 55.681818181818166 40L 52.499999999999986 40"
                                                                  cy="25.6" cx="58.863636363636346" j="8" val="36"
                                                                  barheight="14.4" barwidth="3.1818181818181817"></path>
                                                            <path id="SvgjsPath1162"
                                                                  d="M 58.863636363636346 40L 58.863636363636346 24L 62.045454545454525 24L 62.045454545454525 24L 62.045454545454525 40L 62.045454545454525 40z"
                                                                  fill="rgba(91,115,232,0.85)" fill-opacity="1"
                                                                  stroke-opacity="1" stroke-linecap="square"
                                                                  stroke-width="0" stroke-dasharray="0"
                                                                  class="apexcharts-bar-area" index="0"
                                                                  clip-path="url(#gridRectMask583bidasg)"
                                                                  pathto="M 58.863636363636346 40L 58.863636363636346 24L 62.045454545454525 24L 62.045454545454525 24L 62.045454545454525 40L 62.045454545454525 40z"
                                                                  pathfrom="M 58.863636363636346 40L 58.863636363636346 40L 62.045454545454525 40L 62.045454545454525 40L 62.045454545454525 40L 58.863636363636346 40"
                                                                  cy="24" cx="65.2272727272727" j="9" val="40"
                                                                  barheight="16" barwidth="3.1818181818181817"></path>
                                                            <path id="SvgjsPath1163"
                                                                  d="M 65.2272727272727 40L 65.2272727272727 18.4L 68.40909090909089 18.4L 68.40909090909089 18.4L 68.40909090909089 40L 68.40909090909089 40z"
                                                                  fill="rgba(91,115,232,0.85)" fill-opacity="1"
                                                                  stroke-opacity="1" stroke-linecap="square"
                                                                  stroke-width="0" stroke-dasharray="0"
                                                                  class="apexcharts-bar-area" index="0"
                                                                  clip-path="url(#gridRectMask583bidasg)"
                                                                  pathto="M 65.2272727272727 40L 65.2272727272727 18.4L 68.40909090909089 18.4L 68.40909090909089 18.4L 68.40909090909089 40L 68.40909090909089 40z"
                                                                  pathfrom="M 65.2272727272727 40L 65.2272727272727 40L 68.40909090909089 40L 68.40909090909089 40L 68.40909090909089 40L 65.2272727272727 40"
                                                                  cy="18.4" cx="71.59090909090907" j="10" val="54"
                                                                  barheight="21.6" barwidth="3.1818181818181817"></path>
                                                        </g>
                                                        <g id="SvgjsG1152" class="apexcharts-datalabels"
                                                           data:realindex="0"></g>
                                                    </g>
                                                    <line id="SvgjsLine1178" x1="0" y1="0" x2="70" y2="0"
                                                          stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                          class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1179" x1="0" y1="0" x2="70" y2="0"
                                                          stroke-dasharray="0" stroke-width="0"
                                                          class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1180" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1181" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1182" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect id="SvgjsRect1146" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                      opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                      fill="#fefefe"></rect>
                                                <g id="SvgjsG1166" class="apexcharts-yaxis" rel="0"
                                                   transform="translate(-18, 0)"></g>
                                                <g id="SvgjsG1139" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 20px;"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(0, 143, 251);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                         style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-label"></span><span
                                                                    class="apexcharts-tooltip-text-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div>

                                    <h4 class="mb-1 mt-1"><span
                                                data-plugin="counterup"><?= $data['counts'][0]->counts ?></span></h4>
                                    <p class="text-muted mb-0">عدد البلاغات</p>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-end mt-2" style="position: relative;">
                                    <div id="orders-chart" data-colors="[&quot;--bs-success&quot;]"
                                         style="min-height: 46px;">
                                        <div id="apexcharts8471m7as"
                                             class="apexcharts-canvas apexcharts8471m7as apexcharts-theme-light"
                                             style="width: 45px; height: 46px;">
                                            <svg id="SvgjsSvg1183" width="45" height="46"
                                                 xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                 xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                 style="background: transparent;">
                                                <g id="SvgjsG1185" class="apexcharts-inner apexcharts-graphical"
                                                   transform="translate(0, 0)">
                                                    <defs id="SvgjsDefs1184">
                                                        <clipPath id="gridRectMask8471m7as">
                                                            <rect id="SvgjsRect1187" width="51" height="47" x="-3"
                                                                  y="-1" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                  stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMask8471m7as">
                                                            <rect id="SvgjsRect1188" width="49" height="49" x="-2"
                                                                  y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                  stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <g id="SvgjsG1189" class="apexcharts-radialbar">
                                                        <g id="SvgjsG1190">
                                                            <g id="SvgjsG1191" class="apexcharts-tracks">
                                                                <g id="SvgjsG1192"
                                                                   class="apexcharts-radialbar-track apexcharts-track"
                                                                   rel="1">
                                                                    <path id="apexcharts-radialbarTrack-0"
                                                                          d="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 22.497318152626402 7.134146575498747"
                                                                          fill="none" fill-opacity="1"
                                                                          stroke="rgba(242,242,242,0.85)"
                                                                          stroke-opacity="1" stroke-linecap="butt"
                                                                          stroke-width="4.258536585365854"
                                                                          stroke-dasharray="0"
                                                                          class="apexcharts-radialbar-area"
                                                                          data:pathorig="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 22.497318152626402 7.134146575498747"></path>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1194">
                                                                <g id="SvgjsG1196"
                                                                   class="apexcharts-series apexcharts-radial-series"
                                                                   seriesname="seriesx1" rel="1" data:realindex="0">
                                                                    <path id="SvgjsPath1197"
                                                                          d="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 7.886204749611055 27.248309913566267"
                                                                          fill="none" fill-opacity="0.85"
                                                                          stroke="rgba(52,195,143,0.85)"
                                                                          stroke-opacity="1" stroke-linecap="butt"
                                                                          stroke-width="4.390243902439025"
                                                                          stroke-dasharray="0"
                                                                          class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                          data:angle="252" data:value="70" index="0"
                                                                          j="0"
                                                                          data:pathorig="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 7.886204749611055 27.248309913566267"></path>
                                                                </g>
                                                                <circle id="SvgjsCircle1195" r="13.23658536585366"
                                                                        cx="22.5" cy="22.5"
                                                                        class="apexcharts-radialbar-hollow"
                                                                        fill="transparent"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1198" x1="0" y1="0" x2="45" y2="0"
                                                          stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                          class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1199" x1="0" y1="0" x2="45" y2="0"
                                                          stroke-dasharray="0" stroke-width="0"
                                                          class="apexcharts-ycrosshairs-hidden"></line>
                                                </g>
                                                <g id="SvgjsG1186" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                        </div>
                                    </div>

                                </div>
                                <div>
                                    <h4 class="mb-1 mt-1"><span
                                                data-plugin="counterup"><?= $data['counts'][1]->counts ?></span></h4>
                                    <p class="text-muted mb-0">عدد الشكاوي والمقترحات</p>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-end mt-2" style="position: relative;">
                                    <div id="customers-chart" data-colors="[&quot;--bs-primary&quot;]"
                                         style="min-height: 46px;">
                                        <div id="apexcharts1yjowos1i"
                                             class="apexcharts-canvas apexcharts1yjowos1i apexcharts-theme-light"
                                             style="width: 45px; height: 46px;">
                                            <svg id="SvgjsSvg1200" width="45" height="46"
                                                 xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                 xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                 style="background: transparent;">
                                                <g id="SvgjsG1202" class="apexcharts-inner apexcharts-graphical"
                                                   transform="translate(0, 0)">
                                                    <defs id="SvgjsDefs1201">
                                                        <clipPath id="gridRectMask1yjowos1i">
                                                            <rect id="SvgjsRect1204" width="51" height="47" x="-3"
                                                                  y="-1" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                  stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMask1yjowos1i">
                                                            <rect id="SvgjsRect1205" width="49" height="49" x="-2"
                                                                  y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                  stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <g id="SvgjsG1206" class="apexcharts-radialbar">
                                                        <g id="SvgjsG1207">
                                                            <g id="SvgjsG1208" class="apexcharts-tracks">
                                                                <g id="SvgjsG1209"
                                                                   class="apexcharts-radialbar-track apexcharts-track"
                                                                   rel="1">
                                                                    <path id="apexcharts-radialbarTrack-0"
                                                                          d="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 22.497318152626402 7.134146575498747"
                                                                          fill="none" fill-opacity="1"
                                                                          stroke="rgba(242,242,242,0.85)"
                                                                          stroke-opacity="1" stroke-linecap="butt"
                                                                          stroke-width="4.258536585365854"
                                                                          stroke-dasharray="0"
                                                                          class="apexcharts-radialbar-area"
                                                                          data:pathorig="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 22.497318152626402 7.134146575498747"></path>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1211">
                                                                <g id="SvgjsG1213"
                                                                   class="apexcharts-series apexcharts-radial-series"
                                                                   seriesname="seriesx1" rel="1" data:realindex="0">
                                                                    <path id="SvgjsPath1214"
                                                                          d="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 17.751690086433737 37.11379525038895"
                                                                          fill="none" fill-opacity="0.85"
                                                                          stroke="rgba(91,115,232,0.85)"
                                                                          stroke-opacity="1" stroke-linecap="butt"
                                                                          stroke-width="4.390243902439025"
                                                                          stroke-dasharray="0"
                                                                          class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                          data:angle="198" data:value="55" index="0"
                                                                          j="0"
                                                                          data:pathorig="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 17.751690086433737 37.11379525038895"></path>
                                                                </g>
                                                                <circle id="SvgjsCircle1212" r="13.23658536585366"
                                                                        cx="22.5" cy="22.5"
                                                                        class="apexcharts-radialbar-hollow"
                                                                        fill="transparent"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1215" x1="0" y1="0" x2="45" y2="0"
                                                          stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                          class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1216" x1="0" y1="0" x2="45" y2="0"
                                                          stroke-dasharray="0" stroke-width="0"
                                                          class="apexcharts-ycrosshairs-hidden"></line>
                                                </g>
                                                <g id="SvgjsG1203" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                        </div>
                                    </div>

                                </div>
                                <div>
                                    <h4 class="mb-1 mt-1"><span
                                                data-plugin="counterup"><?= $data['counts'][2]->counts ?></span></h4>
                                    <p class="text-muted mb-0">عدد المستخدمين</p>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end col-->
                </div>
                <!-- end row-->


                <!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">أحدث البلاغات</h4>
                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap mb-0">
                                        <thead class="table-light">
                                        <tr>
                                            <th>رقم البلاغ</th>
                                            <th>التاريخ</th>
                                            <th>حالة البلاغ</th>
                                            <th>الموقع</th>
                                            <th>إجراء</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        if (isset($data['reports']) && !empty($data['reports'])) {
                                            foreach ($data['reports'] as $report) {
                                                ?>
                                                <tr>
                                                    <td><a href="javascript: void(0);"
                                                           class="text-body fw-bold">#ID-<?= $report->id ?></a>
                                                    </td>
                                                    <td>
                                                        <?= $report->date_reported ?>
                                                    </td>

                                                    <td>
                                                        <?= $report->status ?>
                                                    </td>
                                                    <td>
                                                        <?= $report->location ?>
                                                    </td>
                                                    <td>
                                                        <a type="button"
                                                           href="<?=URLROOT?>admin/ReportsController/viewReport/<?=$report->id?>"
                                                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                            عرض التفاصيل
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }elseif (empty($data['reports'])){
                                            ?>
                                        <tr>
                                            <td>
                                                <span class="text-info">لا توجد بيانات متوفرة</span>
                                            </td>
                                        </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table-responsive -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">أحدث الشكاوي و المقترحات</h4>
                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap mb-0">
                                        <thead class="table-light">
                                        <tr>
                                            <th>رقم الشكوى | الاقتراح</th>
                                            <th>التاريخ</th>
                                            <th>الموقع</th>
                                            <th>إجراء</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        if (isset($data['ComplaintsSuggestions']) && !empty($data['ComplaintsSuggestions'])) {
                                            foreach ($data['ComplaintsSuggestions'] as $raw) {
                                                ?>
                                                <tr>
                                                    <td><a href="javascript: void(0);"
                                                           class="text-body fw-bold">#ID-<?=$raw->id?></a>
                                                    </td>
                                                    <td>
                                                        <?=$raw->date?>
                                                    </td>
                                                    <td><?=$raw->location?></td>
                                                    <td>
                                                        <a href="<?= URLROOT ?>admin/ComplaintsSuggestionsController/viewComplaintOrSuggestion/<?= $raw->id ?>" type="button"
                                                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                            عرض التفاصيل
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }elseif (empty($data['ComplaintsSuggestions'])){
                                            ?>
                                            <tr>
                                                <td>
                                                    <span class="text-info m-auto">لا توجد بيانات متوفرة</span>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table-responsive -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div>
        </div>
        <!-- End Page-content -->

<?php

include INCLUDES_ADMIN_PATH."footer.php";
?>