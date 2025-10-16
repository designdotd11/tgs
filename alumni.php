 <?php $this->load->view('web/include/header-home')?>
<link rel="stylesheet" href="<?= base_url('assets/web')?>/css/gallery.css" />

<?php if($banner){
    $url = base_url('uploads/banner/').$banner->image;
}else{
    $url = base_url('assets/web/images/Slide.jpg');
} ?>

<style>
.alumni-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
  gap: 20px;
  margin-top: 20px;
}

.alumni-card {
  background: #fff;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0px 2px 8px rgba(0,0,0,0.1);
  transition: transform 0.3s;
  padding: 20px;
  text-align: center;
}
.alumni-card:hover {
  transform: translateY(-5px);
}
.alumni-img img {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  object-fit: cover;
  margin-bottom: 15px;
}
.alumni-name {
  font-size: 18px;
  font-weight: 600;
  color: #222;
}
.alumni-designation {
  font-size: 14px;
  color: #666;
  margin: 5px 0;
}
.alumni-company {
  font-size: 14px;
  color: #444;
  font-weight: 500;
}
.alumni-year {
  font-size: 13px;
  color: #888;
  margin-top: 8px;
}
</style>

<section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= $url?>');">
    <div class="breadcrum-overlay"></div>
    <div class="breadcrum-content">
        <h1 class="title-breadcrum">Notable Alumni</h1>
    </div>
</section>

<section class="pt-80 pb-80">
  <div class="container side-space">
    <div class="row">
      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-5 col-sm-12">
        <?php include('include/sidebar.php') ?>
      </div>

      <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7 col-sm-12">
        <div class="content-para w-100 ps-lg-3 ps-xl-4 ps-xxl-3">

         <div class="alumni-grid">
            <?php foreach($alumni as $alum) { ?>
                <div class="alumni-card">
                    <div class="alumni-img">
                        <img src="<?= $alum->image ?>" alt="<?= $alum->name ?>">
                    </div>
                    <h3 class="alumni-name"><?= $alum->name ?></h3>
                    <p class="alumni-designation"><?= $alum->designation ?></p>
                    <p class="alumni-company"><?= $alum->company ?></p>
                    <p class="alumni-year">Class of <?= $alum->batch ?></p>
                </div>
            <?php } ?>
        </div>

        </div>
      </div>
    </div>
  </div>
</section>

<style>
/* Grid Container */
.alumni-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    gap: 25px;
    margin-top: 30px;
}

/* Card */
.alumni-card {
    background-color: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    transition: transform 0.3s, box-shadow 0.3s;
    text-align: center;
    padding: 20px 15px;
}

.alumni-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

/* Image */
.alumni-img {
    width: 100px;
    height: 100px;
    margin: 0 auto 15px;
    border-radius: 50%;
    overflow: hidden;
    border: 3px solid #029bbe;
}

.alumni-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Name */
.alumni-name {
    font-size: 18px;
    font-weight: 600;
    color: #111;
    margin-bottom: 5px;
}

/* Designation & Company */
.alumni-designation,
.alumni-company {
    font-size: 14px;
    color: #555;
    margin-bottom: 3px;
}

/* Batch Year */
.alumni-year {
    font-size: 13px;
    color: #888;
    margin-top: 5px;
}
</style>
<?php $this->load->view('web/include/footer') ?>
