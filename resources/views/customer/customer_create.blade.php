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
                                        data-bs-target="#profileTab" role="tab">Tambah Jamaah</a>
                            </ul>
                        </div>

                        <form action="/customers" method="POST" enctype="multipart/form-data">
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
                                                    <input type="text" name="nama" class="form-control"
                                                        id="fullnameInput" placeholder="Nama">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="mailInput" class="fw-semibold">NIK: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="bi bi-123"></i></div>
                                                    <input type="number" name="nik" class="form-control"
                                                        id="mailInput" placeholder="NIK">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="phoneInput" class="fw-semibold">Tempat Lahir: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="bi bi-geo"></i></div>
                                                    <input type="text" name="tempat_lahir" class="form-control"
                                                        id="phoneInput" placeholder="Tempat Lahir">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="companyInput" class="fw-semibold">Alamat: </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-lg-8 mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text"><span>Provinsi</span>
                                                            </div>
                                                            <select name="provinsi" id="provinsi"
                                                                class="btn btn-secondary dropdown-toggle text-white">
                                                                <option value="" class="dropdown-item">
                                                                    Pilih
                                                                    Provinsi
                                                                </option>
                                                                @foreach ($provinsi as $item)
                                                                    <option value="{{ $item['id'] }}">
                                                                        {{ $item['name'] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text"><span>Kota/Kab</span>
                                                            </div>
                                                            <select name="kota" id="kota"
                                                                class="btn btn-secondary dropdown-toggle">
                                                                <option value="" class="dropdown-item">Pilih
                                                                    Kota/Kab
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text"><span>Kecamatan</span>
                                                            </div>
                                                            <select name="kecamatan" id="kecamatan"
                                                                class="btn btn-secondary dropdown-toggle">
                                                                <option value="" class="dropdown-item">Pilih
                                                                    Kecamatan
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">
                                                            <div class="input-group-text"><span>Kel/Desa</span>
                                                            </div>
                                                            <select name="kelurahan" id="kelurahan"
                                                                class="btn btn-secondary dropdown-toggle">
                                                                <option value="" class="dropdown-item">Pilih
                                                                    Kelurahan/Desa
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label class="fw-semibold">Jenis Kelamin</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="form-check">
                                                        <input type="radio" name="jenis_kelamin" value="Pria"
                                                            class="form-check-input" id="pria">
                                                        <label for="pria" class="form-check-label">Pria</label>
                                                    </div>
                                                    <div class="form-check mx-2">
                                                        <input type="radio" name="jenis_kelamin" value="Wanita"
                                                            class="form-check-input" id="wanita">
                                                        <label for="wanita" class="form-check-label">Wanita</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label class="fw-semibold">No Paspor</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="input-group">
                                                            <div class="input-group-text"><i
                                                                    class="bi bi-credit-card"></i>
                                                            </div>
                                                            <input type="text" name="no_paspor"
                                                                class="form-control" id="websiteInput"
                                                                placeholder="No Paspor">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="input-group">
                                                            <label for="masaBerlaku" class="fw-semibold m-2">Masa
                                                                Berlaku</label>
                                                            <input type="date" name="masa_berlaku_paspor"
                                                                id="masaBerlaku" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="ktp" class="fw-semibold">Lampiran KTP</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i
                                                            class="bi bi-person-vcard"></i></i>
                                                    </div>
                                                    <input type="file" name="lampiran_ktp" class="form-control"
                                                        id="ktp">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="kk" class="fw-semibold">Lampiran KK</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="bi bi-card-text"></i></i>
                                                    </div>
                                                    <input type="file" name="lampiran_kk" class="form-control"
                                                        id="kk">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="pas-foto" class="fw-semibold">Pas Foto</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="bi bi-person"></i></div>
                                                    <input type="file" name="pas_foto" class="form-control"
                                                        id="pas-foto">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="pas-foto" class="fw-semibold">Lampiran Paspor</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="bi bi-person"></i></div>
                                                    <input type="file" name="paspor" class="form-control"
                                                        id="paspor">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label class="fw-semibold" id="no-visa">No Visa</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="input-group">
                                                            <div class="input-group-text"><i
                                                                    class="bi bi-credit-card-2-back"></i></i>
                                                            </div>
                                                            <input type="text" name="no_visa" class="form-control"
                                                                id="no-visa" placeholder="No Visa">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="input-group">
                                                            <label for="masa-berlaku" class="fw-semibold m-2">Masa
                                                                Berlaku</label>
                                                            <input type="date" name="masa_berlaku_visa"
                                                                id="masa-berlaku" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="jenis-paket" class="fw-semibold">Jenis Paket</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="bi bi-activity"></i></i>
                                                    </div>
                                                    <select name="jenis_paket" id="jenis_paket"
                                                        class="btn btn-secondary dropdown-toggle">
                                                        <option value="" selected disabled>Pilih Paket</option>
                                                        <option value="Paket Itikaf" class="dropdown-item">Paket
                                                            Itikaf
                                                        </option>
                                                        <option value="Paket Reguler" class="dropdown-item">Paket
                                                            Reguler
                                                        </option>
                                                        <option value="Paket VIP" class="dropdown-item">Paket VIP
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4">
                                                <label for="aboutInput" class="fw-semibold">Jenis Kamar</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i
                                                            class="bi bi-distribute-vertical"></i>
                                                    </div>
                                                    <select name="jenis_kamar" id="jenis_kamar"
                                                        class="btn btn-secondary dropdown-toggle">
                                                        <option value="" selected disabled>Pilih Kamar</option>
                                                        <option value="Kamar Quint" class="dropdown-item">Kamar Quint
                                                        </option>
                                                        <option value="Kamar Quad" class="dropdown-item">Kamar Quad
                                                        </option>
                                                        <option value="Kamar Triple" class="dropdown-item">Kamar
                                                            Triple
                                                        </option>
                                                        <option value="Kamar Double" class="dropdown-item">Kamar
                                                            Double
                                                        </option>
                                                        <option value="Kamar Single" class="dropdown-item">Kamar
                                                            Single
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary ">Tambah
                                                Jamaah</button>
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

<script>
    $(document).ready(function() {
        // load kota/kab
        $('#provinsi').on('change', function() {
            var provinsiId = $(this).val();
            if (provinsiId) {
                $.ajax({
                    url: '/kota/' + provinsiId,
                    method: 'GET',
                    success: function(data) {
                        $('#kota').empty();
                        $('#kota').append(
                            '<option value="">Pilih Kota/Kab</option>')
                        $.each(data, function(key, value) {
                            $('#kota').append('<option value="' + value.id +
                                '">' + value.name + '</option>');
                        })
                    }
                })
            } else {
                $('#kota').empty();
            }
        })

        // load kecamatan
        $('#kota').on('change', function() {
            var kotaiId = $(this).val();
            if (kotaiId) {
                $.ajax({
                    url: '/kecamatan/' + kotaiId,
                    method: 'GET',
                    success: function(data) {
                        $('#kecamatan').empty();
                        $('#kecamatan').append(
                            '<option value="">Pilih Kecamatan</option>')
                        $.each(data, function(key, value) {
                            $('#kecamatan').append('<option value="' + value.id +
                                '">' + value.name + '</option>');
                        })
                    }
                })
            } else {
                $('#kota').empty();
            }
        })

        // load kelurahan
        $('#kecamatan').on('change', function() {
            var kecamatanId = $(this).val();
            if (kecamatanId) {
                $.ajax({
                    url: '/kelurahan/' + kecamatanId,
                    method: 'GET',
                    success: function(data) {
                        $('#kelurahan').empty();
                        $('#kelurahan').append(
                            '<option value="">Pilih Kelurahan</option>')
                        $.each(data, function(key, value) {
                            $('#kelurahan').append('<option value="' + value.id +
                                '">' + value.name + '</option>');
                        })
                    }
                })
            } else {
                $('#kelurahan').empty();
            }
        })
    })
</script>
