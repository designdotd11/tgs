
 
 <div class="gallery-container">
    <?php foreach($gallery as $gal){?>
    <div class="gallery-card position-relative" data-index="<?= $gal->id?>">
        <div class="gallery-item">
            <img src="<?= base_url('uploads/gallery/image/').$gal->image?>" class="img-fluid" alt="<?= $gal->title?>">
        </div>
        <div class="gallery-overlay"></div>
        <div class="gallery-icon">
            <img src="<?= base_url('assets/web')?>/images/plus.png" class="img-fluid">
        </div>
    </div>
    <?php } ?>
   </div>
   

 <div class="lightbox">
    <div class="lightbox-content">
      <img id="lightbox-img" src="" alt="Lightbox Image">
      <div class="lightbox-prev">&#10094;</div>
      <div class="lightbox-next">&#10095;</div>
    </div>
  </div>