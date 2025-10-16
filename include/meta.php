<!-- Meta -->
<?php

$slug = $this->uri->segment(1);
// echo $slug;die;
if(empty($meta)){
    
    if($slug){
        $meta = $this->db->select('id, page_name, meta_title, meta_image, meta_keyword, meta_description')->from('meta')->where('page_name', $slug)->where('status', 1)->where('trash', 0)->get()->row();
    }else{
        $meta = $this->db->select('id, page_name, meta_title, meta_image, meta_keyword, meta_description')->from('meta')->where('page_name', 'index')->where('status', 1)->where('trash', 0)->get()->row();
    }
}

// print_r($meta);die;

$title = "";
$keyword = "";
$description = "";
$image = "";
$url = "";
if($meta){
    $title = $meta->meta_title;
    $keyword = $meta->meta_keyword;
    $description = $meta->meta_description;
    if($meta->meta_image){
        $image = base_url('uploads/meta/').$meta->meta_image;
    }else{
        $image = base_url('assets/admin/images/dark-logo.png');
    }
    if($meta->page_name == "index"){
        $url = base_url('');
    }else{
        $url = base_url('').$meta->page_name;
    }
    
}else{
    $title = "";
    $keyword = "";
    $description = "";
    $image = base_url('assets/admin/images/dark-logo.png');
    $url = $url = base_url('').$slug;
}

?>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= $title?></title>
<meta Name="description" Content="<?= $description?>">
<meta name="keywords" content="<?= $keyword?>">
<meta itemprop="image"  content="<?= $image?>" />
<link rel="canonical" href="<?= $url?>" />
<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/web')?>/images/favicon.ico">
<meta name="topic" content="<?= $description?>"/>
<meta name="abstract" content="<?= $description?>"/>
<meta name="subject" content="<?= $title?>"/>
<meta name="classification" content="<?= $description?>"/>

<!-- Open Graph data -->
<link rel="image" href="<?= $image?>">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<meta property="og:title" content="<?= $title?>">
<meta property="og:description" content="<?= $description?>">
<meta property="og:url" content="<?= $url?>">
<meta property="og:site_name" content="@SITENAME">
<meta property="og:image" content="<?= $image?>">
<meta property="og:image:secure_url" content="<?= $image?>">
<meta property="og:image:width" content="200" />
<meta property="og:image:height" content="200" />

<meta name="twitter:card" content="" />
<meta name="twitter:site" content="" />
<meta name="twitter:title" content="" />
<meta name="twitter:description" content="" />
<meta name="twitter:image" content=""/>
<meta name="twitter:app:id:iphone" content="907394059" />

<!-- one time use --> 
<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/web')?>/images/favicon.ico">
<link rel="icon" href="<?= base_url('assets/web')?>/images/favicon.ico" type="image/svg+xml" />
<link rel="mask-icon"          same as fab icon     " color="       " />
<link rel="apple-touch-icon"<?= base_url('assets/web')?>/images/favicon.ico" />
<link rel="manifest" href="<?= base_url('assets/web')?>/images/favicon.ico">
<link rel="android-touch-icon" href="<?= base_url('assets/web')?>/images/favicon.ico"/>

<meta name="twitter:app:country" content="" />
<meta name="twitter:app:name:iphone" content="" />
<meta name="twitter:app:id:iphone" content="" />
<meta name="twitter:app:url:iphone" content="" />
<meta name="twitter:app:name:googleplay" content="" />
<meta name="twitter:app:id:googleplay" content="com.sitename.android" />
<meta name="twitter:app:url:googleplay" content="" />

<meta name='google-signin-scope' content='https://www.googleapis.com/auth/plus.me email' />
<meta name="google-play-app" content="app-id=com.sitename.android" />
<meta name="google-signin-client_id" content="GOOGLE ID"/>
<meta name="google-signin-cookiepolicy" content="single_host_origin"/>
<meta name="google-signin-scope" content="GOOGLE ID"/>
<meta name="google-site-verification" content="GOOGLE SITE VERIFICATION" />
<meta name="msvalidate.01" content="GOOGLE ID" />
<meta name="facebook-domain-verification" content="" />
<meta property="fb:admins" content="FB ADMIN" />
<meta property="fb:app_id" content="FB APP ID" />

<meta property="al:ios:url" content="<?= $url?>" />
<meta property="al:ios:app_store_id" content="PRODUCT ID " />
<meta property="al:ios:app_name" content="TRINITY " />
<meta property="al:android:url" content="<?= $url?>"  />
<meta property="al:android:package" content="com.sitename.android" />
<meta property="al:android:app_name" content="<?= $url?> " />
<meta property="al:web:should_fallback" content="true">
<meta name='apple-itunes-app' content="app-id=        , app-argument= <?= $url?>" />

<meta name="Search_Engines" content="Google, MSN, Bing, Overture, AltaVista, Yahoo, AOL, Infoseek, LookSmart, Excite, Hotbot, Lycos, Magellan, CNET, DogPile, Ask Jeeves, Teoma, Snap, Webcrawler">
<meta http-equiv="Bulletin-Text" content="                                 ">
<meta name="distribution" content="Global">
<meta name="audience" content="all">
<meta name="ROBOTS" content="INDEX, FOLLOW">
<meta name="YahooSeeker" content="INDEX, FOLLOW">
<meta name="msnbot" content="INDEX, FOLLOW">
<meta name="googlebot" content="INDEX, FOLLOW">
<meta name="allow-search" content="yes">
<meta http-equiv="content-language" content="en-us">
<meta name="author" content="AUTHOR NAME">
<meta name="owner" content="OWNER NAME">
<meta name="revisit-after" content="1 days">
<meta name="rating" content="general">
<meta name="resource-type" content="web page">
<meta name="designer" content="DesignDot Technologies Pvt Ltd, www.designdot.co">
<meta name="copyright" content="(C)">