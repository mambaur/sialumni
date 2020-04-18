

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="height: 60px;">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Profil</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

      

    <!-- feature_part start-->
    <section class="feature_part padding_top" style="padding-top: 5%;">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                          <!-- <h6 class="m-0 font-weight-bold text-primary">Tambah Artikel</h6> -->
                        </div>
                        <div class="card-body">
                            <h3 class="mb-30"><i class="fas fa-user-tie"></i> Data Profil Akun Anda</h3><hr>
                            <form action="<?php echo base_url('Profil/update_profil'); ?>" method="post">
                                <div class="mt-10">
                                    <label><b>Username</b></label>
                                    <input type="text" name="username" placeholder="Username"
                                        onfocus="this.pnglaceholder = ''" onblur="this.placeholder = 'Username'" required
                                        class="single-input">
                                </div>
                                <div class="mt-10">
                                    <label><b>Password Lama</b></label>
                                    <input type="Password" name="pass_lama" placeholder="Password Lama" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Password Lama'" required class="single-input">
                                </div>
                                <div class="mt-10">
                                    <label><b>Password Baru</b></label>
                                    <input type="Password" name="pass_baru" placeholder="Password Baru" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Password Baru'" id="txtPassword" required class="single-input">
                                </div>
                                <div class="mt-10">
                                    <label><b>Konfirmasi Password</b></label>
                                    <input type="Password" name="konfirm" placeholder="Konfirmasi Password" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Konfirmasi Password'" id="txtConfirmPassword" id="txtPassword" required class="single-input">
                                </div>
                                <div class="mt-10">
                                    <label><b>Email</b></label>
                                    <input type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Email address'" value="" required class="single-input">
                                </div><hr>
                                <!-- <div class="input-group-icon mt-10">
                                    <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                                    <div class="form-select" id="default-select">
                                        <select>
                                            <option value=" 1">City</option>
                                            <option value="1">Dhaka</option>
                                            <option value="1">Dilli</option>
                                            <option value="1">Newyork</option>
                                            <option value="1">Islamabad</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-group-icon mt-10">
                                    <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                    <div class="form-select" id="default-select_1">
                                        <select>
                                            <option value=" 1">Country</option>
                                            <option value="1">Bangladesh</option>
                                            <option value="1">India</option>
                                            <option value="1">England</option>
                                            <option value="1">Srilanka</option>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="input-group-icon mt-10" style="float: right;">
                                    <a style="color: grey; font-style: italic;">Jika ingin merubah, silahkan klik &nbsp</a>
                                    <button name="update" id="btnSubmit" type="submit" class="genric-btn primary">Update</button>
                                </div>
                            </form> 
                        </div>
                    </div>    
                </div>
                <div class="col-lg-5">
                    <div class="feature_part_text">
                        <img src="<?php echo base_url('assets/img/section_tittle_img.png');?>" alt="#">
                        <h2>Profil Alumni?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
                            ipsum suspendisse ultrices gravida Risus commodo viverra maecenas
                            accumsan lacus vel facilisis. </p>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt
                            ut</span>
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div class="feature_part_text_iner">
                                    <img src="img/icon/tour_icon_1.png" alt="">
                                    <h4>london</h4>
                                    <p>35 Places</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="feature_part_text_iner">
                                    <img src="img/icon/tour_icon_2.png" alt="">
                                    <h4>Kashmir</h4>
                                    <p>75 Places</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="feature_part_text_iner">
                                    <img src="img/icon/tour_icon_3.png" alt="">
                                    <h4>chaina</h4>
                                    <p>85 Places</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <img src="img/animate_icon/Shape-1.png" alt="" class="feature_icon_1">
        <img src="img/animate_icon/Shape-2.png" alt="" class="feature_icon_2">
        <img src="img/animate_icon/Shape-3.png" alt="" class="feature_icon_3">
    </section>
    <!-- upcoming_event part start-->

    <!-- Konfirmasi Password -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
        $(function () {
            $("#btnSubmit").click(function () {
                var password = $("#txtPassword").val();
                var confirmPassword = $("#txtConfirmPassword").val();
                if (password != confirmPassword) {
                    alert("Password tidak sama.");
                    return false;
                }
                return true;
            });
        });
    </script>