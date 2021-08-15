@extends('layouts.app')

@push('addon-style')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

@endpush

@section('title')
    Petrokimia
@endsection

@section('content')
    <div class="page-content page-home">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-12">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 829.56 574.06">
                        <defs>
                            <style>
                                .cls-1{fill:#e8e5e6;}.cls-1,.cls-10,.cls-11,.cls-12,.cls-13,.cls-14,.cls-15,.cls-16,.cls-17,.cls-5,.cls-6,.cls-7,.cls-8,.cls-9{stroke:#ed1c24;}.cls-1,.cls-10,.cls-11,.cls-12,.cls-13,.cls-14,.cls-15,.cls-16,.cls-17,.cls-2,.cls-21,.cls-22,.cls-3,.cls-4,.cls-5,.cls-6,.cls-7,.cls-8,.cls-9{stroke-miterlimit:10;}.cls-2,.cls-8{fill:#7ed7a7;}.cls-2,.cls-4{stroke:#f15a29;}.cls-3{fill:#c45815;stroke:#ef4136;}.cls-16,.cls-4{fill:#ffde7d;}.cls-5{fill:#01b0f1;}.cls-6{fill:#ffdf7d;}.cls-7{fill:#9aaa90;}.cls-9{fill:#fbe5d7;}.cls-10{fill:#c00001;}.cls-11{fill:#ff7d7d;}.cls-12{fill:#006602;}.cls-13,.cls-21{fill:none;}.cls-14{fill:#febcbe;}.cls-15{fill:#80d6fa;}.cls-17{fill:#006700;}.cls-18{font-size:14px;}.cls-18,.cls-20,.cls-23,.cls-24,.cls-25,.cls-27,.cls-39,.cls-41,.cls-58{font-family:Nunito-SemiBold, Nunito;font-weight:600;}.cls-19{letter-spacing:0.01em;}.cls-20,.cls-48{font-size:11px;}.cls-21,.cls-22{stroke:#231f20;}.cls-22{fill:#231f20;}.cls-23{font-size:8px;}.cls-24{font-size:8.66px;}.cls-25{font-size:13px;}.cls-26{letter-spacing:-0.01em;}.cls-27{font-size:7px;}.cls-28{letter-spacing:-0.08em;}.cls-29{letter-spacing:-0.08em;}.cls-30{letter-spacing:0em;}.cls-31{letter-spacing:0em;}.cls-32{letter-spacing:0.01em;}.cls-33{letter-spacing:-0.01em;}.cls-34{letter-spacing:-0.01em;}.cls-35{letter-spacing:0em;}.cls-36{letter-spacing:0.01em;}.cls-37{letter-spacing:0em;}.cls-38{letter-spacing:-0.01em;}.cls-39{font-size:9px;}.cls-40{letter-spacing:0em;}.cls-41{font-size:12px;}.cls-42{letter-spacing:0.01em;}.cls-43{letter-spacing:-0.08em;}.cls-44{letter-spacing:-0.01em;}.cls-45{letter-spacing:0em;}.cls-46{letter-spacing:-0.02em;}.cls-47{letter-spacing:-0.01em;}.cls-48{font-family:MyriadPro-Regular, Myriad Pro;}.cls-49{letter-spacing:-0.04em;}.cls-50{letter-spacing:-0.06em;}.cls-51{letter-spacing:-0.03em;}.cls-52{letter-spacing:0em;}.cls-53{letter-spacing:0em;}.cls-54{letter-spacing:-0.01em;}.cls-55{letter-spacing:-0.01em;}.cls-56{letter-spacing:0em;}.cls-57{letter-spacing:-0.02em;}.cls-58{font-size:6px;}
                            </style>
                        </defs>
                            <g id="Layer_1" data-name="Layer 1">
                                <rect class="cls-1" x="140.39" y="428.21" width="132.23" height="124.82"/>
                                <rect x="777.06" y="307.04" width="43.82" height="38.42"/>

                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="537.41" y="217.12" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="537.41" y="246.64" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="537.41" y="276.17" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="537.41" y="305.69" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="537.41" y="335.22" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="537.41" y="364.74" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="585.18" y="217.12" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="585.18" y="246.64" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="585.18" y="276.17" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="585.18" y="305.69" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="585.18" y="335.22" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="585.18" y="364.74" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="633.35" y="217.12" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="633.35" y="246.64" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="633.35" y="276.17" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="633.35" y="305.69" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="633.35" y="335.22" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="633.35" y="364.74" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="681.12" y="217.12" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="681.12" y="246.64" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="681.12" y="276.17" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="681.12" y="305.69" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="681.12" y="335.22" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="681.12" y="364.74" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="729.3" y="217.12" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="729.3" y="246.64" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="729.3" y="276.17" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="729.3" y="305.69" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="729.3" y="335.22" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="729.3" y="364.74" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="777.06" y="217.12" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="777.06" y="246.64" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="777.06" y="276.17" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="777.06" y="305.69" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="777.06" y="335.22" width="47.76" height="29.52"/>
                                <rect areal="Lahan sawah/lahan basah" blok="C4" pilih="no" panjang="8" lebar="9" class="cls-2" x="777.06" y="364.74" width="47.76" height="29.52"/>


                                <rect class="cls-2" x="638.12" y="19.44" width="62.24" height="177.12"/>
                                <rect class="cls-2" x="702.3" y="19.44" width="62.24" height="177.12"/>
                                <rect class="cls-2" x="766.83" y="19.44" width="62.24" height="177.12"/>
                                <rect class="cls-2" x="581" y="104.32" width="44.53" height="92.24"/>
                                <rect class="cls-2" x="537.41" y="115.82" width="43.47" height="80.74"/>
                                <rect class="cls-3" x="537.41" y="17.68" width="91.59" height="80.76"/>
                                <rect class="cls-4" x="378.87" y="245.77" width="66.96" height="59.5"/>
                                <rect class="cls-4" x="446.23" y="245.77" width="66.96" height="59.5"/>
                                <rect class="cls-4" x="378.87" y="185.95" width="66.96" height="59.5"/>
                                <rect class="cls-4" x="446.23" y="185.95" width="66.96" height="59.5"/>
                                <rect class="cls-4" x="378.87" y="127.39" width="66.96" height="59.5"/>
                                <rect class="cls-4" x="446.23" y="127.39" width="66.96" height="59.5"/>
                                <rect class="cls-3" x="460.3" y="91.03" width="52.89" height="30.12"/>
                                <rect class="cls-3" x="378.87" y="16.62" width="132.93" height="71.36"/>
                                <rect class="cls-5" x="437.17" y="356.06" width="76.98" height="38.21"/>
                                <rect class="cls-6" x="430.39" y="322.21" width="83.75" height="31.1"/>
                                <rect class="cls-6" x="378.87" y="322.21" width="51.53" height="72.06"/>
                                <rect class="cls-7" x="228.39" y="52.3" width="130.7" height="71.36"/>
                                <rect class="cls-7" x="140.39" y="52.03" width="80.35" height="71.36"/>
                                <rect class="cls-8" x="293.74" y="246.56" width="66.96" height="59.5"/>
                                <rect class="cls-8" x="293.74" y="186.73" width="66.96" height="59.5"/>
                                <rect class="cls-8" x="293.74" y="128.18" width="66.96" height="59.5"/>
                                <rect class="cls-9" x="140.39" y="265.51" width="131.88" height="99.56"/>
                                <rect class="cls-10" x="203.15" y="372.87" width="69.47" height="21.39"/>
                                <rect class="cls-11" x="1.85" y="52.3" width="80.41" height="153.33"/>
                                <rect class="cls-11" x="1.85" y="214.28" width="80.41" height="46.4"/>
                                <rect class="cls-11" x="1.85" y="269.34" width="80.41" height="53.22"/>
                                <rect class="cls-12" x="1.85" y="330.35" width="80.41" height="54.33"/>
                                <rect class="cls-1" x="0.5" y="436.99" width="81.76" height="70.75"/>
                                <polyline class="cls-13" points="17.27 429.39 91.03 429.39 91.03 507.74"/>
                                <line class="cls-13" x1="131.44" y1="507.74" x2="131.44" y2="429.39"/>
                                <polyline class="cls-13" points="18.85 394.27 91.73 394.27 91.73 52.3"/>
                                <line class="cls-13" x1="131.32" y1="52.03" x2="131.32" y2="394.27"/>
                                <rect class="cls-11" x="140.06" y="491.36" width="83.14" height="61.67"/>
                                <rect class="cls-6" x="281.62" y="322.21" width="77.12" height="72.06"/>
                                <rect class="cls-14" x="213.86" y="214.43" width="53.79" height="33.55" transform="translate(100.12 -85.27) rotate(22.28)"/>
                                <rect class="cls-14" x="161.81" y="190.82" width="53.79" height="33.55" transform="translate(87.28 -67.3) rotate(22.28)"/>
                                <polygon class="cls-15" points="141.15 129.91 220.74 129.91 220.74 187.68 140.39 151.74 140.39 129.91 141.15 129.91"/>
                                <polygon class="cls-16" points="228.06 190.27 269.26 211 286.91 210.56 286.91 130.89 228.06 130.89 228.06 190.27"/>
                                <polygon class="cls-17" points="256.32 250.28 288.21 250.28 288.21 216.99 269.85 216.99 256.32 250.28"/>
                                <polygon class="cls-16" points="140.39 257.86 140.39 218.33 177.44 218.33 235.79 247.86 235.79 257.86 140.39 257.86"/>
                                <rect class="cls-16" x="538" y="431.15" width="107.56" height="60.24"/>
                                <rect class="cls-16" x="538" y="492.08" width="107.56" height="60.24"/>
                                <rect class="cls-16" x="645.56" y="431.15" width="107.56" height="60.24"/>
                                <polygon class="cls-16" points="645.56 552.32 686.85 552.32 753.12 491.39 645.56 491.39 645.56 552.32"/>
                                <polygon class="cls-3" points="281.62 522.2 361.38 429.03 513.15 429.03 513.15 553.09 281.62 553.09 281.62 522.2"/>
                                <polygon class="cls-12" points="281.62 507.62 281.62 429.03 352.12 429.03 281.62 507.62"/>
                            </g>
                            <g id="Layer_3" data-name="Layer 3">
                                <text class="cls-18" transform="translate(720.96 11.94)">
                                    <tspan class="cls-19">C</tspan>
                                    <tspan x="9.6" y="0">.3</tspan>
                                </text>
                                <text class="cls-20" transform="translate(648.65 93.15) rotate(90)">43 m</text>
                                <text class="cls-20" transform="translate(660.13 187.81)">9 m</text>
                                <text class="cls-18" transform="translate(669.24 295.95)">
                                    <tspan class="cls-19">C</tspan><tspan x="9.6" y="0">.4</tspan>
                                </text>
                                <line class="cls-21" x1="642.77" y1="28.27" x2="642.77" y2="185.68"/>
                                <polygon class="cls-22" points="640.36 28.27 645.3 28.27 642.77 24.3 640.36 28.27"/>
                                <polygon class="cls-22" points="645.24 185.15 640.3 185.15 642.83 189.12 645.24 185.15"/>
                                <line class="cls-21" x1="690.41" y1="192.21" x2="648.65" y2="192.21"/>
                                <polygon class="cls-22" points="690.41 189.86 690.41 194.8 694.38 192.27 690.41 189.86"/>
                                <polygon class="cls-22" points="648.15 194.68 648.15 189.74 644.18 192.27 648.15 194.68"/>
                                <text class="cls-23" transform="translate(551.33 209.49)">9 m</text>
                                <line class="cls-21" x1="578" y1="211.53" x2="543.36" y2="211.53"/>
                                <polygon class="cls-22" points="578 209.58 578 213.68 581.3 211.59 578 209.58"/>
                                <polygon class="cls-22" points="542.94 213.58 542.94 209.49 539.65 211.58 542.94 213.58"/>
                                <line class="cls-21" x1="532.35" y1="220.69" x2="532.35" y2="241.56"/>
                                <polygon class="cls-22" points="531.18 220.69 533.65 220.69 532.38 218.7 531.18 220.69"/>
                                <polygon class="cls-22" points="533.59 241.81 531.12 241.81 532.38 243.79 533.59 241.81"/>
                                <text class="cls-23" transform="translate(528.15 238.68) rotate(-90)">8 m</text>
                                <text class="cls-23" transform="translate(550.01 187.76)">10 m</text>
                                <line class="cls-21" x1="575.03" y1="191.95" x2="544.46" y2="191.95"/>
                                <polygon class="cls-22" points="575.03 189.91 575.03 194 578.33 191.91 575.03 189.91"/>
                                <polygon class="cls-22" points="544.36 194 544.36 189.91 541.06 192 544.36 194"/>
                                <line class="cls-21" x1="531.3" y1="123.38" x2="531.3" y2="185.19"/>
                                <polygon class="cls-22" points="529.25 123.38 533.35 123.38 531.25 120.09 529.25 123.38"/>
                                <polygon class="cls-22" points="533.35 186.17 529.25 186.17 531.35 189.46 533.35 186.17"/>
                                <text class="cls-23" transform="translate(529.18 165.96) rotate(-90)">14 m</text>
                                <text class="cls-23" transform="translate(593.58 187.83)">10 m</text>
                                <line class="cls-21" x1="618.6" y1="192.03" x2="588.03" y2="192.03"/>
                                <polygon class="cls-22" points="618.6 189.98 618.6 194.07 621.9 191.98 618.6 189.98"/>
                                <polygon class="cls-22" points="587.93 194.07 587.93 189.98 584.64 192.07 587.93 194.07"/>
                                <line class="cls-21" x1="620.76" y1="112.6" x2="620.76" y2="179.49"/>
                                <polygon class="cls-22" points="618.55 112.6 622.98 112.6 620.71 109.03 618.55 112.6"/>
                                <polygon class="cls-22" points="622.98 180.55 618.55 180.55 620.82 184.12 622.98 180.55"/>
                                <text class="cls-24" transform="translate(618.47 158.68) rotate(-90)">19 m</text>
                                <text class="cls-25" transform="translate(559.15 62.56)">
                                    <tspan class="cls-26">K</tspan><tspan x="8.2" y="0">ompos</tspan>
                                </text>
                                <text class="cls-18" transform="translate(603.44 156.19) rotate(-90)">
                                    <tspan class="cls-19">C</tspan><tspan x="9.6" y="0">.2</tspan>
                                </text>
                                <text class="cls-18" transform="translate(564.61 161.01) rotate(-90)">
                                    <tspan class="cls-19">C</tspan><tspan x="9.6" y="0">.1</tspan>
                                </text>
                                <text class="cls-20" transform="translate(414.14 55.54)">Kandang sapi</text>
                                <text class="cls-27" transform="translate(472.83 109.03)">Gudang</text>
                                <text class="cls-20" transform="translate(259.62 93.15)">
                                    <tspan class="cls-28">T</tspan><tspan x="5.87" y="0">anaman Buah</tspan>
                                </text>
                                <text class="cls-23" transform="translate(158.37 91.67)">
                                    <tspan class="cls-29">T</tspan>
                                    <tspan class="cls-30" x="4.27" y="0">abulamp</tspan>
                                    <tspan class="cls-31" x="36.25" y="0">o</tspan>
                                    <tspan x="40.73" y="0">t</tspan>
                                </text>
                                <text class="cls-25" transform="translate(437.17 216.48)">
                                    <tspan class="cls-32">K</tspan><tspan x="8.54" y="0">.4</tspan>
                                </text>
                                <text class="cls-25" transform="translate(316.18 211.63)">
                                    <tspan class="cls-33">B</tspan><tspan x="8.75" y="0">.2</tspan>
                                </text>
                                <text class="cls-23" transform="translate(163.11 156.19)">
                                    <tspan class="cls-34">K</tspan><tspan x="5.05" y="0">olam </tspan>
                                    <tspan class="cls-34" x="25.35" y="0">K</tspan><tspan class="cls-35" x="30.4" y="0">oi</tspan>
                                </text>
                                <text class="cls-20" transform="translate(249.17 174.56)">
                                    <tspan class="cls-36">K</tspan><tspan x="7.23" y="0">.2</tspan>
                                </text>
                                <text class="cls-20" transform="matrix(0.89, 0.46, -0.46, 0.89, 170.23, 195.04)">
                                    R<tspan class="cls-36" x="7.45" y="0">K</tspan>
                                    <tspan class="cls-37" x="14.67" y="0">.1</tspan>
                                </text>
                                <text class="cls-20" transform="matrix(0.89, 0.46, -0.46, 0.89, 223.22, 217.36)">
                                    R<tspan class="cls-36" x="7.45" y="0">K</tspan>
                                    <tspan class="cls-37" x="14.67" y="0">.2</tspan>
                                </text>
                                <text class="cls-25" transform="matrix(1, 0, 0, 1, 163.11, 243.45)">
                                    <tspan class="cls-32">K</tspan><tspan x="8.54" y="0">.1</tspan>
                                </text>
                                <text class="cls-25" transform="matrix(1, 0, 0, 1, 162.98, 320.07)">
                                    Sc<tspan class="cls-38" x="14.16" y="0">r</tspan><tspan x="18.92" y="0">een House</tspan>
                                </text>
                                <text class="cls-39" transform="matrix(1, 0, 0, 1, 228.26, 386.3)">
                                    Jog<tspan class="cls-40" x="13.47" y="0">l</tspan><tspan x="16.18" y="0">o</tspan>
                                </text>
                                <text class="cls-41" transform="matrix(1, 0, 0, 1, 310.29, 360.9)">
                                    <tspan class="cls-42">K</tspan><tspan x="7.88" y="0">.3</tspan>
                                </text>
                                <text class="cls-41" transform="matrix(1, 0, 0, 1, 397.38, 318.67)">
                                    <tspan class="cls-42">K</tspan><tspan x="7.88" y="0">.5</tspan>
                                </text>
                                <text class="cls-39" transform="matrix(1, 0, 0, 1, 453.02, 376.89)">
                                    <tspan class="cls-43">T</tspan><tspan x="4.81" y="0">andon Air</tspan>
                                </text>
                                <text class="cls-20" transform="matrix(1, 0, 0, 1, 348.26, 493.85)">
                                    A<tspan class="cls-44" x="8.1" y="0">r</tspan>
                                    <tspan class="cls-37" x="12.12" y="0">ea Ba</tspan>
                                    <tspan class="cls-45" x="40.25" y="0">r</tspan>
                                    <tspan x="44.3" y="0">ak </tspan>
                                    <tspan class="cls-46" x="58.78" y="0">P</tspan>
                                    <tspan x="65.58" y="0">e</tspan>
                                    <tspan class="cls-47" x="71.49" y="0">k</tspan>
                                    <tspan x="77.04" y="0">erja</tspan>
                                </text>
                                <text class="cls-20" transform="matrix(1, 0, 0, 1, 170.23, 527.34)">RK 3</text>
                                <text class="cls-48" transform="translate(17.91 133.04)">La<tspan class="cls-46" x="10.49" y="0">b</tspan>
                                    <tspan x="16.49" y="0">.</tspan><tspan class="cls-49" x="18.77" y="0">
                                        </tspan><tspan class="cls-50" x="20.65" y="0">T</tspan>
                                        <tspan x="25.41" y="0">anah</tspan>
                                </text>
                                <text class="cls-48" transform="translate(28.51 241.81)">
                                    <tspan class="cls-51">F</tspan>
                                    <tspan x="5.07" y="0">it</tspan>
                                    <tspan class="cls-52" x="11.29" y="0">r</tspan>
                                    <tspan class="cls-53" x="14.93" y="0">i</tspan>
                                    <tspan class="cls-54" x="17.5" y="0">c</tspan>
                                    <tspan class="cls-53" x="22.36" y="0">e</tspan>
                                </text>
                                <text class="cls-48" transform="translate(21.28 300.16)">Biop
                                    <tspan class="cls-55" x="20.83" y="0">r</tspan>
                                    <tspan class="cls-56" x="24.32" y="0">oses</tspan>
                                </text>
                                <text class="cls-20" transform="translate(583.05 465.74)">
                                    <tspan class="cls-36">K</tspan><tspan x="7.23" y="0">.6</tspan>
                                </text>
                                <text class="cls-20" transform="translate(583.95 525.24)">
                                    <tspan class="cls-36">K</tspan><tspan x="7.23" y="0">.7</tspan>
                                </text>
                                <text class="cls-20" transform="translate(690.24 465.84)">
                                    <tspan class="cls-36">K</tspan><tspan x="7.23" y="0">.8</tspan>
                                </text>
                                <text class="cls-20" transform="translate(680.08 520.9)">
                                    <tspan class="cls-36">K</tspan><tspan x="7.23" y="0">.9</tspan>
                                </text>
                                <text class="cls-39" transform="translate(34.78 469.97)">EPP
                                    <tspan class="cls-57" x="-16.28" y="10.8">P</tspan>
                                    <tspan x="-10.71" y="10.8">arkir Mobil</tspan>
                                </text>
                                <line class="cls-21" x1="638.79" y1="423.74" x2="546.01" y2="423.74"/>
                                <polygon class="cls-22" points="639.91 421.79 639.91 425.89 643.21 423.79 639.91 421.79"/>
                                <polygon class="cls-22" points="545.6 425.79 545.6 421.69 542.3 423.79 545.6 425.79"/>
                                <text class="cls-23" transform="translate(583.95 419.46)">23 m</text>
                                <line class="cls-21" x1="747.3" y1="422.85" x2="654.52" y2="422.85"/>
                                <polygon class="cls-22" points="748.42 420.9 748.42 425 751.72 422.9 748.42 420.9"/>
                                <polygon class="cls-22" points="654.11 424.9 654.11 420.81 650.81 422.9 654.11 424.9"/>
                                <text class="cls-23" transform="translate(692.46 418.57)">23 m</text>
                                <line class="cls-21" x1="532.44" y1="435.04" x2="532.61" y2="482.86"/>
                                <polygon class="cls-22" points="530.48 433.93 534.58 433.91 532.47 430.63 530.48 433.93"/>
                                <polygon class="cls-22" points="534.46 482.74 530.36 482.76 532.47 486.04 534.46 482.74"/>
                                <text class="cls-23" transform="translate(526.62 468.25) rotate(-90.2)">17 m</text>
                                <line class="cls-21" x1="532.32" y1="496.91" x2="532.5" y2="549.32"/>
                                <polygon class="cls-22" points="530.36 497.45 534.46 497.44 532.35 494.15 530.36 497.45"/>
                                <polygon class="cls-22" points="534.46 549.5 530.36 549.51 532.47 552.8 534.46 549.5"/>
                                <text class="cls-23" transform="translate(526.5 530.13) rotate(-90.2)">17 m</text>
                                <line class="cls-21" x1="762.41" y1="497.83" x2="693.52" y2="559.98"/>
                                <polygon class="cls-22" points="758.51 498.48 761.25 501.52 762.29 497.76 758.51 498.48"/>
                                <polygon class="cls-22" points="697.09 559.65 694.37 556.59 693.3 560.35 697.09 559.65"/>
                                <text class="cls-23" transform="translate(732.13 543.05) rotate(-41.65)">21 m</text>
                                <line class="cls-21" x1="683.27" y1="560.35" x2="650.66" y2="560.35"/>
                                <polygon class="cls-22" points="683.27 558.3 683.27 562.4 686.57 560.3 683.27 558.3"/>
                                <polygon class="cls-22" points="650.24 562.4 650.24 558.3 646.95 560.39 650.24 562.4"/>
                                <text class="cls-23" transform="translate(658.01 571.84)">10 m</text>
                                <line class="cls-21" x1="384.5" y1="131.67" x2="384.5" y2="182.05"/>
                                <polygon class="cls-22" points="382.45 132.53 386.55 132.53 384.45 129.24 382.45 132.53"/>
                                <polygon class="cls-22" points="386.55 180.59 382.45 180.59 384.55 183.89 386.55 180.59"/>
                                <text class="cls-23" transform="translate(393.05 165.96) rotate(-90)">13 m</text>
                                <line class="cls-21" x1="351.33" y1="309.74" x2="300.96" y2="309.74"/>
                                <polygon class="cls-22" points="350.47 307.69 350.47 311.79 353.76 309.69 350.47 307.69"/>
                                <polygon class="cls-22" points="302.41 311.79 302.41 307.69 299.12 309.79 302.41 311.79"/>
                                <text class="cls-23" transform="translate(315.12 318.67)">18 m</text>
                                <line class="cls-21" x1="505.69" y1="348.68" x2="440.46" y2="348.68"/>
                                <polygon class="cls-22" points="505.69 346.63 505.69 350.73 508.98 348.63 505.69 346.63"/>
                                <polygon class="cls-22" points="440.46 350.73 440.46 346.63 437.17 348.72 440.46 350.73"/>
                                <text class="cls-23" transform="translate(463.99 345.21)">15 m</text>
                                <line class="cls-21" x1="428.87" y1="400" x2="378.5" y2="400"/>
                                <polygon class="cls-22" points="428.02 397.95 428.02 402.05 431.31 399.96 428.02 397.95"/>
                                <polygon class="cls-22" points="379.95 402.05 379.95 397.95 376.66 400.05 379.95 402.05"/>
                                <text class="cls-23" transform="translate(395.32 409.61)">8 m</text>
                                <line class="cls-21" x1="374.01" y1="323.79" x2="374.01" y2="391.78"/>
                                <polygon class="cls-22" points="371.96 324.64 376.06 324.64 373.96 321.35 371.96 324.64"/>
                                <polygon class="cls-22" points="376.66 389.82 371.36 389.82 374.07 394.27 376.66 389.82"/>
                                <text class="cls-23" transform="translate(371.36 365.06) rotate(-90)">21 m</text>
                                <line class="cls-21" x1="518.46" y1="320.75" x2="518.46" y2="354.75"/>
                                <polygon class="cls-22" points="517.43 321.18 519.48 321.18 518.43 319.53 517.43 321.18"/>
                                <polygon class="cls-22" points="519.78 353.77 517.13 353.77 518.49 355.99 519.78 353.77"/>
                                <text class="cls-23" transform="translate(528.22 349.98) rotate(-90)">10 m</text>
                                <line class="cls-21" x1="354.77" y1="326.22" x2="354.77" y2="389.06"/>
                                <polygon class="cls-22" points="352.72 327.87 356.82 327.87 354.72 324.57 352.72 327.87"/>
                                <polygon class="cls-22" points="357.42 387.6 352.12 387.6 354.83 392.04 357.42 387.6"/>
                                <text class="cls-23" transform="translate(352.12 367.5) rotate(-90)">21 m</text>
                                <line class="cls-21" x1="353.12" y1="398.84" x2="284.81" y2="398.84"/>
                                <polygon class="cls-22" points="353.12 396.8 353.12 400.89 356.42 398.8 353.12 396.8"/>
                                <polygon class="cls-22" points="286.26 400.89 286.26 396.8 282.97 398.89 286.26 400.89"/>
                                <text class="cls-23" transform="translate(311.79 408.52)">19 m</text>
                                <line class="cls-21" x1="365.33" y1="251.42" x2="365.33" y2="301.79"/>
                                <polygon class="cls-22" points="363.28 252.28 367.38 252.28 365.28 248.98 363.28 252.28"/>
                                <polygon class="cls-22" points="367.38 300.34 363.28 300.34 365.37 303.63 367.38 300.34"/>
                                <text class="cls-23" transform="translate(373.88 285.7) rotate(-90)">13 m</text>
                                <line class="cls-21" x1="280.69" y1="136.11" x2="235.55" y2="136.11"/>
                                <polygon class="cls-22" points="278.45 134.27 278.45 137.94 281.4 136.06 278.45 134.27"/>
                                <polygon class="cls-22" points="238.32 137.94 238.32 134.27 235.37 136.15 238.32 137.94"/>
                                <text class="cls-58" transform="translate(250.07 144.11)">16 m</text>
                                <line class="cls-21" x1="233.45" y1="188.26" x2="233.45" y2="141.12"/>
                                <polygon class="cls-22" points="235.37 185.92 231.54 185.92 233.5 189 235.37 185.92"/>
                                <polygon class="cls-22" points="231.54 144.02 235.37 144.02 233.41 140.94 231.54 144.02"/>
                                <line class="cls-21" x1="282.26" y1="207.29" x2="273.06" y2="207.29"/>
                                <polygon class="cls-22" points="282.4 206.18 282.4 208.4 284.95 207.26 282.4 206.18"/>
                                <polygon class="cls-22" points="273.06 208.26 273.06 206.32 270.84 207.31 273.06 208.26"/>
                                <line class="cls-21" x1="282.4" y1="200.22" x2="282.4" y2="139.71"/>
                                <polygon class="cls-22" points="284.32 197.21 280.48 197.21 282.44 201.17 284.32 197.21"/>
                                <polygon class="cls-22" points="280.48 143.43 284.32 143.43 282.36 139.48 280.48 143.43"/>
                                <line class="cls-21" x1="267.24" y1="205.25" x2="240.15" y2="190.81"/>
                                <polygon class="cls-22" points="265.43 202.32 263.17 205.42 267.52 206.16 265.43 202.32"/>
                                <polygon class="cls-22" points="238.75 192.54 240.5 189.13 236.08 189.07 238.75 192.54"/>
                                <text class="cls-58" transform="translate(241.38 171.84) rotate(-90)">10 m</text>
                                <text class="cls-58" transform="translate(279.93 173.31) rotate(-90)">20 m</text>
                                <text class="cls-58" transform="translate(248.43 191.73) rotate(30.44)">13 m</text>
                                <text class="cls-58" transform="translate(269.47 202.65) rotate(12.96)">8 m</text>
                                <line class="cls-21" x1="437.23" y1="123.25" x2="387.09" y2="123.25"/>
                                <polygon class="cls-22" points="436.38 121.15 436.38 125.25 439.67 123.15 436.38 121.15"/>
                                <polygon class="cls-22" points="388.31 125.25 388.31 121.15 385.02 123.25 388.31 125.25"/>
                                <text class="cls-58" transform="translate(402.06 120.09)">13 m</text>
                            </g>
                        </svg>
                    
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 308.23 423.5">
                        <defs>
                            <style>.cls-1{fill:#7ed7a7;stroke:#f15a29;}.cls-1,.cls-2,.cls-6,.cls-7{stroke-miterlimit:10;}.cls-2{fill:#c45815;stroke:#ef4136;}.cls-3{font-size:16px;}.cls-10,.cls-3,.cls-5,.cls-8,.cls-9{font-family:Nunito-SemiBold, Nunito;font-weight:600;}.cls-4{letter-spacing:0.01em;}.cls-5{font-size:11px;}.cls-6{fill:none;}.cls-6,.cls-7{stroke:#231f20;}.cls-7{fill:#231f20;}.cls-8{font-size:8px;}.cls-9{font-size:8.66px;}.cls-10{font-size:13px;}.cls-11{letter-spacing:-0.01em;}
                            </style>
                        </defs>
                        <g id="Layer_1" data-name="Layer 1">
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="16.09" y="218.82" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="16.09" y="248.35" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="16.09" y="277.87" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="16.09" y="307.4" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="16.09" y="336.92" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="16.09" y="366.45" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="63.85" y="218.82" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="63.85" y="248.35" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="63.85" y="277.87" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="63.85" y="307.4" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="63.85" y="336.92" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="63.85" y="366.45" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="112.03" y="218.82" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="112.03" y="248.35" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="112.03" y="277.87" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="112.03" y="307.4" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="112.03" y="336.92" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="112.03" y="366.45" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="159.79" y="218.82" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="159.79" y="248.35" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="159.79" y="277.87" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="159.79" y="307.4" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="159.79" y="336.92" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="159.79" y="366.45" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="207.97" y="218.82" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="207.97" y="248.35" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="207.97" y="277.87" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="207.97" y="307.4" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="207.97" y="336.92" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="207.97" y="366.45" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="255.73" y="218.82" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="255.73" y="248.35" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="255.73" y="277.87" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="255.73" y="307.4" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="255.73" y="336.92" width="47.76" height="29.52"/>
                            <rect class="cls-1"  pilih="no" blok="C.4" panjang="8" lebar="9" x="255.73" y="366.45" width="47.76" height="29.52"/>
                            <rect class="cls-1" pilih="no" blok="C.3" panjang="43" lebar="9" x="116.79" y="21.15" width="62.24" height="177.12"/>
                            <rect class="cls-1" pilih="no" blok="C.3" panjang="43" lebar="9" x="180.97" y="21.15" width="62.24" height="177.12"/>
                            <rect class="cls-1" pilih="no" blok="C.3" panjang="43" lebar="9" x="245.5" y="21.15" width="62.24" height="177.12"/>
                            <rect class="cls-1" pilih="no" blok="C.2" panjang="19" lebar="10" x="59.67" y="106.03" width="44.53" height="92.24"/>
                            <rect class="cls-1" pilih="no" blok="C.1" panjang="14" lebar="10" x="16.09" y="117.53" width="43.47" height="80.74"/>
                            <rect class="cls-2" x="16.09" y="19.38" width="91.59" height="80.76"/>
                        </g>
                        <g id="Layer_3" data-name="Layer 3"><text class="cls-3" transform="translate(199.63 13.64)">
                            <tspan class="cls-4">C</tspan><tspan x="10.98" y="0">.3</tspan>
                            </text><text class="cls-5" transform="translate(124.52 94.4) rotate(90)">43 m</text>
                            <text class="cls-5" transform="translate(138.29 191.34)">9 m</text>
                            <text class="cls-3" transform="translate(145.85 419.06)">
                                <tspan class="cls-4">C</tspan><tspan x="10.98" y="0">.4</tspan>
                            </text>
                            <line class="cls-6" x1="121.44" y1="29.97" x2="121.44" y2="187.38"/>
                            <polygon class="cls-7" points="119.03 29.97 123.97 29.97 121.44 26 119.03 29.97"/>
                            <polygon class="cls-7" points="123.91 186.86 118.97 186.86 121.5 190.83 123.91 186.86"/>
                            <line class="cls-6" x1="169.09" y1="193.91" x2="127.32" y2="193.91"/>
                            <polygon class="cls-7" points="169.09 191.56 169.09 196.5 173.06 193.97 169.09 191.56"/>
                            <polygon class="cls-7" points="126.82 196.38 126.82 191.44 122.85 193.97 126.82 196.38"/>
                            <text class="cls-8" transform="translate(30 211.19)">9 m</text>
                            <line class="cls-6" x1="56.68" y1="213.24" x2="22.03" y2="213.24"/>
                            <polygon class="cls-7" points="56.67 211.29 56.67 215.39 59.97 213.29 56.67 211.29"/>
                            <polygon class="cls-7" points="21.61 215.29 21.61 211.19 18.32 213.29 21.61 215.29"/>
                            <line class="cls-6" x1="11.02" y1="222.39" x2="11.02" y2="243.27"/>
                            <polygon class="cls-7" points="9.85 222.39 12.32 222.39 11.05 220.41 9.85 222.39"/>
                            <polygon class="cls-7" points="12.26 243.52 9.79 243.52 11.05 245.5 12.26 243.52"/>
                            <text class="cls-8" transform="translate(6.82 240.39) rotate(-90)">8 m</text>
                            <text class="cls-8" transform="translate(28.68 189.46)">10 m</text>
                            <line class="cls-6" x1="53.7" y1="193.66" x2="23.13" y2="193.66"/>
                            <polygon class="cls-7" points="53.7 191.61 53.7 195.71 57 193.61 53.7 191.61"/>
                            <polygon class="cls-7" points="23.03 195.71 23.03 191.61 19.74 193.71 23.03 195.71"/>
                            <line class="cls-6" x1="9.97" y1="125.09" x2="9.97" y2="186.89"/>
                            <polygon class="cls-7" points="7.92 125.09 12.02 125.09 9.93 121.79 7.92 125.09"/>
                            <polygon class="cls-7" points="12.02 187.87 7.92 187.87 10.02 191.16 12.02 187.87"/>
                            <text class="cls-8" transform="translate(7.85 167.66) rotate(-90)">14 m</text>
                            <text class="cls-8" transform="translate(72.25 189.53)">10 m</text>
                            <line class="cls-6" x1="97.28" y1="193.73" x2="66.7" y2="193.73"/>
                            <polygon class="cls-7" points="97.28 191.68 97.28 195.78 100.57 193.68 97.28 191.68"/>
                            <polygon class="cls-7" points="66.6 195.78 66.6 191.68 63.31 193.78 66.6 195.78"/>
                            <line class="cls-6" x1="99.44" y1="114.3" x2="99.44" y2="181.2"/>
                            <polygon class="cls-7" points="97.22 114.3 101.66 114.3 99.39 110.74 97.22 114.3"/>
                            <polygon class="cls-7" points="101.66 182.26 97.22 182.26 99.49 185.82 101.66 182.26"/>
                            <text class="cls-9" transform="translate(97.14 160.38) rotate(-90)">19 m</text>
                            <text class="cls-10" transform="translate(37.82 64.27)">
                                <tspan class="cls-11">K</tspan><tspan x="8.2" y="0">ompos</tspan>
                            </text>
                        </g>
                    </svg> --}}
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" id="Layer_2" data-name="Layer 2" viewBox="0 0 786.04 309.99">
                        <defs>
                            <style>
                                .cls-1{fill:#91c83e;}.cls-1,.cls-10,.cls-11,.cls-12,.cls-13,.cls-2,.cls-3,.cls-4,.cls-5,.cls-6,.cls-7,.cls-8,.cls-9{stroke:#231f20;stroke-miterlimit:10;}.cls-2{fill:#f6eb14;}.cls-3{fill:#ed1d7f;}.cls-4{fill:#93c83e;}.cls-5{fill:#3973b9;}.cls-6{fill:#70ccdc;}.cls-7{fill:#4279bd;}.cls-8{fill:#e17238;}.cls-9{fill:gray;}.cls-10{fill:#55c6d6;}.cls-11{fill:#653815;}.cls-12{fill:#bfbfc1;}.cls-13{fill:#7f7f43;}
                            </style>
                        </defs>
                        <rect data-toggle="modal" data-target="#modal1" class="cls-1" x="0.5" y="187" width="160.12" height="46.34"/>
                        <rect data-toggle="modal" data-target="#modal1" class="cls-1" x="308.46" y="82.39" width="52.19" height="30.91"/>
                        
                        <rect data-toggle="tooltip" data-placement="top" title="<p>Status Terpakai</p>" class="cls-2" x="590.61" y="0.5" width="83.73" height="66.52" block="C3" area="43"/>
                            
                        <rect class="cls-2" x="596.34" y="69.55" width="34.18" height="38.08"/>
                        <rect data-toggle="tooltip" data-placement="top" title="<p>Status Terpakai</p>" class="cls-2" x="519.73" y="0.5" width="66.52" height="66.52"/>
                        <rect class="cls-2" x="464.44" y="68.71" width="117.91" height="50.62"/>
                        <rect class="cls-2" x="542.28" y="122.54" width="46.03" height="26.07"/>
                        <rect class="cls-2" x="464.44" y="122.54" width="77.84" height="41.75"/>
                        <rect class="cls-2" x="464.44" y="43.28" width="17.78" height="22.48"/>
                        <rect class="cls-2" x="482.22" y="39.15" width="20.65" height="26.61"/>
                        <rect class="cls-2" x="400.79" y="44.7" width="53.41" height="51.84"/>
                        <rect class="cls-2" x="256.39" y="37.09" width="18.92" height="16.92"/>
                        <rect class="cls-2" x="308.46" y="123.91" width="54.71" height="20.65"/>
                        <rect class="cls-2" x="369.02" y="49.02" width="27.87" height="47.52"/>
                        <rect class="cls-2" x="364.96" y="98.76" width="31.2" height="20.11"/>
                        <rect class="cls-2" x="344.93" y="99.08" width="15.71" height="14.22"/>
                        <rect class="cls-2" x="115.65" y="187" width="44.96" height="13.88"/>
                        <rect class="cls-3" x="504.51" y="37.81" width="15.22" height="27.95"/>
                        <rect class="cls-3" x="509.1" y="2.49" width="10.63" height="35.33"/>
                        <polygon class="cls-3" points="588.32 148.61 482.03 185.24 464.44 170.36 464.44 164.28 542.28 164.28 542.28 148.61 588.12 148.61 588.24 148.48 588.26 148.32 588.32 148.61"/>
                        <polygon class="cls-3" points="596.34 107.63 596.34 118.03 615 118.03 651.93 93.17 658.59 69.55 630.52 69.55 630.52 107.63 596.34 107.63"/>
                        <polygon class="cls-3" points="400.79 118.87 400.79 98.76 454.2 98.76 454.2 106.19 417.8 106.19 417.8 118.87 400.79 118.87"/>
                        <polygon class="cls-4" points="658.59 95.7 665.85 70.69 686.04 70.69 718.15 102.12 701.18 108.77 658.59 95.7"/>
                        <path class="cls-5" d="M731.7,142.22l64.23-3.06s12.08-4.89,17.13,3.06c0,0,2.9,5.51-6.73,8.26l-50.47,14.68a10.31,10.31,0,0,1-8.26,0S728,152.47,731.7,142.22Z" transform="translate(-27.92 -66.02)"/>
                        <rect class="cls-6" x="479.89" y="2.49" width="26.76" height="34.1"/><rect class="cls-6" x="401.9" y="3.1" width="54.44" height="14.22"/><rect class="cls-6" x="401.9" y="20.99" width="54.44" height="14.07"/>
                        <rect class="cls-6" x="436.15" y="35.06" width="20.19" height="8.22"/><polygon class="cls-1" points="454.2 159.81 454.2 123.91 413.75 123.91 454.2 159.81"/>
                        <rect class="cls-7" x="466.74" y="2.49" width="9.63" height="14.83"/><rect class="cls-7" x="466.74" y="20.99" width="9.63" height="15.6"/><rect class="cls-7" x="420.86" y="108.81" width="33.34" height="10.05"/>
                        <polygon class="cls-8" points="331.93 71.61 312.74 65.34 318.32 57.85 337.21 63.81 331.93 71.61"/><polygon class="cls-8" points="334.99 72.78 353.65 79.03 359.61 70.92 340.42 64.73 334.99 72.78"/>
                        <polygon class="cls-9" points="448.73 168.99 454.81 164.28 410.54 125.75 404.57 129.88 448.73 168.99"/><rect class="cls-10" x="592.9" y="125.75" width="24.77" height="16.17"/><rect class="cls-1" x="309.99" y="25.27" width="31.5" height="19.42"/>
                        <rect class="cls-1" x="345.62" y="23.13" width="50.54" height="20.15"/><polygon class="cls-2" points="343.94 63.51 360.64 69.47 369.02 69.47 369.02 45.55 343.94 45.55 343.94 63.51"/>
                        <polygon class="cls-3" points="354.64 82.39 354.64 77.68 359.61 70.92 369.02 70.92 369.02 96.54 360.64 96.69 360.64 82.39 354.64 82.39"/>
                        <polygon class="cls-1" points="309.26 82.39 309.26 70.01 321.65 70.01 347.3 79.03 347.3 82.39 309.26 82.39"/>
                        <rect class="cls-11" x="311.33" y="6.81" width="36.7" height="10.51"/><rect class="cls-6" x="374.75" y="3.1" width="9.06" height="15.75"/>
                        <polygon class="cls-6" points="390.35 18.85 390.35 8.41 398.15 8.41 398.15 3.1 383.81 3.1 383.81 18.85 390.35 18.85"/>
                        <polygon class="cls-6" points="364.96 123.91 392.07 123.91 364.96 138.13 364.96 123.91"/>
                        <polygon class="cls-1" points="334.04 146.16 364.96 145.59 367.64 151.09 308.46 170.94 308.46 156.6 328.07 162.68 334.04 154.54 334.04 146.16"/>
                        <polygon class="cls-6" points="306.62 154.19 327.27 160.84 333.69 154.42 311.67 146.28 306.62 154.19"/>
                        <path class="cls-5" d="M336.38,117.68l30.74,10.09s2.87,1,2.87-1.26V114a3.2,3.2,0,0,0-2.76-2l-29.32.46S335.35,113,336.38,117.68Z" transform="translate(-27.92 -66.02)"/>
                        <polygon class="cls-1" points="2.45 238.15 173.35 238.15 209.36 220.26 209.36 272.56 190.78 309.49 2.45 309.49 2.45 238.15"/>
                        <rect class="cls-8" x="0.5" y="224.16" width="9.98" height="7.68"/>
                        <polygon class="cls-1" points="221.18 239.75 233.56 239.75 307.54 207.99 296.3 192.39 221.18 213.6 221.18 239.75"/>
                        <polygon class="cls-1" points="221.18 206.61 221.18 154.19 298.37 154.19 298.37 174.03 285.4 188.72 221.18 206.61"/>
                        <rect class="cls-12" x="224.81" y="121.16" width="70.5" height="16.97"/>
                        <rect class="cls-12" x="243.31" y="138.13" width="36.4" height="14.53"/>
                        <rect class="cls-8" x="224.81" y="111.68" width="14.07" height="7.95"/>
                        <rect class="cls-8" x="224.81" y="139.97" width="7.95" height="12.69"/>
                        <rect class="cls-8" x="232.76" y="147.39" width="8.87" height="5.28"/>
                        <rect class="cls-8" x="257.32" y="85.87" width="37.98" height="14.64"/>
                        <rect class="cls-8" x="251.1" y="85.87" width="3.71" height="4.09"/>
                        <rect class="cls-8" x="235.83" y="26.96" width="16.35" height="39.91"/>
                        <rect class="cls-11" x="234.67" y="68.51" width="25.39" height="13.19"/>
                        <rect class="cls-11" x="223.13" y="28.39" width="10.54" height="38.48"/>
                        <rect class="cls-12" x="262.62" y="68.51" width="32.69" height="13.19"/>
                        <ellipse class="cls-5" cx="168.64" cy="71.86" rx="18.47" ry="14.01"/>
                        <rect class="cls-8" x="222.52" y="6.12" width="4.88" height="11.92"/>
                        <rect class="cls-13" x="155.73" y="17.17" width="19.53" height="26.11"/>
                        <rect class="cls-3" x="94.51" y="110.15" width="21.14" height="46.03"/>
                        <rect class="cls-6" x="94.51" y="95.72" width="39.84" height="14.43"/>
                    </svg> --}}
                </div>

                <div class="col-md-12 col-lg-12 col-12">

                    <form action="{{ route('request-store')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div class="form-group">
                            <label>Areal :</label>
                            <input required type="text" name="areal" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <label>Blok yang terpilih :</label>
                            <input required type="text" name="blok" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <label>Panjang :</label>
                            <input required type="text" name="panjang" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <label>Lebar :</label>
                            <input required type="text" name="lebar" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <label>Judul Kegiatan:</label>
                            <input required type="text" name="judul" class="form-control">
                        </div>
                        
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="datepicker_awal">Awal Pelaksanaan</label>
                                
                                <div name="datepicker_awal" id="datepicker_awal" class="input-group date" data-date-format="yyyy-mm-dd">
                                    <input required name="awal_date" class="form-control" type="text" readonly="">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                                
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="datepicker_akhir">Akhir Pelaksanaan</label>
                                <div name="datepicker_akhir" id="datepicker_akhir" class="input-group date" data-date-format="yyyy-mm-dd">
                                    <input required name="akhir_date" class="form-control" type="text" readonly="">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="form-group">
                            <label>Awal Pelaksanaan :</label>
                            <input type="text" name="awal_pelaksanaan" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Akhir Pelaksanaan :</label>
                            <input type="text" name="akhir_pelaksanaan" class="form-control">
                        </div> --}}

                         <div class="form-group">
                            <label>Peralatan :</label>

                            <div class="input-group mb-3">
                                <div class="form-check mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_ember">
                                        <label class="form-check-label" for="check_ember">
                                            Ember
                                        </label>
                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_ember" class="form-control">
                                </div>

                                <div class="form-check mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_polibag">
                                        <label class="form-check-label" for="check_polibag">
                                            Polibag
                                        </label>
                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_polibag" class="form-control">
                                </div>

                                <div class="form-check mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_pot">
                                        <label class="form-check-label" for="check_pot">
                                            Pot/drum
                                        </label>
                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_pot" class="form-control">
                                </div>

                                <div class="form-check mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_mulsa">
                                        <label class="form-check-label" for="check_mulsa">
                                            Mulsa
                                        </label>
                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_mulsa" class="form-control">
                                </div>

                            </div>
                        </div>


                        <div class="form-group">
                            <label>Benih dan Pupuk :</label>

                            <div class="input-group mb-3">
                                <div class="form-check mb-3 mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_benih">
                                        <label class="form-check-label" for="check_benih">
                                            Benih
                                        </label>
                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_benih" class="form-control">
                                </div>

                                <div class="form-check mb-3 mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_petroganik">
                                        <label class="form-check-label" for="check_petroganik">
                                            Petroganik
                                        </label>
                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_petroganik" class="form-control">
                                </div>

                                <div class="form-check mb-3 mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_phonska">
                                        <label class="form-check-label" for="check_phonska">
                                            Phonska
                                        </label>
                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_phonska" class="form-control">
                                </div>

                                <div class="form-check mb-3 mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_urea">
                                        <label class="form-check-label" for="check_urea">
                                            Urea
                                        </label>
                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_urea" class="form-control">
                                </div>

                                <div class="form-check mb-3 mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_za">
                                        <label class="form-check-label" for="check_za">
                                            ZA
                                        </label>
                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_za" class="form-control">
                                </div>

                                <div class="form-check mb-3 mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_zk">
                                        <label class="form-check-label" for="check_zk">
                                            ZK
                                        </label>
                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_zk" class="form-control">
                                </div>

                                <div class="form-check mb-3 mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_kci">
                                        <label class="form-check-label" for="check_kci">
                                            KCI
                                        </label>
                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_kci" class="form-control">
                                </div>

                                <div class="form-check mb-3 mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_lain">
                                        <label class="form-check-label" for="check_lain">
                                            Lainnya
                                        </label>
                                        <input disabled type="text" placeholder="Keterangan" name="benih_lain" class="form-control mb-3">
                                        <input disabled type="number" placeholder="Jumlah" name="jumlah_lain" class="form-control mb-3">
                                </div>

                            </div>
                        </div>


                        <div class="form-group">
                            <label>Sarana Lain :</label>

                            <div class="input-group mb-3">
                                <div class="form-check mb-3 mr-4">
                                    <input class="form-check-input" type="checkbox" value="false" name="pestisida" id="check_pestisida">
                                        <label class="form-check-label" for="check_pestisida">
                                            Pestisida sesuai kebutuhan
                                        </label>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="form-check mb-3 mr-4">
                                    <input class="form-check-input" type="checkbox" value="" name="herbisida" id="check_herbisida">
                                        <label class="form-check-label" for="check_herbisida">
                                            Herbisida sesuai kebutuhan
                                        </label>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="form-check mb-3 mr-4">
                                    <input class="form-check-input" type="checkbox" value="" name="fungisida" id="check_fungisida">
                                        <label class="form-check-label" for="check_fungisida">
                                            Fungisida sesuai kebutuhan
                                        </label>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="form-check mb-3 mr-4">
                                    <input class="form-check-input" type="checkbox" value="" name="plastik_barrier" id="check_plastik">
                                        <label class="form-check-label" for="check_plastik">
                                            Plastik Barier
                                        </label>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="form-check mb-3 mr-4">
                                    <input class="form-check-input" type="checkbox" value="" name="jaring_burung" id="check_jaring">
                                        <label class="form-check-label" for="check_jaring">
                                            Jaring Burung
                                        </label>
                                </div>
                            </div>

                            <div class="form-check mb-3 mr-4">
                                        <input class="form-check-input" type="checkbox" value="" id="check_sarana_lain">
                                        <label class="form-check-label" for="check_sarana_lain">
                                            Lainnya
                                        </label>
                                        <input type="text" placeholder="Keterangan" name="sarana_lain" class="form-control mb-3">
                                </div>
                        </div>


                      <button
                        type="submit"
                        class="btn btn-success nav-link px-4 text-white btn-block mt-3 mb-3"
                        >Submit</
                      >
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Status Terpakai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <p>Peneliti : Peneliti1</p>
                <p>Judul : Judul</p>
                <p>Tanggal : 1 Januari 2021 - 30 Januari 2021</p>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" disabled>Book</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

    <script>
        $(document).ready(function() {
            var selected_panjang = parseInt(0);
            var selected_lebar = parseInt(0);
            

            $("rect").click(function() {
                if($(this).attr('pilih') == 'no'){
                    $(this).attr('pilih','yes');
                    $(this).css('fill', '#666');

                    $("input[name=blok]").val($(this).attr('blok'));
                    $("input[name=areal]").val($(this).attr('areal'));

                    selected_panjang = parseInt(selected_panjang) + parseInt($(this).attr('panjang'));
                    selected_lebar = parseInt(selected_lebar) + parseInt($(this).attr('lebar'));
                    
                    $("input[name=panjang]").val(selected_panjang);
                    $("input[name=lebar]").val(selected_lebar);
                    
                } else {
                    $(this).attr("pilih","no");
                    $(this).attr('style','');

                    selected_panjang = parseInt(selected_panjang) - parseInt($(this).attr('panjang'));
                    selected_lebar = parseInt(selected_lebar) - parseInt($(this).attr('lebar'));

                    $("input[name=panjang]").val(selected_panjang);
                    $("input[name=lebar]").val(selected_lebar);
                }
                
                
                
            });

            $(function () {
                $("#datepicker_awal").datepicker({ 
                        format: 'yyyy-mm-dd',
                        autoclose: true, 
                        todayHighlight: true,
                }).datepicker('update', new Date());

                $("#datepicker_akhir").datepicker({ 
                        format: 'yyyy-mm-dd',
                        autoclose: true,
                }).datepicker('update', new Date());
                });


            $("input[id=check_ember]").click(function() {
               if ($("input[id=check_ember]").is(':checked') ){
                    $("input[name=jumlah_ember]").removeAttr('disabled');
                } else {
                    $("input[name=jumlah_ember]").attr('disabled','disabled');
                    $("input[name=jumlah_ember]").val('');
                }
            });


            $("input[id=check_polibag]").click(function() {
               if ($("input[id=check_polibag]").is(':checked') ){
                    $("input[name=jumlah_polibag]").removeAttr('disabled');
                } else {
                    $("input[name=jumlah_polibag]").attr('disabled','disabled');
                    $("input[name=jumlah_polibag]").val('');
                }
            });
            
            $("input[id=check_pot]").click(function() {
               if ($("input[id=check_pot]").is(':checked') ){
                    $("input[name=jumlah_pot]").removeAttr('disabled');
                } else {
                    $("input[name=jumlah_pot]").attr('disabled','disabled');
                    $("input[name=jumlah_pot]").val('');
                }
            });

            $("input[id=check_mulsa]").click(function() {
               if ($("input[id=check_mulsa]").is(':checked') ){
                    $("input[name=jumlah_mulsa]").removeAttr('disabled');
                } else {
                    $("input[name=jumlah_mulsa]").attr('disabled','disabled');
                    $("input[name=jumlah_mulsa]").val('');
                }
            });


            $("input[id=check_benih]").click(function() {
               if ($("input[id=check_benih]").is(':checked') ){
                    $("input[name=jumlah_benih]").removeAttr('disabled');
                } else {
                    $("input[name=jumlah_benih]").attr('disabled','disabled');
                    $("input[name=jumlah_benih]").val('');
                }
            });

            $("input[id=check_petroganik]").click(function() {
               if ($("input[id=check_petroganik]").is(':checked') ){
                    $("input[name=jumlah_petroganik]").removeAttr('disabled');
                } else {
                    $("input[name=jumlah_petroganik]").attr('disabled','disabled');
                    $("input[name=jumlah_petroganik]").val('');
                }
            });

            $("input[id=check_phonska]").click(function() {
               if ($("input[id=check_phonska]").is(':checked') ){
                    $("input[name=jumlah_phonska]").removeAttr('disabled');
                } else {
                    $("input[name=jumlah_phonska]").attr('disabled','disabled');
                    $("input[name=jumlah_phonska]").val('');
                }
            });

            $("input[id=check_urea]").click(function() {
               if ($("input[id=check_urea]").is(':checked') ){
                    $("input[name=jumlah_urea]").removeAttr('disabled');
                } else {
                    $("input[name=jumlah_urea]").attr('disabled','disabled');
                    $("input[name=jumlah_urea]").val('');
                }
            });

            $("input[id=check_za]").click(function() {
               if ($("input[id=check_za]").is(':checked') ){
                    $("input[name=jumlah_za]").removeAttr('disabled');
                } else {
                    $("input[name=jumlah_za]").attr('disabled','disabled');
                    $("input[name=jumlah_za]").val('');
                }
            });

            $("input[id=check_zk]").click(function() {
               if ($("input[id=check_zk]").is(':checked') ){
                    $("input[name=jumlah_zk]").removeAttr('disabled');
                } else {
                    $("input[name=jumlah_zk]").attr('disabled','disabled');
                    $("input[name=jumlah_zk]").val('');
                }
            });

            $("input[id=check_kci]").click(function() {
               if ($("input[id=check_kci]").is(':checked') ){
                    $("input[name=jumlah_kci]").removeAttr('disabled');
                } else {
                    $("input[name=jumlah_kci]").attr('disabled','disabled');
                    $("input[name=jumlah_kci]").val('');
                }
            });

            $("input[id=check_lain]").click(function() {
               if ($("input[id=check_lain]").is(':checked') ){
                    $("input[name=benih_lain]").removeAttr('disabled');
                    $("input[name=jumlah_lain]").removeAttr('disabled');
                } else {
                    $("input[name=benih_lain]").attr('disabled','disabled');
                    $("input[name=benih_lain]").val('');

                    $("input[name=jumlah_lain]").attr('disabled','disabled');
                    $("input[name=jumlah_lain]").val('');
                }
            });
        });

        
        
        

    </script>
@endpush

