        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                    <?php foreach ($mobil as $mb) : ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a href="#"><img class="card-img-top" src="<?php echo base_url('assets/upload/'.$mb->gambar)?>" style="width: 250px; height: 170px; " alt="" ></a>
                            <!-- Product details-->
                            <div class="card-body">
                                <h4 class="card-title">
                                <div class="text-right">
                                    <!-- Product name-->
                                    <h4 class="fw-bolder"><?php echo $mb->merk ?></h4>
                                    </h4>
                                    <!-- Product price-->
                                    Harga  : Rp. <?php echo number_format($mb->harga,0,',','.') ?> / Hari
                                    <!-- Plat number-->
                                    <br>No. Plat : <?php echo $mb->no_plat ?></br>
                                </div>
                                <div class="card-footer">
                                    <?php
                                    if($mb->status == "0"){
                                        echo "<span class='btn btn-danger' disable>Telah di Rental </span>";
                                    }else{
                                        echo anchor('customer/rental/tambah_rental/'.$mb->id_mobil, '<button class="btn btn-success">Rental</button>');
                                    }
                                    ?>

                                    <a class="btn btn-warning mt-2 mb-2"href="<?php echo base_url('customer/dashboard/detail_mobil/').$mb->id_mobil ?>">Detail</a>
                                </div>
                        </div>
                    </div>
                    <?php endforeach ; ?>
                </div>
            </div>
        </section>
        
