 <?php $this->load->view('web/include/header-home')?>
<link rel="stylesheet" href="<?= base_url('assets/web')?>/css/gallery.css" />



 <section class="breadcrum-us-section top-space-subpage bottom-space">
     <div class="breadcrum-overlay"></div>
     <div class="breadcrum-content">
         <h1 class="title-breadcrum">  Sports </h1>
     </div>
 </section>

<!-- Gallery Section -->
<section class="about-us-section pt-80 pb-80">
  <div class="container-fluid side-space">
    <div class="row">
            <div class="col-xl-12 col-lg-12 col-sm-12 m-auto">
                 <div class="gallery-container">
                    <div class="gallery-card position-relative" data-index="1">
                      <div class="gallery-item">
                        <img src="<?= base_url('assets/web')?>/images/dummy-img.jpg" class="img-fluid" alt="sports">
                      </div>
                      <div class="gallery-overlay"></div>
                      <div class="gallery-icon">
                        <img src="<?= base_url('assets/web')?>/images/plus.png" class="img-fluid">
                      </div>
                    </div>
            
                    <div class="gallery-card position-relative" data-index="2">
                      <div class="gallery-item">
                      <img src="<?= base_url('assets/web')?>/images/dummy-img.jpg" class="img-fluid" alt="sports">
                      </div>
                      <div class="gallery-overlay"></div>
                      <div class="gallery-icon">
                        <img src="<?= base_url('assets/web')?>/images/plus.png" class="img-fluid">
                      </div>
                    </div>
            
                    <div class="gallery-card position-relative" data-index="3">
                      <div class="gallery-item">
                      <img src="<?= base_url('assets/web')?>/images/dummy-img.jpg" class="img-fluid" alt="sports">
                      </div>
                      <div class="gallery-overlay"></div>
                      <div class="gallery-icon">
                        <img src="<?= base_url('assets/web')?>/images/plus.png" class="img-fluid">
                      </div>
                    </div>
                  
                    <div class="gallery-card position-relative" data-index="4">
                      <div class="gallery-item">
                      <img src="<?= base_url('assets/web')?>/images/dummy-img.jpg" class="img-fluid" alt="sports">
                      </div>
                      <div class="gallery-overlay"></div>
                      <div class="gallery-icon">
                        <img src="<?= base_url('assets/web')?>/images/plus.png" class="img-fluid">
                      </div>
                    </div>
                    
                    <div class="gallery-card position-relative" data-index="5">
                      <div class="gallery-item">
                      <img src="<?= base_url('assets/web')?>/images/dummy-img.jpg" class="img-fluid" alt="sports">
                      </div>
                      <div class="gallery-overlay"></div>
                      <div class="gallery-icon">
                        <img src="<?= base_url('assets/web')?>/images/plus.png" class="img-fluid">
                      </div>
                    </div>
                  
                    <div class="gallery-card position-relative" data-index="6">
                      <div class="gallery-item">
                      <img src="<?= base_url('assets/web')?>/images/dummy-img.jpg" class="img-fluid" alt="sports">
                      </div>
                      <div class="gallery-overlay"></div>
                      <div class="gallery-icon">
                        <img src="<?= base_url('assets/web')?>/images/plus.png" class="img-fluid">
                      </div>
                    </div>
                    
                     <div class="gallery-card position-relative" data-index="7">
                      <div class="gallery-item">
                      <img src="<?= base_url('assets/web')?>/images/dummy-img.jpg" class="img-fluid" alt="sports">
                      </div>
                      <div class="gallery-overlay"></div>
                      <div class="gallery-icon">
                        <img src="<?= base_url('assets/web')?>/images/plus.png" class="img-fluid">
                      </div>
                    </div>
                    
                     <div class="gallery-card position-relative" data-index="8">
                      <div class="gallery-item">
                      <img src="<?= base_url('assets/web')?>/images/dummy-img.jpg" class="img-fluid" alt="sports">
                      </div>
                      <div class="gallery-overlay"></div>
                      <div class="gallery-icon">
                        <img src="<?= base_url('assets/web')?>/images/plus.png" class="img-fluid">
                      </div>
                    </div>
            
                    
                  </div>
            </div>

      <div class="lightbox">
        <div class="lightbox-content">
          <img id="lightbox-img" src="" alt="Lightbox Image">
          <div class="lightbox-prev">&#10094;</div>
          <div class="lightbox-next">&#10095;</div>
        </div>
      </div>
    </div>
  </div>
</section>


 <!-- Footer -->
    
<?php $this->load->view('web/include/footer')?>
   

<script>
  const galleryItems = document.querySelectorAll('.gallery-card');
  const lightbox = document.querySelector('.lightbox');
  const lightboxImg = document.getElementById('lightbox-img');
  const lightboxPrev = document.querySelector('.lightbox-prev');
  const lightboxNext = document.querySelector('.lightbox-next');
  let currentIndex = 0;

  function showLightbox(index) {
    const imgSrc = galleryItems[index].querySelector('img').src;
    lightboxImg.src = imgSrc;
    lightbox.style.display = 'flex';
    currentIndex = index;
  }

  function hideLightbox() {
    lightbox.style.display = 'none';
  }

  function prevImage(event) {
    event.stopPropagation();
    currentIndex = (currentIndex > 0) ? currentIndex - 1 : galleryItems.length - 1;
    showLightbox(currentIndex);
  }

  function nextImage(event) {
    event.stopPropagation();
    currentIndex = (currentIndex < galleryItems.length - 1) ? currentIndex + 1 : 0;
    showLightbox(currentIndex);
  }

  galleryItems.forEach((item, index) => {
    item.addEventListener('click', () => showLightbox(index));
  });

  lightbox.addEventListener('click', hideLightbox);
  lightboxPrev.addEventListener('click', prevImage);
  lightboxNext.addEventListener('click', nextImage);
</script>
