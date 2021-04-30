<form action = "?oldal=belep" method = "post">
<div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="fac_logi/login.php" method="POST">

                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="fn" name="fn" class="form-control" required>
                            <label for="fn" class="">Felhasználónév</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="password" id="pw" name="pw" class="form-control" required>
                            <label for="pw" class="">Jelszó</label>
                        </div>
                    </div>
                </div>
            </form>

            <div class="text-center text-md-left">
            <input type="submit" class="gomb" name="belepes" value="Belépés">
            </div>
            <div class="status"></div>
        </div>
        </form>