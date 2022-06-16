<style>
    .card-title {
        font-size: 14px;
    }

    .card-subtitle {
        color: #8C8CA1 !important;
        font-weight: 500;
        font-size: 10px;
        line-height: 160%;
    }

    .label {
        font-weight: 600;
        font-size: 10px;
        color: #4A4A68;
    }

    .l_val {
        font-style: normal;
        font-weight: 500;
        font-size: 12px;
        color: #0E0E2C;
    }

    .card-gp {
        border: #ECF1F4 solid 1px;
        border-radius: 8px;
    }

    .card-gp-title {
        color: #002985;
        font-weight: 500;
        font-size: 14px;
    }

    .payment-title {
        font-weight: 500;
        font-size: 12px;
        line-height: 16px;
        color: #2B313B;
    }

    .payment-total {
        font-style: normal;
        font-weight: 700;
        font-size: 14px;
        color: #2B313B;
    }

    .payment-total-amount {
        font-style: normal;
        font-weight: 700;
        font-size: 14px;
        color: #044795;
    }

    .payment-grey {
        font-weight: 400;
        font-size: 12px;
        color: #576175;
    }

    .a-btn {
        font-size: 9px;
        padding-left: 40px;
        padding-right: 40px;

        padding-top: 10px;
        padding-bottom: 10px;

        border-radius: 21px;
        margin-bottom: 2em;
        background: #ECF1F4;
        color: #002985;
    }

    .a-btn.active {
        background: #002985;
        color: white;
    }

    .caption {
        width: 171px;
        height: 16px;

        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 12px;
        line-height: 16px;
        letter-spacing: 0.02em;

        color: #8C8CA2;


        /* Inside auto layout */
        flex: none;
        order: 0;
        flex-grow: 0;

    }
</style>

<div class="page-content" style="background-color: #F8F8F9; ">
    <div class="navbar">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" style="color:#497DF5;">My order</a></li>
            <li class=" breadcrumb-item" aria-current="page">Order Issue Detail</li>
        </ol>
    </div>
    <div class="container-fluid">
        <div class="d-flex flex-wrap">
            <span style="cursor:pointer" onclick="history.back()">
                <svg width=" 24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 12H19" stroke="#4A4A68" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M5 12L9 16" stroke="#4A4A68" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M5 12L9 8" stroke="#4A4A68" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </span>
            <p style="font-size: 12px;margin-left:10px; font-weight: 700;">IS/20210912/004</p>
        </div>
        <div class="d-flex flex-wrap" style="margin-left:35px; line-height:0%">
            <p class="date description" style="margin-right: 10px;">03-09-2021</p>
            <p class="date description">09:00</p>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row justify-content-between">
                            <div class="col-8">
                                <h4 class="card-title">General Info</h4>
                                <p class="description">Requirement data that can be used on all services.</p>
                            </div>
                            <div class="col-4">
                                <p style="font-weight: 500;font-size: 10px;text-align:end;color: #8C8CA2;line-height:0%;margin-top: 8px; letter-spacing: 0.01em;">Status Issue</p>
                                <p style="font-weight: 700;font-size: 14px;text-align:end;letter-spacing: 0.01em;line-height:10%;color: #F44336;">Not Matching</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="label">Type of Order</label>
                                <p class="l_val">Export</p>
                            </div>
                            <div class="col-md-8">
                                <label class="label">NPWP</label>
                                <p class="l_val">08.178.554.2-123.321 - PT. TEGUH ABADI JAYA</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="label">DO Number</label>
                                <p class="l_val">DO_11233RBG_22</p>
                            </div>
                            <div class="col-md-4">
                                <label class="label">DO Date</label>
                                <p class="l_val">22/04/2022</p>
                            </div>
                            <div class="col-md-4">
                                <label class="label">Internal Ref. Number</label>
                                <p class="l_val">MRS123456</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-10">
                                <p style="font-family:'Inter';margin-top:10px;height: 16px; font-style:normal;font-weight: 400;font-size: 12px;letter-spacing: 0.02em;color: #4A4A68;"> Your order <b>doesn’t match </b>with port system! if you want to continue, please order again</p>
                            </div>
                            <div class="col-md-2">
                                <a href="#">
                                    <svg style="text-align:end;" width="105" height="40" viewBox="0 0 105 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="0.5" width="104" height="39" rx="7.5" fill="#F8F8F9" />
                                        <path d="M16.9499 24V15.2727H20.3931C21.0522 15.2727 21.6147 15.3906 22.0806 15.6264C22.5494 15.8594 22.9059 16.1903 23.1502 16.6193C23.3974 17.0455 23.521 17.5469 23.521 18.1236C23.521 18.7031 23.396 19.2017 23.146 19.6193C22.896 20.0341 22.5337 20.3523 22.0593 20.5739C21.5877 20.7955 21.0167 20.9062 20.3462 20.9062H18.0408V19.4233H20.0479C20.4002 19.4233 20.6928 19.375 20.9258 19.2784C21.1587 19.1818 21.332 19.0369 21.4457 18.8438C21.5621 18.6506 21.6204 18.4105 21.6204 18.1236C21.6204 17.8338 21.5621 17.5895 21.4457 17.3906C21.332 17.1918 21.1573 17.0412 20.9215 16.9389C20.6886 16.8338 20.3945 16.7812 20.0394 16.7812H18.7951V24H16.9499ZM21.663 20.0284L23.832 24H21.7951L19.6729 20.0284H21.663ZM27.6683 24.1278C26.995 24.1278 26.4155 23.9915 25.9297 23.7188C25.4467 23.4432 25.0746 23.054 24.8132 22.5511C24.5518 22.0455 24.4212 21.4474 24.4212 20.7571C24.4212 20.0838 24.5518 19.4929 24.8132 18.9844C25.0746 18.4759 25.4425 18.0795 25.9169 17.7955C26.3942 17.5114 26.9538 17.3693 27.5959 17.3693C28.0277 17.3693 28.4297 17.4389 28.8018 17.5781C29.1768 17.7145 29.5036 17.9205 29.782 18.196C30.0632 18.4716 30.282 18.8182 30.4382 19.2358C30.5945 19.6506 30.6726 20.1364 30.6726 20.6932V21.1918H25.1456V20.0668H28.9638C28.9638 19.8054 28.907 19.5739 28.7933 19.3722C28.6797 19.1705 28.522 19.0128 28.3203 18.8991C28.1214 18.7827 27.8899 18.7244 27.6257 18.7244C27.3501 18.7244 27.1058 18.7884 26.8928 18.9162C26.6825 19.0412 26.5178 19.2102 26.3984 19.4233C26.2791 19.6335 26.218 19.8679 26.2152 20.1264V21.196C26.2152 21.5199 26.2749 21.7997 26.3942 22.0355C26.5163 22.2713 26.6882 22.4531 26.9098 22.581C27.1314 22.7088 27.3942 22.7727 27.6982 22.7727C27.8999 22.7727 28.0845 22.7443 28.2521 22.6875C28.4197 22.6307 28.5632 22.5455 28.6825 22.4318C28.8018 22.3182 28.8928 22.179 28.9553 22.0142L30.6342 22.125C30.549 22.5284 30.3743 22.8807 30.1101 23.1818C29.8487 23.4801 29.5107 23.7131 29.0959 23.8807C28.6839 24.0455 28.2081 24.1278 27.6683 24.1278ZM34.8146 24.1278C34.1527 24.1278 33.5803 23.9872 33.0973 23.706C32.6172 23.4219 32.2464 23.027 31.9851 22.5213C31.7237 22.0128 31.593 21.4233 31.593 20.7528C31.593 20.0767 31.7237 19.4858 31.9851 18.9801C32.2464 18.4716 32.6172 18.0767 33.0973 17.7955C33.5803 17.5114 34.1527 17.3693 34.8146 17.3693C35.4766 17.3693 36.0476 17.5114 36.5277 17.7955C37.0107 18.0767 37.3828 18.4716 37.6442 18.9801C37.9055 19.4858 38.0362 20.0767 38.0362 20.7528C38.0362 21.4233 37.9055 22.0128 37.6442 22.5213C37.3828 23.027 37.0107 23.4219 36.5277 23.706C36.0476 23.9872 35.4766 24.1278 34.8146 24.1278ZM34.8232 22.7216C35.1243 22.7216 35.3757 22.6364 35.5774 22.4659C35.7791 22.2926 35.9311 22.0568 36.0334 21.7585C36.1385 21.4602 36.1911 21.1207 36.1911 20.7401C36.1911 20.3594 36.1385 20.0199 36.0334 19.7216C35.9311 19.4233 35.7791 19.1875 35.5774 19.0142C35.3757 18.8409 35.1243 18.7543 34.8232 18.7543C34.5192 18.7543 34.2635 18.8409 34.0561 19.0142C33.8516 19.1875 33.6967 19.4233 33.5916 19.7216C33.4893 20.0199 33.4382 20.3594 33.4382 20.7401C33.4382 21.1207 33.4893 21.4602 33.5916 21.7585C33.6967 22.0568 33.8516 22.2926 34.0561 22.4659C34.2635 22.6364 34.5192 22.7216 34.8232 22.7216ZM39.2166 24V17.4545H40.9766V18.5966H41.0447C41.1641 18.1903 41.3643 17.8835 41.6456 17.6761C41.9268 17.4659 42.2507 17.3608 42.6172 17.3608C42.7081 17.3608 42.8061 17.3665 42.9112 17.3778C43.0163 17.3892 43.1087 17.4048 43.1882 17.4247V19.0355C43.103 19.0099 42.9851 18.9872 42.8345 18.9673C42.6839 18.9474 42.5462 18.9375 42.4212 18.9375C42.1541 18.9375 41.9155 18.9957 41.7053 19.1122C41.4979 19.2259 41.3331 19.3849 41.2109 19.5895C41.0916 19.794 41.032 20.0298 41.032 20.2969V24H39.2166ZM46.234 24.1065C45.7369 24.1065 45.2866 23.9787 44.8832 23.723C44.4826 23.4645 44.1644 23.0852 43.9286 22.5852C43.6957 22.0824 43.5792 21.4659 43.5792 20.7358C43.5792 19.9858 43.6999 19.3622 43.9414 18.8651C44.1829 18.3651 44.5039 17.9915 44.9045 17.7443C45.3079 17.4943 45.7496 17.3693 46.2298 17.3693C46.5962 17.3693 46.9016 17.4318 47.146 17.5568C47.3931 17.679 47.592 17.8324 47.7425 18.017C47.896 18.1989 48.0124 18.3778 48.092 18.554H48.1474V15.2727H49.9585V24H48.1687V22.9517H48.092C48.0067 23.1335 47.886 23.3139 47.7298 23.4929C47.5763 23.669 47.3761 23.8153 47.1289 23.9318C46.8846 24.0483 46.5863 24.1065 46.234 24.1065ZM46.8093 22.6619C47.1019 22.6619 47.3491 22.5824 47.5508 22.4233C47.7553 22.2614 47.9116 22.0355 48.0195 21.7457C48.1303 21.456 48.1857 21.1165 48.1857 20.7273C48.1857 20.3381 48.1317 20 48.0238 19.7131C47.9158 19.4261 47.7596 19.2045 47.555 19.0483C47.3505 18.892 47.1019 18.8139 46.8093 18.8139C46.511 18.8139 46.2596 18.8949 46.055 19.0568C45.8505 19.2187 45.6957 19.4432 45.5906 19.7301C45.4854 20.017 45.4329 20.3494 45.4329 20.7273C45.4329 21.108 45.4854 21.4446 45.5906 21.7372C45.6985 22.027 45.8533 22.2543 46.055 22.419C46.2596 22.581 46.511 22.6619 46.8093 22.6619ZM54.4339 24.1278C53.7607 24.1278 53.1811 23.9915 52.6953 23.7188C52.2124 23.4432 51.8402 23.054 51.5788 22.5511C51.3175 22.0455 51.1868 21.4474 51.1868 20.7571C51.1868 20.0838 51.3175 19.4929 51.5788 18.9844C51.8402 18.4759 52.2081 18.0795 52.6825 17.7955C53.1598 17.5114 53.7195 17.3693 54.3615 17.3693C54.7933 17.3693 55.1953 17.4389 55.5675 17.5781C55.9425 17.7145 56.2692 17.9205 56.5476 18.196C56.8288 18.4716 57.0476 18.8182 57.2038 19.2358C57.3601 19.6506 57.4382 20.1364 57.4382 20.6932V21.1918H51.9112V20.0668H55.7294C55.7294 19.8054 55.6726 19.5739 55.5589 19.3722C55.4453 19.1705 55.2876 19.0128 55.0859 18.8991C54.8871 18.7827 54.6555 18.7244 54.3913 18.7244C54.1158 18.7244 53.8714 18.7884 53.6584 18.9162C53.4482 19.0412 53.2834 19.2102 53.1641 19.4233C53.0447 19.6335 52.9837 19.8679 52.9808 20.1264V21.196C52.9808 21.5199 53.0405 21.7997 53.1598 22.0355C53.282 22.2713 53.4538 22.4531 53.6754 22.581C53.897 22.7088 54.1598 22.7727 54.4638 22.7727C54.6655 22.7727 54.8501 22.7443 55.0178 22.6875C55.1854 22.6307 55.3288 22.5455 55.4482 22.4318C55.5675 22.3182 55.6584 22.179 55.7209 22.0142L57.3999 22.125C57.3146 22.5284 57.1399 22.8807 56.8757 23.1818C56.6143 23.4801 56.2763 23.7131 55.8615 23.8807C55.4496 24.0455 54.9737 24.1278 54.4339 24.1278ZM58.6229 24V17.4545H60.3828V18.5966H60.451C60.5703 18.1903 60.7706 17.8835 61.0518 17.6761C61.3331 17.4659 61.657 17.3608 62.0234 17.3608C62.1143 17.3608 62.2124 17.3665 62.3175 17.3778C62.4226 17.3892 62.5149 17.4048 62.5945 17.4247V19.0355C62.5092 19.0099 62.3913 18.9872 62.2408 18.9673C62.0902 18.9474 61.9524 18.9375 61.8274 18.9375C61.5604 18.9375 61.3217 18.9957 61.1115 19.1122C60.9041 19.2259 60.7393 19.3849 60.6172 19.5895C60.4979 19.794 60.4382 20.0298 60.4382 20.2969V24H58.6229Z" fill="#8C8CA2" />
                                        <path d="M82.3334 14V16.6667C82.3334 16.8435 82.4036 17.013 82.5286 17.1381C82.6537 17.2631 82.8232 17.3333 83 17.3333H85.6667" stroke="#8C8CA2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M84.3334 26H77.6667C77.3131 26 76.9739 25.8595 76.7239 25.6095C76.4738 25.3594 76.3334 25.0203 76.3334 24.6667V15.3333C76.3334 14.9797 76.4738 14.6406 76.7239 14.3905C76.9739 14.1405 77.3131 14 77.6667 14H82.3334L85.6667 17.3333V24.6667C85.6667 25.0203 85.5262 25.3594 85.2762 25.6095C85.0261 25.8595 84.687 26 84.3334 26Z" stroke="#8C8CA2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M81 19.332V23.332" stroke="#8C8CA2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M79 21.332L81 19.332L83 21.332" stroke="#8C8CA2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <rect x="0.5" y="0.5" width="104" height="39" rx="7.5" stroke="#BFC9E0" />
                                    </svg>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Service Details</h4>
                        <h6 class="card-subtitle">Specific data that required by each services will shown here.</h6>
                        <style>
                            .a-btn {
                                padding-left: 40px;
                                padding-right: 40px;

                                padding-top: 10px;
                                padding-bottom: 10px;

                                border-radius: 21px;
                            }
                        </style>
                        <div style="margin-top:25px;" class="multipleService">
                            <div class="row">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <!-- <li class="nav-item" role="presentation">
                                        <a class="a-btn active" id="Edepot" data-bs-toggle="pill" data-bs-target="#pills-Edepot" type="button" role="tab" aria-selected="true">E-Depot</a>
                                    </li> -->
                                    <li class="nav-item" role="presentation">
                                        <a class="a-btn" id="pills-Eport1" data-bs-toggle="pill" data-bs-target="#pills-port2" type="button" role="tab" aria-selected="false">E-Port</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content" id="pills-tabContent">
                        <!-- ====content depot===== -->
                        <!-- <div class="card-body tab-pane fade show active" id="pills-Edepot" role="tabpanel" aria-labelledby="Edepot">
                            conten deport
                        </div> -->

                        <!-- ====content eport====== -->
                        <div class="card-body tab-pane fade" id="pills-port2" role="tabpanel" aria-labelledby="pills-Eport1">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="label">Order ID</label>
                                    <p class="l_val">LG/202105/I0159/022</p>
                                </div>
                                <div class="col-md-8">
                                    <label class="label">Terminal</label>
                                    <p class="l_val">NPCT 1</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="label">Request Doc. Type</label>
                                    <p class="l_val">NPE</p>
                                </div>
                                <div class="col-md-4">
                                    <label class="label">Request Doc. Number</label>
                                    <p class="l_val">2345432345</p>
                                </div>
                                <div class="col-md-4">
                                    <label class="label">Request Doc. Date</label>
                                    <p class="l_val">21/04/2022</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="label">Response Doc. Type</label>
                                    <p class="l_val">Export</p>
                                </div>
                                <div class="col-md-4">
                                    <label class="label">Response Doc. Number</label>
                                    <p class="l_val">2345432345</p>
                                </div>
                                <div class="col-md-4">
                                    <label class="label">Response Doc. Number</label>
                                    <p class="l_val">21/04/2022</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title card-gp-title">
                                                <span>
                                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g filter="url(#filter0_d_1338_38064)">
                                                            <path d="M6 6H26V18H6V6Z" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M10 10L10 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M14 10L14 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M18 10L18 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M22 10L22 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        </g>
                                                        <defs>
                                                            <filter id="filter0_d_1338_38064" x="0" y="0" width="32" height="32" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                                <feOffset dy="4" />
                                                                <feGaussianBlur stdDeviation="2" />
                                                                <feComposite in2="hardAlpha" operator="out" />
                                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1338_38064" />
                                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1338_38064" result="shape" />
                                                            </filter>
                                                        </defs>
                                                    </svg>
                                                </span>20’ GP - EGHU3826956
                                                <a data-bs-toggle="modal" data-bs-target="#detailContainer" style="cursor:pointer">
                                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.16663 5L13.1666 10L8.16663 15" stroke="#4A4A68" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>

                                            </h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="label">Yard Opening Time</label>
                                                    <p class="l_val">12-06-2021 | 22:45</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="label">Yard Closing Time</label>
                                                    <p class="l_val">12-06-2021 | 23:20</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title card-gp-title">
                                                <span>
                                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g filter="url(#filter0_d_1338_38064)">
                                                            <path d="M6 6H26V18H6V6Z" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M10 10L10 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M14 10L14 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M18 10L18 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M22 10L22 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        </g>
                                                        <defs>
                                                            <filter id="filter0_d_1338_38064" x="0" y="0" width="32" height="32" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                                <feOffset dy="4" />
                                                                <feGaussianBlur stdDeviation="2" />
                                                                <feComposite in2="hardAlpha" operator="out" />
                                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1338_38064" />
                                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1338_38064" result="shape" />
                                                            </filter>
                                                        </defs>
                                                    </svg>
                                                </span>20’ GP - EGHU3826956
                                                <a data-bs-toggle="modal" data-bs-target="#detailContainer" style="cursor:pointer">
                                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.16663 5L13.1666 10L8.16663 15" stroke="#4A4A68" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>

                                            </h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="label">Yard Opening Time</label>
                                                    <p class="l_val">12-06-2021 | 22:45</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="label">Yard Closing Time</label>
                                                    <p class="l_val">12-06-2021 | 23:20</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title card-gp-title">
                                                <span>
                                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g filter="url(#filter0_d_1338_38064)">
                                                            <path d="M6 6H26V18H6V6Z" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M10 10L10 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M14 10L14 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M18 10L18 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M22 10L22 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        </g>
                                                        <defs>
                                                            <filter id="filter0_d_1338_38064" x="0" y="0" width="32" height="32" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                                <feOffset dy="4" />
                                                                <feGaussianBlur stdDeviation="2" />
                                                                <feComposite in2="hardAlpha" operator="out" />
                                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1338_38064" />
                                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1338_38064" result="shape" />
                                                            </filter>
                                                        </defs>
                                                    </svg>
                                                </span>20’ GP - EGHU3826956
                                                <a data-bs-toggle="modal" data-bs-target="#detailContainer" style="cursor:pointer">
                                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.16663 5L13.1666 10L8.16663 15" stroke="#4A4A68" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>

                                            </h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="label">Yard Opening Time</label>
                                                    <p class="l_val">12-06-2021 | 22:45</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="label">Yard Closing Time</label>
                                                    <p class="l_val">12-06-2021 | 23:20</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title card-gp-title">
                                                <span>
                                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g filter="url(#filter0_d_1338_38064)">
                                                            <path d="M6 6H26V18H6V6Z" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M10 10L10 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M14 10L14 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M18 10L18 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M22 10L22 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        </g>
                                                        <defs>
                                                            <filter id="filter0_d_1338_38064" x="0" y="0" width="32" height="32" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                                <feOffset dy="4" />
                                                                <feGaussianBlur stdDeviation="2" />
                                                                <feComposite in2="hardAlpha" operator="out" />
                                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1338_38064" />
                                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1338_38064" result="shape" />
                                                            </filter>
                                                        </defs>
                                                    </svg>
                                                </span>20’ GP - EGHU3826956
                                                <a data-bs-toggle="modal" data-bs-target="#detailContainer" style="cursor:pointer">
                                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.16663 5L13.1666 10L8.16663 15" stroke="#4A4A68" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>

                                            </h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="label">Yard Opening Time</label>
                                                    <p class="l_val">12-06-2021 | 22:45</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="label">Yard Closing Time</label>
                                                    <p class="l_val">12-06-2021 | 23:20</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- ===============activity log =============== -->
            <div class="col-md-4">
                <div class="card">
                    <h2 class="accordion-header" id="headingOne1">
                        <button class="accordion-button fw-medium bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="card-title">Activity Log</h4>
                                    <p class="description">Keep track and see your order progress</p>
                                </div>
                            </div>
                            <a href="#" style="margin-left:20%;" id="reload" onclick="location.reload()">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.42211 8.62043C3.36827 8.20973 2.99169 7.92043 2.58099 7.97426C2.17029 8.0281 1.88099 8.40468 1.93483 8.81538L3.42211 8.62043ZM5.21137 2.60111C4.84207 2.78871 4.69478 3.24016 4.88238 3.60946C5.06998 3.97875 5.52144 4.12605 5.89073 3.93844L5.21137 2.60111ZM3.42847 2.7179C3.42847 2.30369 3.09268 1.9679 2.67847 1.9679C2.26425 1.9679 1.92847 2.30369 1.92847 2.7179L3.42847 2.7179ZM2.67847 6.05123H1.92847C1.92847 6.46545 2.26425 6.80123 2.67847 6.80123L2.67847 6.05123ZM6.0118 6.80123C6.42601 6.80123 6.7618 6.46545 6.7618 6.05123C6.7618 5.63702 6.42601 5.30123 6.0118 5.30123V6.80123ZM1.93483 8.81538C2.12713 10.2824 2.8475 11.6291 3.96109 12.6033L4.94874 11.4743C4.10973 10.7403 3.56699 9.72573 3.42211 8.62043L1.93483 8.81538ZM3.96109 12.6033C5.07469 13.5775 6.50517 14.1125 7.98475 14.1081L7.98027 12.6081C6.86551 12.6114 5.78776 12.2083 4.94874 11.4743L3.96109 12.6033ZM7.98475 14.1081C9.46434 14.1036 10.8916 13.5601 11.9993 12.5793L11.005 11.4562C10.1704 12.1952 9.09502 12.6047 7.98027 12.6081L7.98475 14.1081ZM11.9993 12.5793C13.1071 11.5984 13.8194 10.2475 14.0029 8.77929L12.5145 8.59324C12.3762 9.69939 11.8396 10.7172 11.005 11.4562L11.9993 12.5793ZM14.0029 8.77929C14.1864 7.31113 13.8286 5.8264 12.9964 4.60305L11.7561 5.44676C12.3832 6.36846 12.6528 7.48709 12.5145 8.59324L14.0029 8.77929ZM12.9964 4.60305C12.1641 3.3797 10.9146 2.50159 9.48163 2.1331L9.10805 3.58583C10.1877 3.86346 11.1291 4.52505 11.7561 5.44676L12.9964 4.60305ZM9.48163 2.1331C8.04866 1.7646 6.53051 1.93099 5.21137 2.60111L5.89073 3.93844C6.8846 3.43356 8.02841 3.3082 9.10805 3.58583L9.48163 2.1331ZM1.92847 2.7179L1.92847 6.05123H3.42847L3.42847 2.7179L1.92847 2.7179ZM2.67847 6.80123L6.0118 6.80123V5.30123L2.67847 5.30123L2.67847 6.80123Z" fill="#BFC9E0" />
                                </svg>
                            </a>
                        </button>
                    </h2>
                    <div id="collapseOne1" class="row accordion-collapse collapse show card-body" aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
                        <div class="card-body">
                            <div class="history-tl-container overflow-auto">
                                <ul class="tl">
                                    <li class="tl-item active" ng-repeat="item in retailer_history">
                                        <div class="timestamp">
                                            <p style="font-size:14px; font-weight:10px; color:#0E0E2C;">11:22</p>
                                        </div>
                                        <div class="timestamp">
                                            <p style="font-size:12px; font-weight:10px; margin-top:20px">31.01.22</p>
                                        </div>
                                        <div class="item-title" style="font: weight 500px;">Port 20’ GP - EGHU3826956</div>
                                        <div class="description" style="font-weight:10px;">
                                            <p class="description">Shared via Whatsapp by Putri Rizki Ayu</p>
                                        </div>
                                    </li>
                                    <li class="tl-item" ng-repeat="item in retailer_history">
                                        <div class="timestamp">
                                            <p style="font-size:14px; font-weight:10px; color:#0E0E2C;">10:50</p>
                                        </div>
                                        <div class="timestamp">
                                            <p style="font-size:12px; font-weight:10px; margin-top:20px">31.01.22</p>
                                        </div>
                                        <div class="item-title" style="font: weight 500px;">Port Created</div>
                                        <div class="description" style="font-weight:10px;">
                                            <p class="description">2 of 4 loading card generated</p>
                                        </div>
                                    </li>
                                    <li class="tl-item" ng-repeat="item in retailer_history">
                                        <div class="timestamp">
                                            <p style="font-size:14px; font-weight:10px; color:#0E0E2C;">14:09</p>
                                        </div>
                                        <div class="timestamp">
                                            <p style="font-size:12px; font-weight:10px; margin-top:20px">31.01.22</p>
                                        </div>
                                        <div class="item-title" style="font: weight 500px;">Port Created</div>
                                        <div class="description" style="font-weight:10px;">
                                            <p class="description">1 of 4 loading card generated</p>
                                        </div>
                                    </li>
                                    <li class="tl-item" ng-repeat="item in retailer_history">
                                        <div class="timestamp">
                                            <p style="font-size:14px; font-weight:10px; color:#0E0E2C;">10:27</p>
                                        </div>
                                        <div class="timestamp">
                                            <p style="font-size:12px; font-weight:10px; margin-top:20px">31.01.22</p>
                                        </div>
                                        <div class="item-title" style="font: weight 500px;">Order Processed</div>
                                        <div class="description" style="font-weight:10px;">
                                            <p class="description">NPCT 1 start processing your order</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ===========chat=============== -->
                <div class="card">
                    <h2 class="accordion-header" id="chat">
                        <button class="accordion-button fw-medium bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#chat1" aria-expanded="true" aria-controls="chat1">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="card-title">Terminal Support</h4>
                                    <span>
                                        <svg width="84" height="20" viewBox="0 0 84 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="84" height="20" rx="4" fill="#F8F8F9" />
                                            <circle cx="12" cy="10" r="8" fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5178 5.67578L14.5332 5.68474C16.2944 6.72478 17.3284 8.89506 16.9108 10.9841C16.5438 12.8224 15.0774 14.3953 13.212 14.8596C11.9587 15.161 10.6378 14.9759 9.51562 14.3415L10.6252 12.4226C10.7736 12.5095 10.9302 12.5817 11.0926 12.6382C11.7459 12.8643 12.4599 12.8394 13.0958 12.5683C13.7317 12.2971 14.244 11.7991 14.5332 11.1711C14.8224 10.5431 14.8677 9.82995 14.6604 9.17037C14.4531 8.51078 14.0079 7.95189 13.4115 7.60236L14.521 5.67962L14.5178 5.67578Z" fill="#FFA800" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5131 5.6751L13.4036 7.59783L13.3754 7.5812C12.9685 7.3498 12.5098 7.22472 12.0417 7.21753C11.5737 7.21034 11.1114 7.32127 10.6975 7.54006C10.2837 7.75886 9.93161 8.07847 9.67392 8.46935C9.41623 8.86022 9.2612 9.30977 9.22315 9.77643C9.13938 10.819 9.70022 11.8815 10.6205 12.42L9.51093 14.3389C9.23075 14.1806 8.96685 13.9951 8.72306 13.785C7.36156 12.6068 6.70799 10.6598 7.1243 8.86879C7.54062 7.07781 9.02043 5.56252 10.8494 5.13013C12.08 4.84574 13.3724 5.03119 14.4735 5.65015L14.5138 5.67318L14.5131 5.6751Z" fill="#002985" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.9454 8.21094L9.84961 10.5641L11.6485 10.4567L12.4556 12.0686L12.9454 8.21094Z" fill="#FFA800" />
                                            <circle cx="31" cy="10" r="3" fill="#79C37C" />
                                            <path d="M46.4205 9.63636C46.4205 10.5568 46.2543 11.3523 45.9219 12.0227C45.5895 12.6932 45.1335 13.2102 44.554 13.5739C43.9744 13.9375 43.3125 14.1193 42.5682 14.1193C41.8239 14.1193 41.1619 13.9375 40.5824 13.5739C40.0028 13.2102 39.5469 12.6932 39.2145 12.0227C38.8821 11.3523 38.7159 10.5568 38.7159 9.63636C38.7159 8.71591 38.8821 7.92045 39.2145 7.25C39.5469 6.57955 40.0028 6.0625 40.5824 5.69886C41.1619 5.33523 41.8239 5.15341 42.5682 5.15341C43.3125 5.15341 43.9744 5.33523 44.554 5.69886C45.1335 6.0625 45.5895 6.57955 45.9219 7.25C46.2543 7.92045 46.4205 8.71591 46.4205 9.63636ZM45.3977 9.63636C45.3977 8.88068 45.2713 8.2429 45.0185 7.72301C44.7685 7.20312 44.429 6.80966 44 6.54261C43.5739 6.27557 43.0966 6.14205 42.5682 6.14205C42.0398 6.14205 41.5611 6.27557 41.1321 6.54261C40.706 6.80966 40.3665 7.20312 40.1136 7.72301C39.8636 8.2429 39.7386 8.88068 39.7386 9.63636C39.7386 10.392 39.8636 11.0298 40.1136 11.5497C40.3665 12.0696 40.706 12.4631 41.1321 12.7301C41.5611 12.9972 42.0398 13.1307 42.5682 13.1307C43.0966 13.1307 43.5739 12.9972 44 12.7301C44.429 12.4631 44.7685 12.0696 45.0185 11.5497C45.2713 11.0298 45.3977 10.392 45.3977 9.63636ZM49.3068 10.0625V14H48.3011V7.45455H49.2727V8.47727H49.3579C49.5113 8.14489 49.7443 7.87784 50.0568 7.67614C50.3693 7.47159 50.7727 7.36932 51.267 7.36932C51.7102 7.36932 52.098 7.46023 52.4303 7.64205C52.7627 7.82102 53.0212 8.09375 53.2059 8.46023C53.3906 8.82386 53.4829 9.28409 53.4829 9.84091V14H52.4772V9.90909C52.4772 9.39489 52.3437 8.99432 52.0766 8.70739C51.8096 8.41761 51.4431 8.27273 50.9772 8.27273C50.6562 8.27273 50.3693 8.34233 50.1164 8.48153C49.8664 8.62074 49.669 8.82386 49.5241 9.09091C49.3792 9.35795 49.3068 9.68182 49.3068 10.0625ZM56.5663 5.27273V14H55.5606V5.27273H56.5663ZM58.6483 14V7.45455H59.6539V14H58.6483ZM59.1596 6.36364C58.9636 6.36364 58.7946 6.29688 58.6525 6.16335C58.5133 6.02983 58.4437 5.86932 58.4437 5.68182C58.4437 5.49432 58.5133 5.33381 58.6525 5.20028C58.7946 5.06676 58.9636 5 59.1596 5C59.3557 5 59.5233 5.06676 59.6625 5.20028C59.8045 5.33381 59.8755 5.49432 59.8755 5.68182C59.8755 5.86932 59.8045 6.02983 59.6625 6.16335C59.5233 6.29688 59.3557 6.36364 59.1596 6.36364ZM62.7416 10.0625V14H61.7359V7.45455H62.7075V8.47727H62.7927C62.9461 8.14489 63.1791 7.87784 63.4916 7.67614C63.8041 7.47159 64.2075 7.36932 64.7018 7.36932C65.145 7.36932 65.5328 7.46023 65.8652 7.64205C66.1976 7.82102 66.4561 8.09375 66.6408 8.46023C66.8254 8.82386 66.9177 9.28409 66.9177 9.84091V14H65.9121V9.90909C65.9121 9.39489 65.7785 8.99432 65.5115 8.70739C65.2444 8.41761 64.878 8.27273 64.4121 8.27273C64.091 8.27273 63.8041 8.34233 63.5513 8.48153C63.3013 8.62074 63.1038 8.82386 62.9589 9.09091C62.814 9.35795 62.7416 9.68182 62.7416 10.0625ZM71.7398 14.1364C71.1091 14.1364 70.5651 13.9972 70.1077 13.7188C69.6531 13.4375 69.3023 13.0455 69.0551 12.5426C68.8108 12.0369 68.6886 11.4489 68.6886 10.7784C68.6886 10.108 68.8108 9.51705 69.0551 9.00568C69.3023 8.49148 69.646 8.09091 70.0864 7.80398C70.5295 7.5142 71.0466 7.36932 71.6375 7.36932C71.9784 7.36932 72.3151 7.42614 72.6474 7.53977C72.9798 7.65341 73.2824 7.83807 73.5551 8.09375C73.8278 8.34659 74.0452 8.68182 74.2071 9.09943C74.369 9.51705 74.45 10.0312 74.45 10.642V11.0682H69.4045V10.1989H73.4273C73.4273 9.82955 73.3534 9.5 73.2057 9.21023C73.0608 8.92045 72.8534 8.69176 72.5835 8.52415C72.3165 8.35653 72.0011 8.27273 71.6375 8.27273C71.2369 8.27273 70.8903 8.37216 70.5977 8.57102C70.308 8.76705 70.0849 9.02273 69.9287 9.33807C69.7724 9.65341 69.6943 9.99148 69.6943 10.3523V10.9318C69.6943 11.4261 69.7795 11.8452 69.95 12.1889C70.1233 12.5298 70.3634 12.7898 70.6702 12.9688C70.977 13.1449 71.3335 13.233 71.7398 13.233C72.004 13.233 72.2426 13.196 72.4557 13.1222C72.6716 13.0455 72.8577 12.9318 73.0139 12.7812C73.1702 12.6278 73.2909 12.4375 73.3761 12.2102L74.3477 12.483C74.2455 12.8125 74.0736 13.1023 73.8321 13.3523C73.5906 13.5994 73.2923 13.7926 72.9372 13.9318C72.5821 14.0682 72.183 14.1364 71.7398 14.1364Z" fill="#8C8CA2" />
                                        </svg>
                                        <svg width="84" height="20" viewBox="0 0 84 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <rect width="84" height="20" rx="4" fill="#F8F8F9" />
                                            <circle cx="12" cy="10" r="8" fill="white" />
                                            <circle cx="12" cy="10" r="8" fill="url(#pattern0)" />
                                            <circle cx="31" cy="10" r="3" fill="#79C37C" />
                                            <path d="M46.4205 9.63636C46.4205 10.5568 46.2543 11.3523 45.9219 12.0227C45.5895 12.6932 45.1335 13.2102 44.554 13.5739C43.9744 13.9375 43.3125 14.1193 42.5682 14.1193C41.8239 14.1193 41.1619 13.9375 40.5824 13.5739C40.0028 13.2102 39.5469 12.6932 39.2145 12.0227C38.8821 11.3523 38.7159 10.5568 38.7159 9.63636C38.7159 8.71591 38.8821 7.92045 39.2145 7.25C39.5469 6.57955 40.0028 6.0625 40.5824 5.69886C41.1619 5.33523 41.8239 5.15341 42.5682 5.15341C43.3125 5.15341 43.9744 5.33523 44.554 5.69886C45.1335 6.0625 45.5895 6.57955 45.9219 7.25C46.2543 7.92045 46.4205 8.71591 46.4205 9.63636ZM45.3977 9.63636C45.3977 8.88068 45.2713 8.2429 45.0185 7.72301C44.7685 7.20312 44.429 6.80966 44 6.54261C43.5739 6.27557 43.0966 6.14205 42.5682 6.14205C42.0398 6.14205 41.5611 6.27557 41.1321 6.54261C40.706 6.80966 40.3665 7.20312 40.1136 7.72301C39.8636 8.2429 39.7386 8.88068 39.7386 9.63636C39.7386 10.392 39.8636 11.0298 40.1136 11.5497C40.3665 12.0696 40.706 12.4631 41.1321 12.7301C41.5611 12.9972 42.0398 13.1307 42.5682 13.1307C43.0966 13.1307 43.5739 12.9972 44 12.7301C44.429 12.4631 44.7685 12.0696 45.0185 11.5497C45.2713 11.0298 45.3977 10.392 45.3977 9.63636ZM49.3068 10.0625V14H48.3011V7.45455H49.2727V8.47727H49.3579C49.5113 8.14489 49.7443 7.87784 50.0568 7.67614C50.3693 7.47159 50.7727 7.36932 51.267 7.36932C51.7102 7.36932 52.098 7.46023 52.4303 7.64205C52.7627 7.82102 53.0212 8.09375 53.2059 8.46023C53.3906 8.82386 53.4829 9.28409 53.4829 9.84091V14H52.4772V9.90909C52.4772 9.39489 52.3437 8.99432 52.0766 8.70739C51.8096 8.41761 51.4431 8.27273 50.9772 8.27273C50.6562 8.27273 50.3693 8.34233 50.1164 8.48153C49.8664 8.62074 49.669 8.82386 49.5241 9.09091C49.3792 9.35795 49.3068 9.68182 49.3068 10.0625ZM56.5663 5.27273V14H55.5606V5.27273H56.5663ZM58.6483 14V7.45455H59.6539V14H58.6483ZM59.1596 6.36364C58.9636 6.36364 58.7946 6.29688 58.6525 6.16335C58.5133 6.02983 58.4437 5.86932 58.4437 5.68182C58.4437 5.49432 58.5133 5.33381 58.6525 5.20028C58.7946 5.06676 58.9636 5 59.1596 5C59.3557 5 59.5233 5.06676 59.6625 5.20028C59.8045 5.33381 59.8755 5.49432 59.8755 5.68182C59.8755 5.86932 59.8045 6.02983 59.6625 6.16335C59.5233 6.29688 59.3557 6.36364 59.1596 6.36364ZM62.7416 10.0625V14H61.7359V7.45455H62.7075V8.47727H62.7927C62.9461 8.14489 63.1791 7.87784 63.4916 7.67614C63.8041 7.47159 64.2075 7.36932 64.7018 7.36932C65.145 7.36932 65.5328 7.46023 65.8652 7.64205C66.1976 7.82102 66.4561 8.09375 66.6408 8.46023C66.8254 8.82386 66.9177 9.28409 66.9177 9.84091V14H65.9121V9.90909C65.9121 9.39489 65.7785 8.99432 65.5115 8.70739C65.2444 8.41761 64.878 8.27273 64.4121 8.27273C64.091 8.27273 63.8041 8.34233 63.5513 8.48153C63.3013 8.62074 63.1038 8.82386 62.9589 9.09091C62.814 9.35795 62.7416 9.68182 62.7416 10.0625ZM71.7398 14.1364C71.1091 14.1364 70.5651 13.9972 70.1077 13.7188C69.6531 13.4375 69.3023 13.0455 69.0551 12.5426C68.8108 12.0369 68.6886 11.4489 68.6886 10.7784C68.6886 10.108 68.8108 9.51705 69.0551 9.00568C69.3023 8.49148 69.646 8.09091 70.0864 7.80398C70.5295 7.5142 71.0466 7.36932 71.6375 7.36932C71.9784 7.36932 72.3151 7.42614 72.6474 7.53977C72.9798 7.65341 73.2824 7.83807 73.5551 8.09375C73.8278 8.34659 74.0452 8.68182 74.2071 9.09943C74.369 9.51705 74.45 10.0312 74.45 10.642V11.0682H69.4045V10.1989H73.4273C73.4273 9.82955 73.3534 9.5 73.2057 9.21023C73.0608 8.92045 72.8534 8.69176 72.5835 8.52415C72.3165 8.35653 72.0011 8.27273 71.6375 8.27273C71.2369 8.27273 70.8903 8.37216 70.5977 8.57102C70.308 8.76705 70.0849 9.02273 69.9287 9.33807C69.7724 9.65341 69.6943 9.99148 69.6943 10.3523V10.9318C69.6943 11.4261 69.7795 11.8452 69.95 12.1889C70.1233 12.5298 70.3634 12.7898 70.6702 12.9688C70.977 13.1449 71.3335 13.233 71.7398 13.233C72.004 13.233 72.2426 13.196 72.4557 13.1222C72.6716 13.0455 72.8577 12.9318 73.0139 12.7812C73.1702 12.6278 73.2909 12.4375 73.3761 12.2102L74.3477 12.483C74.2455 12.8125 74.0736 13.1023 73.8321 13.3523C73.5906 13.5994 73.2923 13.7926 72.9372 13.9318C72.5821 14.0682 72.183 14.1364 71.7398 14.1364Z" fill="#8C8CA2" />
                                            <defs>
                                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                    <use xlink:href="#image0_1092_91368" transform="translate(0 0.161644) scale(0.00273973)" />
                                                </pattern>
                                                <image id="image0_1092_91368" width="365" height="247" xlink:href="data:image/png;base64,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" />
                                            </defs>
                                        </svg>

                                    </span>
                                </div>
                            </div>
                            <a href="#" style="margin-left:33%;" id="reload" onclick="location.reload()">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.42211 8.62043C3.36827 8.20973 2.99169 7.92043 2.58099 7.97426C2.17029 8.0281 1.88099 8.40468 1.93483 8.81538L3.42211 8.62043ZM5.21137 2.60111C4.84207 2.78871 4.69478 3.24016 4.88238 3.60946C5.06998 3.97875 5.52144 4.12605 5.89073 3.93844L5.21137 2.60111ZM3.42847 2.7179C3.42847 2.30369 3.09268 1.9679 2.67847 1.9679C2.26425 1.9679 1.92847 2.30369 1.92847 2.7179L3.42847 2.7179ZM2.67847 6.05123H1.92847C1.92847 6.46545 2.26425 6.80123 2.67847 6.80123L2.67847 6.05123ZM6.0118 6.80123C6.42601 6.80123 6.7618 6.46545 6.7618 6.05123C6.7618 5.63702 6.42601 5.30123 6.0118 5.30123V6.80123ZM1.93483 8.81538C2.12713 10.2824 2.8475 11.6291 3.96109 12.6033L4.94874 11.4743C4.10973 10.7403 3.56699 9.72573 3.42211 8.62043L1.93483 8.81538ZM3.96109 12.6033C5.07469 13.5775 6.50517 14.1125 7.98475 14.1081L7.98027 12.6081C6.86551 12.6114 5.78776 12.2083 4.94874 11.4743L3.96109 12.6033ZM7.98475 14.1081C9.46434 14.1036 10.8916 13.5601 11.9993 12.5793L11.005 11.4562C10.1704 12.1952 9.09502 12.6047 7.98027 12.6081L7.98475 14.1081ZM11.9993 12.5793C13.1071 11.5984 13.8194 10.2475 14.0029 8.77929L12.5145 8.59324C12.3762 9.69939 11.8396 10.7172 11.005 11.4562L11.9993 12.5793ZM14.0029 8.77929C14.1864 7.31113 13.8286 5.8264 12.9964 4.60305L11.7561 5.44676C12.3832 6.36846 12.6528 7.48709 12.5145 8.59324L14.0029 8.77929ZM12.9964 4.60305C12.1641 3.3797 10.9146 2.50159 9.48163 2.1331L9.10805 3.58583C10.1877 3.86346 11.1291 4.52505 11.7561 5.44676L12.9964 4.60305ZM9.48163 2.1331C8.04866 1.7646 6.53051 1.93099 5.21137 2.60111L5.89073 3.93844C6.8846 3.43356 8.02841 3.3082 9.10805 3.58583L9.48163 2.1331ZM1.92847 2.7179L1.92847 6.05123H3.42847L3.42847 2.7179L1.92847 2.7179ZM2.67847 6.80123L6.0118 6.80123V5.30123L2.67847 5.30123L2.67847 6.80123Z" fill="#BFC9E0" />
                                </svg>
                            </a>
                        </button>
                    </h2>
                    <div id="chat1" class="row accordion-collapse collapse show card-body" aria-labelledby="chat">
                        <div class="card-body">
                            <div class="chat_box">
                                <div class="body">
                                    <div class="incoming">
                                        <div class="bubble">
                                            <p>Hey, Father's Day is coming up..</p>
                                        </div>
                                        <div class="bubble">
                                            <p>What are you getting.. Oh, oops sorry dude.</p>
                                        </div>
                                    </div>
                                    <div class="outgoing">
                                        <div class="bubble lower">
                                            <p>Nah, it's cool.</p>
                                        </div>
                                        <div class="bubble">
                                            <p>Well you should get your Dad a cologne. Here smell it. Oh wait! ...</p>
                                        </div>
                                    </div>
                                    <div class="typing">
                                        <div class="bubble">
                                            <div class="ellipsis dot_1"></div>
                                            <div class="ellipsis dot_2"></div>
                                            <div class="ellipsis dot_3"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="foot">
                                    <input type="text" class="msg" placeholder="Type a message..." />
                                    <button type="submit"><i class="fas fa-paper-plane"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ===============end================= -->

                <!-- ================payment detil =============== -->

                <div class="card">
                    <h2 class="accordion-header" id="headingOne2">
                        <button class="accordion-button fw-medium bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="card-title">Payment Details</h4>
                                    <p class="description">This is your payment summary from your order.</p>
                                </div>
                            </div>
                            <span style="margin-left:7%;" id="paid" class="badge badge-soft-info">Paid</span>
                        </button>
                    </h2>
                    <div id="collapseOne2" class="row accordion-collapse collapse show card-body" aria-labelledby="headingOne2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="payment-title">Depo Reimbursement</p>
                                    <p class="payment-grey">Seacon</p>
                                </div>
                                <div class="col-md-4">
                                    <label class="payment-title">Rp. 200.000</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="payment-title">Port Reimbursement</p>
                                    <p class="payment-grey">NPCT1</p>
                                </div>
                                <div class="col-md-4">
                                    <label class="payment-title">Rp. 200.000</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="payment-title">Platform Fee</p>
                                    <p class="payment-grey">8x Containers</p>
                                </div>
                                <div class="col-md-4">
                                    <label class="payment-title">Rp. 100.000</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="payment-title">Sub-Total</p>

                                </div>
                                <div class="col-md-4">
                                    <label class="payment-title">Rp 300.000</label>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="payment-title">PPh 23</p>

                                </div>
                                <div class="col-md-4">
                                    <label class="payment-title">Rp 6.000</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="payment-title">PPn 10%</p>

                                </div>
                                <div class="col-md-4">
                                    <label class="payment-title">Rp 30.000</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="payment-total">Total Amount</p>

                                </div>
                                <div class="col-md-4">
                                    <label class="payment-total-amount">Rp 336.000</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========document detail==== -->
                <div class="card">
                    <div class="card-header accordion-button" id="headingOne3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="card-title">Document Detail</h4>
                                <p class="description">All Documents generated by each service will be shown here.</p>
                            </div>
                        </div>
                    </div>
                    <div id="collapseOne3" class="row accordion-collapse collapse show card-body" aria-labelledby="headingOne3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 multipleDetail">
                                    <div class="row">
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="a-btn active" id="EloadingCard" data-bs-toggle="pill" data-bs-target="#pills-EloadingCard" type="button" role="tab" aria-controls="pills-EloadingCard" aria-selected="true">E-Loading Card</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="a-btn" id="pills-Eport" data-bs-toggle="pill" data-bs-target="#pills-port" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">E-Port</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-EloadingCard" role="tabpanel" aria-labelledby="EloadingCard">
                                    <div class="row mt-4">
                                        <input class="form-control" type="search" value="Search" id="example-search-input">
                                        <div class="row" style="margin-top:40px;">
                                            <div class="col-md-12 col-sm-12">

                                                <input type="checkbox" id="checkall" class="" style="width: 20px; height: 20px;">
                                                <label class="form-title" style="vertical-align:middle; text-align: center; margin-left:1em; ">Select All</label>
                                                <span class="badge rounded-pill badge-soft-primary" style="margin-left: 1em;cursor:pointer" data-bs-toggle="modal" data-bs-target="#confirmEmail">Send Email</span>
                                                <span class="badge rounded-pill badge-soft-primary" style="cursor:pointer">Download</span>
                                                <span class="badge rounded-pill badge-soft-success" style="cursor:pointer">Print</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row card-gp" style="margin-top:40px;">
                                        <div class="col-md-12 col-sm-12">
                                            <input type="checkbox" class="checkitem" style="width: 20px; height: 20px;">
                                            <label class="form-title" style="vertical-align:middle; text-align: center; margin-left:1em; ">Container</label>
                                            <div class="col">
                                                <label style="font-weight: bold;margin-left:40px;">20’ GP - EGHU3826956</label>
                                                <svg width="74" height="20" viewBox="0 0 74 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 4C0 1.79086 1.79086 0 4 0H70C72.2091 0 74 1.79086 74 4V16C74 18.2091 72.2091 20 70 20H4C1.79086 20 0 18.2091 0 16V4Z" fill="#ECF1F4" />
                                                    <path d="M10.7212 13V7.18182H14.5734V8.19602H11.9513V9.58239H14.3177V10.5966H11.9513V13H10.7212ZM15.5381 13V8.63636H16.7483V13H15.5381ZM16.1461 8.07386C15.9661 8.07386 15.8118 8.0142 15.683 7.89489C15.5561 7.77367 15.4927 7.62879 15.4927 7.46023C15.4927 7.29356 15.5561 7.15057 15.683 7.03125C15.8118 6.91004 15.9661 6.84943 16.1461 6.84943C16.326 6.84943 16.4794 6.91004 16.6063 7.03125C16.7351 7.15057 16.7995 7.29356 16.7995 7.46023C16.7995 7.62879 16.7351 7.77367 16.6063 7.89489C16.4794 8.0142 16.326 8.07386 16.1461 8.07386ZM19.088 7.18182V13H17.8778V7.18182H19.088ZM22.2061 13.0852C21.7573 13.0852 21.3709 12.9943 21.047 12.8125C20.7251 12.6288 20.477 12.3693 20.3027 12.0341C20.1285 11.697 20.0413 11.2983 20.0413 10.8381C20.0413 10.3892 20.1285 9.99527 20.3027 9.65625C20.477 9.31723 20.7222 9.05303 21.0385 8.86364C21.3567 8.67424 21.7298 8.57955 22.1578 8.57955C22.4457 8.57955 22.7137 8.62595 22.9618 8.71875C23.2118 8.80966 23.4296 8.94697 23.6152 9.13068C23.8027 9.31439 23.9485 9.54545 24.0527 9.82386C24.1569 10.1004 24.209 10.4242 24.209 10.7955V11.1278H20.5243V10.3778H23.0698C23.0698 10.2036 23.0319 10.0492 22.9561 9.91477C22.8804 9.7803 22.7753 9.67519 22.6408 9.59943C22.5082 9.52178 22.3538 9.48295 22.1777 9.48295C21.994 9.48295 21.8311 9.52557 21.6891 9.6108C21.5489 9.69413 21.4391 9.80682 21.3595 9.94886C21.28 10.089 21.2393 10.2453 21.2374 10.4176V11.1307C21.2374 11.3466 21.2771 11.5331 21.3567 11.6903C21.4381 11.8475 21.5527 11.9688 21.7004 12.054C21.8482 12.1392 22.0234 12.1818 22.226 12.1818C22.3605 12.1818 22.4836 12.1629 22.5953 12.125C22.7071 12.0871 22.8027 12.0303 22.8823 11.9545C22.9618 11.8788 23.0224 11.786 23.0641 11.6761L24.1834 11.75C24.1266 12.0189 24.0101 12.2538 23.834 12.4545C23.6597 12.6534 23.4343 12.8087 23.1578 12.9205C22.8832 13.0303 22.566 13.0852 22.2061 13.0852ZM27.193 13V7.18182H29.4885C29.9298 7.18182 30.3057 7.2661 30.6163 7.43466C30.9269 7.60133 31.1637 7.83333 31.3265 8.13068C31.4913 8.42614 31.5737 8.76705 31.5737 9.15341C31.5737 9.53977 31.4904 9.88068 31.3237 10.1761C31.157 10.4716 30.9156 10.7017 30.5993 10.8665C30.2849 11.0312 29.9042 11.1136 29.4572 11.1136H27.9942V10.1278H29.2584C29.4951 10.1278 29.6902 10.0871 29.8436 10.0057C29.9989 9.92235 30.1144 9.80777 30.1902 9.66193C30.2678 9.5142 30.3067 9.3447 30.3067 9.15341C30.3067 8.96023 30.2678 8.79167 30.1902 8.64773C30.1144 8.50189 29.9989 8.3892 29.8436 8.30966C29.6883 8.22822 29.4913 8.1875 29.2527 8.1875H28.4231V13H27.193ZM34.4113 13.0852C33.97 13.0852 33.5883 12.9915 33.2664 12.804C32.9463 12.6146 32.6991 12.3513 32.5249 12.0142C32.3507 11.6752 32.2635 11.2822 32.2635 10.8352C32.2635 10.3845 32.3507 9.99053 32.5249 9.65341C32.6991 9.31439 32.9463 9.05114 33.2664 8.86364C33.5883 8.67424 33.97 8.57955 34.4113 8.57955C34.8526 8.57955 35.2332 8.67424 35.5533 8.86364C35.8753 9.05114 36.1234 9.31439 36.2976 9.65341C36.4719 9.99053 36.559 10.3845 36.559 10.8352C36.559 11.2822 36.4719 11.6752 36.2976 12.0142C36.1234 12.3513 35.8753 12.6146 35.5533 12.804C35.2332 12.9915 34.8526 13.0852 34.4113 13.0852ZM34.4169 12.1477C34.6177 12.1477 34.7853 12.0909 34.9198 11.9773C35.0543 11.8617 35.1556 11.7045 35.2238 11.5057C35.2938 11.3068 35.3289 11.0805 35.3289 10.8267C35.3289 10.5729 35.2938 10.3466 35.2238 10.1477C35.1556 9.94886 35.0543 9.79167 34.9198 9.67614C34.7853 9.56061 34.6177 9.50284 34.4169 9.50284C34.2143 9.50284 34.0438 9.56061 33.9056 9.67614C33.7692 9.79167 33.666 9.94886 33.5959 10.1477C33.5277 10.3466 33.4937 10.5729 33.4937 10.8267C33.4937 11.0805 33.5277 11.3068 33.5959 11.5057C33.666 11.7045 33.7692 11.8617 33.9056 11.9773C34.0438 12.0909 34.2143 12.1477 34.4169 12.1477ZM37.5059 13V8.63636H38.6792V9.39773H38.7247C38.8042 9.12689 38.9377 8.92235 39.1252 8.78409C39.3127 8.64394 39.5287 8.57386 39.773 8.57386C39.8336 8.57386 39.8989 8.57765 39.969 8.58523C40.0391 8.5928 40.1006 8.60322 40.1537 8.61648V9.69034C40.0968 9.6733 40.0182 9.65814 39.9179 9.64489C39.8175 9.63163 39.7256 9.625 39.6423 9.625C39.4643 9.625 39.3052 9.66383 39.165 9.74148C39.0268 9.81723 38.9169 9.9233 38.8355 10.0597C38.7559 10.196 38.7162 10.3532 38.7162 10.5312V13H37.5059ZM43.4791 8.63636V9.54545H40.8513V8.63636H43.4791ZM41.4479 7.59091H42.6581V11.6591C42.6581 11.7708 42.6752 11.858 42.7092 11.9205C42.7433 11.9811 42.7907 12.0237 42.8513 12.0483C42.9138 12.0729 42.9858 12.0852 43.0672 12.0852C43.124 12.0852 43.1808 12.0805 43.2377 12.071C43.2945 12.0597 43.338 12.0511 43.3683 12.0455L43.5587 12.946C43.4981 12.965 43.4128 12.9867 43.303 13.0114C43.1932 13.0379 43.0596 13.054 42.9024 13.0597C42.6108 13.071 42.3551 13.0322 42.1354 12.9432C41.9176 12.8542 41.7481 12.7159 41.6269 12.5284C41.5056 12.3409 41.446 12.1042 41.4479 11.8182V7.59091Z" fill="#405EA3" />
                                                    <path d="M59 5.5V7.5C59 7.63261 59.0527 7.75979 59.1464 7.85355C59.2402 7.94732 59.3674 8 59.5 8H61.5" stroke="#405EA3" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M60.5 14.5H55.5C55.2348 14.5 54.9804 14.3946 54.7929 14.2071C54.6054 14.0196 54.5 13.7652 54.5 13.5V6.5C54.5 6.23478 54.6054 5.98043 54.7929 5.79289C54.9804 5.60536 55.2348 5.5 55.5 5.5H59L61.5 8V13.5C61.5 13.7652 61.3946 14.0196 61.2071 14.2071C61.0196 14.3946 60.7652 14.5 60.5 14.5Z" stroke="#405EA3" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M56.5 11.5L57.5 12.5L59.5 10.5" stroke="#405EA3" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M4 2H70V-2H4V2ZM72 4V16H76V4H72ZM70 18H4V22H70V18ZM2 16V4H-2V16H2ZM4 18C2.89543 18 2 17.1046 2 16H-2C-2 19.3137 0.686295 22 4 22V18ZM72 16C72 17.1046 71.1046 18 70 18V22C73.3137 22 76 19.3137 76 16H72ZM70 2C71.1046 2 72 2.89543 72 4H76C76 0.68629 73.3137 -2 70 -2V2ZM4 -2C0.686291 -2 -2 0.686291 -2 4H2C2 2.89543 2.89543 2 4 2V-2Z" fill="#ECF1F4" />
                                                </svg>
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="20" height="20" rx="4" fill="#E7EEFE" />
                                                    <path d="M12 6H8C7.72386 6 7.5 6.22386 7.5 6.5V13.5C7.5 13.7761 7.72386 14 8 14H12C12.2761 14 12.5 13.7761 12.5 13.5V6.5C12.5 6.22386 12.2761 6 12 6Z" stroke="#405EA3" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M9.5 6.5H10.5" stroke="#405EA3" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M10 12.5V12.505" stroke="#405EA3" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row card-gp" style="margin-top:40px;">
                                        <div class="col-md-12 col-sm-12">
                                            <input type="checkbox" class="checkitem" style="width: 20px; height: 20px;">
                                            <label class="form-title" style="vertical-align:middle; text-align: center; margin-left:1em; ">Container</label>
                                            <div class="col">
                                                <label style="font-weight: bold;margin-left:40px;">20’ GP - EGHU3826956</label>
                                                <svg width="74" height="20" viewBox="0 0 74 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 4C0 1.79086 1.79086 0 4 0H70C72.2091 0 74 1.79086 74 4V16C74 18.2091 72.2091 20 70 20H4C1.79086 20 0 18.2091 0 16V4Z" fill="#ECF1F4" />
                                                    <path d="M10.7212 13V7.18182H14.5734V8.19602H11.9513V9.58239H14.3177V10.5966H11.9513V13H10.7212ZM15.5381 13V8.63636H16.7483V13H15.5381ZM16.1461 8.07386C15.9661 8.07386 15.8118 8.0142 15.683 7.89489C15.5561 7.77367 15.4927 7.62879 15.4927 7.46023C15.4927 7.29356 15.5561 7.15057 15.683 7.03125C15.8118 6.91004 15.9661 6.84943 16.1461 6.84943C16.326 6.84943 16.4794 6.91004 16.6063 7.03125C16.7351 7.15057 16.7995 7.29356 16.7995 7.46023C16.7995 7.62879 16.7351 7.77367 16.6063 7.89489C16.4794 8.0142 16.326 8.07386 16.1461 8.07386ZM19.088 7.18182V13H17.8778V7.18182H19.088ZM22.2061 13.0852C21.7573 13.0852 21.3709 12.9943 21.047 12.8125C20.7251 12.6288 20.477 12.3693 20.3027 12.0341C20.1285 11.697 20.0413 11.2983 20.0413 10.8381C20.0413 10.3892 20.1285 9.99527 20.3027 9.65625C20.477 9.31723 20.7222 9.05303 21.0385 8.86364C21.3567 8.67424 21.7298 8.57955 22.1578 8.57955C22.4457 8.57955 22.7137 8.62595 22.9618 8.71875C23.2118 8.80966 23.4296 8.94697 23.6152 9.13068C23.8027 9.31439 23.9485 9.54545 24.0527 9.82386C24.1569 10.1004 24.209 10.4242 24.209 10.7955V11.1278H20.5243V10.3778H23.0698C23.0698 10.2036 23.0319 10.0492 22.9561 9.91477C22.8804 9.7803 22.7753 9.67519 22.6408 9.59943C22.5082 9.52178 22.3538 9.48295 22.1777 9.48295C21.994 9.48295 21.8311 9.52557 21.6891 9.6108C21.5489 9.69413 21.4391 9.80682 21.3595 9.94886C21.28 10.089 21.2393 10.2453 21.2374 10.4176V11.1307C21.2374 11.3466 21.2771 11.5331 21.3567 11.6903C21.4381 11.8475 21.5527 11.9688 21.7004 12.054C21.8482 12.1392 22.0234 12.1818 22.226 12.1818C22.3605 12.1818 22.4836 12.1629 22.5953 12.125C22.7071 12.0871 22.8027 12.0303 22.8823 11.9545C22.9618 11.8788 23.0224 11.786 23.0641 11.6761L24.1834 11.75C24.1266 12.0189 24.0101 12.2538 23.834 12.4545C23.6597 12.6534 23.4343 12.8087 23.1578 12.9205C22.8832 13.0303 22.566 13.0852 22.2061 13.0852ZM27.193 13V7.18182H29.4885C29.9298 7.18182 30.3057 7.2661 30.6163 7.43466C30.9269 7.60133 31.1637 7.83333 31.3265 8.13068C31.4913 8.42614 31.5737 8.76705 31.5737 9.15341C31.5737 9.53977 31.4904 9.88068 31.3237 10.1761C31.157 10.4716 30.9156 10.7017 30.5993 10.8665C30.2849 11.0312 29.9042 11.1136 29.4572 11.1136H27.9942V10.1278H29.2584C29.4951 10.1278 29.6902 10.0871 29.8436 10.0057C29.9989 9.92235 30.1144 9.80777 30.1902 9.66193C30.2678 9.5142 30.3067 9.3447 30.3067 9.15341C30.3067 8.96023 30.2678 8.79167 30.1902 8.64773C30.1144 8.50189 29.9989 8.3892 29.8436 8.30966C29.6883 8.22822 29.4913 8.1875 29.2527 8.1875H28.4231V13H27.193ZM34.4113 13.0852C33.97 13.0852 33.5883 12.9915 33.2664 12.804C32.9463 12.6146 32.6991 12.3513 32.5249 12.0142C32.3507 11.6752 32.2635 11.2822 32.2635 10.8352C32.2635 10.3845 32.3507 9.99053 32.5249 9.65341C32.6991 9.31439 32.9463 9.05114 33.2664 8.86364C33.5883 8.67424 33.97 8.57955 34.4113 8.57955C34.8526 8.57955 35.2332 8.67424 35.5533 8.86364C35.8753 9.05114 36.1234 9.31439 36.2976 9.65341C36.4719 9.99053 36.559 10.3845 36.559 10.8352C36.559 11.2822 36.4719 11.6752 36.2976 12.0142C36.1234 12.3513 35.8753 12.6146 35.5533 12.804C35.2332 12.9915 34.8526 13.0852 34.4113 13.0852ZM34.4169 12.1477C34.6177 12.1477 34.7853 12.0909 34.9198 11.9773C35.0543 11.8617 35.1556 11.7045 35.2238 11.5057C35.2938 11.3068 35.3289 11.0805 35.3289 10.8267C35.3289 10.5729 35.2938 10.3466 35.2238 10.1477C35.1556 9.94886 35.0543 9.79167 34.9198 9.67614C34.7853 9.56061 34.6177 9.50284 34.4169 9.50284C34.2143 9.50284 34.0438 9.56061 33.9056 9.67614C33.7692 9.79167 33.666 9.94886 33.5959 10.1477C33.5277 10.3466 33.4937 10.5729 33.4937 10.8267C33.4937 11.0805 33.5277 11.3068 33.5959 11.5057C33.666 11.7045 33.7692 11.8617 33.9056 11.9773C34.0438 12.0909 34.2143 12.1477 34.4169 12.1477ZM37.5059 13V8.63636H38.6792V9.39773H38.7247C38.8042 9.12689 38.9377 8.92235 39.1252 8.78409C39.3127 8.64394 39.5287 8.57386 39.773 8.57386C39.8336 8.57386 39.8989 8.57765 39.969 8.58523C40.0391 8.5928 40.1006 8.60322 40.1537 8.61648V9.69034C40.0968 9.6733 40.0182 9.65814 39.9179 9.64489C39.8175 9.63163 39.7256 9.625 39.6423 9.625C39.4643 9.625 39.3052 9.66383 39.165 9.74148C39.0268 9.81723 38.9169 9.9233 38.8355 10.0597C38.7559 10.196 38.7162 10.3532 38.7162 10.5312V13H37.5059ZM43.4791 8.63636V9.54545H40.8513V8.63636H43.4791ZM41.4479 7.59091H42.6581V11.6591C42.6581 11.7708 42.6752 11.858 42.7092 11.9205C42.7433 11.9811 42.7907 12.0237 42.8513 12.0483C42.9138 12.0729 42.9858 12.0852 43.0672 12.0852C43.124 12.0852 43.1808 12.0805 43.2377 12.071C43.2945 12.0597 43.338 12.0511 43.3683 12.0455L43.5587 12.946C43.4981 12.965 43.4128 12.9867 43.303 13.0114C43.1932 13.0379 43.0596 13.054 42.9024 13.0597C42.6108 13.071 42.3551 13.0322 42.1354 12.9432C41.9176 12.8542 41.7481 12.7159 41.6269 12.5284C41.5056 12.3409 41.446 12.1042 41.4479 11.8182V7.59091Z" fill="#405EA3" />
                                                    <path d="M59 5.5V7.5C59 7.63261 59.0527 7.75979 59.1464 7.85355C59.2402 7.94732 59.3674 8 59.5 8H61.5" stroke="#405EA3" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M60.5 14.5H55.5C55.2348 14.5 54.9804 14.3946 54.7929 14.2071C54.6054 14.0196 54.5 13.7652 54.5 13.5V6.5C54.5 6.23478 54.6054 5.98043 54.7929 5.79289C54.9804 5.60536 55.2348 5.5 55.5 5.5H59L61.5 8V13.5C61.5 13.7652 61.3946 14.0196 61.2071 14.2071C61.0196 14.3946 60.7652 14.5 60.5 14.5Z" stroke="#405EA3" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M56.5 11.5L57.5 12.5L59.5 10.5" stroke="#405EA3" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M4 2H70V-2H4V2ZM72 4V16H76V4H72ZM70 18H4V22H70V18ZM2 16V4H-2V16H2ZM4 18C2.89543 18 2 17.1046 2 16H-2C-2 19.3137 0.686295 22 4 22V18ZM72 16C72 17.1046 71.1046 18 70 18V22C73.3137 22 76 19.3137 76 16H72ZM70 2C71.1046 2 72 2.89543 72 4H76C76 0.68629 73.3137 -2 70 -2V2ZM4 -2C0.686291 -2 -2 0.686291 -2 4H2C2 2.89543 2.89543 2 4 2V-2Z" fill="#ECF1F4" />
                                                </svg>
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="20" height="20" rx="4" fill="#E7EEFE" />
                                                    <path d="M12 6H8C7.72386 6 7.5 6.22386 7.5 6.5V13.5C7.5 13.7761 7.72386 14 8 14H12C12.2761 14 12.5 13.7761 12.5 13.5V6.5C12.5 6.22386 12.2761 6 12 6Z" stroke="#405EA3" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M9.5 6.5H10.5" stroke="#405EA3" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M10 12.5V12.505" stroke="#405EA3" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row card-gp" style="margin-top:40px;">
                                        <div class="col-md-12 col-sm-12">
                                            <input type="checkbox" class="checkitem" style="width: 20px; height: 20px;">
                                            <label class="form-title" style="vertical-align:middle; text-align: center; margin-left:1em; ">Container</label>
                                            <div class="col">
                                                <label style="font-weight: bold;margin-left:40px;">20’ GP - EGHU3826956</label>
                                                <svg width="74" height="20" viewBox="0 0 74 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 4C0 1.79086 1.79086 0 4 0H70C72.2091 0 74 1.79086 74 4V16C74 18.2091 72.2091 20 70 20H4C1.79086 20 0 18.2091 0 16V4Z" fill="#ECF1F4" />
                                                    <path d="M10.7212 13V7.18182H14.5734V8.19602H11.9513V9.58239H14.3177V10.5966H11.9513V13H10.7212ZM15.5381 13V8.63636H16.7483V13H15.5381ZM16.1461 8.07386C15.9661 8.07386 15.8118 8.0142 15.683 7.89489C15.5561 7.77367 15.4927 7.62879 15.4927 7.46023C15.4927 7.29356 15.5561 7.15057 15.683 7.03125C15.8118 6.91004 15.9661 6.84943 16.1461 6.84943C16.326 6.84943 16.4794 6.91004 16.6063 7.03125C16.7351 7.15057 16.7995 7.29356 16.7995 7.46023C16.7995 7.62879 16.7351 7.77367 16.6063 7.89489C16.4794 8.0142 16.326 8.07386 16.1461 8.07386ZM19.088 7.18182V13H17.8778V7.18182H19.088ZM22.2061 13.0852C21.7573 13.0852 21.3709 12.9943 21.047 12.8125C20.7251 12.6288 20.477 12.3693 20.3027 12.0341C20.1285 11.697 20.0413 11.2983 20.0413 10.8381C20.0413 10.3892 20.1285 9.99527 20.3027 9.65625C20.477 9.31723 20.7222 9.05303 21.0385 8.86364C21.3567 8.67424 21.7298 8.57955 22.1578 8.57955C22.4457 8.57955 22.7137 8.62595 22.9618 8.71875C23.2118 8.80966 23.4296 8.94697 23.6152 9.13068C23.8027 9.31439 23.9485 9.54545 24.0527 9.82386C24.1569 10.1004 24.209 10.4242 24.209 10.7955V11.1278H20.5243V10.3778H23.0698C23.0698 10.2036 23.0319 10.0492 22.9561 9.91477C22.8804 9.7803 22.7753 9.67519 22.6408 9.59943C22.5082 9.52178 22.3538 9.48295 22.1777 9.48295C21.994 9.48295 21.8311 9.52557 21.6891 9.6108C21.5489 9.69413 21.4391 9.80682 21.3595 9.94886C21.28 10.089 21.2393 10.2453 21.2374 10.4176V11.1307C21.2374 11.3466 21.2771 11.5331 21.3567 11.6903C21.4381 11.8475 21.5527 11.9688 21.7004 12.054C21.8482 12.1392 22.0234 12.1818 22.226 12.1818C22.3605 12.1818 22.4836 12.1629 22.5953 12.125C22.7071 12.0871 22.8027 12.0303 22.8823 11.9545C22.9618 11.8788 23.0224 11.786 23.0641 11.6761L24.1834 11.75C24.1266 12.0189 24.0101 12.2538 23.834 12.4545C23.6597 12.6534 23.4343 12.8087 23.1578 12.9205C22.8832 13.0303 22.566 13.0852 22.2061 13.0852ZM27.193 13V7.18182H29.4885C29.9298 7.18182 30.3057 7.2661 30.6163 7.43466C30.9269 7.60133 31.1637 7.83333 31.3265 8.13068C31.4913 8.42614 31.5737 8.76705 31.5737 9.15341C31.5737 9.53977 31.4904 9.88068 31.3237 10.1761C31.157 10.4716 30.9156 10.7017 30.5993 10.8665C30.2849 11.0312 29.9042 11.1136 29.4572 11.1136H27.9942V10.1278H29.2584C29.4951 10.1278 29.6902 10.0871 29.8436 10.0057C29.9989 9.92235 30.1144 9.80777 30.1902 9.66193C30.2678 9.5142 30.3067 9.3447 30.3067 9.15341C30.3067 8.96023 30.2678 8.79167 30.1902 8.64773C30.1144 8.50189 29.9989 8.3892 29.8436 8.30966C29.6883 8.22822 29.4913 8.1875 29.2527 8.1875H28.4231V13H27.193ZM34.4113 13.0852C33.97 13.0852 33.5883 12.9915 33.2664 12.804C32.9463 12.6146 32.6991 12.3513 32.5249 12.0142C32.3507 11.6752 32.2635 11.2822 32.2635 10.8352C32.2635 10.3845 32.3507 9.99053 32.5249 9.65341C32.6991 9.31439 32.9463 9.05114 33.2664 8.86364C33.5883 8.67424 33.97 8.57955 34.4113 8.57955C34.8526 8.57955 35.2332 8.67424 35.5533 8.86364C35.8753 9.05114 36.1234 9.31439 36.2976 9.65341C36.4719 9.99053 36.559 10.3845 36.559 10.8352C36.559 11.2822 36.4719 11.6752 36.2976 12.0142C36.1234 12.3513 35.8753 12.6146 35.5533 12.804C35.2332 12.9915 34.8526 13.0852 34.4113 13.0852ZM34.4169 12.1477C34.6177 12.1477 34.7853 12.0909 34.9198 11.9773C35.0543 11.8617 35.1556 11.7045 35.2238 11.5057C35.2938 11.3068 35.3289 11.0805 35.3289 10.8267C35.3289 10.5729 35.2938 10.3466 35.2238 10.1477C35.1556 9.94886 35.0543 9.79167 34.9198 9.67614C34.7853 9.56061 34.6177 9.50284 34.4169 9.50284C34.2143 9.50284 34.0438 9.56061 33.9056 9.67614C33.7692 9.79167 33.666 9.94886 33.5959 10.1477C33.5277 10.3466 33.4937 10.5729 33.4937 10.8267C33.4937 11.0805 33.5277 11.3068 33.5959 11.5057C33.666 11.7045 33.7692 11.8617 33.9056 11.9773C34.0438 12.0909 34.2143 12.1477 34.4169 12.1477ZM37.5059 13V8.63636H38.6792V9.39773H38.7247C38.8042 9.12689 38.9377 8.92235 39.1252 8.78409C39.3127 8.64394 39.5287 8.57386 39.773 8.57386C39.8336 8.57386 39.8989 8.57765 39.969 8.58523C40.0391 8.5928 40.1006 8.60322 40.1537 8.61648V9.69034C40.0968 9.6733 40.0182 9.65814 39.9179 9.64489C39.8175 9.63163 39.7256 9.625 39.6423 9.625C39.4643 9.625 39.3052 9.66383 39.165 9.74148C39.0268 9.81723 38.9169 9.9233 38.8355 10.0597C38.7559 10.196 38.7162 10.3532 38.7162 10.5312V13H37.5059ZM43.4791 8.63636V9.54545H40.8513V8.63636H43.4791ZM41.4479 7.59091H42.6581V11.6591C42.6581 11.7708 42.6752 11.858 42.7092 11.9205C42.7433 11.9811 42.7907 12.0237 42.8513 12.0483C42.9138 12.0729 42.9858 12.0852 43.0672 12.0852C43.124 12.0852 43.1808 12.0805 43.2377 12.071C43.2945 12.0597 43.338 12.0511 43.3683 12.0455L43.5587 12.946C43.4981 12.965 43.4128 12.9867 43.303 13.0114C43.1932 13.0379 43.0596 13.054 42.9024 13.0597C42.6108 13.071 42.3551 13.0322 42.1354 12.9432C41.9176 12.8542 41.7481 12.7159 41.6269 12.5284C41.5056 12.3409 41.446 12.1042 41.4479 11.8182V7.59091Z" fill="#405EA3" />
                                                    <path d="M59 5.5V7.5C59 7.63261 59.0527 7.75979 59.1464 7.85355C59.2402 7.94732 59.3674 8 59.5 8H61.5" stroke="#405EA3" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M60.5 14.5H55.5C55.2348 14.5 54.9804 14.3946 54.7929 14.2071C54.6054 14.0196 54.5 13.7652 54.5 13.5V6.5C54.5 6.23478 54.6054 5.98043 54.7929 5.79289C54.9804 5.60536 55.2348 5.5 55.5 5.5H59L61.5 8V13.5C61.5 13.7652 61.3946 14.0196 61.2071 14.2071C61.0196 14.3946 60.7652 14.5 60.5 14.5Z" stroke="#405EA3" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M56.5 11.5L57.5 12.5L59.5 10.5" stroke="#405EA3" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M4 2H70V-2H4V2ZM72 4V16H76V4H72ZM70 18H4V22H70V18ZM2 16V4H-2V16H2ZM4 18C2.89543 18 2 17.1046 2 16H-2C-2 19.3137 0.686295 22 4 22V18ZM72 16C72 17.1046 71.1046 18 70 18V22C73.3137 22 76 19.3137 76 16H72ZM70 2C71.1046 2 72 2.89543 72 4H76C76 0.68629 73.3137 -2 70 -2V2ZM4 -2C0.686291 -2 -2 0.686291 -2 4H2C2 2.89543 2.89543 2 4 2V-2Z" fill="#ECF1F4" />
                                                </svg>
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="20" height="20" rx="4" fill="#E7EEFE" />
                                                    <path d="M12 6H8C7.72386 6 7.5 6.22386 7.5 6.5V13.5C7.5 13.7761 7.72386 14 8 14H12C12.2761 14 12.5 13.7761 12.5 13.5V6.5C12.5 6.22386 12.2761 6 12 6Z" stroke="#405EA3" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M9.5 6.5H10.5" stroke="#405EA3" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M10 12.5V12.505" stroke="#405EA3" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-port" role="tabpanel" aria-labelledby="pills-Eport">
                                    <div class="row mt-3">
                                        <input class="form-control" type="search" value="Search" id="example-search-input">
                                    </div>
                                    <div class="row mt-5">
                                        <svg width="86" height="87" viewBox="0 0 86 87" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1573_142150)">
                                                <g opacity="0.08">
                                                    <path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M47.713 86.1909L18.192 69.2513C18.0657 69.1789 17.9609 69.075 17.888 68.95C17.8151 68.8249 17.7767 68.6832 17.7767 68.5389C17.7767 68.3946 17.8151 68.2528 17.888 68.1278C17.9609 68.0028 18.0657 67.8989 18.192 67.8265L27.8952 62.1993C28.2631 61.9894 28.6803 61.8789 29.1051 61.8789C29.5298 61.8789 29.9471 61.9894 30.315 62.1993L59.3969 78.8725C59.5641 78.9687 59.7028 79.1066 59.7992 79.2724C59.8956 79.4381 59.9463 79.626 59.9463 79.8172C59.9463 80.0084 59.8956 80.1962 59.7992 80.362C59.7028 80.5278 59.5641 80.6656 59.3969 80.7619L50.0429 86.1875C49.6897 86.3922 49.2878 86.5003 48.8784 86.5009C48.469 86.5015 48.0668 86.3945 47.713 86.1909V86.1909Z" fill="black" />
                                                </g>
                                                <path d="M13.9755 25.1016V44.5764C14.023 45.4266 14.2724 46.2539 14.7036 46.9911C15.1348 47.7284 15.7357 48.3548 16.4574 48.8198L36.6797 60.3612L36.334 63.7232L31.3908 60.884C31.0944 60.7128 30.7574 60.6227 30.4142 60.6227C30.071 60.6227 29.734 60.7128 29.4377 60.884L21.5666 65.4178C21.4585 65.4794 21.3693 65.5688 21.3084 65.6765C21.2475 65.7842 21.2173 65.9061 21.2209 66.0294V68.011C21.2159 68.1337 21.2456 68.2552 21.3066 68.3621C21.3677 68.4689 21.4577 68.5568 21.5666 68.6158C21.5666 68.6158 47.5927 83.5601 47.6792 83.6045C47.8902 83.7295 48.1336 83.7906 48.3793 83.7803C48.6251 83.77 48.8624 83.6887 49.0619 83.5465C49.1241 83.5191 56.736 79.1048 56.736 79.1048C56.8673 79.0288 56.9766 78.9207 57.0535 78.7908C57.1303 78.661 57.1722 78.5138 57.175 78.3634C57.175 78.3634 57.175 76.0572 57.175 76.0538C57.18 75.895 57.1415 75.7379 57.0636 75.599C56.9858 75.4601 56.8713 75.3445 56.7325 75.2646L47.3992 69.856L47.3335 66.4428L67.6076 77.991C68.4545 78.4728 69.1458 78.606 69.5503 78.5035C69.5503 78.5035 72.3157 77.0412 72.3157 77.0275C72.7962 76.7884 73.0969 76.228 73.0969 75.4183C73.0969 75.4183 73.4703 36.192 72.9863 33.9917C72.7582 32.9667 71.7315 31.518 70.9503 30.8279C70.7394 30.6434 34.6747 10.024 34.654 10.0343L20.2564 1.8036L18.7251 0.928942C18.4765 0.756616 18.1887 0.647459 17.8873 0.61111C17.5858 0.574761 17.28 0.61234 16.9967 0.720528L14.8397 2.21018C14.2244 2.37418 13.8234 2.97209 13.8234 3.91849L14.0826 8.56511" fill="white" />
                                                <path d="M14.3547 24.0923V6.80078L70.2751 38.8454V74.4637L20.9053 46.1945L14.0021 42.0502L13.9398 25.0866L14.3547 24.0923Z" fill="white" />
                                                <path d="M18.1513 3.51047L15.3029 1.89099L17.0313 0.900167C17.262 0.768524 17.5237 0.699219 17.7901 0.699219C18.0565 0.699219 18.3182 0.768524 18.5489 0.900167L20.1978 1.83632L18.1513 3.51047Z" fill="#1627A1" />
                                                <path d="M20.1969 1.83203L70.5277 30.46C70.763 30.5976 70.9831 30.759 71.1845 30.9417C71.9914 31.6784 72.5704 32.6262 72.8542 33.675C72.9544 34.0167 73.0028 34.3823 73.0789 34.7V75.4604C73.0028 76.2736 72.7021 76.8271 72.2216 77.0731L69.5426 78.491C70.0542 78.2621 70.3895 77.6846 70.3134 76.8339V36.0803C70.3766 35.7732 70.3635 35.4555 70.2754 35.1544C70.0149 34.1281 69.4745 33.1921 68.7129 32.4485C68.4707 32.2119 68.2002 32.0054 67.9075 31.8335L18.1297 3.50618L20.1969 1.83203Z" fill="#1627A1" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.3384 65.8599C21.3443 65.9681 21.3775 66.0733 21.4348 66.1657C21.4921 66.2582 21.5719 66.3351 21.6668 66.3894L47.4994 81.2279C47.7826 81.3915 48.1047 81.4777 48.4328 81.4777C48.7608 81.4777 49.0829 81.3915 49.3661 81.2279L56.857 76.8819C57.0025 76.8025 57.1223 76.6841 57.2026 76.5402V78.539C57.1996 78.6862 57.1583 78.8302 57.0826 78.9571C57.0069 79.0839 56.8994 79.1894 56.7705 79.2633L49.4076 83.5272C49.3488 83.5614 48.291 83.9202 47.8416 83.7698C47.7379 83.7254 47.6342 83.681 47.534 83.6263L21.5562 68.7025C21.4465 68.6426 21.356 68.5536 21.2949 68.4455C21.2338 68.3374 21.2046 68.2146 21.2105 68.0909V65.8359L21.3384 65.8599Z" fill="#1627A1" />
                                                <path d="M48.4287 81.6547C48.7929 81.6568 49.151 81.5624 49.4658 81.3814L56.8357 76.9671C56.9948 76.8745 57.1267 76.7423 57.2183 76.5839C57.31 76.4254 57.3582 76.246 57.3582 76.0634C57.3582 75.8809 57.31 75.7015 57.2183 75.543C57.1267 75.3845 56.9948 75.2524 56.8357 75.1597L47.5023 69.7785L47.3295 70.0724L56.6663 75.4536C56.7738 75.516 56.863 75.6051 56.9249 75.7121C56.9869 75.819 57.0195 75.9402 57.0195 76.0634C57.0195 76.1867 56.9869 76.3078 56.9249 76.4148C56.863 76.5218 56.7738 76.6109 56.6663 76.6733L49.2826 81.0876C49.0259 81.2352 48.7343 81.313 48.4374 81.313C48.1405 81.313 47.8488 81.2352 47.5922 81.0876L21.6663 66.2628C21.5917 66.2193 21.53 66.1574 21.4871 66.0831C21.4441 66.0088 21.4216 65.9247 21.4216 65.8392C21.4216 65.7536 21.4441 65.6695 21.4871 65.5952C21.53 65.5209 21.5917 65.459 21.6663 65.4155L29.5339 60.8987C29.804 60.7426 30.1112 60.6603 30.4241 60.6603C30.7369 60.6603 31.0441 60.7426 31.3142 60.8987L36.1053 63.6491L36.2712 63.3689L31.4766 60.6151C31.1538 60.4297 30.7871 60.332 30.4137 60.332C30.0403 60.332 29.6736 60.4297 29.3507 60.6151L21.4796 65.1353C21.3526 65.2084 21.2473 65.3131 21.174 65.439C21.1008 65.5649 21.0623 65.7076 21.0623 65.8528C21.0623 65.9981 21.1008 66.1407 21.174 66.2666C21.2473 66.3925 21.3526 66.4973 21.4796 66.5703L47.4055 81.3985C47.7174 81.5724 48.0707 81.6609 48.4287 81.6547V81.6547Z" fill="#1C3E58" />
                                                <path d="M48.3705 84.0334C48.6967 84.035 49.0175 83.9513 49.3004 83.7908C49.3436 83.77 49.3852 83.746 49.4248 83.7191L49.487 83.6815L56.8396 79.4278C56.9954 79.3389 57.1251 79.2116 57.216 79.0583C57.3069 78.9049 57.3559 78.7308 57.3582 78.5531V76.1615H57.0125V78.5531C57.0086 78.6708 56.9749 78.7856 56.9145 78.8871C56.8541 78.9886 56.769 79.0734 56.6668 79.134L49.328 83.3877L49.2554 83.4321C49.2231 83.4532 49.1896 83.4726 49.1552 83.4902C48.9674 83.5955 48.7595 83.6611 48.5447 83.6829C48.3299 83.7047 48.1128 83.6821 47.9073 83.6166C47.8209 83.579 47.7241 83.5346 47.6307 83.4833L21.653 68.5595C21.5733 68.5139 21.5081 68.4471 21.4647 68.3668C21.4214 68.2866 21.4016 68.1959 21.4075 68.1051V65.8398H21.0619V68.0982C21.0551 68.2499 21.0905 68.4004 21.1643 68.5335C21.238 68.6667 21.3473 68.7773 21.4801 68.8533L47.4579 83.7772C47.5631 83.8357 47.6716 83.8882 47.7828 83.9343C47.9722 83.9979 48.1705 84.0313 48.3705 84.0334V84.0334Z" fill="#1627A1" />
                                                <path d="M44.6675 73.4821C44.8015 73.4828 44.9336 73.4499 45.0512 73.3864L47.3915 72.0505C47.4679 72.0182 47.5314 71.9618 47.572 71.8901C47.6127 71.8184 47.6282 71.7355 47.6161 71.6542L47.5194 66.4267H47.1737L47.2739 71.6576C47.2779 71.6779 47.2779 71.6988 47.2739 71.7191L47.2255 71.7464L44.8853 73.0823C44.8036 73.1249 44.7107 73.1416 44.6191 73.1301C44.5853 73.1307 44.5519 73.1224 44.5223 73.1062L36.0082 68.2478C35.9322 68.2068 35.9218 68.1726 35.9287 68.1179L36.6996 61.3188L36.3539 61.2812L35.5796 68.0838C35.5665 68.1777 35.5834 68.2733 35.6281 68.3573C35.6727 68.4412 35.7428 68.5092 35.8285 68.5518L44.3391 73.4103C44.4127 73.4494 44.4942 73.4715 44.5776 73.4752L44.6675 73.4821Z" fill="#1C3E58" />
                                                <path d="M13.803 25.1027H14.1487V3.79322C14.1487 2.9869 14.3838 2.50857 14.9058 2.24549L14.7502 1.94141C14.1038 2.28307 13.803 2.85365 13.803 3.79322V25.1027Z" fill="#1C3E58" />
                                                <path d="M69.19 78.7426C69.3371 78.7468 69.4836 78.7236 69.6221 78.6743L69.4734 78.3634C69.4734 78.3634 69.0206 78.5445 68.1529 78.1174L16.5431 48.6661C15.8457 48.217 15.2653 47.6117 14.8491 46.8993C14.4329 46.1869 14.1925 45.3875 14.1475 44.5661V25.1016H13.8018V44.5763C13.8513 45.4565 14.1096 46.3128 14.5558 47.076C15.0019 47.8393 15.6235 48.4881 16.3702 48.9701L67.9905 78.401C68.3577 78.6063 68.7686 78.7233 69.19 78.7426Z" fill="#1C3E58" />
                                                <path d="M69.5501 78.675C69.573 78.6795 69.5965 78.6795 69.6193 78.675C69.6691 78.6527 69.7176 78.6276 69.7645 78.5998C71.4306 77.7286 72.0701 77.3937 72.2948 77.2332V77.2605C72.8479 76.9667 73.1798 76.3517 73.2593 75.4907V34.7132C73.2154 33.9675 73.0198 33.2383 72.6842 32.5691C72.3486 31.8998 71.8799 31.3043 71.3062 30.8182C71.0944 30.6271 70.8626 30.4587 70.6148 30.316L20.64 1.80078L20.4672 2.09461L70.442 30.6132C70.6689 30.7429 70.881 30.8964 71.0746 31.0711C71.6131 31.5263 72.0534 32.0839 72.3693 32.7108C72.6853 33.3377 72.8704 34.021 72.9136 34.72V75.4736C72.8445 76.2082 72.5679 76.7207 72.1531 76.9359H72.1255C72.0217 76.9974 71.1887 77.4382 70.3556 77.8755C70.486 77.5383 70.5334 77.1752 70.4938 76.8163V36.0833C70.4963 35.3776 70.3503 34.6792 70.0653 34.0322C69.7803 33.3853 69.3623 32.8039 68.838 32.325C68.5881 32.0774 68.3069 31.8626 68.0015 31.686L18.4484 3.41343L18.2756 3.70726L67.8287 31.9833C68.1095 32.1479 68.3684 32.3465 68.5995 32.5744C69.0882 33.0223 69.478 33.5652 69.7445 34.169C70.011 34.7728 70.1484 35.4245 70.1482 36.0833V76.8471C70.2104 77.5304 70.0099 78.0361 69.5985 78.2855L69.4672 78.3538C69.428 78.3749 69.3985 78.4101 69.385 78.4521C69.3715 78.4942 69.3749 78.5397 69.3946 78.5793C69.4081 78.6086 69.4301 78.6333 69.4578 78.6503C69.4855 78.6673 69.5176 78.6759 69.5501 78.675V78.675Z" fill="#1627A1" />
                                                <path d="M18.2756 3.7066L18.4485 3.41277L16.3744 2.23403C16.1106 2.07 15.819 1.95426 15.5137 1.89237L17.2594 0.945965C17.5158 0.856001 17.7903 0.828283 18.0598 0.86515C18.3293 0.902016 18.5859 1.00238 18.808 1.1578L20.45 2.09395L20.6228 1.80012L18.9877 0.860549C18.7158 0.67601 18.4025 0.55967 18.0748 0.521573C17.7472 0.483477 17.4151 0.524769 17.1073 0.641885L14.7324 1.94362C14.6945 1.96352 14.6654 1.99669 14.6508 2.03665C14.6363 2.07661 14.6373 2.12049 14.6537 2.15975C14.6701 2.199 14.7007 2.23081 14.7396 2.24896C14.7784 2.26712 14.8227 2.27032 14.8638 2.25795C15.3283 2.16938 15.8094 2.26644 16.2016 2.52786L18.2756 3.7066Z" fill="#1627A1" />
                                                <path d="M14.1097 6.36093L70.4929 38.6914L70.3195 38.9869L13.9362 6.65646L14.1097 6.36093Z" fill="#1C3E58" />
                                                <path d="M70.3098 74.6151L70.4827 74.3179L21.1162 46.0487L14.0609 41.9453L13.8881 42.2391L20.9399 46.3425L70.3098 74.6151Z" fill="#1C3E58" />
                                                <g clip-path="url(#clip1_1573_142150)">
                                                    <path d="M24.7848 31.0037C24.546 30.9226 24.2912 30.8986 24.0412 30.9336C23.7913 30.9686 23.5533 31.0618 23.3467 31.2053C22.715 31.6108 22.1889 32.1578 21.8111 32.8019C21.4333 33.446 21.2145 34.169 21.1724 34.9124C21.1724 35.5957 21.4179 36.0706 21.8085 36.279C22.1991 36.4874 32.4692 42.4836 32.4692 42.4836C32.4692 42.4836 31.1902 41.995 32.3448 39.2788C33.7137 36.0774 35.5803 37.2664 35.5803 37.2664C35.5803 37.2664 24.8262 31.0242 24.7848 31.0037Z" fill="#1C3E58" />
                                                    <path d="M54.9384 41.78C51.9103 34.9809 45.8263 30.2284 41.3913 31.1645C40.9607 31.2513 40.5443 31.3962 40.1537 31.595C39.9117 31.7214 38.4253 32.5619 38.4253 32.5619C38.8354 32.3487 39.2743 32.1945 39.7285 32.1041C44.1498 31.1611 50.2337 35.9239 53.2792 42.7196C55.9582 48.6987 55.4051 54.2917 52.2145 56.1948C52.2145 56.1948 53.4935 55.5114 53.9429 55.2244C57.0885 53.294 57.6209 47.7284 54.9384 41.78Z" fill="#1C3E58" />
                                                    <path d="M41.017 35.1758C37.6743 35.8864 36.8688 40.68 39.1607 45.8049C41.4525 50.9299 46.1088 54.5549 49.4516 53.8443C50.0894 53.6879 50.6716 53.3618 51.135 52.9013C47.7923 53.6153 43.1395 49.9903 40.8441 44.8653C39.0051 40.7756 39.1745 36.9251 41.017 35.1758Z" fill="#1C3E58" />
                                                    <path d="M41.257 45.7316C38.7508 40.7024 39.2728 35.6731 41.1637 35.1982C44.4787 34.3714 49.1454 38.0545 51.3923 43.2102C54.4412 50.1938 51.1365 52.8997 51.1365 52.8997C51.1365 52.8997 45.3395 53.9316 41.257 45.7316Z" fill="#BFC9E0" />
                                                    <rect width="6.54594" height="1.02849" rx="0.514243" transform="matrix(-0.846038 0.533123 0.542056 0.840342 48.3459 41.4648)" fill="#1C3E58" />
                                                    <rect width="6.52095" height="1.03244" rx="0.516218" transform="matrix(0.62355 0.781784 0.788819 -0.614626 43.4148 41.4102)" fill="#1C3E58" />
                                                </g>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1573_142150">
                                                    <rect width="86" height="86" fill="white" transform="matrix(-1 0 0 1 86 0.5)" />
                                                </clipPath>
                                                <clipPath id="clip1_1573_142150">
                                                    <rect width="35.4943" height="25.2831" fill="white" transform="matrix(-1 0 0 1 56.6677 30.9102)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <div class="row mt-5">
                                            <p class="description" style="text-align: center;">There’s no information to show.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal Container Detail -->
            <form action="" method="get">
                <div class="modal fade bs-example-modal-center modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="detailContainer">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div>
                                    <div class="d-flex flex-wrap">
                                        <div class="mt-1">
                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1338_38064)">
                                                    <path d="M6 6H26V18H6V6Z" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M10 10L10 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M14 10L14 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M18 10L18 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M22 10L22 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1338_38064" x="0" y="0" width="32" height="32" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset dy="4" />
                                                        <feGaussianBlur stdDeviation="2" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1338_38064" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1338_38064" result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div style="margin-left:20px;">
                                            <p style="margin-top:5px; font-weight: 500; line-height: 0%;align-items: center;color: #8C8CA2;font-size: 10px;">Container Details</p>
                                            <p class="modal-title" id="myModalLabel" style="margin-right:10px;line-height: 0%;font-weight: 500;font-size: 14px;align-items: center;color: #0E0E2C;">MRKU9201218</p>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="label caption">Cnt. Type, Size, Temperature</label>
                                        <p class="l_val">45’ Reefer - 18 C</p>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="label caption">ISO Code</label>
                                        <p class="l_val">22G1</p>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="label caption">Full/Empty</label>
                                        <p class="l_val">Full</p>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="label caption">Seal Number</label>
                                        <p class="l_val">9910192BCG</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="label caption">Oversize Aft</label>
                                        <p class="l_val">50 cm</p>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="label caption">Oversize Fore</label>
                                        <p class="l_val">50 cm</p>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="label caption">Oversize Height</label>
                                        <p class="l_val">30 cm</p>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="label caption">Oversize Right</label>
                                        <p class="l_val">30 cm</p>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="label caption">Oversize Left</label>
                                        <p class="l_val">30 cm</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="label caption">Dangerous Goods Class</label>
                                        <p class="l_val">1.3 - Substances and articles which have a fire hazard and either a minor blast hazard or a minor projection hazard or both,
                                            but not a mass explosion hazard</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="label caption">Dangerous Goods Number</label>
                                        <p class="l_val">0150 - PENTAERYTHRITE TETRANITRATE (PENTAERYTHRITOL TETRANITRATE; PETN),
                                            WETTED with not less than 25% water, by mass, or PENTAERYTHRITE TETRANITRATE (PENTAERYTHRITOL TETRANITRATE; PETN), DESENSITIZED with not less than 15% phlegmatizer, by mass†
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- end modal -->


            <script>
                //select all
                $("#checkall").change(function() {
                    $(".checkitem").prop("checked", $(this).prop("checked"))
                })
                $(".checkitem").change(function() {
                    if ($(this).prop("checked") == false) {
                        $("#checkall").prop("checked", false)
                    }
                    if ($(".checkitem:checked").length == $(".checkitem").length) {
                        $("#checkall").prop("checked", true)
                    }
                })

                $('.multipleService').on('click', 'a', function() {
                    $('.multipleService a.active').removeClass('active');
                    $(this).addClass('active');
                });

                $('.multipleDetail').on('click', 'a', function() {
                    $('.multipleDetail a.active').removeClass('active');
                    $(this).addClass('active');
                });
            </script>