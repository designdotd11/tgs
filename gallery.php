<?php $this->load->view('web/include/header-home') ?>
<link rel="stylesheet" href="<?= base_url('assets/web') ?>/css/gallery.css" />

<section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= base_url('assets/web') ?>/images/27Media Coverage_Gallery.jpg');">
    <div class="breadcrum-overlay"></div>
    <div class="breadcrum-content">
        <h1 class="title-breadcrum">Gallery</h1>
    </div>
</section>

<section class="pt-80 pb-80">
    <div class="container side-space">
        <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-5 col-sm-12">
                <?php include('include/sidebar.php') ?>
            </div>
            <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7 col-sm-12" id="indusrty-box">
                <div class="content-para w-100 ps-lg-3 ps-xl-4 ps-xxl-3">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-sm-12 m-auto">

                            <!-- Filters -->
                            <div class="d-flex flex-row align-items-center mb-3">
                                <select id="categoryDropdown" class="form-select w-auto me-2">
                                    <option value="all" selected>All Categories</option>
                                    <?php foreach ($categories as $cat): ?>
                                        <option value="<?= $cat->id ?>"><?= $cat->name ?></option>
                                    <?php endforeach; ?>
                                </select>

                                <select id="yearDropdown" class="form-select w-auto">
                                    <option value="all" selected>All Years</option>
                                    <?php foreach ($years as $year): ?>
                                        <option value="<?= $year ?>"><?= $year ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <!-- Gallery -->
                            <div id="result"></div>

                            <!-- Lightbox -->
                            <div class="lightbox">
                                <div class="lightbox-content">
                                    <img id="lightbox-img" src="" alt="Lightbox Image">
                                    <div class="lightbox-prev">&#10094;</div>
                                    <div class="lightbox-next">&#10095;</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('web/include/footer') ?>

<style>
.gallery-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
}

.gallery-card {
    position: relative;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 2px 8px rgba(0,0,0,0.1);
    cursor: pointer;
    text-align: center;
    transition: transform 0.3s;
}

.gallery-card:hover { transform: translateY(-5px); }

.gallery-item {
    width: 100%;
    height: 200px;
    overflow: hidden;
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.pagination {
    margin-top: 20px;
}

.pagination button {
    min-width: 40px;
}
</style>

<script>
$(document).ready(function(){

    function attachGalleryClickEvents() {
        const galleryItems = document.querySelectorAll('.gallery-card');
        const lightbox = document.querySelector('.lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        const prevBtn = document.querySelector('.lightbox-prev');
        const nextBtn = document.querySelector('.lightbox-next');
        let currentIndex = 0;

        function showLightbox(index) {
            const img = galleryItems[index].querySelector('img');
            lightboxImg.src = img.src;
            lightbox.style.display = 'flex';
            currentIndex = index;
        }

        function hideLightbox() { lightbox.style.display = 'none'; }
        function prevImage(e) { 
            e.stopPropagation(); 
            currentIndex = (currentIndex > 0) ? currentIndex-1 : galleryItems.length-1; 
            showLightbox(currentIndex);
        }
        function nextImage(e) { 
            e.stopPropagation(); 
            currentIndex = (currentIndex < galleryItems.length-1) ? currentIndex+1 : 0; 
            showLightbox(currentIndex); 
        }

        galleryItems.forEach((item,index) => { 
            item.addEventListener('click', () => showLightbox(index)); 
        });

        lightbox.addEventListener('click', hideLightbox);
        prevBtn.addEventListener('click', prevImage);
        nextBtn.addEventListener('click', nextImage);
    }

   function renderPagination(total, limit, currentPage) {
    const totalPages = Math.ceil(total / limit);
    if(totalPages <= 1) return '';
    let html = '<div class="pagination d-flex justify-content-center mt-3">';

    // Prev button (clamp to 1)
    const prevPage = currentPage > 1 ? currentPage - 1 : 1;
    html += `<button class="btn btn-sm me-1 ${currentPage==1?'disabled btn-secondary':'btn-outline-primary'}" data-page="${prevPage}">Prev</button>`;

    // Numbered buttons
    for(let i=1;i<=totalPages;i++){
        html += `<button class="btn btn-sm mx-1 ${i==currentPage?'btn-primary':'btn-outline-primary'}" data-page="${i}">${i}</button>`;
    }

    // Next button (clamp to totalPages)
    const nextPage = currentPage < totalPages ? currentPage + 1 : totalPages;
    html += `<button class="btn btn-sm ms-1 ${currentPage==totalPages?'disabled btn-secondary':'btn-outline-primary'}" data-page="${nextPage}">Next</button>`;

    html += '</div>';
    return html;
}


    function loadGallery(page = 1){
        var cat_id = $('#categoryDropdown').val() || 'all';
        var year = $('#yearDropdown').val() || 'all';

        $.ajax({
            url: "<?= base_url('Web/home/filter_gallery') ?>",
            type: "POST",
            data: { cat_id: cat_id, year: year, page: page },
            success: function(res){
                let rp;
                try{ rp = JSON.parse(res); } 
                catch(e){ console.error(res); $('#result').html('<h3>Invalid server response</h3>'); return; }

                if(rp.status == 1 && rp.gallery.length > 0){
                    let html = '<div class="gallery-container">';
                    rp.gallery.forEach(function(item){
                        let imageUrl = "<?= base_url('uploads/gallery/image/') ?>" + item.image;
                        html += `<div class="gallery-card position-relative" data-index="${item.id}">
                            <div class="gallery-item">
                                <img src="${imageUrl}" class="img-fluid" alt="${item.title}">
                            </div>
                            <div class="gallery-overlay"></div>
                            <div class="gallery-icon">
                                <img src="<?= base_url('assets/web/images/plus.png') ?>" class="img-fluid">
                            </div>
                            <p class="gallery-title text-center mt-2">${item.title}</p>
                        </div>`;
                    });
                    html += '</div>';

                    html += renderPagination(rp.total, rp.limit, rp.page);
                    $('#result').html(html);
                    attachGalleryClickEvents();
                } else {
                    $('#result').html('<h3 class="text-center">No Data Found!</h3>');
                }
            },
            error: function(err){
                console.error(err);
                $('#result').html('<h3 class="text-center">Server Error</h3>');
            }
        });
    }

    // Initial load
    loadGallery(1);

    // Filter change
    $('#categoryDropdown, #yearDropdown').on('change', function(){ loadGallery(1); });

    // Pagination click
    $(document).on('click', '.pagination button', function(){
        const page = $(this).data('page');
        if(page >= 1) loadGallery(page);
    });

});

</script>
