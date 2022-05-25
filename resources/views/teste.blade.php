<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;1,300;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <title>PaperTown Art</title>
    <script src="https://scaleflex.cloudimg.io/v7/plugins/filerobot-image-editor/latest/filerobot-image-editor.min.js"></script>
    <script src="./js/editor.js" type="module"> </script>
    <style>

 
    </style>
</head>
<body>
<div id="preloader">
    <div class="inner">
       <img class="gif" src="img/1491.gif" alt="loading">
    </div>
</div>

<div class="background">
        <img class="vetor1" src="img/Vector1.png" alt="detalhe">
        <img class="vetor2" src="img/Vector2.png" alt="detalhe">
        <img class="bolinhasRosa" src="img/BolinhasRosa.png" alt="detalhe">
        <img class="bolinhasVerde" src="img/BolinhasVerde.png" alt="detalhe">
        <img class="circleRosa" src="img/circleRosa.png" alt="detalhe">
        <img class="circleVerde" src="img/CircleVerde.png" alt="detalhe">

  
@extends('layouts.app')

@section('content')

          <div id="config-wrapper" class="config-table">
            <h4 class="titulo-editor">Crie sua foto aqui!</h4>
            <div class="img-container">
              
            
            </div>
            <div class="uploaded-imgs-wrapper">
              <div class="uploaded-img" data-image-editor-active-image="" style="background-image: url(&quot;https://scaleflex.cloudimg.io/v7/demo/river.png?w=100&quot;);"></div>
              <div class="uploaded-img" style="background-image: url(&quot;https://scaleflex.cloudimg.io/v7/demo/spencer-davis-unsplash.jpg?w=100&quot;);"></div>
              <div class="uploaded-img" style="background-image: url(&quot;https://scaleflex.cloudimg.io/v7/demo/damian-markutt-unsplash.jpg?w=100&quot;);"></div>
            </div>
              <input class="add-img" type="file" accept="image/*" name="image" id="add-image">
            </div>
          <div class="editor-container" id="editor_container"><div class="sc-ugtqr7-0 cmtciE FIE_root" data-phone="false" style="width: 685px; height: 500px;"><div class="sc-21g986-0 dovDuN FIE_topbar"><div class="sc-21g986-3 bHHnNO FIE_topbar-buttons-wrapper"><div class="sc-m9ezm7-0 cdXCJy FIE_topbar-save-wrapper" style="width: 67px;"><button class="sc-lxwit0-2 coKTDi sc-m9ezm7-1 dDkhEZ FIE_topbar-save-button SfxButton-root" title="" color="primary"><span class="sc-lxwit0-0 ceDKBV SfxButton-Label">Save</span></button><button class="sc-lxwit0-2 sc-10edh45-0 hhzrNS sc-m9ezm7-2 hqicSM FIE_topbar-save-menu-opener SfxButton-root SfxIconButton-root" color="primary"><svg width="14" height="14" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M26.907 0.710361C25.7493 -0.293042 23.9445 -0.225257 22.8758 0.861763L0.931376 23.1832C-0.0773525 24.2092 -0.0773525 25.7908 0.931376 26.8168L22.8758 49.1383C23.9445 50.2253 25.7493 50.2931 26.907 49.2897C28.0647 48.2863 28.1369 46.5916 27.0683 45.5046L6.90997 25L27.0683 4.49541C28.1369 3.40839 28.0647 1.71376 26.907 0.710361Z" fill="currentColor"></path></svg></button></div><div></div><div class="FIE_topbar-history-buttons"><button class="sc-lxwit0-2 sc-10edh45-0 beGRgj sc-21g986-1 jMYvMT FIE_topbar-reset-button SfxButton-root SfxIconButton-root" color="link" disabled="" title="Reset/delete all operations"><svg width="12" height="12" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.98975 13.4455C11.7193 7.13719 18.2352 2.96448 25.4662 3.53775C32.897 4.12687 38.7924 9.54635 40.3073 16.4736C40.4916 17.3166 41.3245 17.8505 42.1675 17.6662C43.0105 17.4818 43.5445 16.649 43.3601 15.8059C41.5594 7.57149 34.5543 1.12345 25.7131 0.422526C17.1213 -0.258635 9.38658 4.69317 6.13434 12.1755L3.89818 6.84608C3.56429 6.05034 2.64855 5.67594 1.85282 6.00982C1.05708 6.3437 0.682677 7.25944 1.01656 8.05518L4.73787 16.9241C4.89821 17.3062 5.20378 17.609 5.58736 17.7658C5.97094 17.9226 6.40111 17.9206 6.78323 17.7603L15.6521 14.039C16.4478 13.7051 16.8222 12.7894 16.4884 11.9936C16.1545 11.1979 15.2387 10.8235 14.443 11.1574L8.98975 13.4455Z" fill="currentColor"></path><path d="M7.97987 23.3944C7.80368 22.5497 6.97603 22.0077 6.13126 22.1839C5.2865 22.3601 4.74451 23.1877 4.92071 24.0325C6.65659 32.3552 13.7002 38.8943 22.6071 39.6004C31.0811 40.2722 38.7213 35.4646 42.0496 28.154L44.2049 33.1157C44.5487 33.9072 45.4691 34.2701 46.2606 33.9263C47.0521 33.5825 47.415 32.6621 47.0712 31.8706L43.2414 23.0543C42.8976 22.2628 41.9772 21.8999 41.1857 22.2437L32.3694 26.0734C31.5779 26.4173 31.215 27.3376 31.5588 28.1291C31.9026 28.9206 32.823 29.2835 33.6145 28.9397L39.3938 26.4292C36.7027 32.8203 30.1416 37.063 22.8541 36.4852C15.3678 35.8917 9.4401 30.3955 7.97987 23.3944Z" fill="currentColor"></path></svg></button><button class="sc-lxwit0-2 sc-10edh45-0 beGRgj sc-21g986-1 jMYvMT FIE_topbar-undo-button SfxButton-root SfxIconButton-root" color="link" disabled="" title="Undo last operation"><svg width="12" height="12" viewBox="0 0 40 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M39.5112 31.2036C39.5112 41.568 31.0785 50 20.7148 50H14.0613C12.9587 50 12.0652 49.1066 12.0652 48.004V47.3386C12.0652 46.2359 12.9586 45.3425 14.0613 45.3425H20.7148C28.5107 45.3425 34.8537 38.9995 34.8537 31.2036C34.8537 23.4078 28.5107 17.0648 20.7148 17.0648H8.4394L16.8935 25.5189C17.8015 26.4266 17.8015 27.9042 16.8935 28.8119C16.0124 29.6923 14.479 29.691 13.5999 28.8119L1.17111 16.3828C0.731285 15.943 0.488892 15.3581 0.488892 14.7359C0.488892 14.1142 0.731285 13.529 1.17111 13.0894L13.6006 0.65976C14.4797 -0.220001 16.0144 -0.220001 16.8936 0.65976C17.8016 1.56722 17.8016 3.04511 16.8936 3.95246L8.43951 12.4072H20.7148C31.0785 12.4072 39.5112 20.8395 39.5112 31.2036Z" fill="currentColor"></path></svg></button><button class="sc-lxwit0-2 sc-10edh45-0 beGRgj sc-21g986-1 jMYvMT FIE_topbar-redo-button SfxButton-root SfxIconButton-root" color="link" disabled="" title="Redo last operation"><svg width="12" height="12" viewBox="0 0 40 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.98 31.2037C0.98 41.568 9.41216 50 19.7752 50H26.4284C27.5309 50 28.4244 49.1066 28.4244 48.004V47.3386C28.4244 46.2359 27.531 45.3425 26.4284 45.3425H19.7752C11.9798 45.3425 5.6372 38.9995 5.6372 31.2037C5.6372 23.4079 11.9798 17.0648 19.7752 17.0648H32.05L23.5964 25.5189C22.6884 26.4266 22.6884 27.9043 23.5964 28.812C24.4774 29.6924 26.0107 29.6911 26.8897 28.812L39.3178 16.3828C39.7576 15.943 40 15.3582 40 14.736C40 14.1142 39.7576 13.5291 39.3178 13.0895L26.8891 0.659821C26.01 -0.21994 24.4754 -0.21994 23.5962 0.659821C22.6883 1.56728 22.6883 3.04517 23.5962 3.95252L32.0498 12.4073H19.7752C9.41216 12.4073 0.98 20.8396 0.98 31.2037Z" fill="currentColor"></path></svg></button></div></div><div class="sc-21g986-3 bHHnNO FIE_topbar-center-options"><label type="default" title="Saved image size (width x height)" class="sc-16k2ql4-0 iPfkPS SfxLabel-root">1600 x 2000 px</label><button color="link" disabled="" title="Show original image" class="sc-lxwit0-2 sc-10edh45-0 beGRgj sc-21g986-2 czVnoT SfxButton-root SfxIconButton-root"><svg width="14" height="14" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M27.1607 4.16667V2.08333C27.1607 0.93274 26.2279 0 25.0773 0C23.9267 0 22.994 0.932741 22.994 2.08333V4.16667H4.244C1.94281 4.16667 0.0773315 6.03215 0.0773315 8.33333V41.6667C0.0773315 43.9679 1.94281 45.8333 4.244 45.8333H22.994V47.9167C22.994 49.0673 23.9267 50 25.0773 50C26.2279 50 27.1607 49.0673 27.1607 47.9167V45.8333H45.9107C48.2118 45.8333 50.0773 43.9678 50.0773 41.6667V8.33333C50.0773 6.03215 48.2119 4.16667 45.9107 4.16667H27.1607ZM22.994 8.33333H4.244L4.244 41.6667H22.994V8.33333ZM27.1607 41.6667V8.33333H45.9107V41.6667H27.1607Z" fill="currentColor"></path></svg></button><div height="11px" width="1px" class="sc-etsyb6-0 iQiXor"></div><button color="link" title="Zoom out" class="sc-lxwit0-2 sc-10edh45-0 beGRgj sc-21g986-2 czVnoX FIE_topbar-zoom-out-btn SfxButton-root SfxIconButton-root"><svg width="14" height="14" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.27478 28.001H47.2746C48.9318 28.001 50.2749 26.6579 50.2749 25.0003C50.2749 23.3431 48.9322 22 47.2746 22H3.27478C1.61803 22.0004 0.274902 23.3435 0.274902 25.0007C0.274902 26.6579 1.61803 28.001 3.27478 28.001Z" fill="currentColor"></path></svg></button><label type="default" title="Toggle zoom menu" aria-disabled="false" class="sc-16k2ql4-0 iPfkPS sc-21g986-4 iUqujE FIE_topbar-zoom-label SfxLabel-root">18%</label><button color="link" title="Zoom in" class="sc-lxwit0-2 sc-10edh45-0 beGRgj sc-21g986-2 czVnoX FIE_topbar-zoom-in-btn SfxButton-root SfxIconButton-root"><svg width="14" height="14" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M47.7746 22.4999H27.775V2.49984C27.775 1.12014 26.6548 0 25.2747 0C23.895 0 22.7748 1.12014 22.7748 2.49984V22.4999H2.77474C1.39505 22.4999 0.274902 23.6201 0.274902 24.9998C0.274902 26.3799 1.39505 27.5001 2.77474 27.5001H22.7748V47.4997C22.7748 48.8799 23.895 50 25.2747 50C26.6548 50 27.775 48.8799 27.775 47.4997V27.5001H47.7746C49.1548 27.5001 50.2749 26.3799 50.2749 24.9998C50.2749 23.6201 49.1548 22.4999 47.7746 22.4999Z" fill="currentColor"></path></svg></button><div></div></div><span></span></div><div class="sc-ugtqr7-1 dNktsE FIE_main-container"><div class="sc-qhd6ow-0 lcWixQ FIE_tabs"><div class="sc-qhd6ow-1 iYPUYF FIE_tab" aria-selected="false"><svg width="14" height="14" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M43 3H31.75V0.5H43C44.3807 0.5 45.5 1.61929 45.5 3V14.25H43V3Z" fill="currentColor"></path><path d="M3 14.25V3H14.25V0.5H3C1.61929 0.5 0.5 1.61929 0.5 3V14.25H3Z" fill="currentColor"></path><path d="M0.5 31.75V43C0.5 44.3807 1.61929 45.5 3 45.5H14.25V43H3V31.75H0.5Z" fill="currentColor"></path><path d="M43 31.75H45.5V43C45.5 44.3807 44.3807 45.5 43 45.5H31.75V43H43V31.75Z" fill="currentColor"></path></svg><label type="default" class="sc-16k2ql4-0 iPfkPS sc-qhd6ow-2 lgNkvW FIE_tab-label SfxLabel-root">Adjust</label></div><div class="sc-qhd6ow-1 iYPUYF FIE_tab" aria-selected="false"><svg width="14" height="14" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16.3679 7.50003C15.7995 10.005 13.5592 11.875 10.8823 11.875C8.20528 11.875 5.96506 10.005 5.39665 7.50003H1.5448C0.854444 7.50003 0.2948 6.94039 0.2948 6.25003C0.2948 5.55967 0.854444 5.00003 1.5448 5.00003H5.39665C5.96506 2.49504 8.20528 0.625031 10.8823 0.625031C13.5592 0.625031 15.7995 2.49504 16.3679 5.00003H48.4557C49.1461 5.00003 49.7057 5.55967 49.7057 6.25003C49.7057 6.94039 49.1461 7.50003 48.4557 7.50003H16.3679ZM14.0073 6.25003C14.0073 7.97592 12.6082 9.37503 10.8823 9.37503C9.15637 9.37503 7.75726 7.97592 7.75726 6.25003C7.75726 4.52414 9.15637 3.12503 10.8823 3.12503C12.6082 3.12503 14.0073 4.52414 14.0073 6.25003Z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M34.5715 27.625C37.2485 27.625 39.4887 25.755 40.0571 23.25H48.4554C49.1458 23.25 49.7054 22.6904 49.7054 22C49.7054 21.3096 49.1458 20.75 48.4554 20.75H40.0571C39.4887 18.245 37.2485 16.375 34.5715 16.375C31.8946 16.375 29.6543 18.245 29.0859 20.75H1.5448C0.854444 20.75 0.2948 21.3096 0.2948 22C0.2948 22.6904 0.854444 23.25 1.5448 23.25H29.0859C29.6543 25.755 31.8946 27.625 34.5715 27.625ZM34.5715 25.125C36.2974 25.125 37.6965 23.7259 37.6965 22C37.6965 20.2741 36.2974 18.875 34.5715 18.875C32.8456 18.875 31.4465 20.2741 31.4465 22C31.4465 23.7259 32.8456 25.125 34.5715 25.125Z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M22.7702 39C22.2018 41.505 19.9615 43.375 17.2845 43.375C14.6076 43.375 12.3673 41.505 11.7989 39H1.5448C0.854444 39 0.2948 38.4403 0.2948 37.75C0.2948 37.0596 0.854444 36.5 1.5448 36.5H11.7989C12.3673 33.995 14.6076 32.125 17.2845 32.125C19.9615 32.125 22.2018 33.995 22.7702 36.5H48.4554C49.1458 36.5 49.7054 37.0596 49.7054 37.75C49.7054 38.4403 49.1458 39 48.4554 39H22.7702ZM20.4095 37.75C20.4095 39.4759 19.0104 40.875 17.2845 40.875C15.5587 40.875 14.1595 39.4759 14.1595 37.75C14.1595 36.0241 15.5587 34.625 17.2845 34.625C19.0104 34.625 20.4095 36.0241 20.4095 37.75Z" fill="currentColor"></path></svg><label type="default" class="sc-16k2ql4-0 iPfkPS sc-qhd6ow-2 lgNkvW FIE_tab-label SfxLabel-root">Finetune</label></div><div class="sc-qhd6ow-1 iYPUYF FIE_tab" aria-selected="false"><svg width="14" height="14" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M41.2229 16.7653C41.3215 12.426 39.7436 8.284 36.6864 5.02956C33.6292 1.77513 29.4872 -2.09808e-05 25.0493 -2.09808e-05C20.6114 -2.09808e-05 16.3708 1.77513 13.3136 5.02956C10.2564 8.18538 8.6785 12.3274 8.77712 16.7653C3.45168 19.5266 0 25.1479 0 31.1637C0 37.2781 3.25444 42.6035 8.57988 45.4635C11.0454 46.7455 13.7081 47.4359 16.2722 47.4359C19.3294 47.4359 22.288 46.5483 24.9507 44.8718C29.9803 48.1262 36.0947 48.3234 41.4201 45.4635C46.7456 42.6035 50 37.2781 50 31.1637C50 25.0493 46.6469 19.5266 41.2229 16.7653ZM22.7811 43.0966C18.6391 45.3649 13.7081 45.3649 9.56607 42.998C5.22682 40.5325 2.66272 36.1933 2.66272 31.1637C2.66272 26.43 5.12821 22.0907 9.1716 19.6252C10.1578 24.359 13.3136 28.501 17.6529 30.6706C17.4556 35.4043 19.3294 39.8422 22.7811 43.0966ZM32.1499 27.8106C31.4596 24.5562 29.783 21.499 27.3176 19.2307C30.6706 17.357 34.8126 17.0611 38.4615 18.3432C37.7712 22.2879 35.503 25.7396 32.1499 27.8106ZM20.6114 28.1065C21.3018 25.2465 22.8797 22.6824 25.0493 20.8087C27.5148 22.8797 29.1913 25.8382 29.6844 28.9941C26.7258 30.0789 23.4714 30.0789 20.4142 28.9941C20.4142 28.6982 20.5128 28.4023 20.6114 28.1065ZM25.0493 17.4556C23.57 16.4694 21.8935 15.7791 20.1183 15.3846C19.428 15.1874 18.6391 15.6805 18.5404 16.3708C18.4418 16.7653 18.5404 17.0611 18.7377 17.357C18.9349 17.6528 19.2308 17.8501 19.5266 17.9487C20.7101 18.2446 21.7949 18.639 22.7811 19.2307C20.3156 21.499 18.6391 24.4576 17.9487 27.8106C14.5957 25.7396 12.2288 22.2879 11.6371 18.3432C11.9329 18.2446 12.1302 18.1459 12.426 18.0473C12.7219 17.9487 13.0178 17.7515 13.215 17.357C13.4122 17.0611 13.4122 16.6666 13.3136 16.3708C13.1164 15.6805 12.3274 15.286 11.6371 15.4832C11.5385 15.4832 11.5385 15.4832 11.4398 15.5818C11.8343 8.48124 17.7515 2.6627 25.0493 2.6627C32.3471 2.6627 38.2643 8.38262 38.6588 15.5818C34.0237 14.2012 28.9941 14.8915 25.0493 17.4556ZM29.783 31.7554C29.5858 35.5029 27.9093 39.0532 25.0493 41.5187C22.1893 39.0532 20.4142 35.6016 20.3156 31.7554C23.3728 32.7416 26.7258 32.7416 29.783 31.7554ZM32.4458 30.6706C36.785 28.4023 39.8422 24.359 40.927 19.6252C44.9704 22.0907 47.4359 26.43 47.4359 31.1637C47.4359 36.0947 44.8718 40.5325 40.5325 42.998C36.3905 45.3649 31.4596 45.3649 27.3176 43.0966C30.7692 39.8422 32.643 35.4043 32.4458 30.6706Z" fill="currentColor"></path><path d="M15.5819 14.8915C14.9901 14.9901 14.497 15.5818 14.497 16.1735C14.497 16.8639 15.0888 17.5542 15.8777 17.5542C16.6667 17.5542 17.2584 16.9625 17.2584 16.1735C17.2584 15.7791 17.0611 15.3846 16.7653 15.1874C16.3708 14.9901 15.9763 14.8915 15.5819 14.8915Z" fill="currentColor"></path></svg><label type="default" class="sc-16k2ql4-0 iPfkPS sc-qhd6ow-2 lgNkvW FIE_tab-label SfxLabel-root">Filters</label></div><div class="sc-qhd6ow-1 iYPUYF FIE_tab" aria-selected="false"><svg width="14" height="14" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M42.1323 0.500031H2.73399C1.42693 0.500031 0.399963 1.527 0.399963 2.83406V43.166C0.399963 44.4731 1.42693 45.5 2.73399 45.5H42.1323C43.4394 45.5 44.4664 44.4731 44.4664 43.166V2.83406C44.4664 1.527 43.4394 0.500031 42.1323 0.500031ZM41.6655 3.30086V25.8942L36.624 21.693C36.1572 21.2262 35.4103 21.2262 34.8502 21.5996L28.595 26.2677L15.5244 11.2365C15.3377 10.9565 14.9643 10.7697 14.5908 10.7697C14.2174 10.7697 13.8439 10.9565 13.5639 11.1432L3.20079 21.693V3.30086H41.6655ZM3.20079 42.6992V39.8984C4.22776 40.3652 5.72154 40.832 7.58876 40.832C9.36262 40.832 10.483 40.2718 11.3232 39.805C12.0701 39.4316 12.5369 39.1515 13.3771 39.2448C14.3108 39.3382 14.8709 39.5249 15.4311 39.805C16.2713 40.0851 17.2049 40.4585 18.9788 40.4585V38.3112C17.6717 38.3112 17.0182 38.0312 16.178 37.7511C15.5244 37.471 14.6842 37.1909 13.5639 37.0975C12.0701 36.9108 11.1365 37.471 10.2962 37.8444C9.54934 38.2179 8.80245 38.5913 7.4954 38.5913C5.06801 38.5913 3.6676 37.7511 3.10743 37.2843V35.0436C4.1344 35.5104 5.62818 35.9772 7.4954 35.9772C9.26926 35.9772 10.3896 35.417 11.2298 34.9502C11.9767 34.5768 12.4435 34.2967 13.2838 34.3901C14.2174 34.4834 14.7776 34.6702 15.3377 34.9502C16.178 35.2303 17.1116 35.6038 18.8854 35.6038V33.4565C17.5784 33.4565 16.9249 33.1764 16.0846 32.8963C15.4311 32.6162 14.5908 32.3361 13.4705 32.2428C11.9767 32.056 11.0431 32.6162 10.2029 32.9897C9.45598 33.3631 8.70909 33.7365 7.40204 33.7365C4.97465 33.7365 3.57424 32.8963 3.01407 32.4295V30.1888C4.04104 30.6556 5.53482 31.1224 7.40204 31.1224C9.1759 31.1224 10.2962 30.5623 11.1365 30.0955C11.8834 29.722 12.3502 29.4419 13.1904 29.5353C14.124 29.6287 14.6842 29.8154 15.2444 30.0955C16.0846 30.3755 17.0182 30.749 18.7921 30.749V28.6017C17.485 28.6017 16.8315 28.3216 15.9912 28.0415C15.3377 27.7614 14.4975 27.4814 13.3771 27.388C11.8834 27.2013 10.9498 27.7614 10.1095 28.1349C9.36262 28.5083 8.61573 28.8818 7.30868 28.8818C4.88129 28.8818 3.48088 28.0415 2.92071 27.5747V25.7075L14.124 14.2241L27.1012 29.0685C27.568 29.6287 28.4083 29.722 28.9684 29.2552L35.4103 24.4004L41.3854 29.4419V42.6058H3.20079V42.6992Z" fill="currentColor"></path><path d="M32.7029 15.7179C35.4103 15.7179 37.651 13.4772 37.651 10.7697C37.651 8.06227 35.4103 5.82161 32.7029 5.82161C29.9954 5.82161 27.7547 8.06227 27.7547 10.7697C27.7547 13.4772 29.9954 15.7179 32.7029 15.7179ZM32.7029 8.15563C34.1966 8.15563 35.317 9.36933 35.317 10.7697C35.317 12.1702 34.1033 13.3838 32.7029 13.3838C31.3025 13.3838 30.0888 12.1702 30.0888 10.7697C30.0888 9.36933 31.2091 8.15563 32.7029 8.15563Z" fill="currentColor"></path></svg><label type="default" class="sc-16k2ql4-0 iPfkPS sc-qhd6ow-2 lgNkvW FIE_tab-label SfxLabel-root">Watermark</label></div><div class="sc-qhd6ow-1 iYPUYF FIE_tab" aria-selected="false"><svg width="14" height="14" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M46.1442 31.3785C45.4585 31.3785 44.8974 31.9424 44.8974 32.6316V43.7344C44.8974 45.802 43.2267 47.4812 41.157 47.4938H6.22156C4.16433 47.4938 2.49361 45.8146 2.48114 43.7344V11.1278C2.48114 9.06018 4.15186 7.38098 6.22156 7.36845H17.2807C17.9665 7.36845 18.5275 6.80454 18.5275 6.11532C18.5275 5.42609 17.9665 4.86218 17.2807 4.86218H6.22156C2.79284 4.87471 0 7.6692 0 11.1278V43.7344C0 47.193 2.79284 50 6.22156 50H41.157C44.5982 50 47.3786 47.193 47.3786 43.7469V32.6316C47.391 31.9424 46.83 31.3785 46.1442 31.3785Z" fill="currentColor"></path><path d="M46.8923 1.65414C44.698 -0.551378 41.157 -0.551378 38.9627 1.65414L16.7571 23.9724C16.6075 24.1228 16.4953 24.3108 16.4329 24.5238L13.5154 35.1253C13.3907 35.5639 13.5154 36.0276 13.8396 36.3409C14.1513 36.6541 14.6251 36.7794 15.049 36.6667L25.5969 33.7343C25.8089 33.6717 25.9959 33.5714 26.1455 33.4085L48.3636 11.0777C50.5455 8.87218 50.5455 5.31328 48.3636 3.10777L46.8923 1.65414ZM19.4751 24.787L37.6535 6.51629L43.5135 12.406L25.3351 30.6892L19.4751 24.787ZM18.3031 27.1554L22.9911 31.8672L16.5077 33.6717L18.3031 27.1554ZM46.5931 9.31078L45.2715 10.6391L39.4115 4.74937L40.7331 3.42105C41.9425 2.20551 43.9249 2.20551 45.1343 3.42105L46.5931 4.88722C47.815 6.11529 47.815 8.09524 46.5931 9.31078Z" fill="currentColor"></path></svg><label type="default" class="sc-16k2ql4-0 iPfkPS sc-qhd6ow-2 lgNkvW FIE_tab-label SfxLabel-root">Draw</label></div><div class="sc-qhd6ow-1 iYPUYF FIE_tab" aria-selected="true"><svg width="14" height="14" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 0.5H3V2.375H2.375V3H0.5V0.5Z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 21.125H3V21.2693H24.7308V43H24.875V45.5L0.5 45.5001V21.125ZM22.2308 43L3 43.0001V23.7693H22.2308V43Z" fill="currentColor"></path><path d="M43 45.5H45.5V43H43.625V43.625H43V45.5Z" fill="currentColor"></path><path d="M45.5 3V0.5H43V2.375H43.625V3H45.5Z" fill="currentColor"></path><path d="M6.125 0.5V3H9.875V0.5H6.125Z" fill="currentColor"></path><path d="M13.625 0.5V3H17.375V0.5H13.625Z" fill="currentColor"></path><path d="M21.125 0.5V3H24.875V0.5H21.125Z" fill="currentColor"></path><path d="M28.625 0.5V3H32.375V0.5H28.625Z" fill="currentColor"></path><path d="M36.125 0.5V3H39.875V0.5H36.125Z" fill="currentColor"></path><path d="M45.5 6.125H43V9.875H45.5V6.125Z" fill="currentColor"></path><path d="M45.5 13.625H43V17.375H45.5V13.625Z" fill="currentColor"></path><path d="M45.5 21.125H43V24.875H45.5V21.125Z" fill="currentColor"></path><path d="M45.5 28.625H43V32.375H45.5V28.625Z" fill="currentColor"></path><path d="M45.5 36.125H43V39.875H45.5V36.125Z" fill="currentColor"></path><path d="M39.875 45.5V43H36.125V45.5H39.875Z" fill="currentColor"></path><path d="M32.375 45.5V43H28.625V45.5H32.375Z" fill="currentColor"></path><path d="M0.5 17.375H3V13.625H0.5V17.375Z" fill="currentColor"></path><path d="M0.5 9.875H3V6.125H0.5V9.875Z" fill="currentColor"></path><path d="M35.1391 9.23718L26.3209 17.8619C25.8274 18.3446 25.8186 19.136 26.3013 19.6295C26.784 20.1231 27.5754 20.1319 28.069 19.6492L37.1012 10.815V16.9907C37.1012 17.681 37.6609 18.2407 38.3512 18.2407C39.0416 18.2407 39.6012 17.681 39.6012 16.9907V7.98718C39.6012 7.29683 39.0416 6.73718 38.3512 6.73718L29.3477 6.73718C28.6574 6.73718 28.0977 7.29683 28.0977 7.98718C28.0977 8.67754 28.6574 9.23718 29.3477 9.23718L35.1391 9.23718Z" fill="currentColor"></path></svg><label type="default" class="sc-16k2ql4-0 iPfkPS sc-qhd6ow-2 lgNkvW FIE_tab-label SfxLabel-root">Resize</label></div></div><div class="sc-ugtqr7-2 TweDr FIE_editor-content"><div class="sc-3ln9py-0 jNeUXS FIE_canvas-container"><div class="sc-3ln9py-2 bGGYdt FIE_canvas-node" tabindex="-1" style="cursor: default;"><div class="konvajs-content" role="presentation" style="position: relative; user-select: none; width: 582px; height: 385px;"><canvas width="582" height="385" style="padding: 0px; margin: 0px; border: 0px; background: transparent; position: absolute; top: 0px; left: 0px; width: 582px; height: 385px; display: block;"></canvas><canvas width="582" height="385" style="padding: 0px; margin: 0px; border: 0px; background: transparent; position: absolute; top: 0px; left: 0px; width: 582px; height: 385px; display: block;"></canvas></div></div></div><div class="sc-dwg14p-0 eQzHAm FIE_tools-bar-wrapper"><div class="sc-dwg14p-4 iWpRcR FIE_tool-options-wrapper"></div><div class="sc-dwg14p-1 gIrhMz FIE_tools-bar"><div class="sc-17otqpz-0 grSJCz FIE_resize-tool-options"><div class="sc-150k0cz-1 dGgFET sc-17otqpz-1 eEDOa-d FIE_resize-width-option SfxInput-root"><input name="width" inputmode="numeric" title="Width in pixels" type="number" placeholder="Width" class="sc-150k0cz-2 krnJCT SfxInput-Base" value="1600"></div><label type="default" class="sc-16k2ql4-0 iPfkPS sc-17otqpz-3 ixRxAO FIE_resize-x-label SfxLabel-root">x</label><div class="sc-150k0cz-1 dGgFET sc-17otqpz-1 eEDOa-d FIE_resize-height-option SfxInput-root"><input name="height" inputmode="numeric" title="Height in pixels" type="number" placeholder="Height" class="sc-150k0cz-2 krnJCT SfxInput-Base" value="2000"></div><button class="sc-lxwit0-2 sc-10edh45-0 kvtsRF sc-17otqpz-2 jfIEzn FIE_resize-ratio-locker SfxButton-root SfxIconButton-root" title="Toggle ratio lock" color="link"><svg width="14" height="14" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M40.5 20H38V12.5C38 5.6 32.4 0 25.5 0C18.6 0 13 5.6 13 12.5V20H10.5C9.1 20 8 21.1 8 22.5V47.5C8 48.9 9.1 50 10.5 50H40.5C41.9 50 43 48.9 43 47.5V22.5C43 21.1 41.9 20 40.5 20ZM15.5 12.5C15.5 7 20 2.5 25.5 2.5C31 2.5 35.5 7 35.5 12.5V20H15.5V12.5ZM40.5 47.5H10.5V22.5H40.5V47.5Z" fill="#959DA8"></path><path d="M24.3 37.3V41.3H26.8V37.3C28.3 36.8 29.3 35.4 29.3 33.8C29.3 31.7 27.6 30 25.5 30C23.4 30 21.7 31.7 21.7 33.8C21.8 35.4 22.8 36.8 24.3 37.3ZM25.5 32.5C26.2 32.5 26.8 33.1 26.8 33.8C26.8 34.5 26.2 35.1 25.5 35.1C24.8 35.1 24.2 34.5 24.2 33.8C24.3 33.1 24.8 32.5 25.5 32.5Z" fill="#959DA8"></path></svg></button><button class="sc-lxwit0-2 nmZBt FIE_resize-reset-button SfxButton-root" title="Reset to original image size" disabled="" color="secondary"><span class="sc-lxwit0-0 ceDKBV SfxButton-Label">Reset</span></button></div></div></div></div></div></div></div>
        </div>
        <div class="img-table container">

          <div class="instrucoes">
            <div >
              <h2>
                Fazendo o pedido da sua caneca!
              </h2>
              <p>Muito bem! após escolher ou criar sua foto basta seguir os passos para fazer seu pedido! </p>
              <ul>
                <li>Selecionar a quantidade de canecas que deseja.</li>
                <li>Preencher os campos.</li>
                <li>Efetuar o pagamento.</li>
                <li>Mandar suas imagens no chat.</li>
              </ul>
              <p>E agora é so aguardar nossa artista te retornar com a confirmação do pedido ou alguma dúvida!</p>
             
            </div>
          </div>


<script src="//code.jivosite.com/widget/zQUHoE4g54" async></script>
    <!-- Declaração do formulário -->  
    <div class="form-content"> 
    
<form class="form-pagamento" method="post" target="pagseguro"  
action="https://pagseguro.uol.com.br/v2/checkout/payment.html">  
          
        <!-- Campos obrigatórios -->  
        <input name="receiverEmail" type="hidden" value="suporte@lojamodelo.com.br">  
        <input name="currency" type="hidden" value="BRL">  
  
        <!-- Itens do pagamento (ao menos um item é obrigatório) -->  
        <input name="itemId1" type="hidden" value="0001">   
        <input name="itemDescription1" type="hidden" value="Caneca">  
        <input name="itemAmount1" type="hidden" value="49.90">  
        <p class="quantidade-caneca-p">Quantidade de canecas:<input class="quantidade-caneca input-form" name="itemQuantity1" type="number" value=""></p>
        <input  name="itemWeight1" type="hidden" value="400">  
  
          
        <!-- Informações de frete (opcionais) -->  
        <div class="forma-pagamento">
        <p>Forma de envio:</p>
        <div>
        <input type="radio" name="shippingType" value="1">PAC
        <input type="radio" name="shippingType" value="2">SEDEX 
        </div>
      
        </div>

        <div class="form-endereço">

        <div class="endereco-div">
        <input placeholder="Endereço" class="input-form endereco"  name="shippingAddressStreet" type="text" value=""> -
        <input  placeholder="numero"  class="input-form numero" name="shippingAddressNumber" type="number" value=""> -
        <input  placeholder="Complemento"  class="input-form complemento" name="shippingAddressComplement" type="text" value="">
        </div>

        <div class="complemento-div">
        <input  placeholder="CEP"  class="input-form cep" name="shippingAddressPostalCode" type="number" value="">
        <input  placeholder="Bairro"  class="input-form" name="shippingAddressDistrict" type="text" value="">  
        </div>

        <div class="estado-div">
        <input placeholder="São Paulo" class="input-form destrito" name="shippingAddressState" type="text"> -
        <input placeholder="SP" class="input-form estado" name="shippingAddressCity estado" type="text" value="">
        
        <input name="shippingAddressCountry" type="hidden" value="BRA">  
        </div>  

        </div>
          <div class="quantidade-caneca-p dado">Dados do Comprador </div>
        <div class="fomr-comprador">
        <!-- Dados do comprador (opcionais) -->  
        <div class=" nome-form">
        <input placeholder="Nome" class="input-form" name="senderName" type="text" value="">
        <input placeholder="Email"  class="input-form"  name="senderEmail" type="text" placeholder="Seu Email">  
        </div>

        <div class="numero-form">
        (<input placeholder="DDD" class="input-form ddd" name="senderAreaCode" type="number" value="">) 
        <input placeholder="Numero" class="input-form" name="senderPhone" type="number" value=""> 
        </div>
        </div>
         
  
        <!-- submit do form (obrigatório) -->
        <div class="bota-pague" >
        <input  alt="Pague com PagSeguro" name="submit"  type="image"  
src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/pagamentos/120x53-pagar.gif"/>  
</div>  
</form>
</div> 
<p>Muito Obrigada!</p>
       
        <script src="js/preloader.js"></script>
        <footer class="footer-login">
    <div class="footer-login-container">
    <a href="https://www.flaticon.com/br/icones-gratis/instagram" title="instagram ícones">Instagram ícones criados por Freepik - Flaticon</a>
    <a href="https://www.flaticon.com/br/icones-gratis/whatsapp" title="whatsapp ícones">Whatsapp ícones criados por Freepik - Flaticon</a>
    <a href="https://www.flaticon.com/br/icones-gratis/facebook" title="facebook ícones">Facebook ícones criados por Freepik - Flaticon</a>  
    <a href="https://www.flaticon.com/br/icones-gratis/tiktok" title="tiktok ícones">Tiktok ícones criados por Freepik - Flaticon</a>  
    <a href="https://www.flaticon.com/br/icones-gratis/o-email" title="o email ícones">O email ícones criados por Freepik - Flaticon</a>

    </div>
</footer>
@endsection
</div>


</body>
</html>