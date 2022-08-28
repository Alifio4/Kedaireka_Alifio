<section class="donasi">
    <form action= "add1" method="post">
        @csrf
        <h2 class="visually-hidden">Donasi Form</h2>

        <p> </p>
        <br><a style="margin: 380px">Informasi Detail</a></br>

        <a style="margin: 380px;width: 100px;font-size: 15px;color: rgba(112, 106, 106, 0.356);">Nama Lengkap</a>
        <p style="margin: 380px;margin-top:0px; width: 500px;" class="mb-3"><input class="form-control" type="name" id="name" name="name" placeholder="Nama Lengkap" required></p>
        
        <a style="margin: 380px;width: 100px;font-size: 15px;color: rgba(112, 106, 106, 0.356);">qty</a>
        <p style="margin: 380px;margin-top:0px; width: 500px;" class="mb-3"><input class="form-control" type="number" id="qty" name="qty" placeholder="No. Telp/HP" required></p>

        <a style="margin: 380px;width: 100px;font-size: 15px;color: rgba(112, 106, 106, 0.356);">price</a>
        <p style="margin: 380px;margin-top:0px; width: 500px;" class="mb-3"><input class="form-control" type="number" id='price' name="price" placeholder="price" required></p>

        
        
        
        <div class="mb-3">
            <button type="reset" style="margin: 350px;margin-top:0px; width: 100px;background-color: rgba(244, 44, 44, 0.829);font-size: 14px;height: 35px;padding: 0px;" value="Reset">Reset</button>
            <a><button type="submit" style="margin-right: 300px;width: 100px;background-color: rgba(8, 246, 32, 0.829);font-size: 14px;height: 35px;padding: 0px;">Donasi</button></a>
        </div>
    </form>
</section>