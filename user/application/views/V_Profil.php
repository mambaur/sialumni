

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
            <div class="mt-5 ml-1">
                <h2><i class="fas fa-user-tie"></i> Update profil akun anda</h2>
                <p>Ubah password anda jika ingin mengganti dengan password baru.</p>
           </div>
        </div>  
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7">
                    <div class="card shadow mb-4">
                        
                        <div class="card-body p-5">
                            <form action="<?php echo base_url('Profil/update_profil'); ?>" method="post">
                                <div class="mt-10">
                                    <label>Username</label>
                                    <input type="text" name="username" placeholder="Username"
                                        onfocus="this.pnglaceholder = ''" onblur="this.placeholder = 'Username'" required
                                        class="form-control" value="<?= $user['username']; ?>" readonly>
                                </div>
                                <div class="mt-10">
                                    <label>Password Lama</label>
                                    <input type="Password" name="pass_lama" placeholder="Password Lama.." onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Password Lama..'" required class="form-control">
                                </div>
                                <div class="mt-10">
                                    <label>Password Baru</label>
                                    <input type="Password" name="pass_baru" placeholder="Password Baru.." onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Password Baru..'" id="txtPassword" required class="form-control">
                                </div>
                                <div class="mt-10">
                                    <label>Konfirmasi Password</label>
                                    <input type="Password" name="konfirm" placeholder="Konfirmasi Password.." onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Konfirmasi Password..'" id="txtConfirmPassword" id="txtPassword" required class="form-control">
                                </div><hr>
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
                        <h2>Akun Alumni</h2>
                        <p>Informasi akun alumni mengenai username dan password. Memberikan pengaturan untuk merubah password yang lama</p>
                        
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