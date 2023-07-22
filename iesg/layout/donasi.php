<div class="greennature-payment-lightbox-overlay" id="greennature-payment-lightbox-overlay"></div>
<div class="greennature-payment-lightbox-container" id="greennature-payment-lightbox-container">
    <div class="greennature-payment-lightbox-inner">
        <form class="greennature-payment-form"  action='../kirim_donasi.php' method="POST" >
            <h3 class="greennature-payment-lightbox-title">
                <span class="greennature-head">Donasi ke :</span>
                <span class="greennature-tail">I - ESG</span>
            </h3>

            <div class="greennature-payment-amount">
                <div class="greennature-payment-amount-head">How much would you like to donate?</div>
                <input class="greennature-payment-price-fill" type="text" name='donasi' placeholder="Masukkan Jumlah (IDR)" />
            </div>

            <div class="greennature-payment-amount">
                <div class="greennature-payment-amount-head">Which Project do you want to donate?</div>
                <select class="greennature-payment-price-fill" type="text" name='proyek'  >
                    <?php
                        foreach($projects as $row){
                            echo "
                                <option value='$row[id]'>$row[nama_proyek]</option>
                            ";
                        }
                        ?>
                </select>
            </div>
            <div class="greennature-form-fields">
                <div class="six columns">
                    <div class="columns-wrap greennature-left">
                        <span class="greennature-head">Name *</span>
                        <input class="greennature-require" type="text" name="name">
                    </div>
                </div>
                <div class="six columns">
                    <div class="columns-wrap greennature-right">
                        <span class="greennature-head">Last Name *</span>
                        <input class="greennature-require" type="text" name="last_name">
                    </div>
                </div>
                <div class="clear"></div>
                <div class="six columns">
                    <div class="columns-wrap greennature-left">
                        <span class="greennature-head">Email *</span>
                        <input class="greennature-require greennature-email" type="text" name="email">
                    </div>
                </div>
                <div class="six columns">
                    <div class="columns-wrap greennature-right">
                        <span class="greennature-head">Phone</span>
                        <input type="text" name="phone">
                        <input type="hidden" name="location" value="homepage">
                    </div>
                </div>
                <div class="clear"></div>
                <div class="six columns">
                    <div class="columns-wrap greennature-left">
                        <span class="greennature-head">Address</span>
                        <textarea name="address"></textarea>
                    </div>
                </div>
                <div class="six columns">
                    <div class="columns-wrap greennature-right">
                        <span class="greennature-head">Additional Note</span>
                        <textarea name="additional_note"></textarea>
                    </div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="greennature-payment-method">
                <img class="greennature-active" src="../../assets/images/paypal.png" alt="paypal" /><img src="../../assets/images/stripe.png" alt="stripe" />
                <input type="hidden" name="payment-method" value="paypal" /> </div>
            <div class="greennature-message"></div>
            <div class="greennature-loading">Loading...</div>
            <input type="submit" value="Donate Now" />
        </form>
    </div>
</div>