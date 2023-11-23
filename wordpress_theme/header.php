<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MFP8KHJ');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta property="og:locale" content="ja_JP">

    <!-- SEO Meta Tags -->
    <meta name="keywords" content="人材,バンク,NEWS,CxO" />
    <meta name="description" content="CxO人材バンクは、上場企業や上場準備企業など、成長企業、成長産業のCxOポジションに特化した人材紹介サービスを行っています。
    成長企業の経営者の学びやIRを目的としたコミュニティの運営により、よりダイレクトに活躍できるポジションへのキャリアアップを支援しています。" />

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:title" content="CxO人材バンクNEWS"/>
    <meta property="og:type" content="article" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="CxO人材バンクNEWS" />
    <meta property="og:description" content="CxO人材バンクは、上場企業や上場準備企業など、成長企業、成長産業のCxOポジションに特化した人材紹介サービスを行っています。" />
    
    <title>
      <?php
      if(is_front_page() || is_home()) {
        echo get_bloginfo('name');
      } else{
          wp_title('|',true,'right');
          echo bloginfo('name'); 
      }
      ?>      
    </title>
	<link rel="shortcut icon" href="<?php echo T_DIRE_URI; ?>/favicon.ico">
    <link rel="icon" type="image/png" href="<?php echo T_DIRE_URI; ?>/favicon.ico">
    <link rel="apple-touch-icon" type="image/png" href="<?php echo T_DIRE_URI; ?>/favicon.ico">
    <?php wp_head(); ?>
</head>

<?php 
  global $post;
  
  if( $post->post_type != "page" ) {
    $post_slug = $post->post_type;
  } else {
    $post_slug = $post->post_name;
  }
  if( is_single() ) {
    $category_arr = get_the_category( $post->ID );
    $post_slug = $category_arr[0]->slug;
  }
?>

<?php
$path_parts = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
$path_parts = pathinfo($path_parts);
?>
<?php if(is_single()): ?>
<body <?php body_class();?> id="body<?php echo get_post_type(); ?>">
<?php else: ?>
<body <?php body_class();?> id="body<?php echo $path_parts['filename']; ?>">
<?php endif; ?>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MFP8KHJ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="header">
        <div class="header-top">
            <h1 class="header-logo">
                <a href="<?php echo HOME; ?>">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/logo.png" alt="CxO人材バンク">
                </a>
            </h1>
            <div class="contact-wrapper">
                <?php get_search_form(); ?>                
                <ul class="contact-btns">
                    <li>
                        <a class="btn long-term" href="https://go.cxo-jinzaibank.jp/l/1022123/2023-08-02/bcd7">
                            <span>中長期のキャリア相談</span>
                        </a>    
                    </li>
                    <li>
                        <a class="btn job-consult" href="https://go.cxo-jinzaibank.jp/l/1022123/2023-04-14/3byc">
                            <span>具体的な転職相談</span>
                        </a>    
                    </li>
                </ul>
            </div>
        </div>
        <nav class="header-nav">
            <ul class="nav-menu">
                <li>
                    <a href="<?php echo HOME . 'news'; ?>" class="menu-link">
                        <span>CxO人材バンクNEWS</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'features'; ?>" class="menu-link">
                        <span>CxO人材バンクの特長</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'case'; ?>" class="menu-link">
                        <span>転職成功事例</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'flow'; ?>" class="menu-link">
                        <span>転職支援の流れ</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'interview'; ?>" class="menu-link">
                        <span>CxOインタビュー</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'column'; ?>" class="menu-link">
                        <span>転職コラム</span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <div id="mobile-nav">
        <nav class="mobile-nav-container">
            <ul class="mobile-nav-menu">
                <li>
                    <a href="<?php echo HOME; ?>" class="menu-link">
                        <span>CxO人材バンクTOP</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM12 20.25C10.3683 20.25 8.77326 19.7661 7.41655 18.8596C6.05984 17.9531 5.00242 16.6646 4.378 15.1571C3.75358 13.6496 3.5902 11.9908 3.90853 10.3905C4.22685 8.79016 5.01259 7.32015 6.16637 6.16637C7.32016 5.01259 8.79017 4.22685 10.3905 3.90852C11.9909 3.59019 13.6497 3.75357 15.1571 4.37799C16.6646 5.00242 17.9531 6.05984 18.8596 7.41655C19.7661 8.77325 20.25 10.3683 20.25 12C20.2475 14.1873 19.3775 16.2843 17.8309 17.8309C16.2843 19.3775 14.1873 20.2475 12 20.25ZM16.2806 11.4694C16.3504 11.539 16.4057 11.6217 16.4434 11.7128C16.4812 11.8038 16.5006 11.9014 16.5006 12C16.5006 12.0986 16.4812 12.1962 16.4434 12.2872C16.4057 12.3783 16.3504 12.461 16.2806 12.5306L13.2806 15.5306C13.1399 15.6714 12.949 15.7504 12.75 15.7504C12.551 15.7504 12.3601 15.6714 12.2194 15.5306C12.0786 15.3899 11.9996 15.199 11.9996 15C11.9996 14.801 12.0786 14.6101 12.2194 14.4694L13.9397 12.75H8.25C8.05109 12.75 7.86033 12.671 7.71967 12.5303C7.57902 12.3897 7.5 12.1989 7.5 12C7.5 11.8011 7.57902 11.6103 7.71967 11.4697C7.86033 11.329 8.05109 11.25 8.25 11.25H13.9397L12.2194 9.53063C12.0786 9.38989 11.9996 9.19902 11.9996 9C11.9996 8.80098 12.0786 8.61011 12.2194 8.46937C12.3601 8.32864 12.551 8.24958 12.75 8.24958C12.949 8.24958 13.1399 8.32864 13.2806 8.46937L16.2806 11.4694Z" fill="#3472A1"/>
</svg>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'news'; ?>" class="menu-link">
                        <span>CxO人材バンクNEWS</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM12 20.25C10.3683 20.25 8.77326 19.7661 7.41655 18.8596C6.05984 17.9531 5.00242 16.6646 4.378 15.1571C3.75358 13.6496 3.5902 11.9908 3.90853 10.3905C4.22685 8.79016 5.01259 7.32015 6.16637 6.16637C7.32016 5.01259 8.79017 4.22685 10.3905 3.90852C11.9909 3.59019 13.6497 3.75357 15.1571 4.37799C16.6646 5.00242 17.9531 6.05984 18.8596 7.41655C19.7661 8.77325 20.25 10.3683 20.25 12C20.2475 14.1873 19.3775 16.2843 17.8309 17.8309C16.2843 19.3775 14.1873 20.2475 12 20.25ZM16.2806 11.4694C16.3504 11.539 16.4057 11.6217 16.4434 11.7128C16.4812 11.8038 16.5006 11.9014 16.5006 12C16.5006 12.0986 16.4812 12.1962 16.4434 12.2872C16.4057 12.3783 16.3504 12.461 16.2806 12.5306L13.2806 15.5306C13.1399 15.6714 12.949 15.7504 12.75 15.7504C12.551 15.7504 12.3601 15.6714 12.2194 15.5306C12.0786 15.3899 11.9996 15.199 11.9996 15C11.9996 14.801 12.0786 14.6101 12.2194 14.4694L13.9397 12.75H8.25C8.05109 12.75 7.86033 12.671 7.71967 12.5303C7.57902 12.3897 7.5 12.1989 7.5 12C7.5 11.8011 7.57902 11.6103 7.71967 11.4697C7.86033 11.329 8.05109 11.25 8.25 11.25H13.9397L12.2194 9.53063C12.0786 9.38989 11.9996 9.19902 11.9996 9C11.9996 8.80098 12.0786 8.61011 12.2194 8.46937C12.3601 8.32864 12.551 8.24958 12.75 8.24958C12.949 8.24958 13.1399 8.32864 13.2806 8.46937L16.2806 11.4694Z" fill="#3472A1"/>
</svg>
                    </a>
                </li>
                <li class="has-submenu">
                    <a href="<?php echo HOME . 'features'; ?>" class="menu-link">
                        <span>CxO人材バンクの特長</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM12 20.25C10.3683 20.25 8.77326 19.7661 7.41655 18.8596C6.05984 17.9531 5.00242 16.6646 4.378 15.1571C3.75358 13.6496 3.5902 11.9908 3.90853 10.3905C4.22685 8.79016 5.01259 7.32015 6.16637 6.16637C7.32016 5.01259 8.79017 4.22685 10.3905 3.90852C11.9909 3.59019 13.6497 3.75357 15.1571 4.37799C16.6646 5.00242 17.9531 6.05984 18.8596 7.41655C19.7661 8.77325 20.25 10.3683 20.25 12C20.2475 14.1873 19.3775 16.2843 17.8309 17.8309C16.2843 19.3775 14.1873 20.2475 12 20.25ZM16.2806 11.4694C16.3504 11.539 16.4057 11.6217 16.4434 11.7128C16.4812 11.8038 16.5006 11.9014 16.5006 12C16.5006 12.0986 16.4812 12.1962 16.4434 12.2872C16.4057 12.3783 16.3504 12.461 16.2806 12.5306L13.2806 15.5306C13.1399 15.6714 12.949 15.7504 12.75 15.7504C12.551 15.7504 12.3601 15.6714 12.2194 15.5306C12.0786 15.3899 11.9996 15.199 11.9996 15C11.9996 14.801 12.0786 14.6101 12.2194 14.4694L13.9397 12.75H8.25C8.05109 12.75 7.86033 12.671 7.71967 12.5303C7.57902 12.3897 7.5 12.1989 7.5 12C7.5 11.8011 7.57902 11.6103 7.71967 11.4697C7.86033 11.329 8.05109 11.25 8.25 11.25H13.9397L12.2194 9.53063C12.0786 9.38989 11.9996 9.19902 11.9996 9C11.9996 8.80098 12.0786 8.61011 12.2194 8.46937C12.3601 8.32864 12.551 8.24958 12.75 8.24958C12.949 8.24958 13.1399 8.32864 13.2806 8.46937L16.2806 11.4694Z" fill="#3472A1"/>
</svg>
                    </a>
                    <div class="sub-menus">
                        <a href="<?php echo HOME . 'features/media'; ?>" class="sub-link">
                            <span>CxO人材バンク関連コミュニティ</span>
                        </a>
                        <a href="<?php echo HOME . 'features/background'; ?>" class="sub-link">
                            <span>CxO人材バンクのバックグラウンド</span>
                        </a>
                    </div>
                </li>
                <li>
                    <a href="<?php echo HOME . 'case'; ?>" class="menu-link">
                        <span>転職成功事例</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM12 20.25C10.3683 20.25 8.77326 19.7661 7.41655 18.8596C6.05984 17.9531 5.00242 16.6646 4.378 15.1571C3.75358 13.6496 3.5902 11.9908 3.90853 10.3905C4.22685 8.79016 5.01259 7.32015 6.16637 6.16637C7.32016 5.01259 8.79017 4.22685 10.3905 3.90852C11.9909 3.59019 13.6497 3.75357 15.1571 4.37799C16.6646 5.00242 17.9531 6.05984 18.8596 7.41655C19.7661 8.77325 20.25 10.3683 20.25 12C20.2475 14.1873 19.3775 16.2843 17.8309 17.8309C16.2843 19.3775 14.1873 20.2475 12 20.25ZM16.2806 11.4694C16.3504 11.539 16.4057 11.6217 16.4434 11.7128C16.4812 11.8038 16.5006 11.9014 16.5006 12C16.5006 12.0986 16.4812 12.1962 16.4434 12.2872C16.4057 12.3783 16.3504 12.461 16.2806 12.5306L13.2806 15.5306C13.1399 15.6714 12.949 15.7504 12.75 15.7504C12.551 15.7504 12.3601 15.6714 12.2194 15.5306C12.0786 15.3899 11.9996 15.199 11.9996 15C11.9996 14.801 12.0786 14.6101 12.2194 14.4694L13.9397 12.75H8.25C8.05109 12.75 7.86033 12.671 7.71967 12.5303C7.57902 12.3897 7.5 12.1989 7.5 12C7.5 11.8011 7.57902 11.6103 7.71967 11.4697C7.86033 11.329 8.05109 11.25 8.25 11.25H13.9397L12.2194 9.53063C12.0786 9.38989 11.9996 9.19902 11.9996 9C11.9996 8.80098 12.0786 8.61011 12.2194 8.46937C12.3601 8.32864 12.551 8.24958 12.75 8.24958C12.949 8.24958 13.1399 8.32864 13.2806 8.46937L16.2806 11.4694Z" fill="#3472A1"/>
</svg>
                    </a>
                </li>
                <li class="has-submenu">
                    <a href="<?php echo HOME . 'flow'; ?>" class="menu-link">
                        <span>転職支援の流れ</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM12 20.25C10.3683 20.25 8.77326 19.7661 7.41655 18.8596C6.05984 17.9531 5.00242 16.6646 4.378 15.1571C3.75358 13.6496 3.5902 11.9908 3.90853 10.3905C4.22685 8.79016 5.01259 7.32015 6.16637 6.16637C7.32016 5.01259 8.79017 4.22685 10.3905 3.90852C11.9909 3.59019 13.6497 3.75357 15.1571 4.37799C16.6646 5.00242 17.9531 6.05984 18.8596 7.41655C19.7661 8.77325 20.25 10.3683 20.25 12C20.2475 14.1873 19.3775 16.2843 17.8309 17.8309C16.2843 19.3775 14.1873 20.2475 12 20.25ZM16.2806 11.4694C16.3504 11.539 16.4057 11.6217 16.4434 11.7128C16.4812 11.8038 16.5006 11.9014 16.5006 12C16.5006 12.0986 16.4812 12.1962 16.4434 12.2872C16.4057 12.3783 16.3504 12.461 16.2806 12.5306L13.2806 15.5306C13.1399 15.6714 12.949 15.7504 12.75 15.7504C12.551 15.7504 12.3601 15.6714 12.2194 15.5306C12.0786 15.3899 11.9996 15.199 11.9996 15C11.9996 14.801 12.0786 14.6101 12.2194 14.4694L13.9397 12.75H8.25C8.05109 12.75 7.86033 12.671 7.71967 12.5303C7.57902 12.3897 7.5 12.1989 7.5 12C7.5 11.8011 7.57902 11.6103 7.71967 11.4697C7.86033 11.329 8.05109 11.25 8.25 11.25H13.9397L12.2194 9.53063C12.0786 9.38989 11.9996 9.19902 11.9996 9C11.9996 8.80098 12.0786 8.61011 12.2194 8.46937C12.3601 8.32864 12.551 8.24958 12.75 8.24958C12.949 8.24958 13.1399 8.32864 13.2806 8.46937L16.2806 11.4694Z" fill="#3472A1"/>
</svg>
                    </a>
                    <div class="sub-menus">
                        <a href="<?php echo HOME . 'flow/consultsdiffer'; ?>" class="sub-link">
                            <span>2つの相談窓口の違い</span>
                        </a>
                        <a href="<?php echo HOME . 'flow/support'; ?>" class="sub-link">
                            <span>社外取締役・監査役への就任支援</span>
                        </a>
                    </div>
                </li>
                <li>
                    <a href="<?php echo HOME . 'interview'; ?>" class="menu-link">
                        <span>CxOインタビュー</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM12 20.25C10.3683 20.25 8.77326 19.7661 7.41655 18.8596C6.05984 17.9531 5.00242 16.6646 4.378 15.1571C3.75358 13.6496 3.5902 11.9908 3.90853 10.3905C4.22685 8.79016 5.01259 7.32015 6.16637 6.16637C7.32016 5.01259 8.79017 4.22685 10.3905 3.90852C11.9909 3.59019 13.6497 3.75357 15.1571 4.37799C16.6646 5.00242 17.9531 6.05984 18.8596 7.41655C19.7661 8.77325 20.25 10.3683 20.25 12C20.2475 14.1873 19.3775 16.2843 17.8309 17.8309C16.2843 19.3775 14.1873 20.2475 12 20.25ZM16.2806 11.4694C16.3504 11.539 16.4057 11.6217 16.4434 11.7128C16.4812 11.8038 16.5006 11.9014 16.5006 12C16.5006 12.0986 16.4812 12.1962 16.4434 12.2872C16.4057 12.3783 16.3504 12.461 16.2806 12.5306L13.2806 15.5306C13.1399 15.6714 12.949 15.7504 12.75 15.7504C12.551 15.7504 12.3601 15.6714 12.2194 15.5306C12.0786 15.3899 11.9996 15.199 11.9996 15C11.9996 14.801 12.0786 14.6101 12.2194 14.4694L13.9397 12.75H8.25C8.05109 12.75 7.86033 12.671 7.71967 12.5303C7.57902 12.3897 7.5 12.1989 7.5 12C7.5 11.8011 7.57902 11.6103 7.71967 11.4697C7.86033 11.329 8.05109 11.25 8.25 11.25H13.9397L12.2194 9.53063C12.0786 9.38989 11.9996 9.19902 11.9996 9C11.9996 8.80098 12.0786 8.61011 12.2194 8.46937C12.3601 8.32864 12.551 8.24958 12.75 8.24958C12.949 8.24958 13.1399 8.32864 13.2806 8.46937L16.2806 11.4694Z" fill="#3472A1"/>
</svg>
                    </a>
                </li>
                <li class="has-submenu">
                    <a href="<?php echo HOME . 'column'; ?>" class="menu-link">
                        <span>転職コラム</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM12 20.25C10.3683 20.25 8.77326 19.7661 7.41655 18.8596C6.05984 17.9531 5.00242 16.6646 4.378 15.1571C3.75358 13.6496 3.5902 11.9908 3.90853 10.3905C4.22685 8.79016 5.01259 7.32015 6.16637 6.16637C7.32016 5.01259 8.79017 4.22685 10.3905 3.90852C11.9909 3.59019 13.6497 3.75357 15.1571 4.37799C16.6646 5.00242 17.9531 6.05984 18.8596 7.41655C19.7661 8.77325 20.25 10.3683 20.25 12C20.2475 14.1873 19.3775 16.2843 17.8309 17.8309C16.2843 19.3775 14.1873 20.2475 12 20.25ZM16.2806 11.4694C16.3504 11.539 16.4057 11.6217 16.4434 11.7128C16.4812 11.8038 16.5006 11.9014 16.5006 12C16.5006 12.0986 16.4812 12.1962 16.4434 12.2872C16.4057 12.3783 16.3504 12.461 16.2806 12.5306L13.2806 15.5306C13.1399 15.6714 12.949 15.7504 12.75 15.7504C12.551 15.7504 12.3601 15.6714 12.2194 15.5306C12.0786 15.3899 11.9996 15.199 11.9996 15C11.9996 14.801 12.0786 14.6101 12.2194 14.4694L13.9397 12.75H8.25C8.05109 12.75 7.86033 12.671 7.71967 12.5303C7.57902 12.3897 7.5 12.1989 7.5 12C7.5 11.8011 7.57902 11.6103 7.71967 11.4697C7.86033 11.329 8.05109 11.25 8.25 11.25H13.9397L12.2194 9.53063C12.0786 9.38989 11.9996 9.19902 11.9996 9C11.9996 8.80098 12.0786 8.61011 12.2194 8.46937C12.3601 8.32864 12.551 8.24958 12.75 8.24958C12.949 8.24958 13.1399 8.32864 13.2806 8.46937L16.2806 11.4694Z" fill="#3472A1"/>
</svg>
                    </a>
                    <div class="sub-menus">
                        <a href="<?php echo HOME . 'research'; ?>" class="sub-link">
                            <span>CxO人材研究所</span>
                        </a>
                        <a href="<?php echo HOME . 'consult'; ?>" class="sub-link">
                            <span>転職相談室</span>
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <ul class="contact-btns">
            <li>
                <a class="btn job-consult" href="https://go.cxo-jinzaibank.jp/l/1022123/2023-04-14/3byc">
                    <span>具体的な転職相談</span>
                </a>    
            </li>
            <li>
                <a class="btn long-term" href="https://go.cxo-jinzaibank.jp/l/1022123/2023-08-02/bcd7">
                    <span>中長期のキャリア相談</span>
                </a>    
            </li>
        </ul>
        <span class="company-name">運営会社</div>
    </div>