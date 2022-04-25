<?php

include('../connectDB.php');


 $query = "SELECT * FROM tools ORDER BY id";
 $result = mysqli_query($conn, $query);
 $r = mysqli_fetch_all($result, MYSQLI_ASSOC);

 mysqli_free_result($result);
 mysqli_close($conn);
 foreach($r as $item) :
    $idd=$item['id'];
    $title=$item['itemName'];
    $pri=$item['price'];
    $dec=$item['description'];
    $imeg=$item['img'];
endforeach;
?>
<?php foreach($r as $item) : ?>
        

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-4 col-md-6 portfolio-item ">
            <div class="portfolio-wrap">
              <img src="assets/img/miners/<?php echo $imeg;?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?php echo $title; ?></h4>
                <div class="portfolio-links">
		

                  <a href="assets/img/miners/<?php echo $imeg; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $title; ?>"><i class="bx bx-plus"></i></a>
		    <a class="portfolio-details-lightbox" href="portfolio-details.php?id=<?php echo $idd; ?>"class="portfolio-details-lightbox" data-glightbox="type: external" title="Miner Details"><i class="bx bx-link"></i></a>


                </div>
              </div>
            </div>
          </div>
<?php endforeach; ?>	   
</div>
</div>