<x-layout>
    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Customers</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Create</li>
                </ul>
            </div>
            <div class="page-header-right ms-auto">
                <div class="page-header-right-items">
                    <div class="d-flex d-md-none">
                        <a href="javascript:void(0)" class="page-header-right-close-toggle">
                            <i class="feather-arrow-left me-2"></i>
                            <span>Back</span>
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                        <a href="javascript:void(0);" class="btn btn-light-brand successAlertMessage">
                            <i class="feather-layers me-2"></i>
                            <span>Save as Draft</span>
                        </a>
                        <a href="javascript:void(0);" class="btn btn-primary successAlertMessage">
                            <i class="feather-user-plus me-2"></i>
                            <span>Create Customer</span>
                        </a>
                    </div>
                </div>
                <div class="d-md-none d-flex align-items-center">
                    <a href="javascript:void(0)" class="page-header-right-open-toggle">
                        <i class="feather-align-right fs-20"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- [ page-header ] end -->
        <!-- [ Main Content ] start -->
        <div class="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-top-0">
                        <div class="card-header p-0">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs flex-wrap w-100 text-center customers-nav-tabs" id="myTab"
                                role="tablist">
                                <li class="nav-item flex-fill border-top" role="presentation">
                                    <a href="javascript:void(0);" class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profileTab" role="tab">Profile</a>
                                </li>
                                <li class="nav-item flex-fill border-top" role="presentation">
                                    <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#passwordTab" role="tab">Password</a>
                                </li>
                                <li class="nav-item flex-fill border-top" role="presentation">
                                    <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#billingTab" role="tab">Billing & Shipping</a>
                                </li>
                                <li class="nav-item flex-fill border-top" role="presentation">
                                    <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#subscriptionTab" role="tab">Subscription</a>
                                </li>
                                <li class="nav-item flex-fill border-top" role="presentation">
                                    <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#notificationsTab" role="tab">Notifications</a>
                                </li>
                                <li class="nav-item flex-fill border-top" role="presentation">
                                    <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#connectionTab" role="tab">Connection</a>
                                </li>
                            </ul>
                        </div>

                        <form action="/customer" method="POST">
                            @csrf
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                                    <div class="card-body personal-info">
                                        <div class="mb-4 d-flex align-items-center justify-content-between">
                                            <h5 class="fw-bold mb-0 me-4">
                                                <span class="d-block mb-2">Personal Information:</span>
                                                <span class="fs-12 fw-normal text-muted text-truncate-1-line">Following
                                                    information is publicly displayed, be careful! </span>
                                            </h5>
                                        </div>

                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="fullnameInput" class="fw-semibold">Nama: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-user"></i></div>
                                                    <input type="text" class="form-control" id="fullnameInput"
                                                        placeholder="Nama">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="mailInput" class="fw-semibold">NIK: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-mail"></i></div>
                                                    <input type="number" class="form-control" id="mailInput"
                                                        placeholder="NIK">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="phoneInput" class="fw-semibold">Tempat Lahir: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-phone"></i></div>
                                                    <input type="text" class="form-control" id="phoneInput"
                                                        placeholder="Tempat Lahir">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="companyInput" class="fw-semibold">Alamat: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-lg-6 mb-3">
                                                        <div class="input-group">
                                                            <div class="input-group-text"><span>Provinsi</span>
                                                            </div>
                                                            {{-- <input type="text" class="form-control" id="companyInput"
                                                                placeholder="Provinsi"> --}}
                                                            <select name="provinsi" id="provinsi"
                                                                class="btn btn-secondary dropdown-toggle">
                                                                <option value="" class="dropdown-item">JAWA
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="input-group">
                                                            <div class="input-group-text"><span>Kota/Kab</span>
                                                            </div>
                                                            {{-- <input type="text" class="form-control" id="companyInput"
                                                                placeholder="Provinsi"> --}}
                                                            <select name="kota" id="kota"
                                                                class="btn btn-secondary dropdown-toggle">
                                                                <option value="" class="dropdown-item">JAWA
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="input-group">
                                                            <div class="input-group-text"><span>Kecamatan</span>
                                                            </div>
                                                            {{-- <input type="text" class="form-control" id="companyInput"
                                                                placeholder="Provinsi"> --}}
                                                            <select name="kecamatan" id="provinsi"
                                                                class="btn btn-secondary dropdown-toggle">
                                                                <option value="" class="dropdown-item">JAWA
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="input-group">
                                                            <div class="input-group-text"><span>Kel/Desa</span>
                                                            </div>
                                                            {{-- <input type="text" class="form-control" id="companyInput"
                                                                placeholder="Provinsi"> --}}
                                                            <select name="kelurahan" id="kelurahan"
                                                                class="btn btn-secondary dropdown-toggle">
                                                                <option value="" class="dropdown-item">JAWA
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="designationInput" class="fw-semibold">Designation:
                                                </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-briefcase"></i>
                                                    </div>
                                                    <input type="text" class="form-control" id="designationInput"
                                                        placeholder="Designation">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="websiteInput" class="fw-semibold">Website: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-link"></i></div>
                                                    <input type="text" class="form-control" id="websiteInput"
                                                        placeholder="Website">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="VATInput" class="fw-semibold">VAT: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-dollar-sign"></i>
                                                    </div>
                                                    <input type="text" class="form-control" id="VATInput"
                                                        placeholder="VAT">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="addressInput_2" class="fw-semibold">Address: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-map-pin"></i>
                                                    </div>
                                                    <textarea class="form-control" id="addressInput_2" cols="30" rows="3" placeholder="Address"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="aboutInput" class="fw-semibold">About: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-type"></i></div>
                                                    <textarea class="form-control" id="aboutInput" cols="30" rows="5" placeholder="About"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</x-layout>
